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
 * prometheus一个job的targets
 *
 * @method array getTargets() 获取该Job的targets列表
 * @method void setTargets(array $Targets) 设置该Job的targets列表
 * @method string getJobName() 获取job的名称
 * @method void setJobName(string $JobName) 设置job的名称
 * @method integer getTotal() 获取targets总数
 * @method void setTotal(integer $Total) 设置targets总数
 * @method integer getUp() 获取健康的target总数
 * @method void setUp(integer $Up) 设置健康的target总数
 */
class PrometheusJobTargets extends AbstractModel
{
    /**
     * @var array 该Job的targets列表
     */
    public $Targets;

    /**
     * @var string job的名称
     */
    public $JobName;

    /**
     * @var integer targets总数
     */
    public $Total;

    /**
     * @var integer 健康的target总数
     */
    public $Up;

    /**
     * @param array $Targets 该Job的targets列表
     * @param string $JobName job的名称
     * @param integer $Total targets总数
     * @param integer $Up 健康的target总数
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
        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new PrometheusTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Up",$param) and $param["Up"] !== null) {
            $this->Up = $param["Up"];
        }
    }
}
