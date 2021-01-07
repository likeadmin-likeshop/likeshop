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

namespace app\admin\logic;


use app\admin\model\AdPosition;
use app\common\model\Ad;
use think\Db;
use think\Exception;

class AdPositionLogic
{

    /**
     * 广告管理列表
     * @param $get
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function lists($get)
    {
        $ad_position = new AdPosition();
        $where = [];
        $where[] = ['del', '=', 0];

        if ($get['client'] != '') {
            if ($get['client'] == 3) {
                $where[] = ['client', ['=', 3], ['=', 4], 'or'];
            } else {
                $where[] = ['client', '=', $get['client']];
            }
        }
        if (isset($get['keyword']) && $get['keyword']) {
            $where[] = ['name', 'like', '%' . $get['keyword'] . '%'];
        }

        if (isset($get['attr']) && $get['attr'] != '') {
            $where[] = ['attr', '=', $get['attr']];
        }

        $ad_position_count = $ad_position
            ->where($where)
            ->count();
        $ad_position_list = $ad_position
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->select();


        foreach ($ad_position_list as $item) {
            $item['client_name'] =  Ad::getAdTypeDesc($item['client']);
            if ($item['attr'] == 1) {
                $item['attr_show'] = '系统默认';

            } else {
                $item['attr_show'] = '自定义';
            }

            if ($item['status'] == 1) {
                $item['status_show'] = '启用';
                $item['status_switch'] = '停用';

            } else if ($item['status'] == 0) {
                $item['status'] = 0;
                $item['status_show'] = '停用';
                $item['status_switch'] = '启用';
            } else {
                $item['status_show'] = '';
            }
        }
        return ['count' => $ad_position_count, 'list' => $ad_position_list];
    }


    /**
     * 添加
     * @param $post
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function addAdPosition($post)
    {

        $ad_position = new AdPosition();
        $post['status'] = isset($post['status']) ? $post['status'] : 0;

        $time = time();
        $data = [
            'name' => $post['name'],
            'width' => $post['width'],
            'height' => $post['height'],
            'status' => $post['status'],
            'client' => $post['client'],
            'attr' => 0,
            'create_time' => $time,

        ];

        return $ad_position->allowField(true)->save($data);
    }

    /**
     * 编辑
     * @param $post
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function editAdPosition($post)
    {
        $ad_position = new AdPosition();

        $post['status'] = isset($post['status']) ? $post['status'] : 0;


        $time = time();
        $data = [
            'name' => $post['name'],
            'width' => $post['width'],
            'height' => $post['height'],
            'status' => $post['status'],
            'attr' => 0,
            'update_time' => $time,

        ];

        return $ad_position->allowField(true)->save($data, ['id' => $post['id']]);
    }

    /**
     * 删除
     * @param $delData
     * @return int|string
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function del($delData, $client, $attr)
    {

        if (is_array($attr)) {
            foreach ($attr as $key => $val) {
                if ($val == 1) {
                    unset($delData[$key]);
                }
            }
        } elseif ($attr == 1) {
            return false;
        }


        if (is_array($delData)) {
            $pid = Db::name('ad')
                ->where(['client' => $client, 'pid' => $delData, 'del' => 0])
                ->select();
            if (!empty($pid)) {
                return false;
            }
        } else {
            $pid = Db::name('ad')
                ->where(['client' => $client, 'pid' => $delData, 'del' => 0])
                ->find();
            if (!empty($pid)) {
                return false;
            }
        }


        $data = [
            'del' => 1,
            'update_time' => time(),
        ];
        $result = Db::name('ad_position')->where(['client' => $client, 'id' => $delData, 'del' => 0])->update($data);

        return $result;
    }

    /**
     * 广告表信息
     * @param $id
     * @return mixed
     */
    public static function info($id)
    {

        $ad_position = new AdPosition();
        $info = $ad_position::get(['id' => $id]);

        return $info;
    }

    /**
     * 更改状态
     * @param $get
     * @return int|string
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function switchStatus($get)
    {
        $data = [
            'status' => $get['status'],
            'update_time' => time(),
        ];
        return Db::name('ad_position')
            ->where(['client' => $get['client'], 'id' => $get['id'], 'del' => 0])
            ->update($data);
    }

}