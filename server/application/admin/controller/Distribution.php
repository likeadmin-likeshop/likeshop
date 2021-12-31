<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------

namespace app\admin\controller;


use app\common\server\ConfigServer;
use app\common\server\UrlServer;

/**
 * 分销设置
 * Class Distribution
 * @package app\admin\controller
 */
class Distribution extends AdminBase
{

    /**
     * 分销会员列表/审核会员列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function setting()
    {
        $config = [
            'is_open' => ConfigServer::get('distribution', 'is_open', 1),
            'member_apply' => ConfigServer::get('distribution', 'member_apply', 1),
            'show_commission' => ConfigServer::get('distribution', 'show_commission', 0),
            'share_poster' => ConfigServer::get('distribution', 'share_poster'),//分享海报
        ];
        $config['share_poster'] = UrlServer::getFileUrl($config['share_poster']);
        $this->assign('config', $config);
        return $this->fetch('');
    }


    /**
     * 设置分销配置
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function setDistribution()
    {
        $post = $this->request->post();
        if ($post) {
            ConfigServer::set('distribution', 'is_open', $post['is_open']);
            ConfigServer::set('distribution', 'member_apply', $post['member_apply']);
            ConfigServer::set('distribution', 'show_commission', $post['show_commission']);
            ConfigServer::set('distribution', 'share_poster', UrlServer::setFileUrl($post['share_poster']));
            $this->_success('修改成功');
        }
    }
}