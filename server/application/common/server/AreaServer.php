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


namespace app\common\server;


use app\common\cache\RegionCache;
use think\Db;
use think\facade\Cache;

class AreaServer
{
    /**
     * 通过id获取地址
     * @param $val 为非数组，返回单独地点名，为数组时，按顺序拼接地址返回
     * @param string $address val为数组时，连接详细地址一起返回
     * @return mixed|string
     */
    public static function getAddress($val, $address = '')
    {
        $area_id_name = (new RegionCache(''))->set(3600);
        if (!is_array($val)) {
            return isset($area_id_name[$val]) ? $area_id_name[$val] : '';
        }
        $long_address = '';
        foreach ($val as $id) {
            $long_address .= isset($area_id_name[$id]) ? $area_id_name[$id] : '';
        }
        return $long_address . $address;
    }

    /**
     * 通过id获取地址经纬度上
     * @param $id
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getDb09LngAndLat($id)
    {
        return Db::name('dev_region')
            ->where('id', '=', $id)
            ->field(['db09_lng', 'db09_lat'])
            ->find();
    }
}