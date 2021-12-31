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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDN报表数据
 *
 * @method string getResourceId() 获取项目ID/域名ID。
 * @method void setResourceId(string $ResourceId) 设置项目ID/域名ID。
 * @method string getResource() 获取项目名称/域名。
 * @method void setResource(string $Resource) 设置项目名称/域名。
 * @method integer getValue() 获取流量总和/带宽最大值，单位分别为bytes，bps。
 * @method void setValue(integer $Value) 设置流量总和/带宽最大值，单位分别为bytes，bps。
 * @method float getPercentage() 获取单个资源占总体百分比。
 * @method void setPercentage(float $Percentage) 设置单个资源占总体百分比。
 * @method integer getBillingValue() 获取计费流量总和/计费带宽最大值，单位分别为bytes，bps。
 * @method void setBillingValue(integer $BillingValue) 设置计费流量总和/计费带宽最大值，单位分别为bytes，bps。
 * @method float getBillingPercentage() 获取计费数值占总体百分比。
 * @method void setBillingPercentage(float $BillingPercentage) 设置计费数值占总体百分比。
 */
class ReportData extends AbstractModel
{
    /**
     * @var string 项目ID/域名ID。
     */
    public $ResourceId;

    /**
     * @var string 项目名称/域名。
     */
    public $Resource;

    /**
     * @var integer 流量总和/带宽最大值，单位分别为bytes，bps。
     */
    public $Value;

    /**
     * @var float 单个资源占总体百分比。
     */
    public $Percentage;

    /**
     * @var integer 计费流量总和/计费带宽最大值，单位分别为bytes，bps。
     */
    public $BillingValue;

    /**
     * @var float 计费数值占总体百分比。
     */
    public $BillingPercentage;

    /**
     * @param string $ResourceId 项目ID/域名ID。
     * @param string $Resource 项目名称/域名。
     * @param integer $Value 流量总和/带宽最大值，单位分别为bytes，bps。
     * @param float $Percentage 单个资源占总体百分比。
     * @param integer $BillingValue 计费流量总和/计费带宽最大值，单位分别为bytes，bps。
     * @param float $BillingPercentage 计费数值占总体百分比。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Percentage",$param) and $param["Percentage"] !== null) {
            $this->Percentage = $param["Percentage"];
        }

        if (array_key_exists("BillingValue",$param) and $param["BillingValue"] !== null) {
            $this->BillingValue = $param["BillingValue"];
        }

        if (array_key_exists("BillingPercentage",$param) and $param["BillingPercentage"] !== null) {
            $this->BillingPercentage = $param["BillingPercentage"];
        }
    }
}
