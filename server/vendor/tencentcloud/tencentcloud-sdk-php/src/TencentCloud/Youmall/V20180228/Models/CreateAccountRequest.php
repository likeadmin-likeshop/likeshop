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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount请求参数结构体
 *
 * @method string getCompanyId() 获取集团ID
 * @method void setCompanyId(string $CompanyId) 设置集团ID
 * @method string getName() 获取账号名；需要是手机号
 * @method void setName(string $Name) 设置账号名；需要是手机号
 * @method string getPassword() 获取密码；需要是(`~!@#$%^&*()_+=-）中的至少两种且八位以上
 * @method void setPassword(string $Password) 设置密码；需要是(`~!@#$%^&*()_+=-）中的至少两种且八位以上
 * @method string getShopCode() 获取客户门店编码
 * @method void setShopCode(string $ShopCode) 设置客户门店编码
 * @method string getRemark() 获取备注说明; 30个字符以内
 * @method void setRemark(string $Remark) 设置备注说明; 30个字符以内
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string 集团ID
     */
    public $CompanyId;

    /**
     * @var string 账号名；需要是手机号
     */
    public $Name;

    /**
     * @var string 密码；需要是(`~!@#$%^&*()_+=-）中的至少两种且八位以上
     */
    public $Password;

    /**
     * @var string 客户门店编码
     */
    public $ShopCode;

    /**
     * @var string 备注说明; 30个字符以内
     */
    public $Remark;

    /**
     * @param string $CompanyId 集团ID
     * @param string $Name 账号名；需要是手机号
     * @param string $Password 密码；需要是(`~!@#$%^&*()_+=-）中的至少两种且八位以上
     * @param string $ShopCode 客户门店编码
     * @param string $Remark 备注说明; 30个字符以内
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ShopCode",$param) and $param["ShopCode"] !== null) {
            $this->ShopCode = $param["ShopCode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
