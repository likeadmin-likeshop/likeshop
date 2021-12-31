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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性伸缩配置
 *
 * @method integer getMinAliveInstances() 获取最小实例数
 * @method void setMinAliveInstances(integer $MinAliveInstances) 设置最小实例数
 * @method integer getMaxAliveInstances() 获取最大实例数
 * @method void setMaxAliveInstances(integer $MaxAliveInstances) 设置最大实例数
 * @method integer getEsStrategy() 获取弹性策略,1:cpu，2:内存
 * @method void setEsStrategy(integer $EsStrategy) 设置弹性策略,1:cpu，2:内存
 * @method integer getThreshold() 获取弹性扩缩容条件值
 * @method void setThreshold(integer $Threshold) 设置弹性扩缩容条件值
 * @method string getVersionId() 获取版本Id
 * @method void setVersionId(string $VersionId) 设置版本Id
 */
class EsInfo extends AbstractModel
{
    /**
     * @var integer 最小实例数
     */
    public $MinAliveInstances;

    /**
     * @var integer 最大实例数
     */
    public $MaxAliveInstances;

    /**
     * @var integer 弹性策略,1:cpu，2:内存
     */
    public $EsStrategy;

    /**
     * @var integer 弹性扩缩容条件值
     */
    public $Threshold;

    /**
     * @var string 版本Id
     */
    public $VersionId;

    /**
     * @param integer $MinAliveInstances 最小实例数
     * @param integer $MaxAliveInstances 最大实例数
     * @param integer $EsStrategy 弹性策略,1:cpu，2:内存
     * @param integer $Threshold 弹性扩缩容条件值
     * @param string $VersionId 版本Id
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
        if (array_key_exists("MinAliveInstances",$param) and $param["MinAliveInstances"] !== null) {
            $this->MinAliveInstances = $param["MinAliveInstances"];
        }

        if (array_key_exists("MaxAliveInstances",$param) and $param["MaxAliveInstances"] !== null) {
            $this->MaxAliveInstances = $param["MaxAliveInstances"];
        }

        if (array_key_exists("EsStrategy",$param) and $param["EsStrategy"] !== null) {
            $this->EsStrategy = $param["EsStrategy"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
