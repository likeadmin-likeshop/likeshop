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

class MapConfigLogic{
    /**
     * @notes 获取地图配置
     * @return array
     * @author ljj
     * @date 2021/8/20 8:34 下午
     */
    public static function getConfig(){
        $config = [
            'tx_map_key'   => ConfigServer::get('map','tx_map_key',''),
        ];
        return $config;

    }

    /**
     * @notes 地图设置
     * @param $post
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     * @author ljj
     * @date 2021/8/20 8:34 下午
     */
    public static function setConfig($post)
    {
        ConfigServer::set('map','tx_map_key',$post['tx_map_key']);
    }
}