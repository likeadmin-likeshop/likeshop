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
namespace app\api\controller;

use app\api\logic\ShareLogic;
use app\common\model\BargainLaunch;

class Share extends ApiBase
{
    public function shareGoods()
    {
        $id = $this->request->get('id');
        $url = $this->request->get('url');
        $client = $this->client;
        if ($id && $url) {
            $result = ShareLogic::shareGoods($this->user_id, $id, $url, $client);
            $this->_success($result['msg'], $result['data'], $result['code']);
        }
        $this->_error('缺少参数', '');
    }


    /**
     * Notes: 用户分销海报
     * @return array
     * @author 段誉(2021/3/18 10:28)
     */
    public function userPoster()
    {
        $url = $this->request->get('url');
        $client = $this->client;
        if (empty($client)) {
            $this->_error('参数缺失');
        }
        $result = ShareLogic::getUserPoster($this->user_id, $url, $client);
        return $result;
    }

    /**
     * Notes:砍价分享
     * @author:  2021/2/25 11:22
     */
    public function shareBargain()
    {
        $id = $this->request->get('id');
        $url = $this->request->get('url');
        $client = $this->client;
        $result = $this->validate(['id' => $id, 'url' => $url], 'app\api\validate\Bargain.share');
        if (true === $result) {
            $result = ShareLogic::shareBargain($this->user_id, $id, $url, $client);
            $this->_success($result['msg'], $result['data'], $result['code']);
        }
        $this->_error($result);
    }
}