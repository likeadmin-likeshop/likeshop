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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐包信息统计响应包体
 *
 * @method string getPackageCreateTime() 获取套餐包创建时间，标准时间，例如：2019-10-08 17:18:37。
 * @method void setPackageCreateTime(string $PackageCreateTime) 设置套餐包创建时间，标准时间，例如：2019-10-08 17:18:37。
 * @method integer getPackageCreateUnixTime() 获取套餐包创建时间，UNIX 时间戳（单位：秒）。
 * @method void setPackageCreateUnixTime(integer $PackageCreateUnixTime) 设置套餐包创建时间，UNIX 时间戳（单位：秒）。
 * @method string getPackageEffectiveTime() 获取套餐包生效时间，标准时间，例如：2019-10-08 17:18:37。
 * @method void setPackageEffectiveTime(string $PackageEffectiveTime) 设置套餐包生效时间，标准时间，例如：2019-10-08 17:18:37。
 * @method integer getPackageEffectiveUnixTime() 获取套餐包生效时间，UNIX 时间戳（单位：秒）。
 * @method void setPackageEffectiveUnixTime(integer $PackageEffectiveUnixTime) 设置套餐包生效时间，UNIX 时间戳（单位：秒）。
 * @method string getPackageExpiredTime() 获取套餐包过期时间，标准时间，例如：2019-10-08 17:18:37。
 * @method void setPackageExpiredTime(string $PackageExpiredTime) 设置套餐包过期时间，标准时间，例如：2019-10-08 17:18:37。
 * @method integer getPackageExpiredUnixTime() 获取套餐包过期时间，UNIX 时间戳（单位：秒）。
 * @method void setPackageExpiredUnixTime(integer $PackageExpiredUnixTime) 设置套餐包过期时间，UNIX 时间戳（单位：秒）。
 * @method integer getAmountOfPackage() 获取套餐包条数。
 * @method void setAmountOfPackage(integer $AmountOfPackage) 设置套餐包条数。
 * @method integer getTypeOfPackage() 获取0表示赠送套餐包，1表示购买套餐包。
 * @method void setTypeOfPackage(integer $TypeOfPackage) 设置0表示赠送套餐包，1表示购买套餐包。
 * @method integer getPackageId() 获取套餐包 ID。
 * @method void setPackageId(integer $PackageId) 设置套餐包 ID。
 * @method integer getCurrentUsage() 获取当前使用量。
 * @method void setCurrentUsage(integer $CurrentUsage) 设置当前使用量。
 */
class SmsPackagesStatistics extends AbstractModel
{
    /**
     * @var string 套餐包创建时间，标准时间，例如：2019-10-08 17:18:37。
     */
    public $PackageCreateTime;

    /**
     * @var integer 套餐包创建时间，UNIX 时间戳（单位：秒）。
     */
    public $PackageCreateUnixTime;

    /**
     * @var string 套餐包生效时间，标准时间，例如：2019-10-08 17:18:37。
     */
    public $PackageEffectiveTime;

    /**
     * @var integer 套餐包生效时间，UNIX 时间戳（单位：秒）。
     */
    public $PackageEffectiveUnixTime;

    /**
     * @var string 套餐包过期时间，标准时间，例如：2019-10-08 17:18:37。
     */
    public $PackageExpiredTime;

    /**
     * @var integer 套餐包过期时间，UNIX 时间戳（单位：秒）。
     */
    public $PackageExpiredUnixTime;

    /**
     * @var integer 套餐包条数。
     */
    public $AmountOfPackage;

    /**
     * @var integer 0表示赠送套餐包，1表示购买套餐包。
     */
    public $TypeOfPackage;

    /**
     * @var integer 套餐包 ID。
     */
    public $PackageId;

    /**
     * @var integer 当前使用量。
     */
    public $CurrentUsage;

    /**
     * @param string $PackageCreateTime 套餐包创建时间，标准时间，例如：2019-10-08 17:18:37。
     * @param integer $PackageCreateUnixTime 套餐包创建时间，UNIX 时间戳（单位：秒）。
     * @param string $PackageEffectiveTime 套餐包生效时间，标准时间，例如：2019-10-08 17:18:37。
     * @param integer $PackageEffectiveUnixTime 套餐包生效时间，UNIX 时间戳（单位：秒）。
     * @param string $PackageExpiredTime 套餐包过期时间，标准时间，例如：2019-10-08 17:18:37。
     * @param integer $PackageExpiredUnixTime 套餐包过期时间，UNIX 时间戳（单位：秒）。
     * @param integer $AmountOfPackage 套餐包条数。
     * @param integer $TypeOfPackage 0表示赠送套餐包，1表示购买套餐包。
     * @param integer $PackageId 套餐包 ID。
     * @param integer $CurrentUsage 当前使用量。
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

        if (array_key_exists("PackageCreateUnixTime",$param) and $param["PackageCreateUnixTime"] !== null) {
            $this->PackageCreateUnixTime = $param["PackageCreateUnixTime"];
        }

        if (array_key_exists("PackageEffectiveTime",$param) and $param["PackageEffectiveTime"] !== null) {
            $this->PackageEffectiveTime = $param["PackageEffectiveTime"];
        }

        if (array_key_exists("PackageEffectiveUnixTime",$param) and $param["PackageEffectiveUnixTime"] !== null) {
            $this->PackageEffectiveUnixTime = $param["PackageEffectiveUnixTime"];
        }

        if (array_key_exists("PackageExpiredTime",$param) and $param["PackageExpiredTime"] !== null) {
            $this->PackageExpiredTime = $param["PackageExpiredTime"];
        }

        if (array_key_exists("PackageExpiredUnixTime",$param) and $param["PackageExpiredUnixTime"] !== null) {
            $this->PackageExpiredUnixTime = $param["PackageExpiredUnixTime"];
        }

        if (array_key_exists("AmountOfPackage",$param) and $param["AmountOfPackage"] !== null) {
            $this->AmountOfPackage = $param["AmountOfPackage"];
        }

        if (array_key_exists("TypeOfPackage",$param) and $param["TypeOfPackage"] !== null) {
            $this->TypeOfPackage = $param["TypeOfPackage"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("CurrentUsage",$param) and $param["CurrentUsage"] !== null) {
            $this->CurrentUsage = $param["CurrentUsage"];
        }
    }
}
