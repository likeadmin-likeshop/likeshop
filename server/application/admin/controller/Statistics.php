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

use app\admin\logic\StatisticsLogic;

class Statistics extends AdminBase
{

    /**
     * @notes 获取会员统计数据
     * @return mixed
     * @author 段誉
     * @date 2022/4/27 10:51
     */
    public function member()
    {
        if ($this->request->isAjax()) {
            $params = $this->request->get();
            $this->_success('', StatisticsLogic::getMemberData($params));
        }
        $this->assign('time', StatisticsLogic::getDateData());
        return $this->fetch();
    }

    /**
     * @notes 获取商品统计数据
     * @return mixed
     * @author 段誉
     * @date 2022/4/27 15:04
     */
    public function goods()
    {
        if ($this->request->isAjax()) {
            $params = $this->request->get();
            $this->_success('', StatisticsLogic::getGoodsData($params));
        }
        $this->assign('time', StatisticsLogic::getDateData());
        return $this->fetch();
    }


    /**
     * @notes 获取交易数据
     * @return mixed
     * @author 段誉
     * @date 2022/4/27 15:33
     */
    public function deal()
    {
        if ($this->request->isAjax()) {
            $params = $this->request->get();
            $this->_success('', StatisticsLogic::getDealData($params));
        }
        $this->assign('time', StatisticsLogic::getDateData());
        return $this->fetch();
    }


    /**
     * @notes 获取访问数据
     * @return mixed
     * @author 段誉
     * @date 2022/4/27 15:47
     */
    public function visit()
    {
        if ($this->request->isAjax()) {
            $params = $this->request->get();
            $this->_success('', StatisticsLogic::getVisitData($params));
        }
        $this->assign('time', StatisticsLogic::getDateData());
        return $this->fetch();
    }
}