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
use app\common\model\SelffetchVerifier as SelffetchVerifierModel;

class SelffetchVerifier extends Validate
{
    public $rule = [
        'id' => 'require|checkId',
        'name|核销员名称' => 'require|checkName',
        'user_id|用户昵称' => 'require',
        'selffetch_shop_id|自提门店' => 'require',
        'mobile|联系电话' => 'require|mobile',
        'status|核销员状态' => 'require|in:0,1',
    ];

    public function sceneAdd()
    {
        return $this->only(['name','name','user_id','selffetch_shop_id','mobile','status'])
            ->append('user_id','checkUserId');
    }

    public function sceneEdit()
    {
        return $this->only(['id','name','name','selffetch_shop_id','mobile','status'])
            ->append('user_id','checkUserId');
    }

    public function sceneStatus()
    {
        return $this->only(['id','status']);
    }

    public function sceneDel()
    {
        return $this->only(['id'])
            ->append('id','checkDel');
    }

    /**
     * @notes 检查核销员名称是否已存在
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author ljj
     * @date 2021/8/16 4:14 下午
     */
    public function checkName($value,$rule,$data)
    {
        $where[] = ['name', '=', $value];
        $where[] = ['del', '=', 0];
        $where[] = ['selffetch_shop_id', '=', $data['selffetch_shop_id']];
        if (isset($data['id'])) {
            $where[] = ['id', '<>', $data['id']];
        }
        $result = SelffetchVerifierModel::where($where)->find();
        if (!empty($result)) {
            return '同一门店内不可以存在相同的核销员名称';
        }
        return true;
    }

    /**
     * @notes 检查核销员ID是否存在
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author ljj
     * @date 2021/8/16 4:14 下午
     */
    public function checkId($value,$rule,$data)
    {
        $result = SelffetchVerifierModel::where(['id'=>$value,'del'=>0])->find();
        if (empty($result)) {
            return '核销员不存在';
        }
        return true;
    }

    public function checkDel($value,$rule,$data)
    {
        //TODO 检查该核销员是否已产生订单，产生订单后不能删除
        return true;
    }

    /**
     * @notes 检验同一自提门店下是否存在想用用户
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author ljj
     * @date 2021/8/17 3:16 下午
     */
    public function checkUserId($value,$rule,$data)
    {
        $result = SelffetchVerifierModel::where(['user_id'=>$value,'selffetch_shop_id'=>$data['selffetch_shop_id'],'del'=>0])->find();
        if (!empty($result)) {
            return '同一自提门店不可以存在两个相同的用户';
        }
        return true;
    }
}