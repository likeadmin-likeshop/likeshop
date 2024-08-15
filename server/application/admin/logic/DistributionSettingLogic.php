<?php
namespace app\admin\logic;


use app\admin\model\User;
use app\common\logic\DistributionLogic;
use app\common\logic\LogicBase;
use app\common\model\Distribution;
use app\common\server\ConfigServer;
use think\Db;

class DistributionSettingLogic extends LogicBase
{
    public static function getConfig()
    {
        $config = [
            // 分销功能 0-关闭(默认) 1-开启
            'is_open' => ConfigServer::get('distribution', 'is_open', 0),
            // 分销层级 1-一级分销 2-二级分销(默认)
            'level' => ConfigServer::get('distribution', 'level', 2),
            // 商品详情是否显示佣金 0-不显示(默认) 1-默认
            'is_show_earnings' => ConfigServer::get('distribution', 'is_show_earnings', 0),
            // 详情页佣金可见用户 0-全部用户 1-分销商
            'show_earnings_scope' => ConfigServer::get('distribution', 'show_earnings_scope', 0),
            // 开通分销会员条件 1-无条件 2-申请分销(默认) 3-指定分销
            'apply_condition' => ConfigServer::get('distribution', 'apply_condition', 2),
            // 佣金计算方式 1-商品实际支付金额(默认)
            'cale_method' => ConfigServer::get('distribution', 'cale_method', 1),
            // 结算时机 1-订单完成后(默认)
            'settlement' => ConfigServer::get('distribution', 'settlement', 1),
            // 结算时机 订单完成后多少天内(默认7天)
            'settlement_days' => ConfigServer::get('distribution', 'settlement_days', 7),
        ];
        return $config;
    }

    public static function set($params)
    {
        Db::startTrans();
        try {
            $allowFields = ['is_open', 'level', 'is_show_earnings', 'apply_condition', 'cale_method', 'settlement_days', 'show_earnings_scope'];
            foreach ($allowFields as $field) {
                if ($field == 'settlement_days' && isset($params[$field]) && $params[$field] < 0) {
                    throw new \Exception('不允许填写负数');
                }
                if(isset($params[$field])) {
                    ConfigServer::set('distribution', $field, $params[$field]);
                }
                if($field == 'apply_condition' && isset($params[$field]) && $params[$field] == 1) {
                    // 开通分销会员无条件时，所有会员均成为分销会员
                    self::distribution();
                }
            }
            Db::commit();
            return true;
        } catch (\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return false;
        }
    }

    public static function distribution()
    {
        // 将非分销会员变为分销会员
        Distribution::where('is_distribution', 0)->update([
            'is_distribution' => 1
        ]);
        // 获取所有分销会员id
        $distributionIds = Distribution::distinct(true)->column('user_id');
        // 查找未生成分销会员基础信息表的会员
        $notDistributionIds = \app\common\model\User::where([
            ['id', 'not in', $distributionIds],
            ['del', '=', 0],
        ])->column('id');
        foreach($notDistributionIds as $userId) {
            // 生成分销会员基础信息表
            DistributionLogic::add($userId);
        }
    }
}