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
namespace app\common\server;
use App\Api\PrinterService;
use App\Api\PrintService;
use App\Oauth\YlyOauthClient;
use App\Config\YlyConfig;
use Exception;
use think\facade\Cache;

class YlyPrinter{
    private $client_id = '';
    private $client_secret = '';
    private $yly_config = '';
    protected $access_token = '';


    public function __construct($client_id = '',$client_secret = ''){

        $this->client_id = $client_id;                 //应用id
        $this->client_secret = $client_secret;         // 应用密钥

        $this->yly_config = new YlyConfig($this->client_id, $this->client_secret);

        $this->access_token = Cache::get('yly_access_token');
        //没有access_token时获取
        if(empty($this->access_token)){
            $this->getToken();
        }
    }

    /**
     * Notes:获取access_token
     * @return mixed
     */
    public function getToken(){
        $client = new YlyOauthClient($this->yly_config);
        $token = $client->getToken();


        $this->access_token = $token->access_token;
        Cache::tag('yly_printer')->set('yly_access_token',$this->access_token);
        //刷新token、有效期35天(自用型刷新token作用不大)
        Cache::tag('yly_printer')->set('yly_refresh_token',$token->refresh_token,35*24*3600);

    }

    /**
     * Notes:刷新access_token
     * @return mixed
     */
    public function refreshToken(){

        $client = new YlyOauthClient($this->yly_config);
        $token = $client->refreshToken(Cache::get('yly_refresh_token'));

        $this->access_token = $token->access_token;
        //重置token
        Cache::tag('yly_printer')->set('yly_access_token',$this->access_token);
        Cache::tag('yly_printer')->set('yly_refresh_token',$token->refresh_token,35*24*3600);

    }

    /**
     * Notes: 添加打印机
     * @param string $machine_code 终端号
     * @param string $msign 秘钥
     * @param string $print_name 打印机名称
     * @return bool|string
     */
    public function addPrinter($machine_code,$msign,$print_name){


        $print = new PrinterService($this->access_token,$this->yly_config);
        $response = $print->addPrinter($machine_code,$msign,$print_name);
        return $response;
    }

    /**
     * Notes:删除打印机
     * @param sting $machine_code 终端号
     * @return bool|string
     */
    public function deletePrinter($machine_code){

        $print = new PrinterService($this->access_token,$this->yly_config);
        $print->deletePrinter($machine_code);

    }

    /**
     * Notes: 设置logo
     * @param sting $machine_code 终端号
     * @param sting $url logo
     */
    public function setIcon($machine_code,$url){
        $print = new PrinterService($this->access_token,$this->yly_config);
        $print->setIcon($machine_code,$url);
    }

    /**
     * Notes:获取终端状态
     * @param sting $machine_code 终端号
     */
    public function getPrintStatus($machine_code){
        $print = new PrinterService($this->access_token,$this->yly_config);
        $response = $print->getPrintStatus($machine_code);
        return $response;
    }

    /**
     * Notes:打印机接口
     * @param array $machine_list  打印机信息
     * @param $order 订单信息
     * @return bool|string
     */
    public function ylyPrint($printer_list = [] , $order,$template_config){


        $print = new PrintService($this->access_token, $this->yly_config);


        $order['title'] = $template_config['title'] ?? '';
        $order['qr_code'] = $template_config['qr_code_link'] ?? '';
        $order['remark'] = $template_config['remark'] ?? '';

        foreach ($printer_list as $printer){

            if($printer['machine_code']){
                $content = "<MN>".$printer['print_number']."</MN>";
                if($order['title']){
                    $content .= "<FS2><center>".$order['title']."</center></FS2>";
                }
                $content .= PHP_EOL;
                $content .= "下单时间：".date("Y-m-d H:i").PHP_EOL;
                $content .= "订单编号：".$order['order_sn'].PHP_EOL;
                $content .= PHP_EOL;
                $content .= "<FS2>收货信息</FS2>".PHP_EOL;
                $content .= PHP_EOL;
                $content .= "联系人：".$order['consignee'].PHP_EOL;
                $content .= "手机号码：".$order['mobile'].PHP_EOL;
                $content .= "收货地址：".$order['delivery_address'].PHP_EOL;
                $content .= PHP_EOL;
                $content .= "<FS2>商品信息</FS2>".PHP_EOL;
                $content .= str_repeat('-', 32).PHP_EOL;

                foreach ($order['order_goods'] as $goods){
                    $content .= $goods['name'].PHP_EOL;
                    $content .= $goods['spec_value_str']."   "."x".$goods['goods_num']."  ".$goods['goods_price'].PHP_EOL;
                    $content .= PHP_EOL;
                }

                $content .= str_repeat('-', 32).PHP_EOL;

                $content .= "商品金额：￥".$order['total_amount'].PHP_EOL;
                $content .= "优惠：￥".$order['discount_amount'].PHP_EOL;
                $content .= "运费：￥".$order['shipping_price'].PHP_EOL;
                $content .= "合计：￥".$order['total_amount'].PHP_EOL;
                $content .= PHP_EOL;
                if($order['user_remark']){
                    $content .= '订单备注：'.$order['user_remark'].PHP_EOL;
                }

                $content .= PHP_EOL;
                //二维码
                if($order['qr_code']){
                    $content .= "<QR>".$order['qr_code']."</QR>".PHP_EOL;
                }
                if($order['remark']){
                    $content .=  "<center>".$order['remark']."</center>".PHP_EOL;
                }

                $print->index($printer['machine_code'], $content, $order['order_sn']);
            }
        }

    }

}

