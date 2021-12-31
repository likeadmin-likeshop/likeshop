<?php
if (!defined('QCLOUDAPI_ROOT_PATH')) {
    // 目录入口
    define('QCLOUDAPI_ROOT_PATH', dirname(dirname(__FILE__)));
}
require_once QCLOUDAPI_ROOT_PATH . '/Common/Base.php';
/**
 * QcloudApi_Module_Base
 * 模块基类
 */
abstract class QcloudApi_Module_Base extends QcloudApi_Common_Base
{
    /**
     * $_serverHost
     * 接口域名
     * @var string
     */
    protected $_serverHost = '';

    /**
     * $_serverUri
     * url路径
     * @var string
     */
    protected $_serverUri  = '/v2/index.php';

    /**
     * $_secretId
     * secretId
     * @var string
     */
    protected $_secretId = "";

    /**
     * $_secretKey
     * secretKey
     * @var string
     */
    protected $_secretKey = "";

    /**
     * $_defaultRegion
     * 区域参数
     * @var string
     */
    protected $_defaultRegion = "";

    /**
     * $_requestMethod
     * 请求方法
     * @var string
     */
    protected $_requestMethod = "GET";

    /**
     * __construct
     * @param array $config [description]
     */
    public function __construct($config = array())
    {
        if (!empty($config))
            $this->setConfig($config);
    }

    /**
     * setConfig
     * 设置配置
     * @param array $config 模块配置
     */
    public function setConfig($config)
    {
        if (!is_array($config) || !count($config))
            return false;

        foreach ($config as $key => $val) {
            switch ($key) {
                case 'SecretId':
                    $this->setConfigSecretId($val);
                    break;

                case 'SecretKey':
                    $this->setConfigSecretKey($val);
                    break;

                case 'DefaultRegion':
                    $this->setConfigDefaultRegion($val);
                    break;

                case 'RequestMethod':
                    $this->setConfigRequestMethod($val);
                    break;

                default:
                    ;
                break;
            }
        }

        return true;
    }

    /**
     * setConfigSecretId
     * 设置secretId
     * @param string $secretId secretId
     */
    public function setConfigSecretId($secretId)
    {
        $this->_secretId = $secretId;
        return $this;
    }

    /**
     * setConfigSecretKey
     * 设置secretKey
     * @param string $secretKey
     */
    public function setConfigSecretKey($secretKey)
    {
        $this->_secretKey = $secretKey;
        return $this;
    }

    /**
     * setConfigDefaultRegion
     * 设置区域参数
     * @param string $region
     */
    public function setConfigDefaultRegion($region)
    {
        $this->_defaultRegion = $region;
        return $this;
    }

    /**
     * setConfigRequestMethod
     * 设置请求方法
     * @param string $method
     */
    public function setConfigRequestMethod($method)
    {
        $this->_requestMethod = strtoupper($method);
        return $this;
    }

    /**
     * getLastRequest
     * 获取上次请求的url
     * @return
     */
    public function getLastRequest()
    {
        require_once QCLOUDAPI_ROOT_PATH . '/Common/Request.php';
        return QcloudApi_Common_Request::getRequestUrl();
    }

    /**
     * getLastResponse
     * 获取请求的原始返回
     * @return
     */
    public function getLastResponse()
    {
        require_once QCLOUDAPI_ROOT_PATH . '/Common/Request.php';
        return QcloudApi_Common_Request::getRawResponse();
    }

    /**
     * generateUrl
     * 生成请求的URL，不发起请求
     * @param  string $name      接口方法名
     * @param  array  $params 请求参数
     * @return
     */
    public function generateUrl($name, $params)
    {
        require_once QCLOUDAPI_ROOT_PATH . '/Common/Request.php';

        $action = ucfirst($name);
        $params['Action'] = $action;

        if (!isset($params['Region']))
            $params['Region'] = $this->_defaultRegion;

        return QcloudApi_Common_Request::generateUrl($params, $this->_secretId, $this->_secretKey, $this->_requestMethod,
                                                   $this->_serverHost, $this->_serverUri);
    }

    /**
     * __call
     * 通过__call转发请求
     * @param  string $name      方法名
     * @param  array  $arguments 参数
     * @return
     */
    public function __call($name, $arguments)
    {
        $response = $this->_dispatchRequest($name, $arguments);

        return $this->_dealResponse($response);
    }

    /**
     * _dispatchRequest
     * 发起接口请求
     * @param  string $name      接口名
     * @param  array $arguments 接口参数
     * @return
     */
    protected function _dispatchRequest($name, $arguments)
    {
        $action = ucfirst($name);

        $params = array();
        if (is_array($arguments) && !empty($arguments)) {
            $params = (array) $arguments[0];
        }
        $params['Action'] = $action;

        if (!isset($params['Region']))
            $params['Region'] = $this->_defaultRegion;

        require_once QCLOUDAPI_ROOT_PATH . '/Common/Request.php';

        $response = QcloudApi_Common_Request::send($params, $this->_secretId, $this->_secretKey, $this->_requestMethod,
                                                   $this->_serverHost, $this->_serverUri);

        return $response;
    }

    /**
     * _dealResponse
     * 处理返回
     * @param  array $rawResponse
     * @return
     */
    protected function _dealResponse($rawResponse)
    {
        if (!is_array($rawResponse) || (!isset($rawResponse['code']) && !isset($rawResponse['Response']))) {
            $this->setError("", 'request falied!');
            return false;
        }

        if ($rawResponse['code']) {
            $ext = '';
            require_once QCLOUDAPI_ROOT_PATH . '/Common/Error.php';
            if (isset($rawResponse['detail'])) {
                // 批量异步操作，返回任务失败信息
                $ext = $rawResponse['detail'];
            }
            $this->setError($rawResponse['code'], $rawResponse['message'], $ext);
            return false;
        }

        unset($rawResponse['code'], $rawResponse['message']);

        if (count($rawResponse))
            return $rawResponse;
        else
            return true;
    }
}
