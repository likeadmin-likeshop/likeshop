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
 * ApplyStack请求参数结构体
 *
 * @method string getStackId() 获取资源栈ID
 * @method void setStackId(string $StackId) 设置资源栈ID
 * @method string getVersionId() 获取待执行apply事件的版本ID
 * @method void setVersionId(string $VersionId) 设置待执行apply事件的版本ID
 */
class ApplyStackRequest extends AbstractModel
{
    /**
     * @var string 资源栈ID
     */
    public $StackId;

    /**
     * @var string 待执行apply事件的版本ID
     */
    public $VersionId;

    /**
     * @param string $StackId 资源栈ID
     * @param string $VersionId 待执行apply事件的版本ID
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

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
