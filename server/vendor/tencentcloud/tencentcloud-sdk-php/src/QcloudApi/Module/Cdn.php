<?php
require_once QCLOUDAPI_ROOT_PATH . '/Module/Base.php';
/**
 * QcloudApi_Module_Cdn
 * CDN模块类
 */
class QcloudApi_Module_Cdn extends QcloudApi_Module_Base
{
    /**
     * $_serverHost
     * 接口域名
     * @var string
     */
    protected $_serverHost = 'cdn.api.qcloud.com';

    /**
     * UploadCdnEntity
     * 上传CDN文件
     * @param array $params 请求参数
     */
    public function UploadCdnEntity($params) {
        $name = 'UploadCdnEntity';

        $entityFile = $params['entityFile'];
        if (!file_exists($entityFile)) {
            $this->setError('', 'entityFile is not exists.');
            return false;
        }

        if (!$params['entityFileMd5']) {
            $params['entityFileMd5'] = md5_file($entityFile);
        }
        $params['entityFile'] = '@' . $entityFile;

        $response = $this->_dispatchRequest($name, array($params));

        if (!$response) {
            $this->setError("", 'request falied!');
            return false;
        }

        if (is_array($response) && $response['code']) {
            $this->setError($response['code'], $response['message']);
            return false;
        }

        unset($response['code'], $response['message']);

        return $response;
    }
}