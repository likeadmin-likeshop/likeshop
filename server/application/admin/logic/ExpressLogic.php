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

use app\common\server\ConfigServer;

use think\Db;
use think\Exception;

class ExpressLogic
{
    /**
     * 列表
     * @param $get
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function lists($get)
    {
        $where = [];
        $where[] = ['del', '=', '0'];

        if (isset($get['express_name']) && $get['express_name'] != '') {
            $where[] = ['name', 'like', '%' . $get['express_name'] . '%'];
        }

        $count = Db::name('express')
            ->where($where)
            ->count();

        $lists = Db::name('express')
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->select();

        return ['lists' => $lists, 'count' => $count];
    }


    /**
     * 添加
     * @param $post
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function addExpress($post)
    {
        $time = time();
        $data = [
            'name' => $post['name'],
            'icon' => $post['icon'],
            'website' => $post['website'],
            'code' => $post['code'],
            'code100' => $post['code100'],
            'codebird' => $post['codebird'],
            'sort' => $post['sort'],
            'create_time' => $time
        ];
        $result = Db::name('express')->insert($data);
        return $result;
    }

    /**
     * 获取信息
     * @param $id
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function info($id)
    {
        $info = Db::name('express')->where(['id' => $id, 'del' => 0])->find();
        return $info;
    }


    /**
     * 编辑
     * @param $post
     * @return int|string
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function editExpress($post)
    {
        $data = [
            'name' => $post['name'],
            'icon' => $post['icon'],
            'website' => $post['website'],
            'code' => $post['code'],
            'code100' => $post['code100'],
            'codebird' => $post['codebird'],
            'sort' => $post['sort'],
            'update_time' => time()
        ];
        Db::name('express')->where(['id' => $post['id']])->update(['name' => $post['name'],]);
        $result = Db::name('express')->where(['id' => $post['id']])->update($data);
        return $result;
    }


    /**
     * 删除
     * @param $delData
     * @return int|string
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function delExpress($delData)
    {
        $data = [
            'del' => 1,
            'update_time' => time(),
        ];
        return Db::name('express')->where(['del' => 0, 'id' => $delData])->update($data);
    }




    public static function getExpress()
    {
        $config = [
            'way' => ConfigServer::get('express', 'way', 'kd100'),
            'kd100_appkey' => ConfigServer::get('kd100', 'appkey', ''),
            'kd100_customer' => ConfigServer::get('kd100', 'appsecret', ''),
            'kdniao_appkey' => ConfigServer::get('kdniao', 'appkey', ''),
            'kdniao_ebussinessid' => ConfigServer::get('kdniao', 'appsecret', ''),
        ];
        return $config;
    }

    //快递100
    public static function kd100(){
        $config = [
            'appkey' => ConfigServer::get('kd100', 'appkey', ''),
            'appsecret' => ConfigServer::get('kd100', 'appsecret', ''),

        ];
        return $config;
    }
    //快递鸟
    public static function kdniao(){
        $res=[
            'appkey2' => ConfigServer::get('kdniao', 'appkey', ''),
            'appsecret2' => ConfigServer::get('kdniao', 'appsecret', ''),
        ];
        return $res;
    }
    //快递方式
    public static function way(){
        $way = ConfigServer::get('express', 'way', '');
        return $way;
    }

}