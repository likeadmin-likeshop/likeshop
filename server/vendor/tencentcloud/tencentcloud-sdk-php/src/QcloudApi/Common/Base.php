<?php
/**
 * QcloudApi_Common_Base
 */
abstract class QcloudApi_Common_Base
{
    /**
     * $_error
     * 错误号
     */
    protected $_error = 0;

    /**
     * setError
     * 设置错误信息
     *
     * @param  int    $code    错误号
     * @param  string $message 错误信息
     * @param  string $ext     扩展信息
     * @return object
     */
    public function setError($code, $message, $ext = '')
    {
        require_once QCLOUDAPI_ROOT_PATH . '/Common/Error.php';

        $this->_error = new QcloudApi_Common_Error($code, $message, $ext);
        return $this->_error;
    }

    /**
     * getError
     * 获取错误信息
     *
     * @return object
     */
    public function getError()
    {
        return $this->_error;
    }
}