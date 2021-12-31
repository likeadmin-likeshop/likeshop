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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceName请求参数结构体
 *
 * @method string getDBInstanceId() 获取数据库实例ID，形如postgres-6fego161
 * @method void setDBInstanceId(string $DBInstanceId) 设置数据库实例ID，形如postgres-6fego161
 * @method string getInstanceName() 获取新的数据库实例名字
 * @method void setInstanceName(string $InstanceName) 设置新的数据库实例名字
 */
class ModifyDBInstanceNameRequest extends AbstractModel
{
    /**
     * @var string 数据库实例ID，形如postgres-6fego161
     */
    public $DBInstanceId;

    /**
     * @var string 新的数据库实例名字
     */
    public $InstanceName;

    /**
     * @param string $DBInstanceId 数据库实例ID，形如postgres-6fego161
     * @param string $InstanceName 新的数据库实例名字
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
