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
namespace app\api\logic;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;

class UserLevelLogic{
    /**
     * note 会员等级
     * create_time 2020/11/26 18:47
     */
    public static function lists($id){

        $user_level = Db::name('user_level')
                    ->where(['del'=>0])
                    ->order('growth_value asc')
                    ->field('id,name,growth_value,image,background_image,privilege')
                    ->select();

        $user = Db::name('user')->where(['id'=>$id])->field('id,nickname,avatar,level,user_growth')->find();
        $privilege_list = Db::name('user_privilege')->where(['del'=>0])->column('name,image','id');

        $level_name = '';
        foreach ($user_level as $key => $level){
            $user_level[$key]['present_level'] = -1; //未解锁
            $user_level[$key]['next_level'] = '';
            $user_level[$key]['privilege_list'] = [];
            $user_level[$key]['image'] = UrlServer::getFileUrl($level['image']);
            $user_level[$key]['background_image'] = UrlServer::getFileUrl($level['background_image']);


            //当前等级
            if($user['level'] === $level['id']){
                $user_level[$key]['present_level'] = 1;
                $level_name = $level['name'];
                //把当前等级之前的标记未已解锁
                for ($index = $key - 1;$index >= 0;$index--){
                    $user_level[$index]['present_level'] = 0;
                }
            }
            //下个等级
            $next_level = next($user_level);
            $next_level && $user_level[$key]['next_level'] = '下个等级' . $next_level['name'];

            //等级权益
            if($level['privilege']){
                $privileges = explode(',',$level['privilege']);
                foreach ($privileges as $privilege){
                    $user_privilege = $privilege_list[$privilege] ?? [];
                    $user_privilege && $user_privilege['image'] = UrlServer::getFileUrl($user_privilege['image']);
                    $user_privilege && $user_level[$key]['privilege_list'][] = $user_privilege;

                }
            }


        }

        $sign_daily = Db::name('sign_daily')
                    ->where(['del'=>0])
                    ->order('type,days asc')
                    ->select();
        //成长值规则
        $rule = '';
        foreach ($sign_daily as $sign){
            if( 1 == $sign['type'] && 0 == $sign['days'] && $sign['growth_status'] && $sign['growth']){
                $rule.= '会员连续签到1天，赠送'.$sign['growth'].'成长值，';
            }
            if( 2 == $sign['type'] && $sign['growth_status'] && $sign['growth']){
                $rule.= '会员连续签到'.$sign['days'].'天，赠送'.$sign['growth'].'成长值；';
            }
        }
        $give_growth  = ConfigServer::get('recharge', 'give_growth', 0);
        if($give_growth > 0){
            $rule.='使用余额充值，每元赠送'.$give_growth.'成长值';
        }

        //合并数据
        $list = [
            'user'              => [
                'nickname'          => $user['nickname'],
                'avatar'            => UrlServer::getFileUrl($user['avatar']),
                'level_name'        => $level_name,
                'user_growth'       => $user['user_growth'],
            ],
            'level_list'        => $user_level,
            'growth_rule'       => $rule,
        ];
        return $list;

    }

}