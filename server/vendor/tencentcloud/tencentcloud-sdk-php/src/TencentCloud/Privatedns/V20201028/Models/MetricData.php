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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统计数据表
 *
 * @method string getResource() 获取资源描述
 * @method void setResource(string $Resource) 设置资源描述
 * @method string getMetric() 获取表名
 * @method void setMetric(string $Metric) 设置表名
 * @method array getDataSet() 获取表数据
 * @method void setDataSet(array $DataSet) 设置表数据
 */
class MetricData extends AbstractModel
{
    /**
     * @var string 资源描述
     */
    public $Resource;

    /**
     * @var string 表名
     */
    public $Metric;

    /**
     * @var array 表数据
     */
    public $DataSet;

    /**
     * @param string $Resource 资源描述
     * @param string $Metric 表名
     * @param array $DataSet 表数据
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
            $this->DataSet = [];
            foreach ($param["DataSet"] as $key => $value){
                $obj = new DatePoint();
                $obj->deserialize($value);
                array_push($this->DataSet, $obj);
            }
        }
    }
}
