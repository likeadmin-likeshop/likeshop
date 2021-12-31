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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐包信息统计响应包体
 *
 * @method integer getPackageCreateTime() 获取套餐包创建时间，UNIX 时间戳（单位：秒）。
 * @method void setPackageCreateTime(integer $PackageCreateTime) 设置套餐包创建时间，UNIX 时间戳（单位：秒）。
 * @method integer getPackageEffectiveTime() 获取套餐包生效时间，UNIX 时间戳（单位：秒）。
 * @method void setPackageEffectiveTime(integer $PackageEffectiveTime) 设置套餐包生效时间，UNIX 时间戳（单位：秒）。
 * @method integer getPackageExpiredTime() 获取套餐包过期时间，UNIX 时间戳（单位：秒）。
 * @method void setPackageExpiredTime(integer $PackageExpiredTime) 设置套餐包过期时间，UNIX 时间戳（单位：秒）。
 * @method integer getPackageAmount() 获取套餐包条数。
 * @method void setPackageAmount(integer $PackageAmount) 设置套餐包条数。
 * @method integer getPackageType() 获取套餐包类别，0表示赠送套餐包，1表示购买套餐包。
 * @method void setPackageType(integer $PackageType) 设置套餐包类别，0表示赠送套餐包，1表示购买套餐包。
 * @method integer getPackageId() 获取套餐包 ID。
 * @method void setPackageId(integer $PackageId) 设置套餐包 ID。
 * @method integer getCurrentUsage() 获取当前使用套餐包条数。
 * @method void setCurrentUsage(integer $CurrentUsage) 设置当前使用套餐包条数。
 */
class SmsPackagesStatistics extends AbstractModel
{
    /**
     * @var integer 套餐包创建时间，UNIX 时间戳（单位：秒）。
     */
    public $PackageCreateTime;

    /**
     * @var integer 套餐包生效时间，UNIX 时间戳（单位：秒）。
     */
    public $PackageEffectiveTime;

    /**
     * @var integer 套餐包过期时间，UNIX 时间戳（单位：秒）。
     */
    public $PackageExpiredTime;

    /**
     * @var integer 套餐包条数。
     */
    public $PackageAmount;

    /**
     * @var integer 套餐包类别，0表示赠送套餐包，1表示购买套餐包。
     */
    public $PackageType;

    /**
     * @var integer 套餐包 ID。
     */
    public $PackageId;

    /**
     * @var integer 当前使用套餐包条数。
     */
    public $CurrentUsage;

    /**
     * @param integer $PackageCreateTime 套餐包创建时间，UNIX 时间戳（单位：秒）。
     * @param integer $PackageEffectiveTime 套餐包生效时间，UNIX 时间戳（单位：秒）。
     * @param integer $PackageExpiredTime 套餐包过期时间，UNIX 时间戳（单位：秒）。
     * @param integer $PackageAmount 套餐包条数。
     * @param integer $PackageType 套餐包类别，0表示赠送套餐包，1表示购买套餐包。
     * @param integer $PackageId 套餐包 ID。
     * @param integer $CurrentUsage 当前使用套餐包条数。
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
        if (array_key_exists("PackageCreateTime",$param) and $param["PackageCreateTime"] !== null) {
            $this->PackageCreateTime = $param["PackageCreateTime"];
        }

        if (array_key_exists("PackageEffectiveTime",$param) and $param["PackageEffectiveTime"] !== null) {
            $this->PackageEffectiveTime = $param["PackageEffectiveTime"];
        }

        if (array_key_exists("PackageExpiredTime",$param) and $param["PackageExpiredTime"] !== null) {
            $this->PackageExpiredTime = $param["PackageExpiredTime"];
        }

        if (array_key_exists("PackageAmount",$param) and $param["PackageAmount"] !== null) {
            $this->PackageAmount = $param["PackageAmount"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("CurrentUsage",$param) and $param["CurrentUsage"] !== null) {
            $this->CurrentUsage = $param["CurrentUsage"];
        }
    }
}
