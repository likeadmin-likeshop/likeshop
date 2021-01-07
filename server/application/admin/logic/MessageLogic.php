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
namespace app\admin\logic;
use think\Db;

class MessageLogic{

    public static function config(){
        $list = Db::name('dev_message m')
                  ->join('dev_message_extend e','m.id = e.message_id')
                  ->where(['m.del'=>0])
                  ->field('m.*,e.status')
                  ->select();

        $config = [
            'member'    => [],
            'platform'  => [],
        ];
      
        foreach ($list as $item){
            if($item['dev_type'] == 1){
                $config['member'][] = $item;
            }else{
                $config['platform'][] = $item;
            }
        }
        return $config;
    }

    public static function set($id,$type){

    }

    public static function getMessage($id){
        $config = Db::name('dev_message_extend e')
                    ->join('dev_message d','e.message_id = d.id')
                    ->where(['e.id'=>$id])
                    ->field('d.name,e.*')
                    ->find();

        if($config['variable']){
            $config['variable'] = json_decode($config['variable'],true);
        }else{
            $config['variable'] = [];
        }
        return $config;
    }

    public static function setConfig($post){
        $post['status'] = isset($post['status']) && $post['status'] == 'on' ? 1 : 0;
        return Db::name('dev_message_extend')->where(['id'=>$post['id']])->update($post);
    }
}