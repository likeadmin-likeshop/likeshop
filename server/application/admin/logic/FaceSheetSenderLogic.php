<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，保留版权即可
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

namespace app\admin\logic;


use app\common\model\FaceSheetSender;
use app\common\server\AreaServer;
use Exception;

class FaceSheetSenderLogic
{
    /**
     * @notes 获取发件人列表
     * @param $get
     * @return array
     * @author 张无忌
     * @date 2021/9/26 15:49
     */
    public static function lists($get)
    {
        $model = new FaceSheetSender();
        $count = $model->count('id');
        $lists = $model->order('id', 'desc')
            ->page($get['page'], $get['limit'])
            ->select();

        foreach ($lists as &$item) {
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            $item['region'] = AreaServer::getAddress([
                $item['province_id'],
                $item['city_id'],
                $item['district_id'],
            ]);
        }

        return ['count' => $count, 'lists' => $lists];
    }

    /**
     * @notes 所有发件人模板
     * @author 张无忌
     * @date 2021/9/27 15:40
     */
    public static function all()
    {
        $model = new FaceSheetSender();
        return $model->order('id', 'desc')->select();
    }

    /**
     * @notes 获取发件人模板详细
     * @param $id
     * @return FaceSheetSender
     * @author 张无忌
     * @date 2021/9/26 15:51
     */
    public static function detail($id)
    {
        return FaceSheetSender::where(['id'=>$id])->find();
    }

    /**
     * @notes 新增发件人模板
     * @param $post
     * @return bool|string
     * @author 张无忌
     * @date 2021/9/26 15:18
     */
    public static function add($post)
    {
        try {
            FaceSheetSender::create([
                'name'        => $post['name'],
                'mobile'      => $post['mobile'],
                'province_id' => $post['province_id'],
                'city_id'     => $post['city_id'],
                'district_id' => $post['district_id'],
                'address'     => $post['address'],
                'create_time' => time(),
                'update_time' => time(),
            ]);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @notes 编辑发件人模板
     * @param $post
     * @return bool|string
     * @author 张无忌
     * @date 2021/9/26 15:23
     */
    public static function edit($post)
    {
        try {
            FaceSheetSender::update([
                'name'        => $post['name'],
                'mobile'      => $post['mobile'],
                'province_id' => $post['province_id'],
                'city_id'     => $post['city_id'],
                'district_id' => $post['district_id'],
                'address'     => $post['address'],
                'update_time' => time(),
            ], ['id'=>$post['id']]);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @notes 删除发件人模板
     * @param $id
     * @return bool|string
     * @author 张无忌
     * @date 2021/9/26 15:45
     */
    public static function del($id)
    {
        try {
            FaceSheetSender::destroy($id);
            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}