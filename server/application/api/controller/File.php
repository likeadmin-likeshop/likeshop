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


use app\common\server\FileServer;

class File extends ApiBase
{
    public $like_not_need_login = ['formimage','test'];
    /**
     * showdoc
     * @catalog 接口/上传文件
     * @title form表单方式上传图片
     * @description 图片上传
     * @method post
     * @url /file/formimage
     * @return param name string 图片名称
     * @return param url string 文件地址
     * @remark
     * @number 1
     * @return {"code":1,"msg":"上传文件成功","data":{"url":"http:\/\/likeb2b2c.yixiangonline.com\/uploads\/images\/user\/20200810\/3cb866f6bb30b7239d91582f7d9822d6.png","name":"2.png"},"show":0,"time":"0.283254","debug":{"request":{"get":[],"post":[],"header":{"content-length":"103132","content-type":"multipart\/form-data; boundary=--------------------------206668736604428806173438","connection":"keep-alive","accept-encoding":"gzip, deflate, br","host":"www.likeb2b2c.com:20002","postman-token":"1f8aa4dd-f53c-4d12-98b4-8d901ac847db","cache-control":"no-cache","accept":"*\/*","user-agent":"PostmanRuntime\/7.26.2"}}}}
     */
    public function formImage()
    {
        $data = FileServer::userFormImage($this->user_id);
        $this->_success($data['msg'], $data['data'], $data['code']);
    }

    public function  test()
    {
        $data = FileServer::other($this->user_id);
        $this->_success($data['msg'], $data['data'], $data['code']);
    }
}