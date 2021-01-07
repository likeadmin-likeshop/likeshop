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
use think\db;
use app\common\server\UrlServer;
class GoodsCommentLogic{
//评价
    public static function lists($get){

        $where = [];
        if(isset($get['type'])&&$get['type'] == 1){
            $where = [];
        }elseif (isset($get['type'])&&$get['type'] == 2){
            $where[] = ['reply','=',null];
        }
        //搜索条件
        if (isset($get['choice'])&& $get['choice']==1){
            if (isset($get['keyword']) && $get['keyword']) {
                $where[] = ['g.name', 'like', "%{$get['keyword']}%"];
            }
        }elseif (isset($get['choice'])&& $get['choice']==2){
            if (isset($get['keyword']) && $get['keyword']) {
                $where[] = ['user_id', 'like', "%{$get['keyword']}%"];
            }
        }elseif (isset($get['choice'])&& $get['choice']==3){
            if (isset($get['keyword']) && $get['keyword']) {
                $where[] = ['nickname', 'like', "%{$get['keyword']}%"];
            }
        }elseif (isset($get['choice'])&& $get['choice']==4){
            if (isset($get['keyword']) && $get['keyword']) {
                $where[] = ['mobile', 'like', "%{$get['keyword']}%"];
            }
        }

        if(isset($get['goods_comment'])&& $get['goods_comment']==1){
            $where[] = ['goods_comment', '>', 3];
        }elseif (isset($get['goods_comment'])&& $get['goods_comment']==2){
            $where[] = ['goods_comment', '=', 3];
        }elseif (isset($get['goods_comment'])&& $get['goods_comment']==3){
            $where[] = ['goods_comment', '<', 3];
        }

        if(isset($get['start_time']) && $get['start_time']){
            $where[] = ['gc.create_time','>=',strtotime($get['start_time'])];
        }
        if(isset($get['end_time']) && $get['end_time']){
            $where[] = ['gc.create_time','<=',strtotime($get['end_time'])];
        }

        $res = Db::name('goods_comment gc')
            ->join('goods g','g.id = gc.goods_id')
            ->join('goods_item gi','gi.id = gc.item_id')
            ->join('user u','u.id = gc.user_id')
            ->where('gc.del',0)
            ->where($where)
            ->field('u.id as user_id,u.nickname,u.mobile,u.sex,u.create_time,g.name,gi.spec_value_str
            ,gc.goods_comment,gc.comment,gc.create_time as comment_time,gc.status,u.avatar,g.image,gc.reply
            ,gc.id')
            ->order('gc.create_time','desc');
        $count = $res->count();
        $lists = $res->page($get['page'],$get['limit'])->select();

        foreach ($lists as &$item){
            switch($item['sex']){
                case 0:
                    $item['sex'] ='未知';
                    break;
                case 1:
                    $item['sex'] ='男';
                    break;
                case 2:
                    $item['sex'] ='女';
                    break;

            }

            if($item['goods_comment'] > 3){
                $item['goods_comment'] = '好评';
            }elseif ($item['goods_comment'] == 3){
                $item['goods_comment'] = '中评';
            }elseif ($item['goods_comment'] < 3){
                $item['goods_comment'] = '差评';
            }
            if($item['status'] == 1){
                $item['status'] = '显示';
                $item['info_state_switch'] = '隐藏';
            }elseif ($item['status'] == 0){
                $item['status'] = '隐藏';
                $item['info_state_switch'] = '显示';
            }

            $item['create_time'] = date('Y-m-d H:i:s',$item['create_time']);
            $item['comment_time'] = date('Y-m-d H:i:s',$item['comment_time']);
            $item['avatar'] = UrlServer::getFileUrl($item['avatar']);
        }

        return [
            'lists' => $lists,
            'count'=> $count
        ];
    }

//删除
    public static function del($delData)
    {
        $data = [
                'del' => 1,
                'update_time' => time(),];
        return Db::name('goods_comment')
            ->where(['del' => 0, 'id' =>$delData])
            ->update($data);  //逻辑删除
    }


//切换状态
    public static function switchStatus($get)
    {
        $data = [
            'status' => $get['status'],
            'update_time' => time(),
        ];
        return Db::name('goods_comment')->where(['del' => 0, 'id' => $get['id']])->update($data);
    }

    //回复
    public static function reply($post){

        $reply =  db::name('goods_comment')
            ->where([
                'id'=>$post['id'],
                'del'=>0
            ])
            ->update(['reply'=>$post['reply']]);
        return $reply;
    }

    //评论信息
    public static function info($id){
        $info = db::name('goods_comment')
            ->where('del',0)
            ->where('id',$id)
            ->find();
        return $info;
    }
}