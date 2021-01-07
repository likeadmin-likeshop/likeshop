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


namespace app\common\server;


use think\Db;
use think\facade\Config;

class ConfigServer
{
    /**
     * User: 意象信息科技 lr
     * Desc: 设置配置值
     * @param $type
     * @param $name
     * @param $value
     * @return mixed
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function set($type, $name, $value)
    {
        $original = $value;
        $update_time = time();
        if (is_array($value)) {
            $value = json_encode($value, true);
        }
        $data = Db::name('config')
            ->where(['type' => $type, 'name' => $name])
            ->find();
        if (empty($data)) {
            Db::name('config')
                ->insert(['type' => $type, 'name' => $name, 'value' => $value]);
        } else {
            Db::name('config')
                ->where(['type' => $type, 'name' => $name])
                ->update(['value' => $value, 'update_time' => $update_time]);
        }
        return $original;
    }

    /**
     * User: 意象信息科技 lr
     * Desc: 获取配置值
     * @param $type
     * @param $name
     * @param string $default_value
     * @return mixed|string
     */
    public static function get($type, $name = '',  $default_value = null)
    {
        if ($name) {
            $value = Db::name('config')
                ->where(['type' => $type, 'name' => $name])
                ->value('value');
            $json = json_decode($value, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $value = $json;
            }
            if ($value) {
                return $value;
            }
            if($value ===0 || $value==='0'){
                return $value;
            }
            if ($default_value !== null) {
                return $default_value;
            }
            return Config::get('default.' . $type . '.' . $name);
        }

        $data = Db::name('config')
            ->where(['type' => $type])
            ->column('value', 'name');

        foreach ($data as $k => $v) {
            $json = json_decode($v, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $data[$k] = $json;
            }
        }
        if ($data) {
            return $data;
        }
        if($data ===0 || $data==='0'){
            return $data;
        }
        if ($default_value !== null) {
            return $default_value;
        }
        return Config::get('default.' . $type . '.' . $name);
    }
}