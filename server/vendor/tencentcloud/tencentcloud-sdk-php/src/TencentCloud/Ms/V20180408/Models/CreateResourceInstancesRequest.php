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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResourceInstances请求参数结构体
 *
 * @method integer getPid() 获取资源类型id。13624：加固专业版。
 * @method void setPid(integer $Pid) 设置资源类型id。13624：加固专业版。
 * @method string getTimeUnit() 获取时间单位，取值为d，m，y，分别表示天，月，年。
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位，取值为d，m，y，分别表示天，月，年。
 * @method integer getTimeSpan() 获取时间数量。
 * @method void setTimeSpan(integer $TimeSpan) 设置时间数量。
 * @method integer getResourceNum() 获取资源数量。
 * @method void setResourceNum(integer $ResourceNum) 设置资源数量。
 */
class CreateResourceInstancesRequest extends AbstractModel
{
    /**
     * @var integer 资源类型id。13624：加固专业版。
     */
    public $Pid;

    /**
     * @var string 时间单位，取值为d，m，y，分别表示天，月，年。
     */
    public $TimeUnit;

    /**
     * @var integer 时间数量。
     */
    public $TimeSpan;

    /**
     * @var integer 资源数量。
     */
    public $ResourceNum;

    /**
     * @param integer $Pid 资源类型id。13624：加固专业版。
     * @param string $TimeUnit 时间单位，取值为d，m，y，分别表示天，月，年。
     * @param integer $TimeSpan 时间数量。
     * @param integer $ResourceNum 资源数量。
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
        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ResourceNum",$param) and $param["ResourceNum"] !== null) {
            $this->ResourceNum = $param["ResourceNum"];
        }
    }
}
