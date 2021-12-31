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
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePersonalAccount请求参数结构体
 *
 * @method string getModule() 获取模块名AccountMng
 * @method void setModule(string $Module) 设置模块名AccountMng
 * @method string getOperation() 获取操作名CreatePersonalAccount
 * @method void setOperation(string $Operation) 设置操作名CreatePersonalAccount
 * @method string getName() 获取个人用户姓名
 * @method void setName(string $Name) 设置个人用户姓名
 * @method integer getIdentType() 获取个人用户证件类型，0代表身份证，详情请见常见问题
 * @method void setIdentType(integer $IdentType) 设置个人用户证件类型，0代表身份证，详情请见常见问题
 * @method string getIdentNo() 获取个人用户证件号码
 * @method void setIdentNo(string $IdentNo) 设置个人用户证件号码
 * @method string getMobilePhone() 获取个人用户手机号
 * @method void setMobilePhone(string $MobilePhone) 设置个人用户手机号
 */
class CreatePersonalAccountRequest extends AbstractModel
{
    /**
     * @var string 模块名AccountMng
     */
    public $Module;

    /**
     * @var string 操作名CreatePersonalAccount
     */
    public $Operation;

    /**
     * @var string 个人用户姓名
     */
    public $Name;

    /**
     * @var integer 个人用户证件类型，0代表身份证，详情请见常见问题
     */
    public $IdentType;

    /**
     * @var string 个人用户证件号码
     */
    public $IdentNo;

    /**
     * @var string 个人用户手机号
     */
    public $MobilePhone;

    /**
     * @param string $Module 模块名AccountMng
     * @param string $Operation 操作名CreatePersonalAccount
     * @param string $Name 个人用户姓名
     * @param integer $IdentType 个人用户证件类型，0代表身份证，详情请见常见问题
     * @param string $IdentNo 个人用户证件号码
     * @param string $MobilePhone 个人用户手机号
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdentType",$param) and $param["IdentType"] !== null) {
            $this->IdentType = $param["IdentType"];
        }

        if (array_key_exists("IdentNo",$param) and $param["IdentNo"] !== null) {
            $this->IdentNo = $param["IdentNo"];
        }

        if (array_key_exists("MobilePhone",$param) and $param["MobilePhone"] !== null) {
            $this->MobilePhone = $param["MobilePhone"];
        }
    }
}
