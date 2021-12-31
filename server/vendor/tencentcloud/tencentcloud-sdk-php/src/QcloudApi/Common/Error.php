<?php
/**
 * QcloudApi_Common_Error
 */
class QcloudApi_Common_Error
{
    /**
     * LOCAL_ERROR_CODE
     */
    const LOCAL_ERROR_CODE = 3000;

    /**
     * RESOURCE_PARTLY_FAILED
     */
    const RESOURCE_PARTLY_FAILED = 5400;

    /**
     * $_code
     * 错误号
     */
    protected $_code;

    /**
     * $_message
     * 错误信息
     */
    protected $_message;

    /**
     * $_ext
     * 扩展信息
     */
    protected $_ext;

    /**
     * __construct
     * @param int    $code    错误号
     * @param string $message 错误信息
     * @param string $ext     扩展信息
     */
    public function __construct($code, $message, $ext = '')
    {
        $code = (int) $code;
        $this->_code    = $code ? $code : self::LOCAL_ERROR_CODE;
        $this->_message = $message;
        $this->_ext     = $ext;
    }

    /**
     * getCode
     * 获取错误号
     */
    public function getCode()
    {
        return $this->_code;
    }

    /**
     * getMessage
     * 获取错误信息
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * getExt
     * 获取扩展信息
     */
    public function getExt()
    {
        return $this->_ext;
    }
}