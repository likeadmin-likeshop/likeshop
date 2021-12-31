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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubProject请求参数结构体
 *
 * @method string getProjectId() 获取所属项目id
 * @method void setProjectId(string $ProjectId) 设置所属项目id
 * @method string getSubProjectName() 获取子项目名称
 * @method void setSubProjectName(string $SubProjectName) 设置子项目名称
 */
class CreateSubProjectRequest extends AbstractModel
{
    /**
     * @var string 所属项目id
     */
    public $ProjectId;

    /**
     * @var string 子项目名称
     */
    public $SubProjectName;

    /**
     * @param string $ProjectId 所属项目id
     * @param string $SubProjectName 子项目名称
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SubProjectName",$param) and $param["SubProjectName"] !== null) {
            $this->SubProjectName = $param["SubProjectName"];
        }
    }
}
