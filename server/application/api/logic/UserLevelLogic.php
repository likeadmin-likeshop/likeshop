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

        $user_level_list = Db::name('user_level')
                    ->where(['del'=>0])
                    ->order('growth_value asc')
                    ->field('id,name,growth_value,image,background_image,privilege')
                    ->select();

        $user = Db::name('user')->where(['id'=>$id])->field('id,nickname,avatar,level,user_growth')->find();
        $privilege_list = Db::name('user_privilege')->where(['del'=>0])->column('name,image','id');

        $current_level_name = '';
        $level_list = [];
        $current_key = '';

        foreach ($user_level_list as $key => $level){

            $level_privilege = [];
            $current_level_status = -1;
            $current_growth_tips = '当前成长值 '.$user['user_growth'];

            $image = UrlServer::getFileUrl($level['image']);
            $background_image = UrlServer::getFileUrl($level['background_image']);

            $diff_growth = $level['growth_value'] - $user['user_growth'] > 0 ? $level['growth_value'] - $user['user_growth'] :0;
            $diff_growth_tips = '还需'.$diff_growth.'可升级';
            $diff_growth_percent = 0;

            //等级权益
            if($level['privilege']){
                $privileges = explode(',',$level['privilege']);
                foreach ($privileges as $privilege){
                    $user_privilege = $privilege_list[$privilege] ?? [];
                    $user_privilege && $user_privilege['image'] = UrlServer::getFileUrl($user_privilege['image']);
                    $user_privilege && $level_privilege[] = $user_privilege;
                }
            }
            //当前等级
            if($user['level'] === $level['id']){
                $current_level_name = $level['name'];
                $current_level_status = 1;
                $current_key = $key;
                $diff_growth_tips = '';
                //下个等级
                $next_level = $user_level_list[$key+1] ?? [];
                if($next_level){
                    $diff_growth_percent = round($user['user_growth'] / $next_level['growth_value'],2);
                }
            }

            $level_list[] = [
                'name'                  => $level['name'],
                'current_level_status'  => $current_level_status,
                'current_growth_tips'   => $current_growth_tips,
                'image'                 => $image,
                'background_image'      => $background_image,
                'diff_growth_tips'      => $diff_growth_tips,
                'level_privilege'       => $level_privilege,
                'diff_growth_percent'   => $diff_growth_percent,
            ];

        }
        foreach ($level_list as $level_key => $list){
            if($level_key >= $current_key){
                break;
            }
            $level_list[$level_key]['current_level_status'] = 0;
            $level_list[$level_key]['current_growth_tips'] = '';
            $level_list[$level_key]['diff_growth_tips'] = '';

        }


        $sign_daily = Db::name('sign_daily')
                    ->where(['del'=>0])
                    ->order('type,days asc')
                    ->select();
        //成长值规则
        $rule = '';
        $give_growth  = ConfigServer::get('recharge', 'give_growth', 0);
        if($give_growth > 0){
            $rule.='1.使用余额充值，每元赠送'.$give_growth."成长值。".PHP_EOL;
        }
        $rule .='2.';
        foreach ($sign_daily as $sign){
            if( 1 == $sign['type'] && 0 == $sign['days'] && $sign['growth_status'] && $sign['growth']){
                $rule.= '会员每天签到，赠送' .$sign['growth']. "成长值；";
            }
            if( 2 == $sign['type'] && $sign['growth_status'] && $sign['growth']){
                $rule.= '会员连续签到'.$sign['days'].'天，赠送'.$sign['growth']."成长值；";
            }
        }
        $rule.= PHP_EOL;

        //合并数据
        $list = [
            'user'              => [
                'nickname'          => $user['nickname'],
                'avatar'            => UrlServer::getFileUrl($user['avatar']),
                'level_name'        => $current_level_name,
                'user_growth'       => $user['user_growth'],
            ],
            'level_list'        => $level_list,
            'growth_rule'       => $rule,
        ];
        return $list;

    }

}