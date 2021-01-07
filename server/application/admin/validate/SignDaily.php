<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------
/**
 * Created by PhpStorm.
 * User: wzg
 * Date: 2020/5/29 0029
 * Time: 10:03
 */

namespace app\admin\validate;


use think\Db;
use think\Validate;

class SignDaily extends Validate
{
    protected $rule = [
        'integral'      =>'require|integer|gt:0',   //积分
        'growth'      =>'require|integer|gt:0',   //成长值
//        'coupon'        =>'require',
        'days'          =>'require|integer|gt:0|checkDays|editDays',   //连续签到天数
        'instructions'  =>'require'
    ];

    protected $message = [
        'integral.require'      =>'积分不能为空',
        'integral.integer'      =>'积分必须为整数',
        'integral.gt'          =>'积分必须大于0',

        'growth.require'      =>'成长值不能为空',
        'growth.integer'      =>'成长值必须为整数',
        'growth.gt'          =>'成长值必须大于0',

        'days.require'          =>'连续签到天数不能为空',
        'days.integer'          =>'连续签到天数必须为整数',
        'days.gt'              =>'连续签到天数必须大于0',
        'instructions'           =>'签到规则说明不能为空'
    ];

    public function sceneAdd()
    {
        $this->only(['integral','days'])
            ->remove('instructions')
            ->remove('days','editDays');

    }

    public function sceneEdit()
    {
        $this->only(['integral','days'])
            ->remove('instructions')
            ->remove('days','checkDays');

    }

    public function sceneSign()
    {
        $this->only(['integral','instructions'])
        ->remove('days');
    }


    /**
     * 判断连续签到天数是否存在
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function checkDays($value,$rule,$data)
    {
        $where[] = ['days','=',$value];
        $where[] = ['del','=',0];
        $sign_daily =  Db::name('sign_daily')->where($where)
            ->find();
        if ($sign_daily){
            return '该连续签到天数已存在';
        }
        return true;
    }

    /**
     * 判断编辑时连续签到天数是否已存在
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function editDays($value,$rule,$data)
    {

        $where[] = ['id','<>',$data['id']];
        $where[] = ['days','=',$value];
        $where[] = ['del','=',0];
            $sign_daily = Db::name('sign_daily')->where($where)
                ->find();
            if ($sign_daily){
                return '该连续签到天数已存在';
            }
            return true;
    }

}