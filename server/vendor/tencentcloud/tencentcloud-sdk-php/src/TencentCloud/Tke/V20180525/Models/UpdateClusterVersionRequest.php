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
 * UpdateClusterVersion请求参数结构体
 *
 * @method string getClusterId() 获取集群 Id
 * @method void setClusterId(string $ClusterId) 设置集群 Id
 * @method string getDstVersion() 获取需要升级到的版本
 * @method void setDstVersion(string $DstVersion) 设置需要升级到的版本
 * @method ClusterExtraArgs getExtraArgs() 获取集群自定义参数
 * @method void setExtraArgs(ClusterExtraArgs $ExtraArgs) 设置集群自定义参数
 * @method float getMaxNotReadyPercent() 获取可容忍的最大不可用pod数目
 * @method void setMaxNotReadyPercent(float $MaxNotReadyPercent) 设置可容忍的最大不可用pod数目
 * @method boolean getSkipPreCheck() 获取是否跳过预检查阶段
 * @method void setSkipPreCheck(boolean $SkipPreCheck) 设置是否跳过预检查阶段
 */
class UpdateClusterVersionRequest extends AbstractModel
{
    /**
     * @var string 集群 Id
     */
    public $ClusterId;

    /**
     * @var string 需要升级到的版本
     */
    public $DstVersion;

    /**
     * @var ClusterExtraArgs 集群自定义参数
     */
    public $ExtraArgs;

    /**
     * @var float 可容忍的最大不可用pod数目
     */
    public $MaxNotReadyPercent;

    /**
     * @var boolean 是否跳过预检查阶段
     */
    public $SkipPreCheck;

    /**
     * @param string $ClusterId 集群 Id
     * @param string $DstVersion 需要升级到的版本
     * @param ClusterExtraArgs $ExtraArgs 集群自定义参数
     * @param float $MaxNotReadyPercent 可容忍的最大不可用pod数目
     * @param boolean $SkipPreCheck 是否跳过预检查阶段
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

        if (array_key_exists("DstVersion",$param) and $param["DstVersion"] !== null) {
            $this->DstVersion = $param["DstVersion"];
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new ClusterExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }

        if (array_key_exists("MaxNotReadyPercent",$param) and $param["MaxNotReadyPercent"] !== null) {
            $this->MaxNotReadyPercent = $param["MaxNotReadyPercent"];
        }

        if (array_key_exists("SkipPreCheck",$param) and $param["SkipPreCheck"] !== null) {
            $this->SkipPreCheck = $param["SkipPreCheck"];
        }
    }
}
