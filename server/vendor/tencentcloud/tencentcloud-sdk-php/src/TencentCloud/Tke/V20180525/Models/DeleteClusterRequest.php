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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCluster请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getInstanceDeleteMode() 获取集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例） retain （仅移除，保留实例）
 * @method void setInstanceDeleteMode(string $InstanceDeleteMode) 设置集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例） retain （仅移除，保留实例）
 * @method array getResourceDeleteOptions() 获取集群删除时资源的删除策略，目前支持CBS（默认保留CBS）
 * @method void setResourceDeleteOptions(array $ResourceDeleteOptions) 设置集群删除时资源的删除策略，目前支持CBS（默认保留CBS）
 */
class DeleteClusterRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例） retain （仅移除，保留实例）
     */
    public $InstanceDeleteMode;

    /**
     * @var array 集群删除时资源的删除策略，目前支持CBS（默认保留CBS）
     */
    public $ResourceDeleteOptions;

    /**
     * @param string $ClusterId 集群ID
     * @param string $InstanceDeleteMode 集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例） retain （仅移除，保留实例）
     * @param array $ResourceDeleteOptions 集群删除时资源的删除策略，目前支持CBS（默认保留CBS）
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceDeleteMode",$param) and $param["InstanceDeleteMode"] !== null) {
            $this->InstanceDeleteMode = $param["InstanceDeleteMode"];
        }

        if (array_key_exists("ResourceDeleteOptions",$param) and $param["ResourceDeleteOptions"] !== null) {
            $this->ResourceDeleteOptions = [];
            foreach ($param["ResourceDeleteOptions"] as $key => $value){
                $obj = new ResourceDeleteOption();
                $obj->deserialize($value);
                array_push($this->ResourceDeleteOptions, $obj);
            }
        }
    }
}
