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
use app\common\server\ConfigServer;
use app\common\server\UrlServer;

class MnpLogic{
    public static function getMnp(){
        $domain_name = $_SERVER['SERVER_NAME'];
        $qr_code = ConfigServer::get('mnp', 'qr_code', '');
        $config = [
            'name'                  => ConfigServer::get('mnp', 'name', ''),
            'original_id'           => ConfigServer::get('mnp', 'original_id', ''),
            'qr_code'               => $qr_code,
            'abs_qr_code'           => UrlServer::getFileUrl($qr_code),
            'app_id'                => ConfigServer::get('mnp', 'app_id', ''),
            'app_secret'            => ConfigServer::get('mnp', 'secret', ''),
            'request_domain'        => 'https://'.$domain_name,
            'socket_domain'         => 'wss://'.$domain_name,
            'uploadfile_domain'     => 'https://'.$domain_name,
            'downloadfile_domain'   => 'https://'.$domain_name,
            'udp_domain'            => 'udp://'.$domain_name,
            'business_domain'       => $domain_name,
            'url'                   => url('api/weChat/index','','',true),
            'token'                 => ConfigServer::get('mnp', 'token', 'LikeShop'),
            'encoding_ses_key'      => ConfigServer::get('mnp', 'encoding_ses_key', ''),
            'encryption_type'       => ConfigServer::get('mnp', 'encryption_type', ''),
            'data_type'             => ConfigServer::get('mnp', 'data_type', ''),
        ];
        return $config;
    }
    public static function setMnp($post){
        if($post){
            if(!isset($post['encryption_type'])){
                $post['encryption_type'] = '';
            }
            if(!isset($post['data_type'])){
                $post['data_type'] = '';
            }
            ConfigServer::set('mnp','name',$post['name']);
            ConfigServer::set('mnp','original_id',$post['original_id']);
            ConfigServer::set('mnp','qr_code',$post['qr_code']);
            ConfigServer::set('mnp','app_id',$post['app_id']);
            ConfigServer::set('mnp','secret',$post['app_secret']);
//            ConfigServer::set('mnp','token',$post['token']);
//            ConfigServer::set('mnp','encoding_ses_key',$post['encoding_ses_key']);
//            ConfigServer::set('mnp','encryption_type',$post['encryption_type']);
//            ConfigServer::set('mnp','data_type',$post['data_type']);

        }
        return true;
    }
}