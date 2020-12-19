<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------


namespace app\api\controller;
use app\api\logic\WeChatLogic;
class WeChat extends ApiBase
{

    public $like_not_need_login = ['jsconfig','index'];

    /**
     * showdoc
     * @catalog 接口列表/微信
     * @title 微信JSSDK授权接口
     * @description
     * @method get
     * @url we_chat/jsconfig
     * @return {"code":1,"msg":"获取成功","data":{"config":{"debug":true,"beta":false,"jsApiList":["onMenuShareTimeline","onMenuShareWeibo","openLocation","getLocation","chooseWXPay","updateTimelineShareData"],"appId":"wx9d4……","nonceStr":"Ge8wD……","timestamp":1592707100,"url":"http:\/\/dragon.yixiang……","signature":"8421cfbc……"}}}
     * @param url 必填 varchar 前端当前url
     * @return_param appId string appid,公众号的唯一标识
     * @return_param timestamp int 生成签名的时间戳
     * @return_param nonceStr string 生成签名的随机串
     * @return_param signature string 签名
     * @return_param jsApiList array 需要使用的JS接口列表
     * @remark allow_share: 传入1时,则返回允许分享到朋友圈的配置
     * @number 0
     */
    public function jsConfig()
    {
        $url = $this->request->get('url');
        $result = WeChatLogic::jsConfig($url);
        $this->success('',['config'=>$result]);
    }


    public function index()
    {
        WeChatLogic::index();
    }

}