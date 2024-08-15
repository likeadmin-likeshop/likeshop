<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，保留版权即可
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

namespace app\admin\logic;


use app\common\model\LiveGoods;
use app\common\server\UrlServer;
use app\common\server\WeChatServer;
use EasyWeChat\Factory;
use Exception;
use think\facade\Cache;

/**
 * 直播商品逻辑层
 * Class LiveGoodsLogic
 * @package app\admin\logic
 */
class LiveGoodsLogic
{
    /**
     * @notes 获取直播商品列表
     * @param $get
     * @return array|string
     * @throws \EasyWeChat\Kernel\Exceptions\HttpException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @author heshihu
     * @date 2021/9/17 11:43
     */
    public static function Lists($get)
    {
        try {
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);
            $access_token = $app->access_token->getToken()['access_token'];
            $goods_url = '&status=' . $get['type'] . '&limit=' . $get['limit'] . '&offset=' . ($get['page'] - 1);
            $url = 'https://api.weixin.qq.com/wxaapi/broadcast/goods/getapproved?access_token=' . $access_token . $goods_url;
            $result = curl_get($url);
            $result = json_decode($result, true);
            if ($result['errcode'] != 0) {
                return ['count' => 0, 'lists' => []];
            }
            $goodsStatus = [0 => '未审核', 1 => '审核中', 2 => '审核通过', 3 => '审核驳回'];


            foreach ($result['goods'] as &$goods) {
                // 获取商品信息
                $goods['goods_status_desc'] = $goodsStatus[$get['type']];
            }

            return ['count' => $result['total'], 'lists' => $result['goods']];
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * @notes 添加直播商品
     * @param $post
     * @return bool|string
     * @throws \EasyWeChat\Kernel\Exceptions\HttpException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @author heshihu
     * @date 2021/9/17 15:28
     */
    public static function add($post)
    {
        $config = WeChatServer::getMnpConfig();
        $app = Factory::miniProgram($config);
        $access_token = $app->access_token->getToken()['access_token'];

        $price = 0;
        $price2 = 0;
        switch ($post['use_price_type']) {
            case 1:
                $price = $post['price'];
                break;
            case 2:
                $price = $post['section_price_start'];
                $price2 = $post['section_price_end'];
                break;
            case 3:
                $price = $post['discount_price_start'];
                $price2 = $post['discount_price_end'];
                break;
        }

        $data['goodsInfo'] = [
            'coverImgUrl' => $post['feedsImg'],
            'name' => $post['goods_name'],
            'priceType' => $post['use_price_type'],
            'price' => $price,
            'price2' => $price2,
            'url' => $post['url'],
        ];

        $url = 'https://api.weixin.qq.com/wxaapi/broadcast/goods/add?access_token=' . $access_token;
        $result = curl_post($url, $data);
        $result = json_decode($result, true);
        if ($result['errcode'] != 0) {
            return self::getLiveGoodsError($result['errcode'], $result['errmsg']);
        }
        return true;
    }

    /**
     * @notes 删除商品
     * @param $id
     * @return bool|string
     * @throws \EasyWeChat\Kernel\Exceptions\HttpException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @author heshihu
     * @date 2021/9/17 18:39
     */
    public static function del($id)
    {
        $config = WeChatServer::getMnpConfig();
        $app = Factory::miniProgram($config);
        $access_token = $app->access_token->getToken()['access_token'];

        $url = 'https://api.weixin.qq.com/wxaapi/broadcast/goods/delete?access_token=' . $access_token;
        $result = curl_post($url, ['goodsId' => intval($id)]);
        $result = json_decode($result, true);
        if ($result['errcode'] != 0) {
            return self::getLiveGoodsError($result['errcode'], $result['errmsg']);
        }
        return true;
    }


    /**
     * @notes 获取商品的信息与审核状态
     * @param $goods_ids
     * @return mixed|string
     * @throws \EasyWeChat\Kernel\Exceptions\HttpException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @author heshihu
     * @date 2021/9/17 17:42
     */
//    public static function goodsInfo($goods_ids)
//    {
//        $config = WeChatServer::getMnpConfig();
//        $app = Factory::miniProgram($config);
//        $access_token = $app->access_token->getToken(true)['access_token'];
//
//        $url = 'https://api.weixin.qq.com/wxa/business/getgoodswarehouse?access_token=' . $access_token;
//        $result = curl_post($url, ['goods_ids' => $goods_ids]);
//        $result = json_decode($result, true);
//        if ($result['errcode'] != 0) {
//            return '';
//        }
//        return $result;
//    }

    public static function addUploadImage($goods_image)
    {
        try {
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);
            $path = env('root_path') . 'public/' . strrchr($goods_image, 'uploads');
            if (!file_exists($path)) {
                return '商品封面不存在，请上传商品封面';
            }

            // 裁剪图片尺寸，避免图片太大导致上传失败
            // 打开图片文件
            $image = \think\Image::open($path);
            // 定义上传文件目录
            $dir = './uploads/goods/';
            // 判断文件目录是否存在
            if (!is_dir($dir)) {
                // 创建文件目录
                if (!mkdir($dir, 0777, true)) {
                    return '请给uploads目录开启777权限';
                }
            }
            // 定义新图片名称
            $new_image = 'livegoods' . time() . '.png';
            $image->thumb(300, 300)->save('./uploads/goods/' . $new_image);
            // 获取完整的新文件路径
            $new_path = env('root_path') . 'public/uploads/goods/' . $new_image;
            $result = $app->media->uploadImage($new_path);

            return ['media_id' => $result['media_id'], 'url' => UrlServer::getFileUrl('uploads/goods/' . $new_image)];
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public static function getLiveGoodsError($code, $errmsg){
        $error_msg = [
            -1     => '系统错误',
            1003   => '商品id不存在',
            47001  => '参格式不符合规范',
            200002 => '入参错误',
            300001 => '禁止创建/更新商品',
            300002 => '名称长度不符合规则',
            300003 => '价格输入不合规',
            300004 => '商品名称存在违规违法内容',
            300005 => '商品封面图片存在违规违法内容',
            300006 => '图片上传失败',
            300007 => '线上小程序版本不存在该链接',
            300008 => '添加商品失败',
            300009 => '商品审核撤回失败',
            300010 => '商品审核状态不对',
            300011 => '操作非法',
            300012 => '没有提审额度（每天500次提审额度）',
            300013 => '提审失败',
            300014 => '审核中，无法删除',
            300017 => '商品未提审',
            300018 => '商品封面图片尺寸过大',
            300021 => '商品添加成功，审核失败'
        ];
        if(!isset($error_msg[$code])){
            return $errmsg;
        }
        return $error_msg[$code];
    }
}