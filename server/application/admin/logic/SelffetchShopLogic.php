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

namespace app\admin\logic;


use app\common\model\DevRegion;
use app\common\model\SelffetchShop;

class SelffetchShopLogic
{
    /**
     * @notes 查看自提门店列表
     * @param $params
     * @return array
     * @author ljj
     * @date 2021/8/14 6:01 下午
     */
    public static function lists($params)
    {
        $where = [];
        $where[] = ['del', '=', 0];
        if (isset($params['name']) && !empty($params['name'])) {
            $where[] = ['name', 'like', '%'.$params['name'].'%'];
        }
        if (isset($params['status']) && $params['status'] != '') {
            $where[] = ['status', '=', $params['status']];
        }

        $count = SelffetchShop::where($where)->count();

        $lists = SelffetchShop::field('*')
            ->append(['status_desc','shop_address'])
            ->page($params['page'], $params['limit'])
            ->order('id','desc')
            ->where($where)
            ->select();

        if (empty($lists)) {
            return [];
        }

        foreach ($lists as &$list) {
            $list['business_time'] = $list['business_start_time'].'-'.$list['business_end_time'];
        }

        return ['count' => $count, 'lists' => $lists];
    }

    /**
     * @notes 添加自提门店
     * @param $params
     * @return bool
     * @author ljj
     * @date 2021/8/14 4:28 下午
     */
    public static function add($params)
    {
        $selffetch_shop = new SelffetchShop;
        $selffetch_shop->name = $params['name'];
        $selffetch_shop->image = $params['image'];
        $selffetch_shop->contact = $params['contact'];
        $selffetch_shop->mobile = $params['mobile'];
        $selffetch_shop->province = $params['province'];
        $selffetch_shop->city = $params['city'] ?? '';
        $selffetch_shop->district = $params['district'] ?? '';
        $selffetch_shop->address = $params['address'];
        $selffetch_shop->longitude = $params['longitude'];
        $selffetch_shop->latitude = $params['latitude'];
        $selffetch_shop->business_start_time = $params['business_start_time'];
        $selffetch_shop->business_end_time = $params['business_end_time'];
        $selffetch_shop->weekdays = implode(',',$params['weekdays']);
        $selffetch_shop->status = $params['status'];
        $selffetch_shop->remark = $params['remark'] ?? '';
        $selffetch_shop->create_time = time();
        return $selffetch_shop->save();
    }

    /**
     * @notes 获取地区列表
     * @return DevRegion[]
     * @author ljj
     * @date 2021/8/14 4:27 下午
     */
    public static function getAreaLists()
    {
        return DevRegion::field(['name', 'id', 'parent_id as pid', 'level'])->where('level', '>', 0)->select();
    }

    /**
     * @notes 查看自提门店详情
     * @param $id
     * @return SelffetchShop
     * @author ljj
     * @date 2021/8/16 11:29 上午
     */
    public static function detail($id)
    {
        $detail = SelffetchShop::find($id);
        $detail['weekdays'] = explode(',',$detail['weekdays']);
        return $detail;
    }

    /**
     * @notes 编辑自提门店
     * @param $params
     * @return bool
     * @author ljj
     * @date 2021/8/16 2:16 下午
     */
    public static function edit($params)
    {
        $selffetch_shop = SelffetchShop::find($params['id']);
        $selffetch_shop->name = $params['name'];
        $selffetch_shop->image = $params['image'];
        $selffetch_shop->contact = $params['contact'];
        $selffetch_shop->mobile = $params['mobile'];
        $selffetch_shop->province = $params['province'];
        $selffetch_shop->city = $params['city'] ?? '';
        $selffetch_shop->district = $params['district'] ?? '';
        $selffetch_shop->address = $params['address'];
        $selffetch_shop->longitude = $params['longitude'];
        $selffetch_shop->latitude = $params['latitude'];
        $selffetch_shop->business_start_time = $params['business_start_time'];
        $selffetch_shop->business_end_time = $params['business_end_time'];
        $selffetch_shop->weekdays = implode(',',$params['weekdays']);
        $selffetch_shop->status = $params['status'];
        $selffetch_shop->remark = $params['remark'];
        $selffetch_shop->update_time = time();
        return $selffetch_shop->save();
    }

    /**
     * @notes 修改自提门店状态
     * @param $params
     * @return bool
     * @author ljj
     * @date 2021/8/16 2:35 下午
     */
    public static function status($params)
    {
        $selffetch_shop = SelffetchShop::find($params['id']);
        $selffetch_shop->status = $params['status'];
        $selffetch_shop->update_time = time();
        return $selffetch_shop->save();
    }

    /**
     * @notes 删除自提门店
     * @param $params
     * @return bool
     * @author ljj
     * @date 2021/8/16 2:42 下午
     */
    public static function del($params)
    {
        $selffetch_shop = SelffetchShop::find($params['id']);
        $selffetch_shop->del = 1;
        $selffetch_shop->update_time = time();
        return $selffetch_shop->save();
    }

    /**
     * @notes 导出列表
     * @param $params
     * @return array
     * @author ljj
     * @date 2021/8/16 2:50 下午
     */
    public static function exportFile($params)
    {
        $where = [];
        $where[] = ['del', '=', 0];
        if (isset($params['name']) && !empty($params['name'])) {
            $where[] = ['name', 'like', '%'.$params['name'].'%'];
        }
        if (isset($params['status']) && $params['status'] != '') {
            $where[] = ['status', '=', $params['status']];
        }

        $lists = SelffetchShop::field('*')
            ->append(['status_desc','shop_address'])
            ->order('id','desc')
            ->where($where)
            ->select();

        $exportTitle = ['门店名称', '联系人', '联系电话', '门店地址', '营业时段', '门店状态', '创建时间'];
        $exportExt = 'xls';
        $exportData = [];
        foreach ($lists as $item){
            $exportData[] = [$item['name'], $item['contact'], $item['mobile'], $item['shop_address'], $item['business_start_time'].'-'.$item['business_end_time'], $item['status_desc'], $item['create_time']];
        }
        return ['exportTitle'=> $exportTitle, 'exportData' => $exportData, 'exportExt'=>$exportExt, 'exportName'=>'自提门店'.date('Y-m-d H:i:s')];
    }
}