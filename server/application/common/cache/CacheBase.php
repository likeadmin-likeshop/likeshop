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

namespace app\common\cache;

use think\facade\Cache;

abstract class CacheBase
{
    protected $tag;
    protected $extend;
    protected $name;

    public function __construct($key = '', $extend = [])
    {
        $this->tag = $this->setTag();
        $this->name = $this->tag . '_' . $key;
        $this->extend = $extend;
    }


    public abstract function setTag();

    /**
     * 子类实现查出数据
     * @return mixed
     */
    public abstract function setData();

    /**
     * 创建并获取数据
     * @param null $expire
     * @return mixed
     */
    public function set($expire = null)
    {
        $data = self::cacheGet($this->name);
        if ($data !== false) {
            return $data;
        }
        $data = $this->setData();
        self::cacheSet($this->name, $data, $expire);
        return $data;
    }

    /**
     * User: 意象信息科技 lr
     * Desc: 获取数据
     * @return mixed
     */
    public function get()
    {
        return self::cacheGet($this->name);
    }


    /**
     * 判断数据是否为空
     * @return bool
     */
    public function isEmpty()
    {
        $data = self::cacheGet($this->name);
        if ($data !== false) {
            return false;
        }
        return true;
    }

    /**
     * 删除数据
     * @return bool
     */
    public function del()
    {
        return self::cacheRm($this->name);
    }

    public function delAll()
    {
        return Cache::clear($this->tag);
    }


    /**
     * 刷新并获取
     * @return mixed
     */
    public function refresh()
    {
        $this->del();
        return $this->set();
    }

    protected function cacheSet($name, $value, $expire = null)
    {
        Cache::tag($this->tag)->set($name, $value, $expire);
    }

    protected function cacheRm($name)
    {
        return Cache::rm($name);
    }

    protected function cacheGet($name, $default = false)
    {
        return Cache::get($name, $default);
    }
}