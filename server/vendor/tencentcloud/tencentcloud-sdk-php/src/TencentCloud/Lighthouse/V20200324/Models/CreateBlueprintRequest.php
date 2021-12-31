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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBlueprint请求参数结构体
 *
 * @method string getBlueprintName() 获取镜像名称。最大长度60。
 * @method void setBlueprintName(string $BlueprintName) 设置镜像名称。最大长度60。
 * @method string getDescription() 获取镜像描述。最大长度60。
 * @method void setDescription(string $Description) 设置镜像描述。最大长度60。
 * @method string getInstanceId() 获取需要制作镜像的实例ID。
 * @method void setInstanceId(string $InstanceId) 设置需要制作镜像的实例ID。
 */
class CreateBlueprintRequest extends AbstractModel
{
    /**
     * @var string 镜像名称。最大长度60。
     */
    public $BlueprintName;

    /**
     * @var string 镜像描述。最大长度60。
     */
    public $Description;

    /**
     * @var string 需要制作镜像的实例ID。
     */
    public $InstanceId;

    /**
     * @param string $BlueprintName 镜像名称。最大长度60。
     * @param string $Description 镜像描述。最大长度60。
     * @param string $InstanceId 需要制作镜像的实例ID。
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
        if (array_key_exists("BlueprintName",$param) and $param["BlueprintName"] !== null) {
            $this->BlueprintName = $param["BlueprintName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
