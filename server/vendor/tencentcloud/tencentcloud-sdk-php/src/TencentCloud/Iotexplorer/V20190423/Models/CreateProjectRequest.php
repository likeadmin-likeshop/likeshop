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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProject请求参数结构体
 *
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getProjectDesc() 获取项目描述
 * @method void setProjectDesc(string $ProjectDesc) 设置项目描述
 * @method string getInstanceId() 获取实例ID，不带实例ID，默认为公共实例
 * @method void setInstanceId(string $InstanceId) 设置实例ID，不带实例ID，默认为公共实例
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 项目描述
     */
    public $ProjectDesc;

    /**
     * @var string 实例ID，不带实例ID，默认为公共实例
     */
    public $InstanceId;

    /**
     * @param string $ProjectName 项目名称
     * @param string $ProjectDesc 项目描述
     * @param string $InstanceId 实例ID，不带实例ID，默认为公共实例
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDesc",$param) and $param["ProjectDesc"] !== null) {
            $this->ProjectDesc = $param["ProjectDesc"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
