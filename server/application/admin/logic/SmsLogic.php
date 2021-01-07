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
use app\common\model\SmsLog;
use think\Db;
class SmsLogic{

    public static function configLists(){
        $list = Db::name('sms_config')->where(['del'=>0])
            ->field('id,name,status,describe')
            ->select();
        foreach ($list as &$item){
            $item['status_desc'] = '关闭';
            if($item['status']){
                $item['status_desc'] = '开启';
            }
        }
        return ['count'=>count($list),'list'=>$list];
    }

    public static function logLists($get){
        $where = [];
        if(isset($get['name']) && $get['name']){
            $where[] = ['d.name','like','%'.$get['name'].'%'];
        }
        if(isset($get['mobile']) && $get['mobile']){
            $where[] = ['mobile','like','%'.$get['mobile'].'%'];
        }
        if(isset($get['send_status'])  && $get['send_status']){
            $where[] = ['send_status','=',$get['send_status']];
        }
        if(isset($get['start_time']) && $get['start_time']){
            $where[] = ['create_time', '>=', strtotime($get['start_time'])];
        }
        if(isset($get['end_time']) && $get['end_time']){
            $where[] = ['create_time', '<=', strtotime($get['end_time'])];
        }
        $sms_log = new SmsLog();
        $count = $sms_log->alias('s')
                ->join('dev_message d','s.message_key = d.key')
                ->where($where)
                ->count();
        $list = $sms_log->alias('s')
                ->join('dev_message d','s.message_key = d.key')
                ->field('s.*,d.name')
                ->where($where)
                ->order('s.id desc')
                ->page($get['page'],$get['limit'])
                ->select();
        return ['count'=>$count,'list'=>$list];

    }
    public static function setConfig($post){
        $post['status'] = isset($post['status']) && $post['status'] == 'on' ? 1 : 0;
        Db::name('sms_config')->where(['id'=>$post['id']])->update($post);
        return true;

    }
    public static function getConfig($id){
        return Db::name('sms_config')->where(['id'=>$id,'del'=>0])->find();
    }
    public static function detail($id){
        $sms_log = new SmsLog();
        return $sms_log->alias('s')
                ->join('dev_message d','s.message_key = d.key')
                ->field('s.*,d.name')->where(['s.id'=>$id])
                ->find();
    }

}