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


use app\admin\logic\UpgradeLogic;

/** 升级更新
 * Class Upgrade
 * @package app\admin\controller
 */
class Upgrade extends AdminBase
{

    /**
     * Notes: 列表
     * @author 段誉(2021/7/9 11:12)
     * @return mixed
     */
    public function index()
    {
        if ($this->request->isAjax()) {
            $page = $this->request->get('page', $this->page_no);
            $size = $this->request->get('limit', $this->page_size);
            $data = UpgradeLogic::index($page, $size);
            $this->_success('', $data);
        }
        return $this->fetch();
    }

    /**
     * Notes: 提示
     * @author 段誉(2021/7/9 11:11)
     * @return mixed
     */
    public function choosePage()
    {
        return $this->fetch();
    }


    /**
     * Notes: 执行更新
     * @author 段誉(2021/7/9 11:11)
     */
    public function handleUpgrade()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['update_type'] = 1;
            $post['link'] = "package_link";
            $result = $this->validate($post, 'app\admin\validate\Upgrade');
            if (true !== $result) {
                $this->_error($result);
            }
            $res = UpgradeLogic::upgrade($post);
            if (true === $res) {
                $this->_success('更新成功');
            }
            $this->_error(UpgradeLogic::getError());
        }
        $this->_error('更新失败');
    }


    // 下载更新包更新
    public function addUpdatePkgLog()
    {
        $post = $this->request->post();
        $res = UpgradeLogic::getPkgLine($post);
        if(false === $res) {
            $this->_error(UpgradeLogic::getError() ?? '系统错误');
        }
        $this->_success('', $res);
    }
}