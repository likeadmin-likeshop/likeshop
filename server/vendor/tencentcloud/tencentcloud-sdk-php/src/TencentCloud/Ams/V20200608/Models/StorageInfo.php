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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 *  数据存储信息
 *
 * @method string getType() 获取类型 可选：
URL 资源链接类型
COS 腾讯云对象存储类型
 * @method void setType(string $Type) 设置类型 可选：
URL 资源链接类型
COS 腾讯云对象存储类型
 * @method string getUrl() 获取资源链接
 * @method void setUrl(string $Url) 设置资源链接
 * @method BucketInfo getBucketInfo() 获取腾讯云存储桶信息
 * @method void setBucketInfo(BucketInfo $BucketInfo) 设置腾讯云存储桶信息
 */
class StorageInfo extends AbstractModel
{
    /**
     * @var string 类型 可选：
URL 资源链接类型
COS 腾讯云对象存储类型
     */
    public $Type;

    /**
     * @var string 资源链接
     */
    public $Url;

    /**
     * @var BucketInfo 腾讯云存储桶信息
     */
    public $BucketInfo;

    /**
     * @param string $Type 类型 可选：
URL 资源链接类型
COS 腾讯云对象存储类型
     * @param string $Url 资源链接
     * @param BucketInfo $BucketInfo 腾讯云存储桶信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BucketInfo",$param) and $param["BucketInfo"] !== null) {
            $this->BucketInfo = new BucketInfo();
            $this->BucketInfo->deserialize($param["BucketInfo"]);
        }
    }
}
