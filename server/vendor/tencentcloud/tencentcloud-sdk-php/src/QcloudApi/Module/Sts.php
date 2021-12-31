<?php
require_once QCLOUDAPI_ROOT_PATH . '/Module/Base.php';
/**
 * QcloudApi_Module_Sts
 * https://cloud.tencent.com/document/product/598
 */
class QcloudApi_Module_Sts extends QcloudApi_Module_Base
{
    /**
     * $_serverHost
     * 接口域名
     * @var string
     */
    protected $_serverHost = 'sts.api.qcloud.com';
}
