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
namespace TencentCloud\Tia\V20180226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteModel请求参数结构体
 *
 * @method string getName() 获取要删除的模型名称
 * @method void setName(string $Name) 设置要删除的模型名称
 * @method string getCluster() 获取要删除的模型所在的集群名称，`集群模式` 必填
 * @method void setCluster(string $Cluster) 设置要删除的模型所在的集群名称，`集群模式` 必填
 * @method string getServType() 获取模型类型，取值 `serverless` 即为 `无服务器模式`，否则为 `集群模式`
 * @method void setServType(string $ServType) 设置模型类型，取值 `serverless` 即为 `无服务器模式`，否则为 `集群模式`
 */
class DeleteModelRequest extends AbstractModel
{
    /**
     * @var string 要删除的模型名称
     */
    public $Name;

    /**
     * @var string 要删除的模型所在的集群名称，`集群模式` 必填
     */
    public $Cluster;

    /**
     * @var string 模型类型，取值 `serverless` 即为 `无服务器模式`，否则为 `集群模式`
     */
    public $ServType;

    /**
     * @param string $Name 要删除的模型名称
     * @param string $Cluster 要删除的模型所在的集群名称，`集群模式` 必填
     * @param string $ServType 模型类型，取值 `serverless` 即为 `无服务器模式`，否则为 `集群模式`
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("ServType",$param) and $param["ServType"] !== null) {
            $this->ServType = $param["ServType"];
        }
    }
}
