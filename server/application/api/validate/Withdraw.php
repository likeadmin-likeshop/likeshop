<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------

namespace app\api\validate;

use app\api\logic\DistributionLogic;
use app\common\server\ConfigServer;
use think\Db;
use think\Validate;

class Withdraw extends Validate
{
    protected $rule = [
        'id' => 'require', //参数缺失
        'type' => 'require|in:1,2,3,4,5',//提现类型
        'money' => 'require|checkMoney',//提现佣金
        'account' => 'requireIf:type,3|requireIf:type,4|requireIf:type,5',//账户类型
        'real_name' => 'requireIf:type,3|requireIf:type,4|requireIf:type,5|chs',//真实姓名
        'money_qr_code' => 'requireIf:type,3|requireIf:type,4',//收款码
        'bank' => 'requireIf:type,5', // 提现银行
        'subbank' => 'requireIf:type,5', // 银行支行
    ];

    protected $message = [
        'id.require' => '参数缺失',
        'type.require' => '参数错误',
        'type.in' => '提现类型错误',
        'money.require' => '参数错误',
        'account.requireIf' => '请填写账号',
        'real_name.requireIf' => '请填写真实姓名',
        'real_name.chs' => '请填写真实姓名',
        'money_qr_code.requireIf' => '请上传收款码',
        'bank.requireIf' => '请填写提现银行',
        'subbank.requireIf' => '请填写银行支行',
    ];

    //申请提现
    public function sceneApply()
    {
        return $this->only(['type', 'money', 'account', 'real_name', 'money_qr_code', 'bank', 'subbank']);
    }

    //申请详情
    public function sceneInfo()
    {
        return $this->only(['id']);
    }


    //提现佣金验证
    protected function checkMoney($value, $rule, $data = [])
    {
        $able_withdraw = Db::name('user')->where('id', $data['user_id'])->value('earnings');
        if ($value > $able_withdraw){
            return '可提现金额不足';
        }

        //1.最低提现金额
        $min_withdraw = ConfigServer::get('withdraw', 'min_withdraw', 0);
        if($value < $min_withdraw){
            return '最低提现'.$min_withdraw.'元';
        }

        //2,最高提现金额
        $max_withdraw = ConfigServer::get('withdraw', 'max_withdraw', 0);
        if ($value > $max_withdraw){
            return '最高提现'.$max_withdraw.'元';
        }
        return true;
    }
}