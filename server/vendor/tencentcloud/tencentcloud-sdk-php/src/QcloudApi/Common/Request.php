<?php
require_once QCLOUDAPI_ROOT_PATH . '/Common/Sign.php';
/**
 * QcloudApi_Common_Request
 */
class QcloudApi_Common_Request
{
    /**
     * $_requestUrl
     * 请求url
     * @var string
     */
    protected static $_requestUrl = '';

    /**
     * $_rawResponse
     * 原始的返回信息
     * @var string
     */
    protected static $_rawResponse = '';

    /**
     * $_version
     * @var string
     */
    protected static $_version = 'SDK_PHP_2.0.6';

    /**
     * $_timeOut
     * 设置连接主机的超时时间
     * @var int 数量级：秒
     * */
    protected static $_timeOut = 10;

    /**
     * getRequestUrl
     * 获取请求url
     */
    public static function getRequestUrl()
    {
        return self::$_requestUrl;
    }

    /**
     * getRawResponse
     * 获取原始的返回信息
     */
    public static function getRawResponse()
    {
        return self::$_rawResponse;
    }

    /**
     * generateUrl
     * 生成请求的URL
     *
     * @param  array  $paramArray
     * @param  string $secretId
     * @param  string $secretKey
     * @param  string $requestHost
     * @param  string $requestPath
     * @param  string $requestMethod
     * @return
     */
    public static function generateUrl($paramArray, $secretId, $secretKey, $requestMethod, $requestHost, $requestPath) {

        if(!isset($paramArray['SecretId']))
            $paramArray['SecretId'] = $secretId;

        if (!isset($paramArray['Nonce']))
            $paramArray['Nonce'] = rand(1, 65535);

        if (!isset($paramArray['Timestamp']))
            $paramArray['Timestamp'] = time();
        
        $signMethod = 'HmacSHA1';
        if (isset($paramArray['SignatureMethod']) && $paramArray['SignatureMethod'] == "HmacSHA256")
            $signMethod= 'HmacSHA256';

        $paramArray['RequestClient'] = self::$_version;
        $plainText = QcloudApi_Common_Sign::makeSignPlainText($paramArray,
            $requestMethod, $requestHost, $requestPath);

        $paramArray['Signature'] = QcloudApi_Common_Sign::sign($plainText, $secretKey, $signMethod);

        $url = 'https://' . $requestHost . $requestPath;
        if ($requestMethod == 'GET') {
            $url .= '?' . http_build_query($paramArray);
        }

        return $url;
    }

    /**
     * send
     * 发起请求
     * @param  array  $paramArray    请求参数
     * @param  string $secretId      secretId
     * @param  string $secretKey     secretKey
     * @param  string $requestMethod 请求方式，GET/POST
     * @param  string $requestHost   接口域名
     * @param  string $requestPath   url路径
     * @return
     */
    public static function send($paramArray, $secretId, $secretKey, $requestMethod, $requestHost, $requestPath)
    {

        if(!isset($paramArray['SecretId']))
            $paramArray['SecretId'] = $secretId;

        if (!isset($paramArray['Nonce']))
            $paramArray['Nonce'] = rand(1, 65535);

        if (!isset($paramArray['Timestamp']))
            $paramArray['Timestamp'] = time();
        
        $signMethod = 'HmacSHA1';
        if (isset($paramArray['SignatureMethod']) && $paramArray['SignatureMethod'] == "HmacSHA256")
            $signMethod= 'HmacSHA256';
        
        $paramArray['RequestClient'] = self::$_version;
        $plainText = QcloudApi_Common_Sign::makeSignPlainText($paramArray,
            $requestMethod, $requestHost, $requestPath);

        $paramArray['Signature'] = QcloudApi_Common_Sign::sign($plainText, $secretKey, $signMethod);

        $url = 'https://' . $requestHost . $requestPath;

        $ret = self::_sendRequest($url, $paramArray, $requestMethod);

        return $ret;
    }

    /**
     * _sendRequest
     * @param  string $url        请求url
     * @param  array  $paramArray 请求参数
     * @param  string $method     请求方法
     * @return
     */
    protected static function _sendRequest($url, $paramArray, $method = 'POST')
    {

        $ch = curl_init();

        if ($method == 'POST')
        {
            $paramArray = is_array( $paramArray ) ? http_build_query( $paramArray ) : $paramArray;
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $paramArray);
        }
        else
        {
            $url .= '?' . http_build_query($paramArray);
        }

        self::$_requestUrl = $url;

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT,self::$_timeOut);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if (false !== strpos($url, "https")) {
            // 证书
            // curl_setopt($ch,CURLOPT_CAINFO,"ca.crt");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,  false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  false);
        }
        $resultStr = curl_exec($ch);

        self::$_rawResponse = $resultStr;

        $result = json_decode($resultStr, true);
        if (!$result)
        {
            return $resultStr;
        }
        return $result;
    }

}

