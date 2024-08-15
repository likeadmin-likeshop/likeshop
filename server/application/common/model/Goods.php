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

namespace app\common\model;


use think\Model;

class Goods extends Model
{
    const STATUS_RECYCLE = -1; // 回收站
    const STATUS_STORAGE = 0; // 下架(仓库中)
    const STATUS_SELL = 1; // 上架 (销售中)

    /**
     * @notes 获取商品状态
     * @param $state
     * @return string|string[]
     * @author 段誉
     * @date 2022/1/12 10:384
     */
    public static function getStatusDesc($state)
    {
        $data = [
            self::STATUS_SELL => '上架',
            self::STATUS_STORAGE => '下架',
            self::STATUS_RECYCLE => '回收站',
        ];
        if ($state === true) {
            return $data;
        }
        return $data[$state] ?? '';
    }

}