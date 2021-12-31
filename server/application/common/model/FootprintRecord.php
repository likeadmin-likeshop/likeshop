<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
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


use think\Model;
use function GuzzleHttp\Psr7\str;

class FootprintRecord extends Model
{
    protected $autoWriteTimestamp = true;

    /**
     * Notes: 关联用户模型
     * @author 张无忌(2020/12/17 11:51)
     */
    public function user()
    {
        return $this->hasOne('User', 'id', 'user_id')
            ->field(['id', 'nickname', 'avatar']);
    }

    public function getTimeAttr($value, $data)
    {
        // 足迹记录时间
        $create_time = $data['create_time'];
        // 一小时前时间戳
        $an_hour_ago = strtotime("-1 hour");

        // 小于1小时内显示xx分钟, 否则显示多少个小时
        if ($create_time > $an_hour_ago) {
            $minute = intval((time() - $create_time) / 60);
            return $minute <= 0 ? '刚刚' : strval($minute).'分钟前';
        } else {
            return '1小时前';
        }
    }

    /**
     * Notes: 获取30分钟内容的足迹
     * @param $data
     * @return FootprintRecord
     * @author 张无忌(2020/12/16 18:17)
     */
    public static function getFootPrintOneHourInner($data)
    {
        // 一小时前时间戳
        $an_hour_ago = strtotime("-1 hour");
        // 30分钟前时间戳
        $half_an_hour_ago = $an_hour_ago + 1800;
        // 当前时间戳
        $current_time = time();

        $where = [
            ['create_time', '>', $half_an_hour_ago],
            ['create_time', '<', $current_time]
        ];
        if ($data['type']) {
            $where[] = ['user_id', '=', (int)$data['user_id']];
            $where[] = ['type', '=', (int)$data['type']];
        }

        // 进入商城
        if ($data['type'] === Footprint::enter_mall) {
            $where[] = ['foreign_id', '=', 0];
        }

        // 如果是浏览器商品
        if ($data['type'] === Footprint::browse_goods) {
            $where[] = ['foreign_id', '=', (int)$data['foreign_id']];
        }

        $model = new self;
        return $model->field(true)->where($where)->find();
    }

    /**
     * Notes: 添加足迹记录
     * @param $data (数据)
     * @param $tpl
     * @return FootprintRecord
     * @author 张无忌(2020/12/16 18:18)
     */
    public static function add($data, $tpl)
    {
        return self::create([
            'type'        => $data['type'],
            'user_id'     => $data['user_id'],
            'foreign_id'  => empty($data['foreign_id']) ? 0 : $data['foreign_id'],
            'template'    => $tpl,
            'create_time' => time(),
        ]);
    }
}