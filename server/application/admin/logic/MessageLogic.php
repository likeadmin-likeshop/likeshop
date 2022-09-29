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