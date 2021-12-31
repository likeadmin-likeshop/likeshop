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
 * MoveResource请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method ResourceInfo getSourceResource() 获取待移动的原始资源信息，包含原始媒体或分类资源，以及资源归属。
 * @method void setSourceResource(ResourceInfo $SourceResource) 设置待移动的原始资源信息，包含原始媒体或分类资源，以及资源归属。
 * @method ResourceInfo getDestinationResource() 获取目标信息，包含分类及归属，仅支持移动资源到分类。
 * @method void setDestinationResource(ResourceInfo $DestinationResource) 设置目标信息，包含分类及归属，仅支持移动资源到分类。
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验资源访问以及写权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验资源访问以及写权限。
 */
class MoveResourceRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var ResourceInfo 待移动的原始资源信息，包含原始媒体或分类资源，以及资源归属。
     */
    public $SourceResource;

    /**
     * @var ResourceInfo 目标信息，包含分类及归属，仅支持移动资源到分类。
     */
    public $DestinationResource;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验资源访问以及写权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param ResourceInfo $SourceResource 待移动的原始资源信息，包含原始媒体或分类资源，以及资源归属。
     * @param ResourceInfo $DestinationResource 目标信息，包含分类及归属，仅支持移动资源到分类。
     * @param string $Operator 操作者。填写用户的 Id，用于标识调用者及校验资源访问以及写权限。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("SourceResource",$param) and $param["SourceResource"] !== null) {
            $this->SourceResource = new ResourceInfo();
            $this->SourceResource->deserialize($param["SourceResource"]);
        }

        if (array_key_exists("DestinationResource",$param) and $param["DestinationResource"] !== null) {
            $this->DestinationResource = new ResourceInfo();
            $this->DestinationResource->deserialize($param["DestinationResource"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
