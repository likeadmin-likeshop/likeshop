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


namespace app\admin\controller;


use app\admin\logic\MyLogic;
use yx\admin\builderClass;

class My extends AdminBase
{
    /**
     * 修改个人密码
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function password()
    {
        if ($this->request->post()) {
            $post = input('post.');
            $post['admin_id'] = $this->admin_id;
            $result = $this->validate($post, 'app\admin\validate\Password');
            if ($result === true) {
                MyLogic::updatePassword($post['password'], $this->admin_id);
                $this->_success('修改密码成功');
            }
            $this->_error($result);
        }

        return $this->fetch();
    }

}