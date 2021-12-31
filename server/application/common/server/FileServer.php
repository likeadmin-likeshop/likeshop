<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
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


namespace app\common\server;


use app\common\server\storage\Driver as StorageDriver;
use think\Db;
use think\Exception;
use app\common\model\File;

class FileServer extends ServerBase
{

    /**
     * Notes: 上传图片
     * @param $cate_id
     * @param string $save_dir (保存目录, 不建议修改, 不要超二级目录)
     * @return array
     * @author 张无忌(2021/2/20 9:53)
     */
    public static function image($cate_id, $save_dir='uploads/images')
    {
        try {
            $config = [
                'default' => ConfigServer::get('storage', 'default', 'local'),
                'engine'  => ConfigServer::get('storage_engine')
            ];

            if (empty($config['engine']['local'])) {
                $config['engine']['local'] = [];
            }

            $StorageDriver = new StorageDriver($config);
            $StorageDriver->setUploadFile('file');

            if (!$StorageDriver->upload($save_dir)) {
                throw new Exception('图片上传失败' . $StorageDriver->getError());
            }

            // 图片上传路径
            $fileName = $StorageDriver->getFileName();
            // 图片信息
            $fileInfo = $StorageDriver->getFileInfo();

            //名字长度太长
            if (strlen($fileInfo['name']) > 128) {
                $file_name = substr($fileInfo['name'], 0, 123);
                $file_end = substr($fileInfo['name'], strlen($fileInfo['name'])-5, strlen($fileInfo['name']));
                $fileInfo['name'] = $file_name.$file_end;
            }

            // 记录图片信息
            $data = [
                'cate_id'     => $cate_id,
                'name'        => $fileInfo['name'],
                'type'        => File::type_image,
                'uri'         => $save_dir . '/' . str_replace("\\","/", $fileName),
                'create_time' => time(),
            ];
            Db::name('file')->insert($data);
            return self::dataSuccess('上传文件成功', $data);

        } catch (\Exception $e) {
            $message = lang($e->getMessage()) ?? $e->getMessage();
            return self::dataError('上传文件失败:' . $message);
        }
    }

    /**
     * Notes: 用户上传图片
     * @param $user_id (用户ID)
     * @param string $save_dir (保存目录, 不建议修改, 不要超二级目录)
     * @return array
     * @author 张无忌(2021/2/20 9:53)
     */
    public static function userFormImage($user_id = 0, $save_dir='uploads/user')
    {
        try {
            $config = [
                'default' => ConfigServer::get('storage', 'default', 'local'),
                'engine'  => ConfigServer::get('storage_engine')
            ];

            if (empty($config['engine']['local'])) {
                $config['engine']['local'] = [];
            }

            $StorageDriver = new StorageDriver($config);
            $StorageDriver->setUploadFile('file');

            if (!$StorageDriver->upload($save_dir)) {
                throw new Exception('图片上传失败' . $StorageDriver->getError());
            }

            // 图片上传路径
            $fileName = $StorageDriver->getFileName();
            // 图片信息
            $fileInfo = $StorageDriver->getFileInfo();

            // 记录图片信息
            $data = [
                'user_id'     => $user_id ? $user_id : 0,
                'name'        => $fileInfo['name'],
                'type'        => File::type_image,
                'uri'         => $save_dir . '/' . str_replace("\\","/", $fileName),
                'create_time' => time(),
            ];
            Db::name('user_file')->insert($data);

            $result['url'] = UrlServer::getFileUrl($data['uri']);
            $result['base_url'] = $data['uri'];
            $result['name'] = $data['name'];

            return self::dataSuccess('上传文件成功', $result);

        } catch (\Exception $e) {
            $message = lang($e->getMessage()) ?? $e->getMessage();
            return self::dataError('上传文件失败:' . $message);
        }
    }

    /**
     * Notes: 上传视频
     * @param string $save_dir (保存目录, 不建议修改, 不要超二级目录)
     * @return array
     * @author 张无忌(2021/2/20 9:53)
     */
    public static function video($save_dir='uploads/video')
    {
        try {
            $config = [
                'default' => ConfigServer::get('storage', 'default', 'local'),
                'engine'  => ConfigServer::get('storage_engine')
            ];

            if (empty($config['engine']['local'])) {
                $config['engine']['local'] = [];
            }

            $StorageDriver = new StorageDriver($config);
            $StorageDriver->setUploadFile('file');

            if (!$StorageDriver->upload($save_dir)) {
                throw new Exception('图片上传失败' . $StorageDriver->getError());
            }

            // 图片上传路径
            $fileName = $StorageDriver->getFileName();
            // 图片信息
            $fileInfo = $StorageDriver->getFileInfo();

            // 记录图片信息
            $data = [
                'name'        => $fileInfo['name'],
                'type'        => File::type_video,
                'domain'      => UrlServer::getFileUrl('/'),
                'uri'         => $save_dir . '/' . str_replace("\\","/", $fileName),
                'create_time' => time(),
            ];
            return self::dataSuccess('上传文件成功', $data);

        } catch (\Exception $e) {
            $message = lang($e->getMessage()) ?? $e->getMessage();
            return self::dataError('上传文件失败:' . $message);
        }
    }

    /**
     * Notes: 用户上传图片
     * @param string $save_dir (保存目录, 不建议修改, 不要超二级目录)
     * @param bool $isLocal (是否存不使用oss 只存本地, 上传退款证书会用到)
     * @return array
     * @author 张无忌(2021/2/20 9:53)
     */
    public static function other($save_dir='uploads/other', $isLocal=false )
    {
        try {
            if ($isLocal == false) {
                $config = [
                    'default' => ConfigServer::get('storage', 'default', 'local'),
                    'engine'  => ConfigServer::get('storage_engine')
                ];
            } else {
                $config = [
                    'default' => 'local',
                    'engine'  => ConfigServer::get('storage_engine')
                ];
            }
            if (empty($config['engine']['local'])) {
                $config['engine']['local'] = [];
            }

            $StorageDriver = new StorageDriver($config);
            $StorageDriver->setUploadFile('file');

            if (!$StorageDriver->upload($save_dir)) {
                throw new Exception('上传失败' . $StorageDriver->getError());
            }

            // 图片上传路径
            $fileName = $StorageDriver->getFileName();
            // 图片信息
            $fileInfo = $StorageDriver->getFileInfo();

            // 信息
            $data = [
                'name'        => $fileInfo['name'],
                'type'        => File::type_other,
                'uri'         => $save_dir . '/' . str_replace("\\","/", $fileName),
                'create_time' => time(),
            ];
            Db::name('file')->insert($data);
            return self::dataSuccess('上传文件成功', $data);

        } catch (\Exception $e) {
            $message = lang($e->getMessage()) ?? $e->getMessage();
            return self::dataError('上传文件失败:' . $message);
        }
    }

    /**
     * Notes: 文件列表
     * @param $pag_no
     * @param $page_size
     * @param int $cate_id
     * @param string $type
     * @author 张无忌(2021/2/20 10:23)
     * @return array
     */
    public static function lists($pag_no, $page_size,  $cate_id = 0, $type = '')
    {
        try {
            $where['del'] = 0;
            if ($type) $where['type'] = $type;

            if ($cate_id != 0) {
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

            foreach ($lists as &$item) {
                $item['uri'] = UrlServer::getFileUrl($item['uri']);
            }

            return ['count' => $count, 'lists' => $lists];

        } catch (\Exception $e) {
            return [];
        }
    }

    /**
     * Notes: 删除选中的图片
     * @param $ids
     * @author 张无忌(2021/2/20 10:24)
     * @return bool|int|string
     */
    public static function del($ids)
    {
        try {
            return Db::name('file')
                ->where('id', 'in', $ids)
                ->update(['del' => 1]);
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function videokkk($save_dir = '',$ext = 'mp3,mp4,wav,AVI,mov,rmvb,rm,FLV,3GP'){
        try {
            if (!file_exists($save_dir)) {
                mkdir($save_dir, 0775, true);
            }

            $file = request()->file('file');
            $info = $file->validate(['ext' => $ext])->move($save_dir);

            if(empty($info)){
                throw new Exception($file->getError());
            }

            $result['url'] = $save_dir . '/' . $info->getSaveName();
            $result['name'] = $info->getSaveName();
            $result['save_name'] = $info->getFilename();
            $file_data = $info->getInfo();
            if (isset($file_data['name'])){
                $result['name'] = $file_data['name'];
            }
            return self::dataSuccess('上传文件成功', $result);

        } catch (Exception $e) {
            $messge = $e->getMessage();
            $messge = lang($messge) ?? $messge;
            return self::dataError('上传文件失败:' . $messge);
        }
    }

    public static function videoNew($cate_id, $save_dir='uploads/video')
    {
        try {
            $config = [
                'default' => ConfigServer::get('storage', 'default', 'local'),
                'engine'  => ConfigServer::get('storage_engine')
            ];

            if (empty($config['engine']['local'])) {
                $config['engine']['local'] = [];
            }

            $StorageDriver = new StorageDriver($config);
            $StorageDriver->setUploadFile('file');

            if (!$StorageDriver->upload($save_dir)) {
                throw new Exception('视频上传失败' . $StorageDriver->getError());
            }

            // 视频上传路径
            $fileName = $StorageDriver->getFileName();
            // 视频信息
            $fileInfo = $StorageDriver->getFileInfo();

            //名字长度太长
            if (strlen($fileInfo['name']) > 128) {
                $file_name = substr($fileInfo['name'], 0, 123);
                $file_end = substr($fileInfo['name'], strlen($fileInfo['name'])-5, strlen($fileInfo['name']));
                $fileInfo['name'] = $file_name.$file_end;
            }

            // 记录视频信息
            $data = [
                'cate_id'     => $cate_id,
                'name'        => $fileInfo['name'],
                'type'        => File::type_video,
                'uri'         => $save_dir . '/' . str_replace("\\","/", $fileName),
                'create_time' => time(),
            ];
            Db::name('file')->insert($data);
            return self::dataSuccess('上传视频成功', $data);

        } catch (\Exception $e) {
            $message = lang($e->getMessage()) ?? $e->getMessage();
            return self::dataError('上传视频失败:' . $message);
        }
    }
}