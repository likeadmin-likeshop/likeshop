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
 * CreateBandwidthPackage请求参数结构体
 *
 * @method string getNetworkType() 获取带宽包类型，包括'HIGH_QUALITY_BGP', 'BGP'，'SINGLEISP'，'ANYCAST'
 * @method void setNetworkType(string $NetworkType) 设置带宽包类型，包括'HIGH_QUALITY_BGP', 'BGP'，'SINGLEISP'，'ANYCAST'
 * @method string getChargeType() 获取带宽包计费类型，包括‘TOP5_POSTPAID_BY_MONTH’，‘PERCENT95_POSTPAID_BY_MONTH’
 * @method void setChargeType(string $ChargeType) 设置带宽包计费类型，包括‘TOP5_POSTPAID_BY_MONTH’，‘PERCENT95_POSTPAID_BY_MONTH’
 * @method string getBandwidthPackageName() 获取带宽包名字
 * @method void setBandwidthPackageName(string $BandwidthPackageName) 设置带宽包名字
 * @method integer getBandwidthPackageCount() 获取带宽包数量(传统账户类型只能填1)
 * @method void setBandwidthPackageCount(integer $BandwidthPackageCount) 设置带宽包数量(传统账户类型只能填1)
 * @method integer getInternetMaxBandwidth() 获取带宽包限速大小。单位：Mbps，-1表示不限速。该功能当前内测中，暂不对外开放。
 * @method void setInternetMaxBandwidth(integer $InternetMaxBandwidth) 设置带宽包限速大小。单位：Mbps，-1表示不限速。该功能当前内测中，暂不对外开放。
 * @method array getTags() 获取需要关联的标签列表。
 * @method void setTags(array $Tags) 设置需要关联的标签列表。
 * @method string getProtocol() 获取带宽包协议类型。当前支持'ipv4'和'ipv6'协议带宽包，默认值是'ipv4'。
 * @method void setProtocol(string $Protocol) 设置带宽包协议类型。当前支持'ipv4'和'ipv6'协议带宽包，默认值是'ipv4'。
 */
class CreateBandwidthPackageRequest extends AbstractModel
{
    /**
     * @var string 带宽包类型，包括'HIGH_QUALITY_BGP', 'BGP'，'SINGLEISP'，'ANYCAST'
     */
    public $NetworkType;

    /**
     * @var string 带宽包计费类型，包括‘TOP5_POSTPAID_BY_MONTH’，‘PERCENT95_POSTPAID_BY_MONTH’
     */
    public $ChargeType;

    /**
     * @var string 带宽包名字
     */
    public $BandwidthPackageName;

    /**
     * @var integer 带宽包数量(传统账户类型只能填1)
     */
    public $BandwidthPackageCount;

    /**
     * @var integer 带宽包限速大小。单位：Mbps，-1表示不限速。该功能当前内测中，暂不对外开放。
     */
    public $InternetMaxBandwidth;

    /**
     * @var array 需要关联的标签列表。
     */
    public $Tags;

    /**
     * @var string 带宽包协议类型。当前支持'ipv4'和'ipv6'协议带宽包，默认值是'ipv4'。
     */
    public $Protocol;

    /**
     * @param string $NetworkType 带宽包类型，包括'HIGH_QUALITY_BGP', 'BGP'，'SINGLEISP'，'ANYCAST'
     * @param string $ChargeType 带宽包计费类型，包括‘TOP5_POSTPAID_BY_MONTH’，‘PERCENT95_POSTPAID_BY_MONTH’
     * @param string $BandwidthPackageName 带宽包名字
     * @param integer $BandwidthPackageCount 带宽包数量(传统账户类型只能填1)
     * @param integer $InternetMaxBandwidth 带宽包限速大小。单位：Mbps，-1表示不限速。该功能当前内测中，暂不对外开放。
     * @param array $Tags 需要关联的标签列表。
     * @param string $Protocol 带宽包协议类型。当前支持'ipv4'和'ipv6'协议带宽包，默认值是'ipv4'。
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
        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("BandwidthPackageName",$param) and $param["BandwidthPackageName"] !== null) {
            $this->BandwidthPackageName = $param["BandwidthPackageName"];
        }

        if (array_key_exists("BandwidthPackageCount",$param) and $param["BandwidthPackageCount"] !== null) {
            $this->BandwidthPackageCount = $param["BandwidthPackageCount"];
        }

        if (array_key_exists("InternetMaxBandwidth",$param) and $param["InternetMaxBandwidth"] !== null) {
            $this->InternetMaxBandwidth = $param["InternetMaxBandwidth"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
