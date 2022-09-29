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


use app\common\server\FileServer;

class File extends ApiBase
{
    public $like_not_need_login = ['formImage','test'];
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
}