<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，保留版权即可
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
use app\api\model\Goods;
use app\common\model\BargainLaunch;
use think\Validate;

/**
 * 二维码验证器
 * Class MakeMnQrcode
 * @package app\api\validate
 */
class MakeMnQrcode extends Validate
{
    protected $rule = [
        'url'       =>  'require',
        'type'      =>  'require|in:0,1,2|checkId',
    ];

    protected $message = [
        'url.require'       => 'url不能为空',
        'type.require'      => '类型不能为空',
        'type.in'           => '类型错误',
    ];


    //验证商品、活动
    public function checkId($value,$rule,$data){
        $type = $data['type'] ?? 0;
        if(0 != $type && empty($data['id'])){
            return '缺少id';
        }

        if(1 == $type){
            $goods = Goods::where(['id'=>$data['id']])
                ->find();
            if(empty($goods)){
                return '商品不存在';
            }
        }
        if(2 == $type){

            $bargain_launch = new BargainLaunch();
            $bargain_launch = $bargain_launch
                ->where(['id'=>$data['id']])
                ->find();
            
            if($bargain_launch->isEmpty() || $bargain_launch['launch_end_time'] <= time()){
                return '该砍价已结束';
            }

        }
        return true;
    }
}