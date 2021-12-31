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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getPeriod() 获取续费周期。按月续费最多48个月。默认查询续费一个月的价格
 * @method void setPeriod(integer $Period) 设置续费周期。按月续费最多48个月。默认查询续费一个月的价格
 * @method string getTimeUnit() 获取续费周期单位。month表示按月续费，当前只支持按月付费查询价格
 * @method void setTimeUnit(string $TimeUnit) 设置续费周期单位。month表示按月续费，当前只支持按月付费查询价格
 */
class InquiryPriceRenewDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 续费周期。按月续费最多48个月。默认查询续费一个月的价格
     */
    public $Period;

    /**
     * @var string 续费周期单位。month表示按月续费，当前只支持按月付费查询价格
     */
    public $TimeUnit;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Period 续费周期。按月续费最多48个月。默认查询续费一个月的价格
     * @param string $TimeUnit 续费周期单位。month表示按月续费，当前只支持按月付费查询价格
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }
    }
}
