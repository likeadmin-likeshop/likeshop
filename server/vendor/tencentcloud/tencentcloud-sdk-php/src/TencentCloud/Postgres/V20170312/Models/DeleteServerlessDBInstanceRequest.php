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
 * DeleteServerlessDBInstance请求参数结构体
 *
 * @method string getDBInstanceName() 获取DB实例名称，实例名和实例ID必须至少传一个，如果同时存在，将只以实例ID为准。
 * @method void setDBInstanceName(string $DBInstanceName) 设置DB实例名称，实例名和实例ID必须至少传一个，如果同时存在，将只以实例ID为准。
 * @method string getDBInstanceId() 获取DB实例ID，实例名和实例ID必须至少传一个，如果同时存在，将只以实例ID为准。
 * @method void setDBInstanceId(string $DBInstanceId) 设置DB实例ID，实例名和实例ID必须至少传一个，如果同时存在，将只以实例ID为准。
 */
class DeleteServerlessDBInstanceRequest extends AbstractModel
{
    /**
     * @var string DB实例名称，实例名和实例ID必须至少传一个，如果同时存在，将只以实例ID为准。
     */
    public $DBInstanceName;

    /**
     * @var string DB实例ID，实例名和实例ID必须至少传一个，如果同时存在，将只以实例ID为准。
     */
    public $DBInstanceId;

    /**
     * @param string $DBInstanceName DB实例名称，实例名和实例ID必须至少传一个，如果同时存在，将只以实例ID为准。
     * @param string $DBInstanceId DB实例ID，实例名和实例ID必须至少传一个，如果同时存在，将只以实例ID为准。
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
        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            $this->DBInstanceName = $param["DBInstanceName"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }
    }
}
