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


namespace app\api\logic;


use app\common\server\AreaServer;
use think\Db;
use think\Exception;

class UserAddressLogic
{
    /**
     * 获取用户地址信息
     * @param $user_id
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function infoUserAddress($user_id){
        $info = Db::name('user_address')
            ->where(['user_id'=>$user_id,'del'=>0])
            ->field('id,contact,telephone,province_id,city_id,district_id,address,is_default')
            ->select();
        foreach ($info as &$item) {
            $item['province'] = AreaServer::getAddress($item['province_id']);
            $item['city'] = AreaServer::getAddress($item['city_id']);
            $item['district'] = AreaServer::getAddress($item['district_id']);
        }
        return $info;
    }

    /**
     * 获取一条地址信息
     * @param $user_id
     * @param $get
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getOneAddress($user_id,$get) {
        $info = Db::name('user_address')
            ->where(['id'=>$get['id'],'user_id'=>$user_id,'del'=>0])
            ->field('id,contact,telephone,province_id,city_id,district_id,address,is_default')
            ->find();

        $info['province'] = AreaServer::getAddress($info['province_id']);
        $info['city'] = AreaServer::getAddress($info['city_id']);
        $info['district'] = AreaServer::getAddress($info['district_id']);
        return $info;
    }

    /**
     * 获取默认地址
     * @param $user_id
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getDefaultAddress($user_id){
        $info = Db::name('user_address')
            ->where(['is_default'=>1,'user_id'=>$user_id,'del'=>0])
            ->field('id,contact,telephone,province_id,city_id,district_id,address,is_default')
            ->find();

        if (!$info){
            return [];
        }

        $info['province'] = AreaServer::getAddress($info['province_id']);
        $info['city'] = AreaServer::getAddress($info['city_id']);
        $info['district'] = AreaServer::getAddress($info['district_id']);

        return $info;
    }

    /**
     * 设置默认地址
     * @param $user_id
     * @param $post
     * @return int|string
     */
    public static function setDefaultAddress($user_id,$post){

        try {
            Db::startTrans();

            Db::name('user_address')
                ->where(['del'=> 0 ,'user_id'=>$user_id])
                ->update(['is_default'=>0]);

            $result = Db::name('user_address')
                ->where(['id'=>$post['id'],'del'=> 0 ,'user_id'=>$user_id])
                ->update(['is_default'=>1]);

            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
            return false;
        }

        return $result;
    }

    /**
     * 添加收货地址
     * @param $user_id
     * @param $post
     * @return int|string
     */
    public static function addUserAddress($user_id,$post) {
        try {
            Db::startTrans();

            if ($post['is_default'] == 1){
                Db::name('user_address')
                    ->where(['del'=> 0 ,'user_id'=>$user_id])
                    ->update(['is_default'=>0]);
            }else{
                $is_first = Db::name('user_address')
                    ->where(['del'=> 0 ,'user_id'=>$user_id])
                    ->select();
                if (empty($is_first)){
                    $post['is_default'] = 1;
                }
            }

            $data = [
                'user_id'       =>  $user_id,
                'contact'       =>  $post['contact'],
                'telephone'     =>  $post['telephone'],
                'province_id'   =>  $post['province_id'],
                'city_id'       =>  $post['city_id'],
                'district_id'   =>  $post['district_id'],
                'address'       =>  $post['address'],
                'is_default'    =>  $post['is_default'],
                'create_time'   =>  time()
            ];

            $result = Db::name('user_address')->insert($data);

            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
            return $e->getMessage();
        }

        return $result;
    }

    /**
     * 编辑用户地址
     * @param $user_id
     * @param $post
     * @return int|string
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function editUserAddress($user_id,$post) {

        try {
            Db::startTrans();

            if ($post['is_default'] == 1){
                Db::name('user_address')
                    ->where(['del'=> 0 ,'user_id'=>$user_id])
                    ->update(['is_default'=>0]);
            }

            $data = [
                'contact'       =>  $post['contact'],
                'telephone'     =>  $post['telephone'],
                'province_id'   =>  $post['province_id'],
                'city_id'       =>  $post['city_id'],
                'district_id'   =>  $post['district_id'],
                'address'       =>  $post['address'],
                'is_default'    =>  $post['is_default'],
                'update_time'   =>  time()
            ];

            $result = Db::name('user_address')
                ->where(['id'=>$post['id'],'del'=> 0 ,'user_id'=>$user_id])
                ->update($data);

            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
            return false;
        }

        return $result;
    }

    /**
     * 删除用户地址
     * @param $user_id
     * @param $post
     * @return int|string
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function delUserAddress($user_id,$post) {

        $data = [
            'del'       =>  1,
            'update_time'   =>  time()
        ];

        return  Db::name('user_address')
            ->where(['id'=>$post['id'],'del'=>0,'user_id'=>$user_id])
            ->update($data);
    }


    /**
     * 获取省市区id
     * @param $province
     * @param $city
     * @param $district
     * @return array
     */
    public static function handleRegion($province,$city,$district){
        if (!$province || !$city || !$district){
            return [];
        }
        $result = [];
        $result['province'] = self::handleRegionField($province,1);
        if (!$result['province']){
            return [];
        }
        $result['city'] = self::handleRegionField($city,2);
        $result['district'] = self::handleRegionField($district,3);

        return $result;
    }

    /**
     * 获取对应省,市,区的id
     * @param $keyword
     * @param int $level
     * @return mixed|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function handleRegionField($keyword, $level = 1){
        $data = '';
        $list = Db::name('dev_region')->where('level',$level)->select();
        foreach ($list as $k => $v){
            if ($keyword == $v['name'] || strpos($keyword,$v['name']) !== false){
                $data = $v['id'];
            }
        }
        return $data;
    }


    /**
     * User: 意象信息科技 mjf
     * Desc: 获取用户指定id的地址
     * @param $address
     * @param $user_id
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getUserAddressById($address, $user_id)
    {
        $info = Db::name('user_address')
            ->where(['id' => $address, 'user_id' => $user_id, 'del' => 0])
            ->field('id,contact,telephone,province_id,city_id,district_id,address,is_default')
            ->find();

        if (!$info) {
            return [];
        }

        $info['province'] = AreaServer::getAddress($info['province_id']);
        $info['city'] = AreaServer::getAddress($info['city_id']);
        $info['district'] = AreaServer::getAddress($info['district_id']);

        return $info;
    }


    //获取订单用户地址

    /**
     * User: 意象信息科技 mjf
     * Desc: 获取下单时用户地址
     * @param $data
     * @param $user_id
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getOrderUserAddress($data, $user_id)
    {
        if (isset($data['address_id']) && $data['address_id'] != 0){
            return self::getUserAddressById($data['address_id'], $user_id);
        }
        return self::getDefaultAddress($user_id);
    }
}