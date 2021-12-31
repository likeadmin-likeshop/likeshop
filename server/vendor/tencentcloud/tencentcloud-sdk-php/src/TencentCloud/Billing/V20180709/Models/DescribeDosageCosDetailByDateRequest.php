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
 * DescribeDosageCosDetailByDate请求参数结构体
 *
 * @method string getStartDate() 获取查询用量开始时间
 * @method void setStartDate(string $StartDate) 设置查询用量开始时间
 * @method string getEndDate() 获取查询用量结束时间（与开始时间同月，不支持跨月查询）
 * @method void setEndDate(string $EndDate) 设置查询用量结束时间（与开始时间同月，不支持跨月查询）
 * @method string getBucketName() 获取COS 存储桶名称，可通过Get Service 接口是用来获取请求者名下的所有存储空间列表（Bucket list）https://tcloud-dev.oa.com/document/product/555/30925?!preview&!document=1
 * @method void setBucketName(string $BucketName) 设置COS 存储桶名称，可通过Get Service 接口是用来获取请求者名下的所有存储空间列表（Bucket list）https://tcloud-dev.oa.com/document/product/555/30925?!preview&!document=1
 */
class DescribeDosageCosDetailByDateRequest extends AbstractModel
{
    /**
     * @var string 查询用量开始时间
     */
    public $StartDate;

    /**
     * @var string 查询用量结束时间（与开始时间同月，不支持跨月查询）
     */
    public $EndDate;

    /**
     * @var string COS 存储桶名称，可通过Get Service 接口是用来获取请求者名下的所有存储空间列表（Bucket list）https://tcloud-dev.oa.com/document/product/555/30925?!preview&!document=1
     */
    public $BucketName;

    /**
     * @param string $StartDate 查询用量开始时间
     * @param string $EndDate 查询用量结束时间（与开始时间同月，不支持跨月查询）
     * @param string $BucketName COS 存储桶名称，可通过Get Service 接口是用来获取请求者名下的所有存储空间列表（Bucket list）https://tcloud-dev.oa.com/document/product/555/30925?!preview&!document=1
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }
    }
}
