<?php


namespace app\api\controller;


use app\admin\logic\WechatMerchantTransferLogic;
use app\admin\model\WithdrawApply;

class Test extends ApiBase
{
    public $like_not_need_login = ['test'];

    public function test()
    {
        $withdraw = WithdrawApply::where('id', 1)->findOrEmpty()->toArray();
        $result = WechatMerchantTransferLogic::transfer($withdraw);
//        $result = WechatMerchantTransferLogic::details($withdraw);
        halt($result);

    }
}