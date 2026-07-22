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
use think\Db;

class ServiceConfigLogic
{
    
    public static function getConfig(): array
    {
        $titles = [
            'config'    => [
                'mnp'       => [
                    'ways'  => [ 1, 2, 4, 5 ],
                    'title' => '微信小程序',
                    'enterprise_set_url' => 'https://work.weixin.qq.com/nl/act/p/a733314375294bdd',
                ],
                'oa'        => [
                    'ways'  => [ 1, 2, 4 ],
                    'title' => '微信公众号',
                    'enterprise_set_url' => 'https://work.weixin.qq.com/nl/act/p/3f8820e724cb44c5',
                ],
                'h5'        => [
                    'ways'  => [ 1, 2, 4 ],
                    'title' => 'H5商城',
                    'enterprise_set_url' => 'https://work.weixin.qq.com/nl/act/p/4030a5b69149404d',
                ],
                'pc'        => [
                    'ways'  => [ 1, 4 ],
                    'title' => 'PC商城',
                    'enterprise_set_url' => 'https://work.weixin.qq.com/nl/act/p/4030a5b69149404d',
                ],
                'app'       => [
                    'ways'  => [ 1, 2, 4 ],
                    'title' => 'APP商城',
                    'enterprise_set_url' => 'https://www.likeshop.cn/doc/13/4183',
                ],
            ],
            'ways'      => [
                1   => [
                    'key'   => [  ],
                    'title' => '扫二维码',
                ],
                2   => [
                    'key'   => [  ],
                    'title' => '拨打电话',
                ],
                3   => [
                    'key'   => [  ],
                    'title' => '系统客服',
                ],
                4   => [
                    'key'   => [  ],
                    'title' => '企业微信客服',
                ],
                5   => [
                    'key'   => [  ],
                    'title' => '微信小程序客服',
                ],
            ],
            'keys'      => [
                'name'              => '平台名称',
                'remarks'           => '备注',
                'phone'             => '电话',
                'business_time'     => '服务时间',
                'qr_code'           => '客服二维码',
                'enterprise_id'     => '企业ID',
                'kefu_link'         => '企业客服链接',
            ],
        ];
        $defaultData = [
            'way'           => '1',
            'name'          => '',
            'remarks'       => '',
            'phone'         => '',
            'business_time' => '',
            'qr_code'       => '',
            'enterprise_id' => '',
            'kefu_link'     => '',
        ];
        
        $config = [
            'mnp'   => ConfigServer::get('kefu_config', 'mnp', $defaultData),
            'oa'    => ConfigServer::get('kefu_config', 'oa', $defaultData),
            'h5'    => ConfigServer::get('kefu_config', 'h5', $defaultData),
            'pc'    => ConfigServer::get('kefu_config', 'pc', $defaultData),
            'app'   => ConfigServer::get('kefu_config', 'app', $defaultData),
        ];
        
        if (!empty($config['mnp']['qr_code'])) {
            $config['mnp']['qr_code'] = UrlServer::getFileUrl($config['mnp']['qr_code']);
        }
        if (!empty($config['oa']['qr_code'])) {
            $config['oa']['qr_code'] = UrlServer::getFileUrl($config['oa']['qr_code']);
        }
        if (!empty($config['h5']['qr_code'])) {
            $config['h5']['qr_code'] = UrlServer::getFileUrl($config['h5']['qr_code']);
        }
        if (!empty($config['pc']['qr_code'])) {
            $config['pc']['qr_code'] = UrlServer::getFileUrl($config['pc']['qr_code']);
        }
        if (!empty($config['app']['qr_code'])) {
            $config['app']['qr_code'] = UrlServer::getFileUrl($config['app']['qr_code']);
        }
        
        return [
            'config'    => $config,
            'titles'    => $titles,
        ];

    }
    public static function setConfig($params)
    {
        Db::startTrans();
        
        try {
            foreach($params as $key => $value) {
                if(!in_array($key, ['mnp','oa','h5','pc','app'])) {
                    throw new \think\Exception('数据异常');
                }
                ConfigServer::set('kefu_config', $key, $value);
            }
            
            // 提交事务
            Db::commit();
            return true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return $e->getMessage();
        }

    }
}