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

namespace app\api\controller;


use app\api\logic\SelffetchShopLogic;

class SelffetchShop extends ApiBase
{
    /**
     * @notes 查看自提门店列表
     * @author ljj
     * @date 2021/8/24 4:59 下午
     */
    public function lists()
    {
        $params['longitude'] = $this->request->get('longitude', '113.280637');
        $params['latitude'] = $this->request->get('latitude', '23.125178');
        $lists = SelffetchShopLogic::lists($params, $this->page_no, $this->page_size);
        $this->_success('获取成功', $lists);
    }

    /**
     * @notes 获取百度地图密钥
     * @author ljj
     * @date 2021/8/24 5:01 下午
     */
    public function getMapKey()
    {
        $result = SelffetchShopLogic::getMapKey();
        $this->_success('获取成功', $result);
    }
}