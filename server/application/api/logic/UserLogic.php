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
namespace app\api\logic;
use app\api\model\User;
use app\common\logic\LogicBase;
use app\common\logic\NoticeLogic;
use app\common\model\AccountLog;
use app\common\model\AfterSale;
use app\common\model\Order;
use app\common\server\ConfigServer;
use app\common\server\WeChatServer;
use EasyWeChat\Factory;
use EasyWeChat\Kernel\Exceptions\Exception;
use think\Db;

class UserLogic extends LogicBase {
    public static function center($user_id){
        $user = User::get($user_id);
        //待支付
        $user->wait_pay = Db::name('order')->where(['del'=>0,'user_id'=>$user_id,'order_status'=>Order::STATUS_WAIT_PAY,'pay_status'=>0])->count();
        //待发货
        $user->wait_delivery = Db::name('order')->where(['del'=>0,'user_id'=>$user_id,'order_status'=>[Order::STATUS_WAIT_DELIVERY],'pay_status'=>1])->count();
        //待收货
        $user->wait_take = Db::name('order')->where(['del'=>0,'user_id'=>$user_id,'order_status'=>[Order::STATUS_WAIT_RECEIVE],'pay_status'=>1])->count();
        //待评论
        $user->wait_comment = Db::name('order o')
            ->join('order_goods og','o.id = og.order_id')
            ->where(['del'=>0,'user_id'=>$user_id,'order_status'=>Order::STATUS_FINISH,'is_comment'=>0])
            ->count('og.id');
        //售后中
        $user->after_sale = Db::name('after_sale')
            ->where(['del'=>0,'user_id'=>$user_id])
            ->where('status','<>',AfterSale::STATUS_SUCCESS_REFUND)
            ->count();
        $user->coupon = Db::name('coupon_list')->where(['user_id'=>$user_id,'del'=>0,'status'=>0])->count();
        //消息数量
        $user->notice_num = NoticeLogic::unRead($user_id) ? 1 : 0;
        //下个会员等级提示
        $user_level = Db::name('user_level')
            ->where([
                ['id','>',$user->getData('level')],
                ['del','=',0]
            ])->order('growth_value asc')
            ->find();
        $user['next_level_tips'] = '';
        if($user_level){
            $user['next_level_tips'] = '距离升级还差'.intval($user_level['growth_value'] - $user['user_growth']);
        }
        $user->visible(['id','nickname','sn','avatar','next_level_tips','user_money','total_order_amount','total_recharge_amount',
            'coupon','user_integral','level','wait_pay','wait_take','wait_delivery',
            'wait_comment','after_sale', 'notice_num']);

        return $user;
    }

    public static function accountLog($user_id,$source,$type,$page,$size){
        $source_type = '';
        $where[] = ['user_id','=',$user_id];
        switch ($source){
            case 1:
                $source_type = AccountLog::money_change;
                break;
            case 2:
                $source_type = AccountLog::integral_change;
                break;
            case 3:
                $source_type = AccountLog::growth_change;

        }
        $where[] = ['source_type','in',$source_type];
        if($type){
            $where[] = ['change_type','=',$type];
        }
        $accountLog = new AccountLog();
        $count = $accountLog
            ->where($where)
            ->count();
        $list = $accountLog
            ->where($where)
            ->page($page,$size)
            ->order('id desc')
            ->field('id,change_amount,source_type,change_type,create_time')
            ->select();
        $more = is_more($count,$page,$size);  //是否有下一页

        $data = [
            'list'          => $list,
            'page_no'       => $page,
            'page_size'     => $size,
            'count'         => $count,
            'more'          => $more
        ];
        return $data;
    }
    //获取用户信息
    public static function getUserInfo($user_id)
    {
        $info = User::where(['id' => $user_id])
            ->field('nickname,avatar,mobile,sex')
            ->find();
        return $info;
    }

    //设置个人信息
    public static function setUserInfo($user_id, $data)
    {
        $field = $data['field'];
        $value = $data['value'];
        $res = Db::name('user')
            ->where(['id'=> $user_id])
            ->update([$field => $value]);
        return $res;
    }


    //修改手机号
    public static function changeMobile($user_id, $data)
    {
        $user = User::get($user_id);
        $user->mobile = $data['new_mobile'];
        $user->save();
        return $user;
    }


    //获取微信手机号
    public static function getMobileByMnp($post)
    {
        try {
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);
            $response = $app->auth->session($post['code']);
            if (!isset($response['session_key'])) {
                throw new Exception();
            }
            $response = $app->encryptor->decryptData($response['session_key'], $post['iv'], $post['encrypted_data']);
            return self::dataSuccess('', $response);
        } catch (Exception $e) {
            return self::dataError('失败:' . $e->getMessage());
        }
    }



    public static function myWallet($user_id){
        $info = Db::name('user')
                ->where(['id'=>$user_id])
                ->field('user_money,total_order_amount,total_recharge_amount,user_growth')
                ->find();
        $info['open_racharge'] = ConfigServer::get('recharge','open_racharge',0);
        return $info;


    }
}