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
namespace TencentCloud\Tic\V20201117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateStack请求参数结构体
 *
 * @method string getStackId() 获取待更新的资源栈ID
 * @method void setStackId(string $StackId) 设置待更新的资源栈ID
 * @method string getStackName() 获取资源栈名称，不得超过60个字符
 * @method void setStackName(string $StackName) 设置资源栈名称，不得超过60个字符
 * @method string getDescription() 获取资源栈描述，不得超过200个字符
 * @method void setDescription(string $Description) 设置资源栈描述，不得超过200个字符
 */
class UpdateStackRequest extends AbstractModel
{
    /**
     * @var string 待更新的资源栈ID
     */
    public $StackId;

    /**
     * @var string 资源栈名称，不得超过60个字符
     */
    public $StackName;

    /**
     * @var string 资源栈描述，不得超过200个字符
     */
    public $Description;

    /**
     * @param string $StackId 待更新的资源栈ID
     * @param string $StackName 资源栈名称，不得超过60个字符
     * @param string $Description 资源栈描述，不得超过200个字符
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
        if (array_key_exists("StackId",$param) and $param["StackId"] !== null) {
            $this->StackId = $param["StackId"];
        }

        if (array_key_exists("StackName",$param) and $param["StackName"] !== null) {
            $this->StackName = $param["StackName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
