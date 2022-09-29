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

class UserGroupLogic
{

    /*
     * 分组列表
     */
    public static function lists($get)
    {
        $where = [];
        $where[] = ['del','=', '0'];

        //查询条数
        $user_group_count = Db::name('user_group')
            ->where($where)
            ->count();
        //数据查询
        $user_group_list = Db::name('user_group')
            ->where($where)
            ->field(['id','name', 'remark'])
            ->page($get['page'],$get['limit'])
            ->select();

        //返回数据及页面条数
        return ['list'=>$user_group_list,'count' =>$user_group_count];
    }

    /**
     * 分组信息
     */
    public static function info($id)
    {
        return Db::name('user_group')->where(['id' => $id])->find();
    }

    /**
     * 添加
     */
    public static function addUserGroup($post)
    {
        $time = time(); //当前时间截
        $data = [
            'name'          => $post['name'],
            'remark'        => $post['remark'],
            'create_time'   => $time
        ];
        return Db::name('user_group')->insert($data); //插入数据
    }

    /**
     * 编辑
     */
    public static function editUserGroup($post)
    {
        $time = time(); //当前时间截
        $data = [
            'name'          => $post['name'],
            'remark'        => $post['remark'],
            'update_time'   => $time
        ];
        return Db::name('user_group')->where(['del' => 0, 'id' => $post['id']])->update($data);  //逻辑删除

    }

    /**
     * 删除
     */
    public static function delUserGroup($id)
    {
        $data = [
            'del'           => 1,
            'update_time'   => time(),
        ];
        return Db::name('user_group')->where(['del' => 0, 'id' => $id])->update($data);  //逻辑删除

    }


}