<?php

namespace app\admin\controller;

use app\admin\logic\OrderDeliveryBatchLogic;
use app\admin\validate\DeliveryBatchImport;
use app\common\server\excel\Excel;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\IOFactory;
use think\response\Download;

class DeliveryBatch extends AdminBase
{
    
    
    /**
     * @notes 批量发货首页
     * @return \think\response\View
     * @author lbzy
     * @datetime 2024-04-11 16:46:54
     */
    function index()
    {
        if ($this->request->isAjax()) {
            $this->_success('', OrderDeliveryBatchLogic::lists(input()));
        }
        
        return $this->fetch();
    }
    
    /**
     * @notes 批量发货详情
     * @return mixed
     * @author lbzy
     * @datetime 2024-04-12 16:05:38
     */
    function detail()
    {
        $this->_success('', [ 'detail' => OrderDeliveryBatchLogic::detail(input('id/d')) ]);
    }
    
    /**
     * @notes 立即导入
     * @return void
     * @author lbzy
     * @datetime 2024-04-12 09:45:06
     */
    function import()
    {
        $lists  = IOFactory::load($_FILES['file']['tmp_name'])->getActiveSheet()->toArray(null, true, true, true);
        
        $validate = $this->validate([ 'lists' => $lists ], DeliveryBatchImport::class);
        
        if ($validate !== true) {
            $this->_error($validate);
        }
        
        $result = OrderDeliveryBatchLogic::importLists($lists, $_FILES['file']['name']);
        
        if (! is_array($result)) {
            $this->_error($result);
        }
        
        $this->_success('', $result);
    }
    
    /**
     * @notes 执行发货页面
     * @return void
     * @author lbzy
     * @datetime 2024-04-12 14:33:52
     */
    function delivery()
    {
        $detail = OrderDeliveryBatchLogic::detail(input('id/d'));
        
        if ($this->request->isAjax()) {
            OrderDeliveryBatchLogic::delivery($detail);
            $this->_success();
        }
        
        $this->assign('detail', $detail);
        
        return $this->fetch();
    }
    
    /**
     * @notes 下载模版文件等
     * @return string|Download
     * @author lbzy
     * @datetime 2024-04-11 17:15:00
     */
    function down()
    {
        $filename = pathinfo(input('file/s'), PATHINFO_FILENAME);
        $path = app()->getRootPath() . 'public/static/excel/' . $filename . '.xls';
        
        if (! file_exists($path)) {
            return '文件不存在';
        }
        
        return download($path, $filename);
    }
    
    /**
     * @notes 下载导入失败的
     * @return void
     * @author lbzy
     * @datetime 2024-04-12 17:37:41
     */
    function down2()
    {
        $lists = OrderDeliveryBatchLogic::getFailInfoLists(input('id/d'));
        Excel::out($lists, [
            [ 'field' => 'sn', 'title' => '订单编号', 'excel_data_type' => DataType::TYPE_STRING ],
            [ 'field' => 'express_name', 'title' => '快递公司名称' ],
            [ 'field' => 'express_no', 'title' => '快递单号' ],
            [ 'field' => 'fail_content', 'title' => '失败原因' ],
        ]);
    }
}