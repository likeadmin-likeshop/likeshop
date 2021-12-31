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


namespace app\common\model;


use app\common\server\UrlServer;
use think\Model;

/**
 * 砍价活动 参与模型
 * Class BargainLaunch
 * @Author 张无忌
 * @package app\common\model
 */
class BargainLaunch extends Model
{
    protected $json = ['goods_snap','bargain_snap'];
    protected $jsonAssoc = true;

    const conductStatus = 0;  //进行中
    const successStatus = 1;  //成功
    const failStatus = 2; //失败

    public static function getStatusDesc($type = true)
    {
        $desc = [
            self::conductStatus => '砍价中',
            self::successStatus => '砍价成功',
            self::failStatus    => '砍价失败',
        ];
        if ($type === true) {
            return $desc;
        }
        return $desc[$type] ?? '未知';
    }

    // 关联用户模型
    public function user()
    {
        return $this->hasOne('user', 'id', 'user_id')
            ->field('id,sn,nickname,avatar,level,mobile,sex,create_time');
    }

    /**
     * Notes: 关联订单模型
     * @author 张无忌(2021/2/24 15:55)
     */
    public function order()
    {
        return $this->hasOne('Order', 'id', 'order_id')
            ->field('id,order_sn,user_id,create_time,order_amount,order_status');
    }

    public function bargainKnife(){
        return $this->hasMany('bargain_knife', 'launch_id', 'id');
    }

    //显示商品价格
    public function getPriceAttr($value,$data){
        return $data['goods_snap']['price'];
    }


    //显示商品主图
    public function getImageAttr($value,$data){
        return UrlServer::getFileUrl($data['goods_snap']['goods_iamge']);
    }
    //显示商品名称
    public function getNameAttr($value,$data){
        return $data['goods_snap']['name'];
    }
    public function getItemIdAttr($value,$data){
        return $data['goods_snap']['item_id'];
    }
    //显示规格名称
    public function getSpecValueStrAttr($value,$data){
        return $data['goods_snap']['spec_value_str'];
    }
    public function getBtnTipsAttr($value,$data){
        $tips = '';
        if(1 == $data['status']){
            $tips = '砍价成功';
        }else if(0 == $data['status']){
            $tips = '继续砍价';
        }
        return $tips;
    }
//    //显示直接购买按钮
//    public function getBuyBtnAttr($value,$data){
//        $btn = 0;
//        if(2 == $data['bargain_snap']['payment_where'] && empty($data['order_id'])){
//            $btn = 1;
//        }
//        return $btn;
//    }
    //显示查看订单按钮
    public function getOrderBtnAttr($value,$data){
        $btn = 0;
        if($data['order_id']){
            $btn = 1;
        }
        return $btn;
    }
    //继续砍价按钮
    public function getBargainBtnAttr($value,$data){
        $btn = 0;
        if(0 == $data['status']){
            $btn = 1;
        }
        return $btn;
    }
    //砍价成功按钮
    public function getSuccessBtnAttr($value,$data){
        $btn = 0;
        if(1 == $data['status']){
            $btn = 1;
        }
        return $btn;
    }

    //显示去支付按钮
    public function getPayBtnAttr($value,$data){
        $btn = 0;
        if(1 == $data['status']){
            $btn = 1;
        }
        return $btn;
    }

    //显示砍价提示
    public function getBargainTipsAttr($value,$data){
        $tips = '须砍至最低价才可支付购买';
        if(2 == $data['bargain_snap']['payment_where']){
            $tips = '砍至任意金额可直接购买';
        }
        return $tips;
    }

    //显示状态
    public function getStatusTextAttr($value,$data){
        return static::getStatusDesc($data['status']);
    }

    //发起砍价时间
    public function getCreateTimeAttr($value,$data){
        return date('Y-m-d H:i:s',$data['launch_start_time']);
    }

    //砍价结束时间
    public function getOverTimeAttr($value,$data){
        return $data['launch_end_time'];
    }

    //剩余的差价
    public function getDiffPriceAttr($value,$data){
        return  round($data['current_price'] - $data['bargain_price'],2);
    }

    //已砍价的价格
    public function getKnifePriceAttr($value,$data){
        return round($data['goods_snap']['price'] - $data['current_price'],2);
    }

    //砍价进度条
    public function getProgressAttr($value,$data){
        return round($data['bargain_price'] / $data['current_price'],2);
    }

    //活动价
    public function getActivityPriceAttr($value,$data){
        return $data['bargain_snap']['floor_price'];
    }
    //显示砍价状态提示
    public function getStatusTipsAttr($value,$data){
        if(2 == $data['status']){
            return '非常遗憾，砍价失败了';
        }
        if(1 == $data['status']){
            return '恭喜您，砍价成功';
        }
        return '';
    }
    //显示用户信息
    public function getKnifeListAttr($value,$data){
        $list = [];
        foreach ($this->bargain_knife as $knife){

            $list[] = [
                'id'            => $knife['id'],
                'user_id'       => $knife['user']['id'],
                'nickname'      => $knife['user']['nickname'],
                'avatar'        => $knife['user']['avatar'],
                'help_price'    => $knife['help_price'],
                'help_time'     => date('Y-m-d H:i:s',$knife['help_time']),
            ];
        }
        return $list;
    }

    //分享标题
    public function getShareTitlesAttr($value,$data){
       return $data['bargain_snap']['share_title'];
    }

    //分享简介
    public function getShareIntrosAttr($value,$data){
        return $data['bargain_snap']['share_intro'];
    }
}