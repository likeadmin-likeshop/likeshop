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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceDbauditInstance请求参数结构体
 *
 * @method string getInstanceVersion() 获取实例规格，取值范围： cdsaudit，cdsaudit_adv， cdsaudit_ent 分别为合规版，高级版，企业版
 * @method void setInstanceVersion(string $InstanceVersion) 设置实例规格，取值范围： cdsaudit，cdsaudit_adv， cdsaudit_ent 分别为合规版，高级版，企业版
 * @method string getInquiryType() 获取询价类型： renew，续费；newbuy，新购
 * @method void setInquiryType(string $InquiryType) 设置询价类型： renew，续费；newbuy，新购
 * @method integer getTimeSpan() 获取购买实例的时长。取值范围：1（y/m），2（y/m）,，3（y/m），4（m）， 5（m），6（m）， 7（m），8（m），9（m）， 10（m）
 * @method void setTimeSpan(integer $TimeSpan) 设置购买实例的时长。取值范围：1（y/m），2（y/m）,，3（y/m），4（m）， 5（m），6（m）， 7（m），8（m），9（m）， 10（m）
 * @method string getTimeUnit() 获取购买时长单位，y：年；m：月
 * @method void setTimeUnit(string $TimeUnit) 设置购买时长单位，y：年；m：月
 * @method string getServiceRegion() 获取实例所在地域
 * @method void setServiceRegion(string $ServiceRegion) 设置实例所在地域
 */
class InquiryPriceDbauditInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例规格，取值范围： cdsaudit，cdsaudit_adv， cdsaudit_ent 分别为合规版，高级版，企业版
     */
    public $InstanceVersion;

    /**
     * @var string 询价类型： renew，续费；newbuy，新购
     */
    public $InquiryType;

    /**
     * @var integer 购买实例的时长。取值范围：1（y/m），2（y/m）,，3（y/m），4（m）， 5（m），6（m）， 7（m），8（m），9（m）， 10（m）
     */
    public $TimeSpan;

    /**
     * @var string 购买时长单位，y：年；m：月
     */
    public $TimeUnit;

    /**
     * @var string 实例所在地域
     */
    public $ServiceRegion;

    /**
     * @param string $InstanceVersion 实例规格，取值范围： cdsaudit，cdsaudit_adv， cdsaudit_ent 分别为合规版，高级版，企业版
     * @param string $InquiryType 询价类型： renew，续费；newbuy，新购
     * @param integer $TimeSpan 购买实例的时长。取值范围：1（y/m），2（y/m）,，3（y/m），4（m）， 5（m），6（m）， 7（m），8（m），9（m）， 10（m）
     * @param string $TimeUnit 购买时长单位，y：年；m：月
     * @param string $ServiceRegion 实例所在地域
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
        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("InquiryType",$param) and $param["InquiryType"] !== null) {
            $this->InquiryType = $param["InquiryType"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ServiceRegion",$param) and $param["ServiceRegion"] !== null) {
            $this->ServiceRegion = $param["ServiceRegion"];
        }
    }
}
