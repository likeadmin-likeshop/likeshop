<?php

namespace app\common\server\storage\engine;


/**
 * 本地文件驱动
 * Class Local
 * @package app\common\library\storage\drivers
 */
class Local extends Server
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 上传
     * @param $save_dir (保存路径)
     * @return bool
     */
    public function upload($save_dir)
    {
        // 验证文件并上传
        $info = $this->file->move($save_dir, $this->fileName);
        if (empty($info)) {
            $this->error = $this->file->getError();
            return false;
        }
        return true;
    }

    public function fetch($url, $key=null) {}

    /**
     * 删除文件
     * @param $fileName
     * @return bool|mixed
     */
    public function delete($fileName)
    {
        // 文件所在目录
        $filePath = ROOT_PATH . "/{$fileName}";
        return !file_exists($filePath) ?: unlink($filePath);
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
