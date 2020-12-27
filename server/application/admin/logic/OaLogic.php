<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
namespace app\admin\logic;
use app\common\logic\LogicBase;
use app\common\server\ConfigServer;
use app\common\server\WeChatServer;
use EasyWeChat\Factory;
use EasyWeChat\Kernel\Exceptions\Exception;

class OaLogic  extends LogicBase{
    public static function getOa(){
        $config = [
            'name' => ConfigServer::get('oa', 'name', ''),
            'original_id' => ConfigServer::get('oa', 'original_id', ''),
            'qr_code' => ConfigServer::get('oa', 'qr_code', ''),
            'app_id' => ConfigServer::get('oa', 'app_id', ''),
            'app_secret' => ConfigServer::get('oa', 'secret', ''),
            'url' => ConfigServer::get('oa', 'url', ''),
            'token' => ConfigServer::get('oa', 'token', ''),
            'encoding_ses_key' => ConfigServer::get('oa', 'encoding_ses_key', ''),
            'encryption_type' => ConfigServer::get('oa', 'encryption_type', ''),
            'business_domain' => ConfigServer::get('oa', 'business_domain', ''),
            'safety_domain' => ConfigServer::get('oa', 'safety_domain', ''),
            'auth_domain' => ConfigServer::get('oa', 'auth_domain', ''),
            ];
        return $config;
    }
    public static function setOa($post){
        if($post){
            if(!isset($post['encryption_type'])){
                $post['encryption_type'] = '';
            }
            ConfigServer::set('oa','name',$post['name']);
            ConfigServer::set('oa','original_id',$post['original_id']);
            ConfigServer::set('oa','qr_code',$post['qr_code']);
            ConfigServer::set('oa','app_id',$post['app_id']);
            ConfigServer::set('oa','secret',$post['app_secret']);
            ConfigServer::set('oa','url',$post['url']);
            ConfigServer::set('oa','token',$post['token']);
            ConfigServer::set('oa','encoding_ses_key',$post['encoding_ses_key']);
            ConfigServer::set('oa','encryption_type',$post['encryption_type']);
            ConfigServer::set('oa','business_domain',$post['business_domain']);
            ConfigServer::set('oa','safety_domain',$post['safety_domain']);
            ConfigServer::set('oa','auth_domain',$post['auth_domain']);
        }
        return true;
    }
    public static function pulishMenu($buttons){
        try {
            $config = WeChatServer::getOaConfig();

            if(empty($config['app_id']) || empty($config['secret'])){
                return self::dataError('请先配置微信公众号参数');
            }

            $app = Factory::officialAccount($config);

            $result = $app->menu->create($buttons);

            if($result['errcode'] == 0){

                ConfigServer::set('menu','wechat_menu',$buttons);
                return self::dataSuccess('菜单发布成功');
            }
            return self::dataError('菜单发布失败:'.json_encode($result));

        } catch (Exception $e){
            return self::dataError($e->getMessage());

        }


    }
}