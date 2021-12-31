<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跟踪集概览
 *
 * @method integer getAuditStatus() 获取跟踪集状态，1：开启，0：关闭
 * @method void setAuditStatus(integer $AuditStatus) 设置跟踪集状态，1：开启，0：关闭
 * @method string getCosBucketName() 获取COS存储桶名称
 * @method void setCosBucketName(string $CosBucketName) 设置COS存储桶名称
 * @method string getAuditName() 获取跟踪集名称
 * @method void setAuditName(string $AuditName) 设置跟踪集名称
 * @method string getLogFilePrefix() 获取日志前缀
 * @method void setLogFilePrefix(string $LogFilePrefix) 设置日志前缀
 */
class AuditSummary extends AbstractModel
{
    /**
     * @var integer 跟踪集状态，1：开启，0：关闭
     */
    public $AuditStatus;

    /**
     * @var string COS存储桶名称
     */
    public $CosBucketName;

    /**
     * @var string 跟踪集名称
     */
    public $AuditName;

    /**
     * @var string 日志前缀
     */
    public $LogFilePrefix;

    /**
     * @param integer $AuditStatus 跟踪集状态，1：开启，0：关闭
     * @param string $CosBucketName COS存储桶名称
     * @param string $AuditName 跟踪集名称
     * @param string $LogFilePrefix 日志前缀
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("AuditName",$param) and $param["AuditName"] !== null) {
            $this->AuditName = $param["AuditName"];
        }

        if (array_key_exists("LogFilePrefix",$param) and $param["LogFilePrefix"] !== null) {
            $this->LogFilePrefix = $param["LogFilePrefix"];
        }
    }
}
