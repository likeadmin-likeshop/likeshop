<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
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