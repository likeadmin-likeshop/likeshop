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
use app\api\logic\SignLogic;
use app\common\server\ConfigServer;

class sign extends ApiBase{
    /**
     * showdoc
     * @catalog 接口/签到
     * @title 获取签到列表
     * @description 获取签到列表
     * @method get
     * @url /sign/lists
     * @return {"code":1,"msg":"获取成功","data":{"lists":[{"days":"1","sign_time":null,"status":"0","integral":"22","growth":"552"},{"days":"2","sign_time":null,"status":"0","integral":"22","growth":"552"},{"days":"3","sign_time":null,"status":"0","integral":63,"growth":563},{"days":"4","sign_time":null,"status":"0","integral":66,"growth":596},{"days":"5","sign_time":null,"status":"0","integral":"22","growth":"552"},{"days":"6","sign_time":null,"status":"0","integral":66,"growth":574}],"message":{"user_integral":"5041","days":"0"}},"show":0,"time":"0.126686","debug":{"request":{"get":[],"post":[],"header":{"connection":"keep-alive","accept-encoding":"gzip, deflate, br","host":"www.likeb2b2c.com:20002","postman-token":"75a16271-edbd-4172-a238-a7d36ed07019","accept":"*\/*","user-agent":"PostmanRuntime\/7.26.2","token":"ff0c66fe0c89fe1e9be591d82d551521","content-type":"","content-length":""}}}}
     * @return_param days int 天数列表
     * @return_param sign_time int 签到时间
     * @return_param status int 签到状态
     * @return_param integral int 积分值
     * @return_param growth  int 成长值
     * @return_param user_integral int 用户积分
     * @return_param user_growth int 用户成长值
     * @remark
     * @number 1
     */
    public function lists(){
        $sign = SignLogic::lists($this->user_id);
        $this->_success('获取成功',$sign);
    }

    /**
     * showdoc
     * @catalog 接口/签到
     * @title 签到
     * @description 签到
     * @method get
     * @url /sign/sign
     * @return {"code":1,"msg":"获取成功","data":{"integral":"22","growth":"552","day":1},"show":0,"time":"0.201775","debug":{"request":{"get":[],"post":[],"header":{"connection":"keep-alive","accept-encoding":"gzip, deflate, br","host":"www.likeb2b2c.com:20002","postman-token":"1c4ef02d-b268-4ba7-a5df-c5b6a5f3d630","accept":"*\/*","user-agent":"PostmanRuntime\/7.26.2","token":"ff0c66fe0c89fe1e9be591d82d551521","content-type":"","content-length":""}}}}
     * @return_param integral int 获得积分值
     * @return_param growth int 获得成长值
     * @return_param days int 连续天数
     * @remark
     * @number 1
     */
    public function sign(){
        $result = $this->validate(['user_id'=>$this->user_id],'app\api\validate\Sign');
        if($result === true){
            $sign = SignLogic::sign($this->user_id);
            $this->_success('签到成功',$sign);
        }
        $this->_error($result);




    }

    /**
     * showdoc
     * @catalog 接口/签到
     * @title 获取签到规则
     * @description 获取签到规则
     * @method get
     * @url /sign/rule
     * @return {"code":1,"msg":"获取成功","data":"1.每天签到可以获得每天签到奖励；\n2.每日最多可签到1次，断签则会重新计算连签天数，达到连续天数后即可获得连续奖励；\n3.活动以及奖励最终解释权归商家所有。\n","show":0,"time":"0.173280","debug":{"request":{"get":[],"post":[],"header":{"connection":"keep-alive","accept-encoding":"gzip, deflate, br","host":"www.likeb2b2c.com:20002","postman-token":"e8617112-b05d-4bea-a8d8-424a674f1c84","accept":"*\/*","user-agent":"PostmanRuntime\/7.26.2","token":"ff0c66fe0c89fe1e9be591d82d551521","content-type":"","content-length":""}}}}
     * @return_param * text 规则
     * @remark
     * @number 1
     */
    public function rule(){
        $rule = ConfigServer::get('sign_rule','instructions','');
        $this->_success('获取成功',$rule);
    }
}