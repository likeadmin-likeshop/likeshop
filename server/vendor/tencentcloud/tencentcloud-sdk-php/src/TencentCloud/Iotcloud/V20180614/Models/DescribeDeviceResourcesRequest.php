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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceResources请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，Offset从0开始
 * @method void setOffset(integer $Offset) 设置偏移量，Offset从0开始
 * @method integer getLimit() 获取分页的大小，数值范围 10-250
 * @method void setLimit(integer $Limit) 设置分页的大小，数值范围 10-250
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getDeviceName() 获取需要过滤的设备名称
 * @method void setDeviceName(string $DeviceName) 设置需要过滤的设备名称
 * @method string getStartTime() 获取资源搜索开始时间
 * @method void setStartTime(string $StartTime) 设置资源搜索开始时间
 * @method string getEndTime() 获取资源搜索结束时间
 * @method void setEndTime(string $EndTime) 设置资源搜索结束时间
 */
class DescribeDeviceResourcesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，Offset从0开始
     */
    public $Offset;

    /**
     * @var integer 分页的大小，数值范围 10-250
     */
    public $Limit;

    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 需要过滤的设备名称
     */
    public $DeviceName;

    /**
     * @var string 资源搜索开始时间
     */
    public $StartTime;

    /**
     * @var string 资源搜索结束时间
     */
    public $EndTime;

    /**
     * @param integer $Offset 偏移量，Offset从0开始
     * @param integer $Limit 分页的大小，数值范围 10-250
     * @param string $ProductID 产品ID
     * @param string $DeviceName 需要过滤的设备名称
     * @param string $StartTime 资源搜索开始时间
     * @param string $EndTime 资源搜索结束时间
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
