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
use function AlibabaCloud\Client\value;
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
            $user_level[$key]['tips'] = '';
            //下个等级
            $next_level = next($user_level);

            $next_level && $user_level[$key]['tips'] = '升级'.$next_level['growth_value'];

            //当前等级
            if($user['level'] === $level['id']){
                $user_level[$key]['present_level'] = 1;
//                $user_level[$key]['tips'] = '';
                $level_name = $level['name'];
                //把当前等级之前的标记未已解锁
                for ($index = $key - 1;$index >= 0;$index--){
                    $user_level[$index]['present_level'] = 0;
                    $user_level[$index]['tips'] = '';
                }
            }

            $next_level && $user_level[$key]['next_level'] = '下个等级 ' . $next_level['name'];

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
        $tip_id = 1;
        foreach ($sign_daily as $sign){
            if( 1 == $sign['type'] && 0 == $sign['days'] && $sign['growth_status'] && $sign['growth']){
                $rule.= $tip_id.'.会员连续签到1天，赠送' .$sign['growth']. "成长值。".PHP_EOL;
            }
            if( 2 == $sign['type'] && $sign['growth_status'] && $sign['growth']){
                $rule.= $tip_id.'.会员连续签到'.$sign['days'].'天，赠送'.$sign['growth']."成长值。".PHP_EOL;
            }
            $tip_id++;
        }

        $give_growth  = ConfigServer::get('recharge', 'give_growth', 0);
        if($give_growth > 0){
            $rule.=$tip_id.'.使用余额充值，每元赠送'.$give_growth."成长值。".PHP_EOL;
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