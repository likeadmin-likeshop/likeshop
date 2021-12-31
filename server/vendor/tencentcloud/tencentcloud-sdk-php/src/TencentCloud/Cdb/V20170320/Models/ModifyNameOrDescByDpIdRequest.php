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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNameOrDescByDpId请求参数结构体
 *
 * @method string getDeployGroupId() 获取置放群组 ID。
 * @method void setDeployGroupId(string $DeployGroupId) 设置置放群组 ID。
 * @method string getDeployGroupName() 获取置放群组名称，最长不能超过60个字符。置放群组名和置放群组描述不能都为空。
 * @method void setDeployGroupName(string $DeployGroupName) 设置置放群组名称，最长不能超过60个字符。置放群组名和置放群组描述不能都为空。
 * @method string getDescription() 获取置放群组描述，最长不能超过200个字符。置放群组名和置放群组描述不能都为空。
 * @method void setDescription(string $Description) 设置置放群组描述，最长不能超过200个字符。置放群组名和置放群组描述不能都为空。
 */
class ModifyNameOrDescByDpIdRequest extends AbstractModel
{
    /**
     * @var string 置放群组 ID。
     */
    public $DeployGroupId;

    /**
     * @var string 置放群组名称，最长不能超过60个字符。置放群组名和置放群组描述不能都为空。
     */
    public $DeployGroupName;

    /**
     * @var string 置放群组描述，最长不能超过200个字符。置放群组名和置放群组描述不能都为空。
     */
    public $Description;

    /**
     * @param string $DeployGroupId 置放群组 ID。
     * @param string $DeployGroupName 置放群组名称，最长不能超过60个字符。置放群组名和置放群组描述不能都为空。
     * @param string $Description 置放群组描述，最长不能超过200个字符。置放群组名和置放群组描述不能都为空。
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
        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("DeployGroupName",$param) and $param["DeployGroupName"] !== null) {
            $this->DeployGroupName = $param["DeployGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
