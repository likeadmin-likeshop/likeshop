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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DiagnoseInstance请求参数结构体
 *
 * @method string getInstanceId() 获取ES实例ID
 * @method void setInstanceId(string $InstanceId) 设置ES实例ID
 * @method array getDiagnoseJobs() 获取需要触发的诊断项
 * @method void setDiagnoseJobs(array $DiagnoseJobs) 设置需要触发的诊断项
 * @method string getDiagnoseIndices() 获取需要诊断的索引，支持通配符
 * @method void setDiagnoseIndices(string $DiagnoseIndices) 设置需要诊断的索引，支持通配符
 */
class DiagnoseInstanceRequest extends AbstractModel
{
    /**
     * @var string ES实例ID
     */
    public $InstanceId;

    /**
     * @var array 需要触发的诊断项
     */
    public $DiagnoseJobs;

    /**
     * @var string 需要诊断的索引，支持通配符
     */
    public $DiagnoseIndices;

    /**
     * @param string $InstanceId ES实例ID
     * @param array $DiagnoseJobs 需要触发的诊断项
     * @param string $DiagnoseIndices 需要诊断的索引，支持通配符
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

        if (array_key_exists("DiagnoseJobs",$param) and $param["DiagnoseJobs"] !== null) {
            $this->DiagnoseJobs = $param["DiagnoseJobs"];
        }

        if (array_key_exists("DiagnoseIndices",$param) and $param["DiagnoseIndices"] !== null) {
            $this->DiagnoseIndices = $param["DiagnoseIndices"];
        }
    }
}
