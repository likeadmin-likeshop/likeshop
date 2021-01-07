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

use app\common\model\Ad;
use app\admin\model\AdPosition;
use think\Db;
use think\Exception;

class AdLogic
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
        $ad = new Ad();
        $where = [];
        $where[] = ['del', '=', 0];
        if ($get['client'] != '') {
            $where[] = ['client', '=', $get['client']];
        }
        if (isset($get['keyword']) && $get['keyword']) {
            $where[] = ['name', 'like', '%' . $get['keyword'] . '%'];
        }

        if (isset($get['pid']) && $get['pid'] != '') {
            $where[] = ['pid', '=', $get['pid']];
        }

        $ad_count = $ad
            ->where($where)
            ->count();
        $ad_list = $ad->where($where)
            ->page($get['page'], $get['limit'])
            ->order('id desc')
            ->select();

        $position = AdPosition::where('del', 0)->column('id,name', 'id');

        foreach ($ad_list as $item) {
            $url = '';
            $item['status_info'] = '停用';
            $item['status_switch'] = '启用';
            $item['client_name'] = Ad::getAdTypeDesc($item['client']);
            if (isset($position[$item['pid']])) {
                $item['position_name'] = $position[$item['pid']];
            }
            switch ($item['link_type']) {
                case 1:
                    $page = Ad::getLinkPath($item['client'], $item['link']);
                    $url = '商城页面：' . $page['name'];
                    break;
                case 2:
                    $goods = Db::name('goods g')
                        ->where(['g.id' => $item['link']])
                        ->field('g.name,min_price,max_price')
                        ->find();
                    if ($goods) {
                        $price = '￥' . $goods['max_price'];
                        if ($goods['max_price'] !== $goods['min_price']) {
                            $price = '￥' . $goods['min_price'] . '~' . $goods['max_price'];
                        }
                        $url = '商品页面:' . $goods['name'] . '价格：' . $price;
                    }
                    break;
                case 3:
                    $url = '自定义链接：' . $item['link'];
            }
            $item['link'] = $url;
            if ($item['status'] == 1) {
                $item['status_info'] = '启用';
                $item['status_switch'] = '停用';
            }
        }
        return ['count' => $ad_count, 'list' => $ad_list];
    }


    /**
     * 添加
     * @param $post
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function add($post)
    {

        $ad = new Ad();

        $post['type'] = isset($post['type']) ? $post['type'] : 1;
        $post['status'] = isset($post['status']) ? $post['status'] : 0;
        $post['link_type'] = isset($post['link_type']) ? $post['link_type'] : '';
        $link = '';

        switch ($post['link_type']) {
            case '1':
                $link = $post['page'];
                break;
            case '2':
                $link = $post['goods_id'];
                break;
            case '3':
                $link = $post['url'];
                break;
        }
        $time = time();
        $data = [
            'name' => $post['name'],
            'client' => $post['client'],
            'pid' => $post['pid'],
            'image' => $post['image'],
            'link_type' => $post['link_type'],
            'link' => $link,
            'status' => $post['status'],
            'create_time' => $time,
        ];

        return $ad->allowField(true)->save($data);
    }

    /**
     * 编辑
     * @param $post
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function edit($post)
    {
        $ad = new Ad();
        $post['type'] = isset($post['type']) ? $post['type'] : 1;
        $post['status'] = isset($post['status']) ? $post['status'] : 0;
        $post['link_type'] = isset($post['link_type']) ? $post['link_type'] : '';
        $time = time();
        $link = '';
        switch ($post['link_type']) {
            case '1':
                $link = $post['page'];
                break;
            case '2':
                $link = $post['goods_id'];
                break;
            case '3':
                $link = $post['url'];
                break;
        }
        $data = [
            'name' => $post['name'],
            'client' => $post['client'],
            'pid' => $post['pid'],
            'image' => $post['image'],
            'link_type' => $post['link_type'],
            'link' => $link,
            'status' => $post['status'],
            'update_time' => $time,

        ];
        return $ad->allowField(true)->save($data, ['id' => $post['id']]);
    }

    /**
     * 删除
     * @param $delData
     * @return int|string
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function del($id, $client)
    {
        $data = [
            'del' => 1,
            'update_time' => time(),
        ];
        return Db::name('ad')->where(['client' => $client, 'del' => 0, 'id' => $id])->update($data);

    }

    /**
     * 广告表信息
     * @param $id
     * @return mixed
     */
    public static function info($id)
    {
        $ad = new Ad();
        $info = $ad::get(['id' => $id]);
        $info['goods'] = '';
        if ($info['link_type'] == 2) {
            $goods = Db::name('goods g')
                ->where(['g.id' => $info['link']])
                ->field('g.name, g.image, min_price, max_price')
                ->find();
            $price = '￥' . $goods['max_price'];
            if ($goods['max_price'] !== $goods['min_price']) {
                $price = '￥' . $goods['min_price'] . '~' . $goods['max_price'];
            }
            $goods['price'] = $price;
            $info['goods'] = $goods;
        }
        return $info;
    }

    /**
     * 获取广告位置列表
     * @return array
     */
    public static function infoPosition($client)
    {
        $position_list = Db::name('ad_position')
            ->where(['client' => $client, 'status' => 1, 'del' => 0])
            ->group('name')
            ->column('id,name', 'id');
        asort($position_list);
        return $position_list;
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
        return Db::name('ad')->where(['client' => $get['client'], 'del' => 0, 'id' => $get['id']])->update($data);
    }


    /**
     * 获取相应广告位置尺寸
     * @param $get
     * @return array|\PDOStatement|string|\think\Model|null
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function imgSize($get)
    {
        $img_size = Db::name('ad_position')
            ->where(['id' => $get['id'], 'del' => 0])
            ->field('width,height')
            ->find();
        return $img_size;
    }

}