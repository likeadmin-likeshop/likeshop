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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBindingPolicyObjectList接口的Dimension
 *
 * @method integer getRegionId() 获取地域id
 * @method void setRegionId(integer $RegionId) 设置地域id
 * @method string getRegion() 获取地域简称
 * @method void setRegion(string $Region) 设置地域简称
 * @method string getDimensions() 获取维度组合json字符串
 * @method void setDimensions(string $Dimensions) 设置维度组合json字符串
 * @method string getEventDimensions() 获取事件维度组合json字符串
 * @method void setEventDimensions(string $EventDimensions) 设置事件维度组合json字符串
 */
class DescribeBindingPolicyObjectListDimension extends AbstractModel
{
    /**
     * @var integer 地域id
     */
    public $RegionId;

    /**
     * @var string 地域简称
     */
    public $Region;

    /**
     * @var string 维度组合json字符串
     */
    public $Dimensions;

    /**
     * @var string 事件维度组合json字符串
     */
    public $EventDimensions;

    /**
     * @param integer $RegionId 地域id
     * @param string $Region 地域简称
     * @param string $Dimensions 维度组合json字符串
     * @param string $EventDimensions 事件维度组合json字符串
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("EventDimensions",$param) and $param["EventDimensions"] !== null) {
            $this->EventDimensions = $param["EventDimensions"];
        }
    }
}
