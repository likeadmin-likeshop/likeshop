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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReadOnlyGroupDetails请求参数结构体
 *
 * @method string getInstanceId() 获取主实例ID，格式如：mssql-3l3fgqn7
 * @method void setInstanceId(string $InstanceId) 设置主实例ID，格式如：mssql-3l3fgqn7
 * @method string getReadOnlyGroupId() 获取只读组ID，格式如：mssqlrg-3l3fgqn7
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置只读组ID，格式如：mssqlrg-3l3fgqn7
 */
class DescribeReadOnlyGroupDetailsRequest extends AbstractModel
{
    /**
     * @var string 主实例ID，格式如：mssql-3l3fgqn7
     */
    public $InstanceId;

    /**
     * @var string 只读组ID，格式如：mssqlrg-3l3fgqn7
     */
    public $ReadOnlyGroupId;

    /**
     * @param string $InstanceId 主实例ID，格式如：mssql-3l3fgqn7
     * @param string $ReadOnlyGroupId 只读组ID，格式如：mssqlrg-3l3fgqn7
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

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }
    }
}
