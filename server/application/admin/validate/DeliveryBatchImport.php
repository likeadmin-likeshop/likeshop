<?php

namespace app\admin\validate;

class DeliveryBatchImport extends \think\Validate
{
    protected $rule = [
        'lists'     => [ 'require', 'checkLists' ],
    ];
    
    protected $message = [
        'lists.require' => '上传文件不能为空',
    ];
    
    function checkLists($lists, $rule, $data)
    {
        $nums = count($lists) - 1;
        if ($nums < 1) {
            return '导入的文件发货信息为空';
        }
    
        if ($nums > 2000) {
            return '单次最多导入2000条发货信息';
        }
    
        foreach ($lists as $key => $info) {
            if (empty(trim($info['A'])) || empty(trim($info['B'])) || empty(trim($info['C']))) {
                return '发货信息：第' . ($key + 2) . '行存在未填写的发货信息';
            }
            
            if (mb_strlen($info['A']) > 255) {
                return '发货信息：第' . ($key + 2) . '行发货信息 订单号 超过长度255';
            }
        
            if (mb_strlen($info['B']) > 255) {
                return '发货信息：第' . ($key + 2) . '行发货信息超过长度255';
            }
        
            if (mb_strlen($info['C']) > 255) {
                return '发货信息：第' . ($key + 2) . '行发货信息超过长度255';
            }
        }
        
        return true;
    }
}