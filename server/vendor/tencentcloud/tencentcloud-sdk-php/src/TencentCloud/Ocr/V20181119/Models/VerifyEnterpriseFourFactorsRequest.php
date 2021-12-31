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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyEnterpriseFourFactors请求参数结构体
 *
 * @method string getRealName() 获取姓名
 * @method void setRealName(string $RealName) 设置姓名
 * @method string getIdCard() 获取证件号码（公司注册证件号）
 * @method void setIdCard(string $IdCard) 设置证件号码（公司注册证件号）
 * @method string getEnterpriseName() 获取企业全称
 * @method void setEnterpriseName(string $EnterpriseName) 设置企业全称
 * @method string getEnterpriseMark() 获取企业标识（注册号，统一社会信用代码）
 * @method void setEnterpriseMark(string $EnterpriseMark) 设置企业标识（注册号，统一社会信用代码）
 */
class VerifyEnterpriseFourFactorsRequest extends AbstractModel
{
    /**
     * @var string 姓名
     */
    public $RealName;

    /**
     * @var string 证件号码（公司注册证件号）
     */
    public $IdCard;

    /**
     * @var string 企业全称
     */
    public $EnterpriseName;

    /**
     * @var string 企业标识（注册号，统一社会信用代码）
     */
    public $EnterpriseMark;

    /**
     * @param string $RealName 姓名
     * @param string $IdCard 证件号码（公司注册证件号）
     * @param string $EnterpriseName 企业全称
     * @param string $EnterpriseMark 企业标识（注册号，统一社会信用代码）
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
        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("EnterpriseName",$param) and $param["EnterpriseName"] !== null) {
            $this->EnterpriseName = $param["EnterpriseName"];
        }

        if (array_key_exists("EnterpriseMark",$param) and $param["EnterpriseMark"] !== null) {
            $this->EnterpriseMark = $param["EnterpriseMark"];
        }
    }
}
