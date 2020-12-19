<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\Db;
use think\Validate;

class DistributionMember extends Validate
{
    protected $rule = [
        'id|参数缺失' => 'require',
        'type|参数缺失' => 'require',
        'user_id|参数缺失' => 'require',
        'change_type|参数缺失' => 'require',
        'referrer_sn' => 'requireIf:change_type,appoint|checkReferrer',
    ];

    protected $message = [
        'referrer_sn.requireIf' => '请填写上级推荐人的编号',
    ];

    //审核分销会员
    public function sceneAudit()
    {
        $this->only(['id', 'type']);
    }

    //冻结/解冻分销会员
    public function sceneFreeze()
    {
        $this->only(['id', 'type']);
    }

    //修改上级
    public function sceneUpdateLeader()
    {
        $this->only(['user_id', 'change_type', 'referrer_sn']);
    }


    //验证推荐人
    protected function checkReferrer($value, $rule, $data = [])
    {
        if (empty($value) && $data['change_type'] == 'clear'){
            return true;
        }

        $referrer = Db::name('user')->where('sn', $value)->find();

        if (!$referrer){
            return '推荐人不存在';
        }

        if ($referrer['id'] == $data['user_id']){
            return '上级推荐人不能是自己';
        }

        if ($referrer['is_distribution'] == 0){
            return '对方不是分销会员';
        }

        $ancestor_relation = explode(',', $referrer['ancestor_relation']);
        if (!empty($ancestor_relation) && in_array($data['user_id'], $ancestor_relation)) {
            return '不能循环推荐';
        }

        return true;
    }

}