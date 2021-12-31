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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos产品用量明细返回数据结构
 *
 * @method string getBucketName() 获取存储桶名称
 * @method void setBucketName(string $BucketName) 设置存储桶名称
 * @method string getDosageBeginTime() 获取用量开始时间
 * @method void setDosageBeginTime(string $DosageBeginTime) 设置用量开始时间
 * @method string getDosageEndTime() 获取用量结束时间
 * @method void setDosageEndTime(string $DosageEndTime) 设置用量结束时间
 * @method string getSubProductCodeName() 获取一级产品类型名称
 * @method void setSubProductCodeName(string $SubProductCodeName) 设置一级产品类型名称
 * @method string getBillingItemCodeName() 获取二级产品类型名称
 * @method void setBillingItemCodeName(string $BillingItemCodeName) 设置二级产品类型名称
 * @method string getDosageValue() 获取用量
 * @method void setDosageValue(string $DosageValue) 设置用量
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 */
class CosDetailSets extends AbstractModel
{
    /**
     * @var string 存储桶名称
     */
    public $BucketName;

    /**
     * @var string 用量开始时间
     */
    public $DosageBeginTime;

    /**
     * @var string 用量结束时间
     */
    public $DosageEndTime;

    /**
     * @var string 一级产品类型名称
     */
    public $SubProductCodeName;

    /**
     * @var string 二级产品类型名称
     */
    public $BillingItemCodeName;

    /**
     * @var string 用量
     */
    public $DosageValue;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @param string $BucketName 存储桶名称
     * @param string $DosageBeginTime 用量开始时间
     * @param string $DosageEndTime 用量结束时间
     * @param string $SubProductCodeName 一级产品类型名称
     * @param string $BillingItemCodeName 二级产品类型名称
     * @param string $DosageValue 用量
     * @param string $Unit 单位
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("DosageBeginTime",$param) and $param["DosageBeginTime"] !== null) {
            $this->DosageBeginTime = $param["DosageBeginTime"];
        }

        if (array_key_exists("DosageEndTime",$param) and $param["DosageEndTime"] !== null) {
            $this->DosageEndTime = $param["DosageEndTime"];
        }

        if (array_key_exists("SubProductCodeName",$param) and $param["SubProductCodeName"] !== null) {
            $this->SubProductCodeName = $param["SubProductCodeName"];
        }

        if (array_key_exists("BillingItemCodeName",$param) and $param["BillingItemCodeName"] !== null) {
            $this->BillingItemCodeName = $param["BillingItemCodeName"];
        }

        if (array_key_exists("DosageValue",$param) and $param["DosageValue"] !== null) {
            $this->DosageValue = $param["DosageValue"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }
    }
}
