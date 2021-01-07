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
namespace app\common\logic;
use think\Db;

class UserLevelLogic{
    /**
     * note 更新个人会员等级
     * create_time 2020/11/26 18:52
     */
    public static function updateUserLevel($id){

        $user = Db::name('user')->where(['id'=>$id])->field('user_growth,level')->find();
        $level = Db::name('user_level')
            ->where([['growth_value','<=',$user['user_growth']],['del','=',0]])
            ->order('growth_value desc')
            ->find();

        if($level){
            $growth_value = 0;
            $user['level'] > 0 && $growth_value = Db::name('user_level')->where(['id'=>$user['level']])->value('growth_value');
            if($level['growth_value'] > $growth_value){
                Db::name('user')->where(['id'=>$id])->update(['level'=>$level['id'],'update_time'=>time()]);
            }
        }
        return true;

    }
    /**
     * note 更新所有用户的等级
     * create_time 2020/11/26 19:11
     */
    public static function updateAllUserLevel($level_id){
        $growth_value = Db::name('user_level')->where(['id'=>$level_id])->value('growth_value');
        $no_update_user_ids = Db::name('user')->alias('U')
            ->join('user_level L','U.level = L.id')
            ->where('L.growth_value','>',$growth_value)
            ->column('U.id');

        return Db::name('user')
            ->where([
                ['id','not in',$no_update_user_ids],
                ['del','=',0],
                ['user_growth','>=',$growth_value],
            ])->update(['level'=>$level_id,'update_time'=>time()]);

    }
}