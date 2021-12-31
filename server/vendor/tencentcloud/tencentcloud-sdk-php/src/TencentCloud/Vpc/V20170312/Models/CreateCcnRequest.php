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
 * CreateCcn请求参数结构体
 *
 * @method string getCcnName() 获取CCN名称，最大长度不能超过60个字节。
 * @method void setCcnName(string $CcnName) 设置CCN名称，最大长度不能超过60个字节。
 * @method string getCcnDescription() 获取CCN描述信息，最大长度不能超过100个字节。
 * @method void setCcnDescription(string $CcnDescription) 设置CCN描述信息，最大长度不能超过100个字节。
 * @method string getQosLevel() 获取CCN服务质量，'PT'：白金，'AU'：金，'AG'：银，默认为‘AU’。
 * @method void setQosLevel(string $QosLevel) 设置CCN服务质量，'PT'：白金，'AU'：金，'AG'：银，默认为‘AU’。
 * @method string getInstanceChargeType() 获取计费模式，PREPAID：表示预付费，即包年包月，POSTPAID：表示后付费，即按量计费。默认：POSTPAID。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置计费模式，PREPAID：表示预付费，即包年包月，POSTPAID：表示后付费，即按量计费。默认：POSTPAID。
 * @method string getBandwidthLimitType() 获取限速类型，OUTER_REGION_LIMIT表示地域出口限速，INTER_REGION_LIMIT为地域间限速，默认为OUTER_REGION_LIMIT。预付费模式仅支持地域间限速，后付费模式支持地域间限速和地域出口限速。
 * @method void setBandwidthLimitType(string $BandwidthLimitType) 设置限速类型，OUTER_REGION_LIMIT表示地域出口限速，INTER_REGION_LIMIT为地域间限速，默认为OUTER_REGION_LIMIT。预付费模式仅支持地域间限速，后付费模式支持地域间限速和地域出口限速。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 */
class CreateCcnRequest extends AbstractModel
{
    /**
     * @var string CCN名称，最大长度不能超过60个字节。
     */
    public $CcnName;

    /**
     * @var string CCN描述信息，最大长度不能超过100个字节。
     */
    public $CcnDescription;

    /**
     * @var string CCN服务质量，'PT'：白金，'AU'：金，'AG'：银，默认为‘AU’。
     */
    public $QosLevel;

    /**
     * @var string 计费模式，PREPAID：表示预付费，即包年包月，POSTPAID：表示后付费，即按量计费。默认：POSTPAID。
     */
    public $InstanceChargeType;

    /**
     * @var string 限速类型，OUTER_REGION_LIMIT表示地域出口限速，INTER_REGION_LIMIT为地域间限速，默认为OUTER_REGION_LIMIT。预付费模式仅支持地域间限速，后付费模式支持地域间限速和地域出口限速。
     */
    public $BandwidthLimitType;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @param string $CcnName CCN名称，最大长度不能超过60个字节。
     * @param string $CcnDescription CCN描述信息，最大长度不能超过100个字节。
     * @param string $QosLevel CCN服务质量，'PT'：白金，'AU'：金，'AG'：银，默认为‘AU’。
     * @param string $InstanceChargeType 计费模式，PREPAID：表示预付费，即包年包月，POSTPAID：表示后付费，即按量计费。默认：POSTPAID。
     * @param string $BandwidthLimitType 限速类型，OUTER_REGION_LIMIT表示地域出口限速，INTER_REGION_LIMIT为地域间限速，默认为OUTER_REGION_LIMIT。预付费模式仅支持地域间限速，后付费模式支持地域间限速和地域出口限速。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
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
        if (array_key_exists("CcnName",$param) and $param["CcnName"] !== null) {
            $this->CcnName = $param["CcnName"];
        }

        if (array_key_exists("CcnDescription",$param) and $param["CcnDescription"] !== null) {
            $this->CcnDescription = $param["CcnDescription"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("BandwidthLimitType",$param) and $param["BandwidthLimitType"] !== null) {
            $this->BandwidthLimitType = $param["BandwidthLimitType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
