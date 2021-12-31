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
 * ModifyDBInstancesProject请求参数结构体
 *
 * @method array getDBInstanceIdSet() 获取postgresql实例ID数组
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) 设置postgresql实例ID数组
 * @method string getProjectId() 获取postgresql实例所属新项目的ID
 * @method void setProjectId(string $ProjectId) 设置postgresql实例所属新项目的ID
 */
class ModifyDBInstancesProjectRequest extends AbstractModel
{
    /**
     * @var array postgresql实例ID数组
     */
    public $DBInstanceIdSet;

    /**
     * @var string postgresql实例所属新项目的ID
     */
    public $ProjectId;

    /**
     * @param array $DBInstanceIdSet postgresql实例ID数组
     * @param string $ProjectId postgresql实例所属新项目的ID
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
