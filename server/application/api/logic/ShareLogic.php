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
namespace app\api\logic;
use app\common\logic\LogicBase;
use app\common\logic\QrCodeLogic;
use app\common\model\Client_;
use app\common\server\UrlServer;
use think\Db;

class ShareLogic extends LogicBase {
    public static function shareGoods($user_id,$goods_id,$url,$client){
        $qr_code_logic = new QrCodeLogic();
        $goods = Db::name('goods')->where(['id'=>$goods_id])->find();
        $base64 = '';
        if($goods){
            $user = Db::name('user')->where(['id'=>$user_id])->find();
            switch ($client){
                case Client_::mnp: //小程序
                    $url_type = 'path';
                    break;
                case Client_::h5: //H5
                case Client_::android:
                case Client_::ios:
                    $url_type = 'url';
                    $url = UrlServer::getFileUrl($url);
            }
            $base64 = $qr_code_logic->makeGoodsPoster($user,$goods,$url,$url_type);
        }
        return $base64;
    }


    //获取用户分享海报
    public static function getUserPoster($user_id, $url, $client)
    {
        //判断用户是否已有生成二维码分享海报
        $user = Db::name('user')->where(['id' => $user_id])->find();

        $url_type = 'url';
        $invite_code_text = 'distribution_app_qr_code';

        if ($client == Client_::mnp || $client == Client_::h5){
            if (empty($url)){
                return self::dataError('参数缺失');
            }
        }

        switch ($client){
            case Client_::mnp:
                $url_type = 'path';
                $invite_code_text = 'distribution_mnp_qr_code';
                $content = $url;
                break;
            case Client_::h5:
                $invite_code_text = 'distribution_h5_qr_code';
                $url = UrlServer::getFileUrl($url);
                $content = $url.'?invite_code='.$user['distribution_code'];
                break;
            case Client_::ios:
                $content = url('index/downLine', '', '', true);
                break;
            case Client_::android:
                $content = url('index/downLine', '', '', true);
                break;
            default:
                return self::dataError('系统错误');
        }

        //是否存在
        if (file_exists($user[$invite_code_text])){
            $poster_url = $user[$invite_code_text];
            return self::dataSuccess('', ['url' => UrlServer::getFileUrl($poster_url)]);
        }

        $qr_code_logic = new QrCodeLogic();
        $poster = $qr_code_logic->makeUserPoster($user, $content, $url_type, $client);

        if ($poster['status'] != 1){
            return self::dataError($poster['msg']);
        }

        $poster_url = $poster['data'];
        //更新user表
        Db::name('user')->where(['id' => $user_id])->update([$invite_code_text => $poster_url]);

        $res =  UrlServer::getFileUrl($poster_url);
        return self::dataSuccess('', ['url' => $res]);
    }
}