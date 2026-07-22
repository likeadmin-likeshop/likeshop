<?php

namespace app\admin\logic;

use app\admin\validate\Order as orderValidate;
use app\api\model\Order;
use app\common\model\DeliveryBatch;
use app\common\model\DeliveryBatchInfo;
use app\common\model\Express;
use think\Db;

class OrderDeliveryBatchLogic
{
    static function lists(array $params)
    {
        $lists   = DeliveryBatch::page($params['page'] ?? 1)->order('id desc')->limit($params['limit'] ?? 10)->select()->toArray();
        $count  = DeliveryBatch::count();
        
        return [ 'count' => $count, 'lists' => $lists ];
    }
    
    static function getFailInfoLists($id)
    {
        return DeliveryBatchInfo::where('batch_id', $id)->where('status', 2)->select()->toArray();
    }
    
    static function detail($id)
    {
        return DeliveryBatch::findOrEmpty($id)->append([ 'progress' ])->toArray();
    }
    
    static function delivery($detail)
    {
        if ($detail['status'] == 1) {
            return true;
        }
        $infoLists = DeliveryBatchInfo::where('batch_id', $detail['id'])->select()->toArray();
        foreach ($infoLists as $info) {
            // 订单
            $order = Order::where('order_sn', $info['sn'])->find();
            if (empty($order['id'])) {
                DeliveryBatch::update([ 'fail' => Db::raw('fail+1') ], [ [ 'id' ,'=', $detail['id'] ] ]);
                DeliveryBatchInfo::update([ 'status' => 2, 'fail_content' => '订单不存在' ], [ [ 'id', '=', $info['id'] ] ]);
                continue;
            }
            // 快递
            $express = Express::where('name', $info['express_name'])->find();
            if (empty($express['id'])) {
                DeliveryBatch::update([ 'fail' => Db::raw('fail+1') ], [ [ 'id' ,'=', $detail['id'] ] ]);
                DeliveryBatchInfo::update([ 'status' => 2, 'fail_content' => '快递公司不存在' ], [ [ 'id', '=', $info['id'] ] ]);
                continue;
            }
            // 检测
            $validate = new orderValidate;
            $data = [
                'order_id'      => $order['id'],
                'send_type'     => 1,
                'shipping_id'   => $express['id'],
                'invoice_no'    => $info['express_no'],
            ];
            if (true !== $validate->scene('delivery')->check($data)) {
                DeliveryBatch::update([ 'fail' => Db::raw('fail+1') ], [ [ 'id' ,'=', $detail['id'] ] ]);
                DeliveryBatchInfo::update([ 'status' => 2, 'fail_content' => $validate->getError() ], [ [ 'id', '=', $info['id'] ] ]);
                continue;
            }
            
            // 发货
            OrderLogic::deliveryHandle($data, session('admin_info.id'));
            // 成功
            DeliveryBatch::update([ 'success' => Db::raw('success+1') ], [ [ 'id' ,'=', $detail['id'] ] ]);
            DeliveryBatchInfo::update([ 'status' => 1 ], [ [ 'id', '=', $info['id'] ] ]);
        }
    
        // 更新 已执行导入
        DeliveryBatch::update([ 'status' => 1 ], [ [ 'id' ,'=', $detail['id'] ] ]);
        
        return true;
    }
    
    static function importLists(array $lists, $filename)
    {
        try {
            Db::startTrans();
        
            array_shift($lists);
            $lists  = array_values($lists);
            $nums   = count($lists);
            
            $batch = DeliveryBatch::create([
                'filename'  => $filename,
                'nums'      => $nums,
                'success'   => 0,
                'fail'      => 0,
            ]);
        
            $batchInfoArrays    = [];
        
            foreach ($lists as $info) {
                
                $batchInfoArrays[] = [
                    'batch_id'      => $batch->id,
                    'sn'            => trim($info['A']),
                    'express_name'  => trim($info['B']),
                    'express_no'    => trim($info['C']),
                    'status'        => 0,
                    'fail_content'  => '',
                ];
            }
    
            (new DeliveryBatchInfo())->saveAll($batchInfoArrays);
            
            Db::commit();
            return [ 'id' => $batch->id ];
        } catch(\Throwable $e) {
            Db::rollback();
            return $e->getMessage();
        }
    }
}