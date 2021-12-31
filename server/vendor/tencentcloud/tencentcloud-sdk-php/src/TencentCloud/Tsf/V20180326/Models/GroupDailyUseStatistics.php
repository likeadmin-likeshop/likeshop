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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分组日使用统计对象
 *
 * @method array getTopReqAmount() 获取总调用数
 * @method void setTopReqAmount(array $TopReqAmount) 设置总调用数
 * @method array getTopFailureRate() 获取平均错误率
 * @method void setTopFailureRate(array $TopFailureRate) 设置平均错误率
 * @method array getTopAvgTimeCost() 获取平均响应耗时
 * @method void setTopAvgTimeCost(array $TopAvgTimeCost) 设置平均响应耗时
 */
class GroupDailyUseStatistics extends AbstractModel
{
    /**
     * @var array 总调用数
     */
    public $TopReqAmount;

    /**
     * @var array 平均错误率
     */
    public $TopFailureRate;

    /**
     * @var array 平均响应耗时
     */
    public $TopAvgTimeCost;

    /**
     * @param array $TopReqAmount 总调用数
     * @param array $TopFailureRate 平均错误率
     * @param array $TopAvgTimeCost 平均响应耗时
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
        if (array_key_exists("TopReqAmount",$param) and $param["TopReqAmount"] !== null) {
            $this->TopReqAmount = [];
            foreach ($param["TopReqAmount"] as $key => $value){
                $obj = new GroupUseStatisticsEntity();
                $obj->deserialize($value);
                array_push($this->TopReqAmount, $obj);
            }
        }

        if (array_key_exists("TopFailureRate",$param) and $param["TopFailureRate"] !== null) {
            $this->TopFailureRate = [];
            foreach ($param["TopFailureRate"] as $key => $value){
                $obj = new GroupUseStatisticsEntity();
                $obj->deserialize($value);
                array_push($this->TopFailureRate, $obj);
            }
        }

        if (array_key_exists("TopAvgTimeCost",$param) and $param["TopAvgTimeCost"] !== null) {
            $this->TopAvgTimeCost = [];
            foreach ($param["TopAvgTimeCost"] as $key => $value){
                $obj = new GroupUseStatisticsEntity();
                $obj->deserialize($value);
                array_push($this->TopAvgTimeCost, $obj);
            }
        }
    }
}
