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
use app\common\model\WeChat;
use think\Db;

class WechatReplyLogic{
    public static function lists($get){
        $where[] = ['del','=',0];
        if(isset($get['type'])){
            $where[] = ['reply_type','=',$get['type']];
        }
        $count = Db::name('wechat_reply')
                    ->where($where)
                    ->count();
        $list = Db::name('wechat_reply')
                    ->where($where)
                    ->page($get['page'],$get['limit'])
                    ->select();
        foreach ($list as $key =>  $reply) {
            $reply['content_type'] && $list[$key]['content_type'] = '文本';
            switch ($reply['matching_type']){
                case 1:
                    $list[$key]['matching_type'] = '全匹配';
                    break;
                case 2:
                    $list[$key]['matching_type'] = '模糊匹配';
                    break;
            }
        }
        return ['count'=>$count,'list'=>$list];


    }
    /**
     * note 添加微信回复
     * create_time 2020/12/5 15:24
     */
    public static function add($post){
        $post['create_time'] = time();
        $post['del'] = 0;
        if($post['reply_type'] !== WeChat::msg_type_text && $post['status']){
            Db::name('wechat_reply')->where(['reply_type'=>$post['reply_type']])->update(['update_time'=>time(),'status'=>0]);
        }
        return Db::name('wechat_reply')->insert($post);
    }

    /**
     * note 编辑微信回复
     * create_time 2020/12/5 15:24
     */
    public static function edit($post){
        $post['update_time'] = time();
        if($post['reply_type'] !== WeChat::msg_type_text && $post['status']){
            Db::name('wechat_reply')->where(['reply_type'=>$post['reply_type']])->update(['update_time'=>time(),'status'=>0]);
        }
        return Db::name('wechat_reply')->where(['id'=>$post['id']])->update($post);
    }

    /**
     * note 删除微信回复
     * create_time 2020/12/5 15:25
     */
    public static function del($id){

        return Db::name('wechat_reply')->where(['id'=>$id])->update(['update_time'=>time(),'del'=>1]);

    }


    /**
     * note 获取微信回复
     * create_time 2020/12/5 15:25
     */
    public static function getReply($id){
        return Db::name('wechat_reply')->where(['id'=>$id])->find();
    }

    /**
     * note
     * create_time 2020/12/5 18:56
     */
    public static function changeFields($id,$field,$field_value,$reply_type){
        if( 'status' === $field && $field_value && $reply_type !== WeChat::msg_type_text){
            Db::name('wechat_reply')->where(['reply_type'=>$reply_type])->update(['update_time'=>time(),'status'=>0]);
        }
        return Db::name('wechat_reply')->where(['id'=>$id])->update(['update_time'=>time(),$field=>$field_value]);
    }
}