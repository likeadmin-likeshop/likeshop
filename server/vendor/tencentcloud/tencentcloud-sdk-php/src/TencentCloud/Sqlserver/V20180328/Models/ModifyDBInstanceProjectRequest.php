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
 * ModifyDBInstanceProject请求参数结构体
 *
 * @method array getInstanceIdSet() 获取实例ID数组，形如mssql-j8kv137v
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置实例ID数组，形如mssql-j8kv137v
 * @method integer getProjectId() 获取项目ID，为0的话表示默认项目
 * @method void setProjectId(integer $ProjectId) 设置项目ID，为0的话表示默认项目
 */
class ModifyDBInstanceProjectRequest extends AbstractModel
{
    /**
     * @var array 实例ID数组，形如mssql-j8kv137v
     */
    public $InstanceIdSet;

    /**
     * @var integer 项目ID，为0的话表示默认项目
     */
    public $ProjectId;

    /**
     * @param array $InstanceIdSet 实例ID数组，形如mssql-j8kv137v
     * @param integer $ProjectId 项目ID，为0的话表示默认项目
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
