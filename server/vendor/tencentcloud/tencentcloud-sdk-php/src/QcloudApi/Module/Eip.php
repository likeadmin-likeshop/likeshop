<?php
require_once QCLOUDAPI_ROOT_PATH . '/Module/Base.php';
/**
 * QcloudApi_Module_Eip
 * 弹性公网Ip模块类
 */
class QcloudApi_Module_Eip extends QcloudApi_Module_Base
{
    /**
     * $_serverHost
     * 接口域名
     * @var string
     */
    protected $_serverHost = 'eip.api.qcloud.com';
}
