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


use app\common\model\SelffetchShop;
use app\common\model\SelffetchVerifier;
use app\common\model\User;
use app\common\server\UrlServer;

class SelffetchVerifierLogic
{
    /**
     * @notes 核销员列表
     * @param $params
     * @return array
     * @author ljj
     * @date 2021/8/16 3:30 下午
     */
    public static function lists($params)
    {
        $where = [];
        $where[] = ['sv.del', '=', 0];
        if (isset($params['verifier_info']) && !empty($params['verifier_info'])) {
            $where[] = ['sv.name|sv.sn', 'like', '%'.$params['verifier_info'].'%'];
        }
        if (isset($params['shop_name']) && !empty($params['shop_name'])) {
            $where[] = ['ss.name', 'like', '%'.$params['shop_name'].'%'];
        }
        if (isset($params['status']) && $params['status'] != '') {
            $where[] = ['sv.status', '=', $params['status']];
        }

        $count = SelffetchVerifier::alias('sv')
            ->join('selffetch_shop ss', 'sv.selffetch_shop_id = ss.id')
            ->join('user u', 'sv.user_id = u.id')
            ->where($where)
            ->count();

        $lists = SelffetchVerifier::alias('sv')
            ->join('selffetch_shop ss', 'sv.selffetch_shop_id = ss.id')
            ->join('user u', 'sv.user_id = u.id')
            ->field('sv.*,ss.name as shop_name,u.avatar,u.nickname')
            ->append(['status_desc'])
            ->page($params['page'], $params['limit'])
            ->order('sv.id','desc')
            ->where($where)
            ->select();

        if (empty($lists)) {
            return ['count' => $count, 'lists' => $lists];
        }

        foreach ($lists as &$list) {
            $list['avatar'] = empty($list['avatar']) ? '' : UrlServer::getFileUrl($list['avatar']);
        }

        return ['count' => $count, 'lists' => $lists];
    }

    /**
     * @notes 获取用户列表
     * @return User[]
     * @author ljj
     * @date 2021/8/16 4:17 下午
     */
    public static function getUserLists($params)
    {
        $where = [];
        $where[] = ['disable', '=', 0];
        $where[] = ['del', '=', 0];
        if (isset($params['nickname']) && !empty($params['nickname'])) {
            $where[] = ['nickname|sn', 'like', '%'.$params['nickname'].'%'];
        }

        $count = User::where($where)->count();

        $lists = User::where($where)
            ->field('id,sn,nickname,avatar,mobile')
            ->page($params['page'], $params['limit'])
            ->order('id','desc')
            ->select();

        return ['count' => $count, 'lists' => $lists];
    }

    /**
     * @notes 获取自提门店列表
     * @return SelffetchShop[]
     * @author ljj
     * @date 2021/8/16 4:18 下午
     */
    public static function getShopLists()
    {
        return SelffetchShop::where(['del'=>0,'status'=>1])->field('id,name')->select();
    }

    /**
     * @notes 添加核销员
     * @param $params
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @author ljj
     * @date 2021/8/16 4:45 下午
     */
    public static function add($params)
    {
        $selffetch_shop = new SelffetchVerifier;
        $selffetch_shop->name = $params['name'];
        $selffetch_shop->selffetch_shop_id = $params['selffetch_shop_id'];
        $selffetch_shop->user_id = $params['user_id'];
        $selffetch_shop->sn = create_verifier_sn('selffetch_verifier', 'sn', 8, '');
        $selffetch_shop->name = $params['name'];
        $selffetch_shop->mobile = $params['mobile'];
        $selffetch_shop->status = $params['status'];
        $selffetch_shop->create_time = time();
        return $selffetch_shop->save();
    }

    /**
     * @notes 获取核销员详情
     * @param $id
     * @return SelffetchVerifier
     * @author ljj
     * @date 2021/8/16 4:47 下午
     */
    public static function detail($id)
    {
        $detail = SelffetchVerifier::alias('sv')
            ->join('user u', 'sv.user_id = u.id')
            ->field('sv.*,u.nickname,u.avatar,u.sn as user_sn')
            ->find($id);
        $detail['avatar'] = (!empty($detail['avatar'])) ? UrlServer::getFileUrl($detail['avatar']) : '';
        return $detail;
    }

    /**
     * @notes 编辑核销员
     * @param $params
     * @return bool
     * @author ljj
     * @date 2021/8/16 4:48 下午
     */
    public static function edit($params)
    {
        $selffetch_shop = SelffetchVerifier::find($params['id']);
        $selffetch_shop->name = $params['name'];
        $selffetch_shop->selffetch_shop_id = $params['selffetch_shop_id'];
        //$selffetch_shop->user_id = $params['user_id'];
        $selffetch_shop->name = $params['name'];
        $selffetch_shop->mobile = $params['mobile'];
        $selffetch_shop->status = $params['status'];
        $selffetch_shop->update_time = time();
        return $selffetch_shop->save();
    }

    /**
     * @notes 修改核销员状态
     * @param $params
     * @return bool
     * @author ljj
     * @date 2021/8/16 4:55 下午
     */
    public static function status($params)
    {
        $selffetch_shop = SelffetchVerifier::find($params['id']);
        $selffetch_shop->status = $params['status'];
        $selffetch_shop->update_time = time();
        return $selffetch_shop->save();
    }

    /**
     * @notes 删除核销员
     * @param $params
     * @return bool
     * @author ljj
     * @date 2021/8/16 4:58 下午
     */
    public static function del($params)
    {
        $selffetch_shop = SelffetchVerifier::find($params['id']);
        $selffetch_shop->del = 1;
        $selffetch_shop->update_time = time();
        return $selffetch_shop->save();
    }

    /**
     * @notes 导出核销员列表
     * @param $params
     * @return array
     * @author ljj
     * @date 2021/8/16 4:59 下午
     */
    public static function exportFile($params)
    {
        $where = [];
        $where[] = ['sv.del', '=', 0];
        if (isset($params['verifier_info']) && !empty($params['verifier_info'])) {
            $where[] = ['sv.name|sv.sn', 'like', '%'.$params['verifier_info'].'%'];
        }
        if (isset($params['shop_name']) && !empty($params['shop_name'])) {
            $where[] = ['ss.name', 'like', '%'.$params['shop_name'].'%'];
        }
        if (isset($params['status']) && $params['status'] != '') {
            $where[] = ['sv.status', '=', $params['status']];
        }

        $lists = SelffetchVerifier::alias('sv')
            ->join('selffetch_shop ss', 'sv.selffetch_shop_id = ss.id')
            ->join('user u', 'sv.user_id = u.id')
            ->field('sv.*,ss.name as shop_name,u.avatar,u.nickname')
            ->append(['status_desc'])
            ->order('sv.id','desc')
            ->where($where)
            ->select();

        $exportTitle = ['核销员编号', '核销员名称', '用户名称', '联系电话', '核销员状态', '创建时间'];
        $exportExt = 'xls';
        $exportData = [];
        foreach ($lists as $item){
            $exportData[] = [$item['sn'],$item['name'], $item['nickname'], $item['mobile'], $item['status_desc'], $item['create_time']];
        }
        return ['exportTitle'=> $exportTitle, 'exportData' => $exportData, 'exportExt'=>$exportExt, 'exportName'=>'核销员列表'.date('Y-m-d H:i:s')];
    }
}