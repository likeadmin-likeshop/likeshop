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

namespace app\admin\validate;


use think\Validate;
use app\common\model\Luckdraw as LuckdrawModel;

class LuckDraw extends Validate
{
    protected $rule = [
        'id'          => 'require|number',
        'prize_type'  => 'require|number|checkPrizeValue',
        'sort'        => 'require|number',
        'probability' => 'require',
        'status'      => 'require|in:0,1'
    ];

    protected $message = [
        'id.require'          => 'id不可为空',
        'prize_type.require'  => '请选择抽奖类型',
        'sort.require'        => '请填写排序号',
        'sort.number'         => '排序号需为数字',
        'probability.require' => '请填写抽奖概率',
        'status.require'  => '请选择状态',
        'status.in'       => '状态选择不在范围内',
    ];

    /**
     * Notes: 添加场景
     * @author 张无忌(2020/12/24 16:48)
     */
    public function sceneAdd()
    {
        $this->remove('id');
    }


    /**
     * @notes 验证是否填写奖品
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author 段誉
     * @date 2022/2/15 11:58
     */
    protected function checkPrizeValue($value, $rule, $data)
    {
        if ($value == LuckdrawModel::PRIZE_INTEGRAL) {
            if (!isset($data['integral']) || $data['integral'] < 0) {
                return '请填写奖品数量';
            }
            return true;
        }

        if ($value == LuckdrawModel::PRIZE_COUPON && empty($data['coupon'])) {
            return '请选择奖品';
        }

        if ($value == LuckdrawModel::PRIZE_INTEGRAL && empty($data['balance'])) {
            if (!isset($data['balance']) || $data['balance'] < 0) {
                return '请填写奖品金额';
            }
        }
        return true;
    }


}