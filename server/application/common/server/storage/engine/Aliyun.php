<?php

namespace app\common\server\storage\engine;

use OSS\OssClient;
use OSS\Core\OssException;

/**
 * 阿里云存储引擎 (OSS)
 * Class Qiniu
 * @package app\common\library\storage\engine
 */
class Aliyun extends Server
{
    private $config;

    /**
     * 构造方法
     * Aliyun constructor.
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
        try {
            $ossClient = new OssClient(
                $this->config['access_key_id'],
                $this->config['access_key_secret'],
                $this->config['domain'],
                true
            );
            $ossClient->uploadFile(
                $this->config['bucket'],
                $save_dir . '/' . $this->fileName,
                $this->getRealPath()
            );
        } catch (OssException $e) {
            $this->error = $e->getMessage();
            return false;
        }
        return true;
    }

    /**
     * Notes: 抓取远程资源
     * @param $url
     * @param null $key
     * @return mixed|void
     * @author 张无忌(2021/3/2 14:36)
     */
    public function fetch($url, $key = null)
    {
        try {
            $ossClient = new OssClient(
                $this->config['access_key_id'],
                $this->config['access_key_secret'],
                $this->config['domain'],
                true
            );

            $content = file_get_contents($url);
            $ossClient->putObject(
                $this->config['bucket'],
                $key,
                $content
            );
        } catch (OssException $e) {
            $this->error = $e->getMessage();
            return false;
        }
        return true;
    }

    /**
     * 删除文件
     * @param $fileName
     * @return bool|mixed
     */
    public function delete($fileName)
    {
        try {
            $ossClient = new OssClient(
                $this->config['access_key_id'],
                $this->config['access_key_secret'],
                $this->config['domain'],
                true
            );
            $ossClient->deleteObject($this->config['bucket'], $fileName);
        } catch (OssException $e) {
            $this->error = $e->getMessage();
            return false;
        }
        return true;
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
