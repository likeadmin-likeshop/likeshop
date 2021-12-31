<?php
/**
 * QcloudApi_Common_Sign
 * 签名类
 */
class QcloudApi_Common_Sign
{
    /**
     * sign
     * 生成签名
     * @param  string $srcStr    拼接签名源文字符串
     * @param  string $secretKey secretKey
     * @param  string $method    请求方法
     * @return
     */
    public static function sign($srcStr, $secretKey, $method = 'HmacSHA1')
    {
        switch ($method) {
        case 'HmacSHA1':
            $retStr = base64_encode(hash_hmac('sha1', $srcStr, $secretKey, true));
            break;
        case 'HmacSHA256':
            $retStr = base64_encode(hash_hmac('sha256', $srcStr, $secretKey, true));
            break;
        default:
            throw new Exception($method . ' is not a supported encrypt method');
            return false;
            break;
        }

        return $retStr;
    }

    /**
     * makeSignPlainText
     * 生成拼接签名源文字符串
     * @param  array $requestParams  请求参数
     * @param  string $requestMethod 请求方法
     * @param  string $requestHost   接口域名
     * @param  string $requestPath   url路径
     * @return
     */
    public static function makeSignPlainText($requestParams,
        $requestMethod = 'GET', $requestHost = YUNAPI_URL,
        $requestPath = '/v2/index.php')
    {

        $url = $requestHost . $requestPath;

        // 取出所有的参数
        $paramStr = self::_buildParamStr($requestParams, $requestMethod);

        $plainText = $requestMethod . $url . $paramStr;

        return $plainText;
    }

    /**
     * _buildParamStr
     * 拼接参数
     * @param  array $requestParams  请求参数
     * @param  string $requestMethod 请求方法
     * @return
     */
    protected static function _buildParamStr($requestParams, $requestMethod = 'GET')
    {
        $paramStr = '';
        ksort($requestParams);
        $i = 0;
        foreach ($requestParams as $key => $value)
        {
            if ($key == 'Signature')
            {
                continue;
            }
            // 排除上传文件的参数
            if ($requestMethod == 'POST' && substr($value, 0, 1) == '@') {
                continue;
            }
            // 把 参数中的 _ 替换成 .
            if (strpos($key, '_'))
            {
                $key = str_replace('_', '.', $key);
            }

            if ($i == 0)
            {
                $paramStr .= '?';
            }
            else
            {
                $paramStr .= '&';
            }
            $paramStr .= $key . '=' . $value;
            ++$i;
        }

        return $paramStr;
    }

}

