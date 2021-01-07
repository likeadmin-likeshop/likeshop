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
use app\common\server\UrlServer;

use app\common\server\ConfigServer;
use think\Db;
use think\Exception;

class SignDailyLogic
{

    /**
     * 签到设置列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function lists()
    {
        $where[] = ['type', '=',2];
        $where[] = ['del','=',0];
        $count =  Db::name('sign_daily')->where($where)->count();
        $lists = Db::name('sign_daily')->where($where)->select();
        return ['count' => $count,'list' => $lists];

    }
    /**
     * 签到记录列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function record($get){
        $where = [];

        if (isset($get['keyword']) && $get['keyword']){
            $where[] = [$get['type'],'like','%'.$get['keyword'].'%'];
        }


        $count = Db::name('user_sign us')
            ->where(['us.del'=>0,'u.del'=>0])
            ->where($where )
            ->join('user u','u.id = us.user_id')
            ->count();
        $lists = Db::name('user_sign us')
            ->where(['us.del'=>0,'u.del'=>0])
            ->where($where )
            ->join('user u','u.id = us.user_id')
            ->field('us.user_id,nickname,avatar,mobile,sex,u.create_time ,days,integral,growth,
            continuous_integral, continuous_growth,sign_time,mobile,us.sign_time')
            ->order('us.id desc')
            ->select();

        foreach ( $lists as &$item){
            switch ($item['sex']){
                case 1:
                    $item['sex'] = '男';
                    break;
                case 2:
                    $item['sex'] = '女';
                    break;
                default:
                    $item['sex'] = '未知';
            }
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            $item['sign_time']   = date('Y-m-d H:i:s', $item['sign_time']);
            $item['avatar'] = UrlServer::getFileUrl($item['avatar']);
        }

        return ['count' => $count,'list' => $lists];
    }


    /**
     * 添加连续签到奖励
     * @param $post
     */
    public static function add($post)
    {
        $data = [
            'type'                =>'2',
            'days'                => $post['days'],
            'integral'            => $post['integral'],
            'integral_status'     => $post['integral_status'],
            'growth'              => $post['growth'],
            'growth_status'       => $post['growth_status'],
            'del'                 =>0,
            'create_time'         =>time()


        ];
        return Db::name('sign_daily')->insert($data);
    }

    /**
     * 获取连续签到奖励
     * @param $id
     * @return array|null|\PDOStatement|string|\think\Model
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getSignDaily($id)
    {
        return Db::name('sign_daily')->where(['id' =>$id])->find();
    }


    /**
     * 编辑连续签到奖励
     * @param $post
     * @param $id
     * @return bool
     */
    public static  function edit($post,$id)
    {
        $data = [
            'type'                =>'2',
            'days'                => $post['days'],
            'integral'            => $post['integral'],
            'integral_status'     => $post['integral_status'],
            'growth'              => $post['growth'],
            'growth_status'       => $post['growth_status'],
            'del'                 =>0,
            'update_time'         =>time()
            ];
        return Db::name('sign_daily')->where(['id' =>$id])->update($data);

    }

    /**
     * 删除连续签到奖励列表
     * @param $id
     * @return int|string
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function del($id)
    {
        $data = [
            'id'           =>$id,
            'del'          =>1,
            'update_time'  =>time()
        ];
        $result = Db::name('sign_daily')->where(['id' =>$id])->update($data);
        return $result;
    }

    /**
     * 设置签到
     * @param $post
     * @throws Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function  setSignRule($post)
    {

        $data = [
            'type'             =>1,
            'days'             => 0,
            'integral'         =>$post['integral'],
            'growth'           =>$post['growth'],
            'integral_status'  =>$post['integral_status'],
            'growth_status'    =>$post['growth_status'],
            'create_time'      =>time(),
            'del'              =>0,

        ];

        $info = [
            'type'             =>1,
            'days'             => 0,
            'integral'         =>$post['integral'],
            'growth'           =>$post['growth'],
            'integral_status'  =>$post['integral_status'],
            'growth_status'    =>$post['growth_status'],
            'update_time'      =>time(),
            'del'              =>0,

        ];



        $name = Db::name('sign_daily')->where(['type' =>1])->find();
        if (empty($name)){
            Db::name('sign_daily')->insert($data);
        }else{
            Db::name('sign_daily')->where(['type' =>1])->update($info);
        }


         ConfigServer::set('sign_rule','instructions',$post['instructions']);

        return true;
    }

    /**
     * 获取签到规则说明
     * @return array
     */
    public static function getSignRule()
    {


        $data = Db::name('sign_daily')->where(['type' =>1])->find();
        $config = [
            'instructions' => ConfigServer::get('sign_rule','instructions'),
            'dailySign' => $data

        ];



        return $config;

    }



}