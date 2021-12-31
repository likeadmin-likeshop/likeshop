<?php
require_once QCLOUDAPI_ROOT_PATH . '/Module/Base.php';
/**
 * https://cloud.tencent.com/document/product/663
 */
class QcloudApi_Module_Tbaas extends QcloudApi_Module_Base
{
    /**
     * $_serverHost
     * 接口域名
     * @var string
     */
    protected $_serverHost = 'tbaas.api.qcloud.com';
}
