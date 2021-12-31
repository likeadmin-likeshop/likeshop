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
 * InstallAgent请求参数结构体
 *
 * @method string getCluster() 获取集群名称
 * @method void setCluster(string $Cluster) 设置集群名称
 * @method string getTiaVersion() 获取Agent版本, 用于私有集群的agent安装，默认为“private-training”
 * @method void setTiaVersion(string $TiaVersion) 设置Agent版本, 用于私有集群的agent安装，默认为“private-training”
 * @method boolean getUpdate() 获取是否允许更新Agent
 * @method void setUpdate(boolean $Update) 设置是否允许更新Agent
 */
class InstallAgentRequest extends AbstractModel
{
    /**
     * @var string 集群名称
     */
    public $Cluster;

    /**
     * @var string Agent版本, 用于私有集群的agent安装，默认为“private-training”
     */
    public $TiaVersion;

    /**
     * @var boolean 是否允许更新Agent
     */
    public $Update;

    /**
     * @param string $Cluster 集群名称
     * @param string $TiaVersion Agent版本, 用于私有集群的agent安装，默认为“private-training”
     * @param boolean $Update 是否允许更新Agent
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
        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
        }

        if (array_key_exists("TiaVersion",$param) and $param["TiaVersion"] !== null) {
            $this->TiaVersion = $param["TiaVersion"];
        }

        if (array_key_exists("Update",$param) and $param["Update"] !== null) {
            $this->Update = $param["Update"];
        }
    }
}
