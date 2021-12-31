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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩缩容配置
 *
 * @method integer getMaxReplicas() 获取最大副本数，ScaleMode 为 MANUAL 时辞会此值会被置为 StartReplicas 取值
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大副本数，ScaleMode 为 MANUAL 时辞会此值会被置为 StartReplicas 取值
 * @method integer getMinReplicas() 获取最小副本数，ScaleMode 为 MANUAL 时辞会此值会被置为 StartReplicas 取值
 * @method void setMinReplicas(integer $MinReplicas) 设置最小副本数，ScaleMode 为 MANUAL 时辞会此值会被置为 StartReplicas 取值
 * @method integer getStartReplicas() 获取起始副本数
 * @method void setStartReplicas(integer $StartReplicas) 设置起始副本数
 * @method array getHpaMetrics() 获取扩缩容指标，选择自动扩缩容时至少需要选择一个指标，支持CPU-UTIL、MEMORY-UTIL
 * @method void setHpaMetrics(array $HpaMetrics) 设置扩缩容指标，选择自动扩缩容时至少需要选择一个指标，支持CPU-UTIL、MEMORY-UTIL
 */
class Scaler extends AbstractModel
{
    /**
     * @var integer 最大副本数，ScaleMode 为 MANUAL 时辞会此值会被置为 StartReplicas 取值
     */
    public $MaxReplicas;

    /**
     * @var integer 最小副本数，ScaleMode 为 MANUAL 时辞会此值会被置为 StartReplicas 取值
     */
    public $MinReplicas;

    /**
     * @var integer 起始副本数
     */
    public $StartReplicas;

    /**
     * @var array 扩缩容指标，选择自动扩缩容时至少需要选择一个指标，支持CPU-UTIL、MEMORY-UTIL
     */
    public $HpaMetrics;

    /**
     * @param integer $MaxReplicas 最大副本数，ScaleMode 为 MANUAL 时辞会此值会被置为 StartReplicas 取值
     * @param integer $MinReplicas 最小副本数，ScaleMode 为 MANUAL 时辞会此值会被置为 StartReplicas 取值
     * @param integer $StartReplicas 起始副本数
     * @param array $HpaMetrics 扩缩容指标，选择自动扩缩容时至少需要选择一个指标，支持CPU-UTIL、MEMORY-UTIL
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
        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("StartReplicas",$param) and $param["StartReplicas"] !== null) {
            $this->StartReplicas = $param["StartReplicas"];
        }

        if (array_key_exists("HpaMetrics",$param) and $param["HpaMetrics"] !== null) {
            $this->HpaMetrics = [];
            foreach ($param["HpaMetrics"] as $key => $value){
                $obj = new Option();
                $obj->deserialize($value);
                array_push($this->HpaMetrics, $obj);
            }
        }
    }
}
