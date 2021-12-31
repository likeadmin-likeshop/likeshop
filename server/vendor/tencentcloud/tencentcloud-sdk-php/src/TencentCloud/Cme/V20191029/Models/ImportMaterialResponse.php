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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportMaterial返回参数结构体
 *
 * @method string getMaterialId() 获取媒体 Id。
 * @method void setMaterialId(string $MaterialId) 设置媒体 Id。
 * @method string getPreProcessTaskId() 获取媒体文预处理任务 ID，如果未指定发起预处理任务则为空。
 * @method void setPreProcessTaskId(string $PreProcessTaskId) 设置媒体文预处理任务 ID，如果未指定发起预处理任务则为空。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ImportMaterialResponse extends AbstractModel
{
    /**
     * @var string 媒体 Id。
     */
    public $MaterialId;

    /**
     * @var string 媒体文预处理任务 ID，如果未指定发起预处理任务则为空。
     */
    public $PreProcessTaskId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MaterialId 媒体 Id。
     * @param string $PreProcessTaskId 媒体文预处理任务 ID，如果未指定发起预处理任务则为空。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("PreProcessTaskId",$param) and $param["PreProcessTaskId"] !== null) {
            $this->PreProcessTaskId = $param["PreProcessTaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
