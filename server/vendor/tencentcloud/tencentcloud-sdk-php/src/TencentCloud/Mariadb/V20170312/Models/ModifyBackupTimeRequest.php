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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupTime请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
 * @method string getStartBackupTime() 获取每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00
 * @method void setStartBackupTime(string $StartBackupTime) 设置每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00
 * @method string getEndBackupTime() 获取每天备份执行的区间的结束时间，格式 mm:ss，形如 23:59
 * @method void setEndBackupTime(string $EndBackupTime) 设置每天备份执行的区间的结束时间，格式 mm:ss，形如 23:59
 */
class ModifyBackupTimeRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
     */
    public $InstanceId;

    /**
     * @var string 每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00
     */
    public $StartBackupTime;

    /**
     * @var string 每天备份执行的区间的结束时间，格式 mm:ss，形如 23:59
     */
    public $EndBackupTime;

    /**
     * @param string $InstanceId 实例ID，形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
     * @param string $StartBackupTime 每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00
     * @param string $EndBackupTime 每天备份执行的区间的结束时间，格式 mm:ss，形如 23:59
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartBackupTime",$param) and $param["StartBackupTime"] !== null) {
            $this->StartBackupTime = $param["StartBackupTime"];
        }

        if (array_key_exists("EndBackupTime",$param) and $param["EndBackupTime"] !== null) {
            $this->EndBackupTime = $param["EndBackupTime"];
        }
    }
}
