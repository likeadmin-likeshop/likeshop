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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述带宽包信息的结构
 *
 * @method string getBandwidthPackageId() 获取带宽包唯一标识Id
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包唯一标识Id
 * @method string getNetworkType() 获取带宽包类型，包括'BGP','SINGLEISP','ANYCAST'
 * @method void setNetworkType(string $NetworkType) 设置带宽包类型，包括'BGP','SINGLEISP','ANYCAST'
 * @method string getChargeType() 获取带宽包计费类型，包括'TOP5_POSTPAID_BY_MONTH'和'PERCENT95_POSTPAID_BY_MONTH'
 * @method void setChargeType(string $ChargeType) 设置带宽包计费类型，包括'TOP5_POSTPAID_BY_MONTH'和'PERCENT95_POSTPAID_BY_MONTH'
 * @method string getBandwidthPackageName() 获取带宽包名称
 * @method void setBandwidthPackageName(string $BandwidthPackageName) 设置带宽包名称
 * @method string getCreatedTime() 获取带宽包创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setCreatedTime(string $CreatedTime) 设置带宽包创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method string getStatus() 获取带宽包状态，包括'CREATING','CREATED','DELETING','DELETED'
 * @method void setStatus(string $Status) 设置带宽包状态，包括'CREATING','CREATED','DELETING','DELETED'
 * @method array getResourceSet() 获取带宽包资源信息
 * @method void setResourceSet(array $ResourceSet) 设置带宽包资源信息
 * @method integer getBandwidth() 获取带宽包限速大小。单位：Mbps，-1表示不限速。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽包限速大小。单位：Mbps，-1表示不限速。
 */
class BandwidthPackage extends AbstractModel
{
    /**
     * @var string 带宽包唯一标识Id
     */
    public $BandwidthPackageId;

    /**
     * @var string 带宽包类型，包括'BGP','SINGLEISP','ANYCAST'
     */
    public $NetworkType;

    /**
     * @var string 带宽包计费类型，包括'TOP5_POSTPAID_BY_MONTH'和'PERCENT95_POSTPAID_BY_MONTH'
     */
    public $ChargeType;

    /**
     * @var string 带宽包名称
     */
    public $BandwidthPackageName;

    /**
     * @var string 带宽包创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $CreatedTime;

    /**
     * @var string 带宽包状态，包括'CREATING','CREATED','DELETING','DELETED'
     */
    public $Status;

    /**
     * @var array 带宽包资源信息
     */
    public $ResourceSet;

    /**
     * @var integer 带宽包限速大小。单位：Mbps，-1表示不限速。
     */
    public $Bandwidth;

    /**
     * @param string $BandwidthPackageId 带宽包唯一标识Id
     * @param string $NetworkType 带宽包类型，包括'BGP','SINGLEISP','ANYCAST'
     * @param string $ChargeType 带宽包计费类型，包括'TOP5_POSTPAID_BY_MONTH'和'PERCENT95_POSTPAID_BY_MONTH'
     * @param string $BandwidthPackageName 带宽包名称
     * @param string $CreatedTime 带宽包创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     * @param string $Status 带宽包状态，包括'CREATING','CREATED','DELETING','DELETED'
     * @param array $ResourceSet 带宽包资源信息
     * @param integer $Bandwidth 带宽包限速大小。单位：Mbps，-1表示不限速。
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
        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("BandwidthPackageName",$param) and $param["BandwidthPackageName"] !== null) {
            $this->BandwidthPackageName = $param["BandwidthPackageName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceSet",$param) and $param["ResourceSet"] !== null) {
            $this->ResourceSet = [];
            foreach ($param["ResourceSet"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->ResourceSet, $obj);
            }
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
