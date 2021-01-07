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


namespace app\api\controller;


use app\api\logic\UserAddressLogic;

class UserAddress extends ApiBase
{
    public $like_not_need_login = ['handleregion'];


    //获取地址列表
    public function lists()
    {
        $user_id = $this->user_id;
        $result = UserAddressLogic::infoUserAddress($user_id);
        $this->_success('获取成功', $result);
    }



    //获取一条地址详情
    public function detail()
    {
        $get = $this->request->get();
        $result = $this->validate($get, 'app\api\validate\UserAddress.one');
        if ($result === true) {
            $user_id = $this->user_id;
            $result = UserAddressLogic::getOneAddress($user_id, $get);
            if ($result) {
                $this->_success('获取成功', $result);
            }
            $result = '获取失败';
        }
        $this->_error($result);
    }


    //获取默认地址
    public function getDefault()
    {
        $user_id = $this->user_id;
        $result = UserAddressLogic::getDefaultAddress($user_id);
        if ($result) {
            $this->_success('获取成功', $result);
        }
        $this->_error('获取失败');
    }


    //设置默认地址
    public function setDefault()
    {
        $post = $this->request->post();
        $result = $this->validate($post, 'app\api\validate\UserAddress.set');
        if ($result === true) {
            $user_id = $this->user_id;
            $result = UserAddressLogic::setDefaultAddress($user_id, $post);
            if ($result) {
                $this->_success('设置成功', $result);
            }
            $result = '设置失败';
        }
        $this->_error($result);
    }



    //添加收货地址
    public function add()
    {
        $post = $this->request->post();
        $result = $this->validate($post, 'app\api\validate\UserAddress.add');
        if ($result === true) {
            $user_id = $this->user_id;
            $result = UserAddressLogic::addUserAddress($user_id, $post);
            if ($result) {
                $this->_success('添加成功', $result);
            }
            $result = '添加失败';
        }
        $this->_error($result);
    }


    //更新收货地址
    public function update()
    {
        $post = $this->request->post();
        $result = $this->validate($post, 'app\api\validate\UserAddress.edit');
        if ($result === true) {
            $user_id = $this->user_id;
            $result = UserAddressLogic::editUserAddress($user_id, $post);
            if ($result) {
                $this->_success('修改成功', $result);
            }
            $result = '修改失败';
        }
        $this->_error($result);
    }


    //删除收货地址
    public function del()
    {
        $post = $this->request->post();
        $result = $this->validate($post, 'app\api\validate\UserAddress.del');
        if ($result === true) {
            $user_id = $this->user_id;
            $result = UserAddressLogic::delUserAddress($user_id, $post);
            if ($result) {
                $this->_success('删除成功', $result);
            }
            $result = '删除失败';
        }
        $this->_error($result);
    }


    //将省市区名称转换成省市区id
    public function handleRegion()
    {
        $post = $this->request->post();
        $result = $this->validate($post, 'app\api\validate\UserAddress.handleRegion');
        if ($result === true) {
            $province = $this->request->post('province');
            $city = $this->request->post('city');
            $district = $this->request->post('district');
            $res = UserAddressLogic::handleRegion($province, $city, $district);
            if ($res) {
                $this->_success('获取成功', $res);
            }
            $result = '获取失败';
        }
        $this->_error($result);
    }

}