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
 * GetResultSummary返回参数结构体
 *
 * @method array getRealData() 获取实时统计数据
 * @method void setRealData(array $RealData) 设置实时统计数据
 * @method array getDayData() 获取按天的统计数据
 * @method void setDayData(array $DayData) 设置按天的统计数据
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetResultSummaryResponse extends AbstractModel
{
    /**
     * @var array 实时统计数据
     */
    public $RealData;

    /**
     * @var array 按天的统计数据
     */
    public $DayData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RealData 实时统计数据
     * @param array $DayData 按天的统计数据
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
        if (array_key_exists("RealData",$param) and $param["RealData"] !== null) {
            $this->RealData = [];
            foreach ($param["RealData"] as $key => $value){
                $obj = new ResultSummary();
                $obj->deserialize($value);
                array_push($this->RealData, $obj);
            }
        }

        if (array_key_exists("DayData",$param) and $param["DayData"] !== null) {
            $this->DayData = [];
            foreach ($param["DayData"] as $key => $value){
                $obj = new ResultSummary();
                $obj->deserialize($value);
                array_push($this->DayData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
