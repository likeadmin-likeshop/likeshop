<?php
require_once QCLOUDAPI_ROOT_PATH . '/Module/Base.php';
/**
 * https://cloud.tencent.com/document/product/589
 */
class QcloudApi_Module_Emr extends QcloudApi_Module_Base
{
    /**
     * $_serverHost
     * 接口域名
     * @var string
     */
    protected $_serverHost = 'emr.api.qcloud.com';
}
