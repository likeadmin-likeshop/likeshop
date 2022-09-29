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

namespace app\admin\logic;

use app\common\model\Pay;
use think\Db;

class PayConfigLogic
{

    public static function lists()
    {
        $payModel = new Pay();
        $count = $payModel->count();
        $lists = $payModel->order('sort')->select();
        $lists->append(['status_text']);
        return ['list' => $lists, 'count' => $count];
    }


    public static function info($pay_code)
    {
        $payModel = new Pay();
        $result = $payModel->where(['code' => $pay_code])->append(['status_text'])->find();
        return $result;
    }


    /**
     * Notes: 余额支付
     * @param $post
     * @author 段誉(2021/3/10 11:42)
     * @return bool
     */
    public static function editBalance($post)
    {
        $payModel = new Pay();
        return $payModel->allowField(true)->save($post, ['code' => 'balance']);
    }


    /**
     * Notes: 微信支付
     * @param $post
     * @author 段誉(2021/3/10 10:30)
     * @return bool
     */
    public static function editWechat($post)
    {
        $config = [
            'pay_sign_key' => $post['pay_sign_key'],
            'mch_id' => $post['mch_id'],
            'apiclient_cert' => $post['apiclient_cert'],
            'apiclient_key' => $post['apiclient_key']
        ];
        $post['config'] = json_encode($config, JSON_UNESCAPED_UNICODE);

        $payModel = new Pay();
        return $payModel->allowField(true)->save($post, ['code' => 'wechat']);
    }


    /**
     * Notes: 支付宝
     * @param $post
     * @author 段誉(2021/3/10 11:43)
     * @return int|string
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function editAlipay($post)
    {
        $config = [
            'app_id' => $post['app_id'],
            'private_key' => $post['private_key'],//应用私钥
            'ali_public_key' => $post['ali_public_key']//支付宝公钥
        ];
        $post['config'] = json_encode($config, JSON_UNESCAPED_UNICODE);
        $payModel = new Pay();
        return $payModel->allowField(true)->save($post, ['code' => 'alipay']);
    }

}