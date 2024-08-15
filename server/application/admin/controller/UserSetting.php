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

use app\admin\logic\UserSettingLogic;

/**
 * 用户设置
 * Class User
 * @package app\admin\controller\setting
 */
class UserSetting extends AdminBase
{
    /**
     * @notes 用户设置
     * @return \think\response\View
     * @author Tab
     */
    public function index()
    {
        $config = UserSettingLogic::getConfig();
        return view('', ['config' => $config,'user_level'=>UserSettingLogic::getUserLevel()]);
    }

    /**
     * @notes 用户设置
     * @return \think\response\Json
     * @author Tab
     */
    public function set()
    {
        $params = $this->request->post();
        $result = UserSettingLogic::set($params);
        if($result) {
            return $this->_success('保存成功');
        }
        return $this->_error(UserSettingLogic::getError());
    }
}