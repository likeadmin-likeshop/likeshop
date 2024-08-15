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

namespace app\common\server\printing;


use app\common\model\Express;
use app\common\server\ConfigServer;
use think\Exception;

class Kuaidi100
{
    /**
     * 客户授权key
     */
    private $key;

    /**
     * 授权secret
     */
    private $secret;

    /**
     * 设备编号
     */
    private $siid;


    public function __construct()
    {
//        $this->key = 'HJLXEoGk2758';
//        $this->secret = '52b09a0f84dc43029b3cd1a9897ad895';
//        $this->siid = 'KX100L2104180314';

        $kd100 = [
            'kd100_key'         => ConfigServer::get('kd100', 'kd100_key'),
            'kd100_secret'      => ConfigServer::get('kd100', 'kd100_secret'),
            'kd100_siid'        => ConfigServer::get('kd100', 'kd100_siid'),
        ];
        
        $this->key    = $kd100['kd100_key'] ?? '';
        $this->secret = $kd100['kd100_secret'] ?? '';
        $this->siid   = $kd100['kd100_siid'] ?? '';
    }

    /**
     * @notes 打印面单
     * @param $data
     * @return mixed
     * @throws Exception
     * @author 张无忌
     * @date 2021/9/11 14:16
     */
    public function print($data)
    {
        try {
            if (!$this->key) {
                throw new Exception('请设置快递100的授权key');
            }
            if (!$this->secret) {
                throw new Exception('请设置快递100的授权secret');
            }
            if (!$this->siid) {
                throw new Exception('请设置打印机设备编码');
            }

            if ($data['template']['expressName'] != '顺丰快递') {
                if (!$data['template']['partnerKey']) {
                    throw new Exception('请设置电子面单客户账号partnerId');
                }
                if (!$data['template']['partnerKey']) {
                    throw new Exception('请设置电子面单客户密钥partnerKey');
                }
            }
            $code = Express::getkuaidi100code($data['template']['expressCode']);
            // 请求参数
            $param = array(
                'printType'  => 'CLOUD',
                'partnerId'  => $data['template']['partnerId'],
                'partnerKey' => $data['template']['partnerKey'],
                'net'        => $data['template']['net'] ?? $data['template']['expressName'],
                'kuaidicom'  => $data['template']['expressCode'],
                'tempid'     => $data['template']['tempid'],
                'siid'       => $this->siid,
                'cargo'      => '商品',
                'code'       => $code,      //申通快递需要code
                'weight'     => $data['total_weight'] ? $data['total_weight'] : 1,
                'count'      => 1,
                'payType'    => $data['template']['payType'],
                'expType'    => '标准快递',
                'remark'     => $data['remark'],
                'recMan' => array(
                    'name'      => $data['recMan']['name'],
                    'mobile'    => $data['recMan']['mobile'],
                    'printAddr' => $data['recMan']['printAddr'],
                ),
                'sendMan' => array(
                    'name'      => $data['sendMan']['name'],
                    'mobile'    => $data['sendMan']['mobile'],
                    'printAddr' => $data['sendMan']['printAddr'],
                )
            );

            // 当前时间戳
            list($msec, $sec) = explode(' ', microtime());
            $t = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);

            // 格式化参数
            $post_data = array();
            $post_data["param"] = json_encode($param, JSON_UNESCAPED_UNICODE);
            $post_data["key"] = $this->key;
            $post_data["t"] = $t;
            $sign = md5($post_data["param"] . $t . $this->key . $this->secret);
            $post_data["sign"] = strtoupper($sign);


            // 发送请求
//            $url = 'http://poll.kuaidi100.com/printapi/printtask.do?method=eOrder';
            //V2接口
            $url = 'https://api.kuaidi100.com/label/order?method=order';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $result = json_decode(curl_exec($ch), true);

            if (!$result || $result['code'] != '200') {
                throw new \Exception($result['message'] ?? '打印电子面单异常,原因未知');
            }
            return $result;
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}