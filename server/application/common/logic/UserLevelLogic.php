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