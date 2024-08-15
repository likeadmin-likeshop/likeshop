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

use app\common\model\DistributionLevel;
use think\Validate;

class DistributionLevelValidate extends Validate
{
    protected $rule = [
        'name' => 'require|checkName',
        'weights' => 'require|integer|gt:1|checkWeights',
        'first_ratio' => 'require|between:0,100',
        'second_ratio' => 'require|between:0,100',
        'update_relation' => 'require|in:1,2',
        'update_condition' => 'require|array|checkCondition',
        'singleConsumptionAmount' => 'gt:0',
        'cumulativeConsumptionAmount' => 'gt:0',
        'cumulativeConsumptionTimes' => 'integer|gt:0',
        'returnedCommission' => 'gt:0',
        'id' => 'require'
    ];


    protected  $message = [
        'name.require' => '请填写等级名称',
        'weights.require' => '请输入级别',
        'weights.integer' => '级别须为整型',
        'weights.gt' => '级别须大于1',
        'first_ratio.require' => '请输入一级佣金比例',
        'first_ratio.between' => '一级佣金比例须在0-100之间',
        'second_ratio.require' => '请输入二级佣金比例',
        'second_ratio.between' => '二级佣金比例须在0-100之间',
        'update_relation.require' => '请选择升级关系',
        'update_relation.in' => '升级关系状态值错误',
        'update_condition.require' => '请选择升级条件',
        'update_condition.array' => '升级条件数据格式错误',
        'singleConsumptionAmount.gt' => '单笔消费金额须大于0',
        'cumulativeConsumptionAmount.gt' => '累计消费金额须大于0',
        'cumulativeConsumptionTimes.gt' => '累计消费次数须大于0',
        'cumulativeConsumptionTimes.integer' => '累计消费次数须为整数',
        'returnedCommission.gt' => '已结算佣金收入须大于0',
        'id.require' => '参数缺失',
    ];

    /**
     * @notes 添加分销等级
     * @return DistributionLevelValidate
     * @author Tab
     */
    public function sceneAdd()
    {
        return $this->only(['name', 'weights', 'self_ratio', 'first_ratio', 'second_ratio', 'update_condition', 'update_relation', 'singleConsumptionAmount', 'cumulativeConsumptionAmount', 'cumulativeConsumptionTimes', 'returnedCommission']);
    }

    /**
     * @notes 编辑分销等级
     * @return DistributionLevelValidate
     * @author Tab
     */
    public function sceneEdit()
    {
        return $this->only(['id', 'name', 'weights', 'first_ratio', 'second_ratio'])
            ->remove('weights', 'gt');
    }

    /**
     * @notes 校验等级名称
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author Tab
     */
    public function checkName($value, $rule, $data)
    {
        $where = [['name', '=', $value]];
        if(isset($data['id'])) {
            // 编辑的场景
            $where[] = ['id', '<>', $data['id']];
        }
        $level = DistributionLevel::where($where)->findOrEmpty();
        if(!$level->isEmpty()) {
            return '等级名称已存在';
        }
        return true;
    }

    /**
     * @notes 校验等级级别
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author Tab
     */
    public function checkWeights($value, $rule, $data)
    {
        $where = [['weights', '=', $value]];
        if(isset($data['id'])) {
            // 编辑的场景
            $where[] = ['id', '<>', $data['id']];
        }
        $level = DistributionLevel::where($where)->findOrEmpty();
        if(!$level->isEmpty()) {
            return '等级级别已存在';
        }
        return true;
    }

    /**
     * @notes 校验升级条件
     * @param $value
     * @return bool|string
     * @author Tab
     */
    public function checkCondition($value, $rule, $data)
    {
        if(!count($value)) {
            return '请选择升级条件';
        }
        foreach($value as $v) {
            if(!isset($data[$v]) || empty($data[$v])) {
                return '升级条件数据未填写';
            }
        }
        return true;
    }
}