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


namespace app\common\server;


use app\common\server\ServerBase;
use think\Db;
use think\Exception;
use app\common\model\File;

class FileServer extends ServerBase
{
    /**
     * 上传图片
     * @param $shop_id
     * @param string $save_dir
     * @return array
     */
    public static function image($cate_id = 0, $save_dir = 'uploads/images/background')
    {
        try {
            if (!file_exists($save_dir)) {
                mkdir($save_dir, 0775, true);
            }
            $file = request()->file('file');
            $info = $file->validate(['ext' => 'jpg,png,gif,jpeg,bmp'])->move($save_dir);

            if (empty($info)) {
                throw new Exception('不支持此文件类型');
            }

            $data = [
                'name' => $file->getInfo('name'),
                'type' => File::type_image,
                'uri' => $save_dir . '/' . str_replace("\\","/",$info->getSaveName()),
                'create_time' => time(),
                'cate_id' => $cate_id,
            ];
            Db::name('file')->insert($data);

            return self::dataSuccess('上传文件成功', $data);

        } catch (Exception $e) {
            $messge = $e->getMessage();
            $messge = lang($messge) ?? $messge;

            return self::dataError('上传文件失败:' . $messge);
        }
    }


    /**
     * 用户上传图片
     * @param $user_id
     * @param string $save_dir
     * @return array
     */
    public static function userFormImage($user_id = 0, $save_dir = 'uploads/images/user')
    {
        try {
            $user_id = $user_id ? $user_id : 0;
            if (!file_exists($save_dir)) {
                mkdir($save_dir, 0775, true);
            }

            $file = request()->file('file');
            if (empty($file)) {
                throw new Exception('文件不能为空');
            }

            $info = $file->validate(['ext' => 'jpg,png,gif,jpeg,bmp'])->move($save_dir);

            if (empty($info)) {
                throw new Exception('不支持此文件类型');
            }

            $data = [
                'name' => $file->getInfo('name'),
                'type' => File::type_image,
                'uri' => '/'.  $save_dir . '/' . str_replace("\\","/",$info->getSaveName()),
                'create_time' => time(),
                'user_id' => $user_id,
            ];
            Db::name('user_file')->insert($data);
            $result['url'] = UrlServer::getFileUrl($data['uri']);
            $result['base_url'] = $data['uri'];
            $result['name'] = $data['name'];
            return self::dataSuccess('上传文件成功', $result);

        } catch (Exception $e) {
            $messge = $e->getMessage();
            $messge = lang($messge) ?? $messge;

            return self::dataError('上传文件失败:' . $messge);
        }
    }

    /**
     * 其他文件上传
     * @param string $save_dir
     * @param $sub_dir
     * @param int $shop_id
     * @return array
     */
    public static function other($sub_dir = '', $save_dir = 'uploads/other')
    {
        try {
            if ($sub_dir) {
                $save_dir .= '/' . $sub_dir;
            }
            if (!file_exists($save_dir)) {
                mkdir($save_dir, 0775, true);
            }
            $file = request()->file('file');
            $info = $file->validate(['ext' => 'pem,txt,doc,wav'])->move($save_dir);

            if (empty($info)) {
                throw new Exception('不支持此文件类型');
            }

            $data = [
                'name' => $file->getInfo('name'),
                'type' => File::type_other,
                'uri' => $save_dir . '/' . str_replace("\\","/",$info->getSaveName()),
                'create_time' => time(),
            ];
            Db::name('file')->insert($data);

            return self::dataSuccess('上传文件成功', $data);

        } catch (Exception $e) {
            $messge = $e->getMessage();
            $messge = lang($messge) ?? $messge;

            return self::dataError('上传文件失败:' . $messge);
        }
    }

    /**
     * 文件列表
     * @param $pag_no
     * @param $page_size
     * @param string $type
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function lists($pag_no, $page_size,  $cate_id = 0, $type = '')
    {
        $where['del'] = 0;
        if ($type) $where['type'] = $type;

        if ($cate_id !=  0){
            $where['cate_id'] = $cate_id;
        }

        $count = Db::name('file')
            ->where($where)
            ->count();
        $lists = Db::name('file')
            ->field(['name', 'uri', 'id'])
            ->where($where)
            ->page($pag_no, $page_size)
            ->order(['id' => 'desc'])
            ->select();
        return ['count' => $count, 'lists' => $lists];
    }


    //删除选中的图片
    public static function del($ids)
    {
        $res = Db::name('file')->where('id', 'in', $ids)->update(['del' => 1]);
        return $res;
    }


}