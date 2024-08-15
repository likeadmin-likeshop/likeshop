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

namespace app\common\model;


use app\common\server\UrlServer;
use think\Model;

class SelffetchShop extends Model
{
    //门店状态
    const CLOSE = 0;//停用
    const OPEN = 1;//启用

    /**
     * @notes 门店状态
     * @param bool $status
     * @return string|string[]
     * @author ljj
     * @date 2021/8/14 5:22 下午
     */
    public static function getShopStatus($status = true)
    {
        $desc = [
            self::CLOSE => '停用',
            self::OPEN => '启用',
        ];
        if ($status === true) {
            return $desc;
        }
        return $desc[$status] ?? '未知';
    }

    /**
     * @notes 门店状态获取器
     * @param $value
     * @param $data
     * @return string|string[]
     * @author ljj
     * @date 2021/8/14 5:24 下午
     */
    public function getStatusDescAttr($value,$data)
    {
        return self::getShopStatus($data['status']);
    }

    /**
     * @notes 创建时间获取器
     * @param $value
     * @param $data
     * @return false|string
     * @author ljj
     * @date 2021/8/14 5:28 下午
     */
    public function getCreateTimeAttr($value,$data)
    {
        return date('Y-m-d H:i:s',$value);
    }

    /**
     * @notes 门店地址获取器
     * @param $value
     * @param $data
     * @return string
     * @author ljj
     * @date 2021/8/14 5:29 下午
     */
    public function getShopAddressAttr($value,$data)
    {
        return implode('',DevRegion::where('id', 'in', $data['province'].','.$data['city'].','.$data['district'])->column('name')).$data['address'];
    }

    /**
     * @notes 图片获取器
     * @param $value
     * @param $data
     * @return string
     * @author ljj
     * @date 2021/8/16 11:39 上午
     */
    public function getImageAttr($value,$data)
    {
        return empty($value) ? '' : UrlServer::getFileUrl($value);
    }
}