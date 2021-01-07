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

class SupplierLogic{
    /**
     * 列表
     */
    public static function lists($get){
        $where =[];
        if(isset($get['keyword']) && $get['keyword']){
            $where[] = ['name','like','%'.$get['keyword'].'%'];
        }
        $res = db::name('supplier')
            ->where('del',0)
            ->where($where);
        $count = $res->count();
        $lists = $res->page($get['page'],$get['limit'])->select();
        return[
            'count' =>$count,
            'lists' =>$lists,
        ];
    }

    /**
     * 添加
     */
    public static function add($post){

        $data = [
            'name'      => $post['name'],
            'contact'   => $post['contact'],
            'tel'       => $post['tel'],
            'remark'    => $post['remark'],
            'address'   => $post['address'],
            'create_time' => time(),
        ];

        db::name('supplier')
            ->insert($data);
    }

    /**
     * 编辑
     */
    public static function edit($post){

        $data = [
            'name'      => $post['name'],
            'contact'   => $post['contact'],
            'tel'       => $post['tel'],
            'remark'    => $post['remark'],
            'address'   => $post['address'],
            'update_time' => time(),
        ];

        db::name('supplier')
            ->where(['id'=>$post['id']])
            ->update($data);
    }

    /**
     * 信息
     */
    public static function info($id){
        $info = db::name('supplier')
            ->where(['id'=>$id])
            ->find();
        return $info;

    }

    /**
     * 删除
     */
    public static function del($id)
    {

        $data = [
            'del' => 1,
            'update_time' => time()];
        return Db::name('supplier')->where(['del' => 0, 'id' =>$id])->update($data);  //逻辑删除


    }
    /**
     * note 获取所有供应商
     */
    public static function getSupplierList(){
        $list = Db::name('supplier')
                ->field('id,name')
                ->select();
        return $list;
    }
}