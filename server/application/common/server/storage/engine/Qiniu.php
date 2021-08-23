<?php

namespace app\common\server\storage\engine;

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Qiniu\Storage\BucketManager;

/**
 * 七牛云存储引擎
 * Class Qiniu
 * @package app\common\library\storage\engine
 */
class Qiniu extends Server
{
    private $config;

    /**
     * 构造方法
     * Qiniu constructor.
     * @param $config
     */
    public function __construct($config)
    {
        parent::__construct();
        $this->config = $config;
    }

    /**
     * 执行上传
     * @param $save_dir (保存路径)
     * @return bool|mixed
     */
    public function upload($save_dir)
    {
        // 要上传图片的本地路径
        $realPath = $this->getRealPath();

        // 构建鉴权对象
        $auth = new Auth($this->config['access_key'], $this->config['secret_key']);

        // 要上传的空间
        $token = $auth->uploadToken($this->config['bucket']);

        // 初始化 UploadManager 对象并进行文件的上传
        $uploadMgr = new UploadManager();

        try {
            // 调用 UploadManager 的 putFile 方法进行文件的上传
            $key = $save_dir . '/' . $this->fileName;
            list(, $error) = $uploadMgr->putFile($token, $key, $realPath);

            if ($error !== null) {
                $this->error = $error->message();
                return false;
            }
            return true;
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * Notes: 抓取远程资源
     * @param $url
     * @param null $key
     * @author 张无忌(2021/3/2 14:03)
     * @return bool
     */
    public function fetch($url, $key=null)
    {
        try {
            if (substr($url, 0, 1) !== '/' || strstr($url, 'http://') || strstr($url, 'https://')) {
                $auth = new Auth($this->config['access_key'], $this->config['secret_key']);
                $bucketManager = new BucketManager($auth);
                list(, $err) = $bucketManager->fetch($url, $this->config['bucket'], $key);
            } else {
                $auth = new Auth($this->config['access_key'], $this->config['secret_key']);
                $token = $auth->uploadToken($this->config['bucket']);
                $uploadMgr = new UploadManager();
                list(, $err) = $uploadMgr->putFile($token, $key, $url);
            }

            if ($err !== null) {
                $this->error = $err->message();
                return false;
            }

            return true;
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * 删除文件
     * @param $fileName
     * @return bool|mixed
     */
    public function delete($fileName)
    {
        // 构建鉴权对象
        $auth = new Auth($this->config['access_key'], $this->config['secret_key']);
        // 初始化 UploadManager 对象并进行文件的上传
        $bucketMgr = new BucketManager($auth);

        try {
            $error = $bucketMgr->delete($this->config['bucket'], $fileName);
            if ($error !== null) {
                $this->error = $error->message();
                return false;
            }
            return true;
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * 返回文件路径
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

}
