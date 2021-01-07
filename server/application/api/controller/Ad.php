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


use app\api\logic\AdLogic;

class Ad extends ApiBase
{
    public $like_not_need_login = ['lists'];

    /**
     * showdoc
     * @catalog 接口/广告
     * @title 获取广告列表
     * @description 获取广告列表
     * @method get
     * @url ad/lists
     * @param pid 必填 int 广告位id
     * @param client 必填 int 终端,1-H5,2-小程序,3-APP
     * @return_param image string 广告图片
     * @return_param link_type int 广告类型：1-商场页面；2-商品页面；3-自定义类型
     * @return_param link string 广告链接
     * @return_param params string 参数
     * @return_param is_tab int 是否tab页：1-是；0-否
     * @remark
     * @number 0
     * @return {"code":1,"msg":"获取成功","data":{"lists":["http:\/\/www.likeb2b2c.com:20002\/uploads\/images\/20200706\/e4bdb.jpg","http:\/\/www.likeb2b2c.com:20002\/uploads\/images\/20200708\/893ae.jpg"]},"show":0,"time":"0.686155","debug":{"request":{"get":{"pid":"1"},"post":[],"header":{"connection":"keep-alive","accept-encoding":"gzip, deflate, br","host":"www.likeb2b2c.com:20002","postman-token":"f804bef0-b397-4590-a67f-b489830cd37b","accept":"*\/*","user-agent":"PostmanRuntime\/7.26.1","token":"ff0c66fe0c89fe1e9be591d82d551521","content-type":"","content-length":""}}}}
     */
    public function lists()
    {
        $pid = $this->request->get('pid');
        $client = $this->request->get('client', 1);
        if ($pid) {
            $list = AdLogic::lists($pid, $client);
        } else {
            $list = [];
        }
        $this->_success('获取成功', $list);
    }
}