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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmsByTask返回参数结构体
 *
 * @method array getAlarmInfos() 获取告警信息列表
 * @method void setAlarmInfos(array $AlarmInfos) 设置告警信息列表
 * @method float getFaultRatio() 获取故障率
 * @method void setFaultRatio(float $FaultRatio) 设置故障率
 * @method string getFaultTimeSpec() 获取故障总时长
 * @method void setFaultTimeSpec(string $FaultTimeSpec) 设置故障总时长
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAlarmsByTaskResponse extends AbstractModel
{
    /**
     * @var array 告警信息列表
     */
    public $AlarmInfos;

    /**
     * @var float 故障率
     */
    public $FaultRatio;

    /**
     * @var string 故障总时长
     */
    public $FaultTimeSpec;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AlarmInfos 告警信息列表
     * @param float $FaultRatio 故障率
     * @param string $FaultTimeSpec 故障总时长
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AlarmInfos",$param) and $param["AlarmInfos"] !== null) {
            $this->AlarmInfos = [];
            foreach ($param["AlarmInfos"] as $key => $value){
                $obj = new AlarmInfo();
                $obj->deserialize($value);
                array_push($this->AlarmInfos, $obj);
            }
        }

        if (array_key_exists("FaultRatio",$param) and $param["FaultRatio"] !== null) {
            $this->FaultRatio = $param["FaultRatio"];
        }

        if (array_key_exists("FaultTimeSpec",$param) and $param["FaultTimeSpec"] !== null) {
            $this->FaultTimeSpec = $param["FaultTimeSpec"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
