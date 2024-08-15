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
use app\common\model\SelffetchShop as SelffetchShopModel;

class SelffetchShop extends Validate
{
    public $rule = [
        'id' => 'require|checkId',
        'name|门店名称' => 'require|checkName',
        'image|门店LOGO' => 'require',
        'contact|联系人' => 'require',
        'mobile|联系电话' => 'require',
        'province|门店地址' => 'require|number',
        'city' => 'number',
        'district' => 'number',
        'address|详细地址' => 'require',
        'longitude|请在地图上标记地址' => 'require',
        'latitude|请在地图上标记地址' => 'require',
        'business_start_time|营业开始时段' => 'require',
        'business_end_time|营业结束时段' => 'require',
        'weekdays|营业周天' => 'require',
        'status|门店状态' => 'require|in:0,1',
    ];

    protected $message = [
        'longitude.require' => '请在地图上标记地址',
        'latitude.require' => '请在地图上标记地址',
    ];

    public function sceneAdd()
    {
        return $this->only(['name','image','contact','mobile','province','city','district','address','longitude','latitude','business_start_time','business_end_time','weekdays','status'])
            ->append('business_start_time','checkTime');
    }

    public function sceneEdit()
    {
        return $this->only(['id','name','image','contact','mobile','province','city','district','address','longitude','latitude','business_start_time','business_end_time','weekdays','status'])
            ->append('business_start_time','checkTime');
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
     * @notes 检查门店名称是否已存在
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author ljj
     * @date 2021/8/14 2:31 下午
     */
    public function checkName($value,$rule,$data)
    {
        $where[] = ['name', '=', $value];
        $where[] = ['del', '=', 0];
        if (isset($data['id'])) {
            $where[] = ['id', '<>', $data['id']];
        }
        $result = SelffetchShopModel::where($where)->find();
        if (!empty($result)) {
            return '门店名称已存在';
        }
        return true;
    }

    /**
     * @notes 检查自提门店是否存在
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author ljj
     * @date 2021/8/16 11:25 上午
     */
    public function checkId($value,$rule,$data)
    {
        $result = SelffetchShopModel::where(['id'=>$value,'del'=>0])->find();
        if (empty($result)) {
            return '门店不存在';
        }
        return true;
    }

    /**
     * @notes 检验自提门店是否可以删除
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author ljj
     * @date 2021/8/17 3:05 下午
     */
    public function checkDel($value,$rule,$data)
    {
        $order = \app\common\model\Order::where('selffetch_shop_id',$value)->select()->toArray();
        if (!empty($order)) {
            return '自提门店已产生自提订单，不允许删除';
        }
        return true;
    }

    /**
     * @notes 检验营业时间设置是否正确
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author ljj
     * @date 2021/8/23 3:41 下午
     */
    public function checkTime($value,$rule,$data)
    {
        $start_time = strtotime($data['business_start_time']);
        $end_time = strtotime($data['business_end_time']);
        if ($start_time > $end_time) {
            return '营业开始时间不能大于营业结束时间';
        }
        return true;
    }
}