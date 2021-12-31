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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUserContact请求参数结构体
 *
 * @method string getName() 获取联系人姓名，大小写字母+数字+下划线，最小 2 位最大 60 位的长度， 不能以"_"开头，且联系人名保持唯一。
 * @method void setName(string $Name) 设置联系人姓名，大小写字母+数字+下划线，最小 2 位最大 60 位的长度， 不能以"_"开头，且联系人名保持唯一。
 * @method string getContactInfo() 获取邮箱地址，大小写字母、数字及下划线组成， 不能以"_"开头。
 * @method void setContactInfo(string $ContactInfo) 设置邮箱地址，大小写字母、数字及下划线组成， 不能以"_"开头。
 * @method string getProduct() 获取服务产品类型，固定值："mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，固定值："mysql"。
 */
class AddUserContactRequest extends AbstractModel
{
    /**
     * @var string 联系人姓名，大小写字母+数字+下划线，最小 2 位最大 60 位的长度， 不能以"_"开头，且联系人名保持唯一。
     */
    public $Name;

    /**
     * @var string 邮箱地址，大小写字母、数字及下划线组成， 不能以"_"开头。
     */
    public $ContactInfo;

    /**
     * @var string 服务产品类型，固定值："mysql"。
     */
    public $Product;

    /**
     * @param string $Name 联系人姓名，大小写字母+数字+下划线，最小 2 位最大 60 位的长度， 不能以"_"开头，且联系人名保持唯一。
     * @param string $ContactInfo 邮箱地址，大小写字母、数字及下划线组成， 不能以"_"开头。
     * @param string $Product 服务产品类型，固定值："mysql"。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContactInfo",$param) and $param["ContactInfo"] !== null) {
            $this->ContactInfo = $param["ContactInfo"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
