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
use app\api\logic\SeckillLogic;


class Seckill extends ApiBase{


    public $like_not_need_login = ['seckilltime','seckillgoods'];

    /**
     * showdoc
     * @catalog 接口/营销
     * @title 获取秒杀时间段
     * @description 获取秒杀时间段
     * @method get
     * @url /seckill/seckillTime
     * @return {"code":1,"msg":"获取成功","data":[{"id":"1","start_time":"08:00","end_time":"10:00","is_open":0,"tips":"已结束"},{"id":"2","start_time":"11:00","end_time":"14:00","is_open":1,"tips":"抢购中"},{"id":"3","start_time":"14:00","end_time":"18:00","is_open":0,"tips":"未开始"},{"id":"4","start_time":"20:00","end_time":"22:00","is_open":0,"tips":"未开始"}],"show":0,"time":"0.274701","debug":{"request":{"get":[],"post":[],"header":{"connection":"keep-alive","accept-encoding":"gzip, deflate, br","host":"www.likeb2b2c.com:20002","postman-token":"bd852ce3-cbe9-4c66-bb91-7e34eb223716","cache-control":"no-cache","accept":"*\/*","user-agent":"PostmanRuntime\/7.26.1","content-type":"","content-length":""}}}}
     * @return_param id int 活动id
     * @return_param start_time varchar 开始时间
     * @return_param end_time varchar 结束时间
     * @return_param status int 状态0-未开始，1-抢购中；2-已结束
     * @return_param tips string 提示
     * @remark
     * @number 1
     */
    public function seckillTime(){
        $list = SeckillLogic::seckillTime();
        $this->_success('获取成功',$list);
    }

    /**
     * showdoc
     * @catalog 接口/营销
     * @title 获取秒杀商品
     * @description 获取秒杀商品
     * @method get
     * @url /seckill/seckillGoods
     * @return {"code":1,"msg":"获取成功","data":{"list":[{"name":"华为儿童手表3 pro智能电话中小学生天才男女孩防水可爱运动多功能视频拍照通话gps定位4g电信版官方旗舰店","id":"2","image":"http:\/\/www.likeb2b2c.com:20002\/uploads\/images\/20200709\/161c78cbefc68afbbb0e1856b1a9a596.png","min_price":"789.00","seckill_price":"720.00","sales_sum":"0"},{"name":"雀巢（Nestle）脆脆鲨 休闲零食 威化饼干巧克力味24*20g+8*20g","id":"7","image":"http:\/\/www.likeb2b2c.com:20002\/uploads\/images\/20200710\/cd7dfb551061f353ba53d21c2a2275c4.jpg","min_price":"42.99","seckill_price":"40.00","sales_sum":"0"}],"page":1,"size":15,"count":2,"more":0},"show":0,"time":"0.449604","debug":{"request":{"get":{"id":"2"},"post":[],"header":{"connection":"keep-alive","accept-encoding":"gzip, deflate, br","host":"www.likeb2b2c.com:20002","postman-token":"91999655-047e-4144-8de2-bedf1e3fac90","cache-control":"no-cache","accept":"*\/*","user-agent":"PostmanRuntime\/7.26.1","content-type":"","content-length":""}}}}
     * @param id 必填 int 活动id
     * @param page_no 选填 int 页码(默认第一页)
     * @param page_size 选填 int 每页数量(默认15)
     * @return_param name string 商品名称
     * @return_param id int 商品id
     * @return_param image array 商品图片
     * @return_param min_price float 商品最小价
     * @return_param sales_sum int 销量
     * @return_param seckill_price float 商品秒杀价
     * @return_param shop_id int 店铺id
     * @remark
     * @number 1
     */
    public function seckillGoods(){
        $id = $this->request->get('id');
        if($id){
            $list = SeckillLogic::seckillGoods($id,$this->page_no,$this->page_size);
            $this->_success('获取成功',$list);
        }
        $this->_error('缺少参数');

    }
}