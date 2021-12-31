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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述DNS记录的域名、记录类型、期望得到的值、目前配置的值
 *
 * @method string getType() 获取记录类型 CNAME | A | TXT | MX
 * @method void setType(string $Type) 设置记录类型 CNAME | A | TXT | MX
 * @method string getSendDomain() 获取域名
 * @method void setSendDomain(string $SendDomain) 设置域名
 * @method string getExpectedValue() 获取需要配置的值
 * @method void setExpectedValue(string $ExpectedValue) 设置需要配置的值
 * @method string getCurrentValue() 获取腾讯云目前检测到的值
 * @method void setCurrentValue(string $CurrentValue) 设置腾讯云目前检测到的值
 * @method boolean getStatus() 获取检测是否通过，创建时默认为false
 * @method void setStatus(boolean $Status) 设置检测是否通过，创建时默认为false
 */
class DNSAttributes extends AbstractModel
{
    /**
     * @var string 记录类型 CNAME | A | TXT | MX
     */
    public $Type;

    /**
     * @var string 域名
     */
    public $SendDomain;

    /**
     * @var string 需要配置的值
     */
    public $ExpectedValue;

    /**
     * @var string 腾讯云目前检测到的值
     */
    public $CurrentValue;

    /**
     * @var boolean 检测是否通过，创建时默认为false
     */
    public $Status;

    /**
     * @param string $Type 记录类型 CNAME | A | TXT | MX
     * @param string $SendDomain 域名
     * @param string $ExpectedValue 需要配置的值
     * @param string $CurrentValue 腾讯云目前检测到的值
     * @param boolean $Status 检测是否通过，创建时默认为false
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

        if (array_key_exists("SendDomain",$param) and $param["SendDomain"] !== null) {
            $this->SendDomain = $param["SendDomain"];
        }

        if (array_key_exists("ExpectedValue",$param) and $param["ExpectedValue"] !== null) {
            $this->ExpectedValue = $param["ExpectedValue"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
