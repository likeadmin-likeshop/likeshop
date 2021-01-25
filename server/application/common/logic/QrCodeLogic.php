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
namespace app\common\logic;
use app\common\server\ConfigServer;
use app\common\server\WeChatServer;
use Endroid\QrCode\QrCode;
use think\Env;
use think\facade\Cache;
use think\Exception;
use EasyWeChat\Factory;

class QrCodeLogic{

    public function goodsShareConfig(){
        return [
            //会员头像
            'head_pic' => [
                'w' => 64, 'h' => 64, 'x' => 40, 'y' => 20,
            ],
            //会员昵称
            'nickname' => [
                'color' => '#555555', 'font_face' => ROOT_PATH .'/font/PingFang_Regular.ttf', 'font_size' => 19, 'x' => 120, 'y' => 60,
            ],
            //标题
            'title' => [
                'color' => '#333333', 'font_face' => ROOT_PATH .'/font/PingFang_Bold.ttf', 'font_size' => 20, 'w' => 360, 'x' => 40, 'y' => 785,
            ],
            //价格符号
            'price_symbol' => [
                'color' => '#FF2C3C', 'font_face' => ROOT_PATH .'/font/PingFang_Regular.ttf', 'font_size' => 22, 'w' => 140, 'x' => 40, 'y' => 722,
            ],
            //商品价格
            'price' => [
                'color' => '#FF2C3C', 'font_face' => ROOT_PATH .'/font/PingFang_Bold.ttf', 'font_size' => 32, 'w' => 140, 'x' => 64, 'y' => 722,
            ],
            //小数
            'decimal'=> [
                'color' => '#FF2C3C', 'font_face' => ROOT_PATH .'/font/PingFang_Bold.ttf', 'font_size' => 22, 'w' => 140, 'x' => 114, 'y' => 722,
            ],
            //市场价
            'market_price_symbol' => [
                'color' => '#999999', 'font_face' => ROOT_PATH .'/font/PingFang_Regular.ttf', 'font_size' => 22, 'w' => 140, 'x' => 142, 'y' => 722,
            ],
            //市场价符号
            'market_price' => [
                'color' => '#999999', 'font_face' => ROOT_PATH .'/font/PingFang_Regular.ttf', 'font_size' => 20, 'w' => 140, 'x' => 168, 'y' => 722,
            ],
            //推广主图商品主图
            'main_pic' => [
                'w' => 560, 'h' => 560, 'x' => 40, 'y' => 100,
            ],
            //提醒长按扫码
            'notice' => [
                'color' => '#888888', 'font_face' =>  ROOT_PATH .'/font/PingFang_Regular.ttf', 'font_size' => 18, 'x' => 432, 'y' => 895,
            ],
            //二维码
            'qr' => [
                'w' => 165,'h' => 165, 'x' => 436, 'y' => 700,
            ],
        ];
    }
    public function makeGoodsPoster($user,$goods,$url,$url_type){

        try {
            $save_dir = 'uploads/qr_code/goods_share/';
            $background_img = ROOT_PATH .'/images/share/share_goods_bg.png';

            $cache_key = 'gid' . $goods['id'].'uid'.$user['id'].$url_type;
            $qr_src = md5($cache_key) . '.png';
            $poster_url = $save_dir . $qr_src;

            $base64 = Cache::get($cache_key);
            if (!empty($base64)) {
                return $base64;
            }


            $poster_config = self::goodsShareConfig();
            //生成二维码
            if($url_type == 'path'){
                $this->makeMnpQrcode($goods['id'],$user['distribution_code'],$url,$qr_src,$save_dir);
            }else{
                $qrCode = new QrCode();
                $qrCode->setText($url);
                $qrCode->setSize(1000);
                $qrCode->setWriterByName('png');
                !file_exists($save_dir) && mkdir($save_dir, 777, true);
                $qrCode->writeFile($poster_url);

            }
            $user_avatar = file_exists('./'.$user['avatar']) ? $user['avatar'] : ConfigServer::get('website', 'user_image');
            $goods_image = $goods['image']?:ConfigServer::get('website', 'goods_image');

            $qr_code_logic = new QrCodeLogic();
            //获取背景图
            $share_background_img = imagecreatefromstring(file_get_contents($background_img));
            //合成头像
            $qr_code_logic->writeImg($share_background_img, $user_avatar, $poster_config['head_pic'],true);
            //合并商品主图
            $qr_code_logic->writeImg($share_background_img, $goods_image, $poster_config['main_pic'],false);
            //合成昵称
            $nickname = '来自'.$user['nickname'].'的分享';
            $qr_code_logic->writeText($share_background_img, $nickname, $poster_config['nickname']);
            //长按识别
            $notice = '长按识别二维码';
            $qr_code_logic->writeText($share_background_img, $notice, $poster_config['notice']);
            //合成价格
            $qr_code_logic->writeText($share_background_img, '￥', $poster_config['price_symbol']);
            $qr_code_logic->writeText($share_background_img, floatval($goods['min_price']), $poster_config['price']);

            //合成商品标题
            $goods_name = auto_adapt($poster_config['title']['font_size'], 0, $poster_config['title']['font_face'], $goods['name'], $poster_config['title']['w'],$poster_config['title']['y'],getimagesize($background_img));
            $qr_code_logic->writeText($share_background_img, $goods_name, $poster_config['title']);
            //合成二维码
            $qr_code_logic->writeImg($share_background_img, $poster_url, $poster_config['qr'],false);

            imagepng($share_background_img, $poster_url);
            if ($fp = fopen($poster_url, "rb", 0)) {
                $gambar = fread($fp, filesize($poster_url));
                fclose($fp);
                $base64 = chunk_split(base64_encode($gambar));
                $base64 = 'data:image/png;base64,' . $base64;
            }
            //删除文件
            if (strstr($poster_url, $save_dir)) {
                unlink($poster_url);
            }
            Cache::set($cache_key, $base64, 3600);
            return $base64;

        }catch (Exception $e){
            return $e->getMessage();
        }

    }
    //小程序生成二维码
    public function makeMnpQrcode($goods_id,$code,$url,$img_src,$save_dir){
        try {
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);

            $response = $app->app_code->getUnlimit('id='.$goods_id.'&invite_code='.$code, [
                'page'  => $url,
            ]);

            if ($response instanceof \EasyWeChat\Kernel\Http\StreamResponse) {
                $response->saveAs($save_dir, $img_src);
            }
        } catch (\EasyWeChat\Kernel\Exceptions\Exception $e){
            return $e->getMessage();

        }

    }
    //写入图片
    public function writeImg($poster, $img_uri, $config, $is_rounded = false){
        if(strpos($img_uri, '/') === 0){
            $img_uri = substr($img_uri, 1);
        }
        $pic_img = imagecreatefromstring(file_get_contents($img_uri));
        $is_rounded?$pic_img = rounded_corner($pic_img):'';//切成圆角返回头像资源
        $pic_w = imagesx($pic_img);
        $pic_h = imagesy($pic_img);

        //圆形头像大图合并到海报
        imagecopyresampled($poster, $pic_img,
            $config['x'],
            $config['y'],
            0, 0,
            $config['w'],
            $config['h'],
            $pic_w,
            $pic_h
        );

        return $poster;
    }
    //写入文字
    public function writeText($poster, $text, $config){

        $font_uri = $config['font_face'];
        $font_size = $config['font_size'];
        $color = substr($config['color'],1);
        //颜色转换
        $color= str_split($color, 2);
        $color = array_map('hexdec', $color);
        if (empty($color[3]) || $color[3] > 127) {
            $color[3] = 0;
        }
        //写入文字
        $font_col = imagecolorallocatealpha($poster, $color[0], $color[1], $color[2], $color[3]);
        imagettftext($poster, $font_size,0, $config['x'], $config['y'], $font_col, $font_uri, $text);
        return $poster;
    }




    //用户图片配置
    public function userShareConfig()
    {
        return [
            //会员头像
            'head_pic' => [
                'w' => 80, 'h' => 80, 'x' => 30, 'y' => 680,
            ],
            //会员昵称
            'nickname' => [
                'color' => '#333333', 'font_face' => ROOT_PATH.'/font/PingFang_Regular.ttf', 'font_size' => 20, 'x' => 120, 'y' => 730,
            ],
            //标题
            'title' => [
                'color' => '#333333', 'font_face' => ROOT_PATH.'/font/PingFang_Regular.ttf', 'font_size' => 20, 'w' => 360, 'x' => 30, 'y' => 810,
            ],
            //提醒长按扫码
            'notice' => [
                'color' => '#333333', 'font_face' => ROOT_PATH.'/font/PingFang_Regular.ttf', 'font_size' => 20, 'x' => 30, 'y' => 880,
            ],
            //邀请码文本
            'code_text' => [
                'color' => '#FF2C3C', 'font_face' => ROOT_PATH.'/font/PingFang_Regular.ttf', 'font_size' => 20, 'x' => 355, 'y' => 930,
            ],
            //二维码
            'qr' => [
                'w' => 170,'h' => 170, 'x' => 370, 'y' => 730,
            ],
        ];
    }

    //生成用户小程序二维码
    public function makeUserMnpQrcode($code,$content,$img_src)
    {
        try {
            $config = WeChatServer::getMnpConfig();
            $app = Factory::miniProgram($config);
            $response = $app->app_code->get($content.'?invite_code='.$code, [
                'width' => 170,
            ]);

            if ($response instanceof \EasyWeChat\Kernel\Http\StreamResponse) {
                $response->saveAs('uploads/qr_code/user_share/', $img_src);
            }
        } catch (\EasyWeChat\Kernel\Exceptions\Exception $e){
            return $e->getMessage();
        }
    }

    //生成用户分享图
    public function makeUserPoster($user, $content, $url_type, $client)
    {
        try {
            $save_dir = 'uploads/qr_code/user_share/';
            $save_key = 'uid'.$user['id'].$url_type.$client;
            $qr_src = md5($save_key) . '.png';
            $poster_url = $save_dir . $qr_src;

            $poster_config = $this->userShareConfig();
            //生成二维码
            if($url_type == 'path'){
                $this->makeUserMnpQrcode($user['distribution_code'], $content, $qr_src);
            }else{
                $qrCode = new QrCode();
                $qrCode->setText($content);
                $qrCode->setSize(1000);
                $qrCode->setWriterByName('png');
                !file_exists($save_dir) && mkdir($save_dir, 777, true);
                $qrCode->writeFile($poster_url);
            }
            $user_avatar = file_exists($user['avatar']) ? $user['avatar'] : ConfigServer::get('website', 'user_image');

            $qr_code_logic = new QrCodeLogic();
            //获取背景图
            $share_background_img = imagecreatefromstring(file_get_contents('./images/share_user_bg.png'));
            //合成头像
            $qr_code_logic->writeImg($share_background_img, $user_avatar, $poster_config['head_pic'],true);

            //合成昵称
            $nickname = $user['nickname'];
            $qr_code_logic->writeText($share_background_img, $nickname, $poster_config['nickname']);
            //长按识别
            $notice = '长按识别二维码 >>';
            $qr_code_logic->writeText($share_background_img, $notice, $poster_config['notice']);
            //合成商品标题
            $title = auto_adapt($poster_config['title']['font_size'], 0, $poster_config['title']['font_face'], '邀请你一起来赚大钱', $poster_config['title']['w'],$poster_config['title']['y'],getimagesize($this->background_img));
            $qr_code_logic->writeText($share_background_img, $title, $poster_config['title']);
            //邀请码
            $qr_code_logic->writeText($share_background_img, '邀请码 '.$user['distribution_code'], $poster_config['code_text']);
            //合成二维码
            $qr_code_logic->writeImg($share_background_img, $poster_url, $poster_config['qr'],false);

            imagepng($share_background_img, $poster_url);
            return ['status' => 1, 'msg' => '', 'data' => $poster_url];
        }catch (Exception $e){
            return ['status' => 0, 'msg' => $e->getMessage(), 'data' => ''];
        }
    }
}