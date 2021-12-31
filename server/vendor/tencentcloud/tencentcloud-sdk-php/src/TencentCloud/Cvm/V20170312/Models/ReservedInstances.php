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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述用户已购买预留实例计费信息
 *
 * @method string getReservedInstancesId() 获取已购买的预留实例计费ID。形如：650c138f-ae7e-4750-952a-96841d6e9fc1。
 * @method void setReservedInstancesId(string $ReservedInstancesId) 设置已购买的预留实例计费ID。形如：650c138f-ae7e-4750-952a-96841d6e9fc1。
 * @method string getInstanceType() 获取预留实例计费的规格。形如：S3.MEDIUM4。
返回项：<a href="https://cloud.tencent.com/document/product/213/11518">预留实例计费规格列表</a>
 * @method void setInstanceType(string $InstanceType) 设置预留实例计费的规格。形如：S3.MEDIUM4。
返回项：<a href="https://cloud.tencent.com/document/product/213/11518">预留实例计费规格列表</a>
 * @method string getZone() 获取预留实例计费可购买的可用区。形如：ap-guangzhou-1。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
 * @method void setZone(string $Zone) 设置预留实例计费可购买的可用区。形如：ap-guangzhou-1。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
 * @method string getStartTime() 获取预留实例计费开始时间。形如：1949-10-01 00:00:00
 * @method void setStartTime(string $StartTime) 设置预留实例计费开始时间。形如：1949-10-01 00:00:00
 * @method string getEndTime() 获取预留实例计费到期时间。形如：1949-10-01 00:00:00
 * @method void setEndTime(string $EndTime) 设置预留实例计费到期时间。形如：1949-10-01 00:00:00
 * @method integer getDuration() 获取预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒。
 * @method void setDuration(integer $Duration) 设置预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒。
 * @method integer getInstanceCount() 获取已购买的预留实例计费个数。形如：10。
 * @method void setInstanceCount(integer $InstanceCount) 设置已购买的预留实例计费个数。形如：10。
 * @method string getProductDescription() 获取描述预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
 * @method void setProductDescription(string $ProductDescription) 设置描述预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
 * @method string getState() 获取预留实例计费购买的状态。形如：active
返回项： active (以创建) | pending (等待被创建) | retired (过期)。
 * @method void setState(string $State) 设置预留实例计费购买的状态。形如：active
返回项： active (以创建) | pending (等待被创建) | retired (过期)。
 * @method string getCurrencyCode() 获取可购买的预留实例计费类型的结算货币，使用ISO 4217标准货币代码。形如：USD。
返回项：USD（美元）。
 * @method void setCurrencyCode(string $CurrencyCode) 设置可购买的预留实例计费类型的结算货币，使用ISO 4217标准货币代码。形如：USD。
返回项：USD（美元）。
 * @method string getOfferingType() 获取预留实例计费的付款类型。形如：All Upfront。
返回项： All Upfront (预付全部费用)。
 * @method void setOfferingType(string $OfferingType) 设置预留实例计费的付款类型。形如：All Upfront。
返回项： All Upfront (预付全部费用)。
 * @method string getInstanceFamily() 获取预留实例计费的类型。形如：S3。
返回项：<a href="https://cloud.tencent.com/document/product/213/11518">预留实例计费类型列表</a>
 * @method void setInstanceFamily(string $InstanceFamily) 设置预留实例计费的类型。形如：S3。
返回项：<a href="https://cloud.tencent.com/document/product/213/11518">预留实例计费类型列表</a>
 */
class ReservedInstances extends AbstractModel
{
    /**
     * @var string 已购买的预留实例计费ID。形如：650c138f-ae7e-4750-952a-96841d6e9fc1。
     */
    public $ReservedInstancesId;

    /**
     * @var string 预留实例计费的规格。形如：S3.MEDIUM4。
返回项：<a href="https://cloud.tencent.com/document/product/213/11518">预留实例计费规格列表</a>
     */
    public $InstanceType;

    /**
     * @var string 预留实例计费可购买的可用区。形如：ap-guangzhou-1。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
     */
    public $Zone;

    /**
     * @var string 预留实例计费开始时间。形如：1949-10-01 00:00:00
     */
    public $StartTime;

    /**
     * @var string 预留实例计费到期时间。形如：1949-10-01 00:00:00
     */
    public $EndTime;

    /**
     * @var integer 预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒。
     */
    public $Duration;

    /**
     * @var integer 已购买的预留实例计费个数。形如：10。
     */
    public $InstanceCount;

    /**
     * @var string 描述预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
     */
    public $ProductDescription;

    /**
     * @var string 预留实例计费购买的状态。形如：active
返回项： active (以创建) | pending (等待被创建) | retired (过期)。
     */
    public $State;

    /**
     * @var string 可购买的预留实例计费类型的结算货币，使用ISO 4217标准货币代码。形如：USD。
返回项：USD（美元）。
     */
    public $CurrencyCode;

    /**
     * @var string 预留实例计费的付款类型。形如：All Upfront。
返回项： All Upfront (预付全部费用)。
     */
    public $OfferingType;

    /**
     * @var string 预留实例计费的类型。形如：S3。
返回项：<a href="https://cloud.tencent.com/document/product/213/11518">预留实例计费类型列表</a>
     */
    public $InstanceFamily;

    /**
     * @param string $ReservedInstancesId 已购买的预留实例计费ID。形如：650c138f-ae7e-4750-952a-96841d6e9fc1。
     * @param string $InstanceType 预留实例计费的规格。形如：S3.MEDIUM4。
返回项：<a href="https://cloud.tencent.com/document/product/213/11518">预留实例计费规格列表</a>
     * @param string $Zone 预留实例计费可购买的可用区。形如：ap-guangzhou-1。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
     * @param string $StartTime 预留实例计费开始时间。形如：1949-10-01 00:00:00
     * @param string $EndTime 预留实例计费到期时间。形如：1949-10-01 00:00:00
     * @param integer $Duration 预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒。
     * @param integer $InstanceCount 已购买的预留实例计费个数。形如：10。
     * @param string $ProductDescription 描述预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
     * @param string $State 预留实例计费购买的状态。形如：active
返回项： active (以创建) | pending (等待被创建) | retired (过期)。
     * @param string $CurrencyCode 可购买的预留实例计费类型的结算货币，使用ISO 4217标准货币代码。形如：USD。
返回项：USD（美元）。
     * @param string $OfferingType 预留实例计费的付款类型。形如：All Upfront。
返回项： All Upfront (预付全部费用)。
     * @param string $InstanceFamily 预留实例计费的类型。形如：S3。
返回项：<a href="https://cloud.tencent.com/document/product/213/11518">预留实例计费类型列表</a>
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
        if (array_key_exists("ReservedInstancesId",$param) and $param["ReservedInstancesId"] !== null) {
            $this->ReservedInstancesId = $param["ReservedInstancesId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CurrencyCode",$param) and $param["CurrencyCode"] !== null) {
            $this->CurrencyCode = $param["CurrencyCode"];
        }

        if (array_key_exists("OfferingType",$param) and $param["OfferingType"] !== null) {
            $this->OfferingType = $param["OfferingType"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }
    }
}
