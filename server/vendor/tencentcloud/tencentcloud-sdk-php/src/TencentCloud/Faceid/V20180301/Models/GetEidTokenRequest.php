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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEidToken请求参数结构体
 *
 * @method string getMerchantId() 获取EID商户id，字段长度最长50位。
 * @method void setMerchantId(string $MerchantId) 设置EID商户id，字段长度最长50位。
 * @method string getIdCard() 获取身份标识（未使用OCR服务时，必须传入）。
规则：a-zA-Z0-9组合。最长长度32位。
 * @method void setIdCard(string $IdCard) 设置身份标识（未使用OCR服务时，必须传入）。
规则：a-zA-Z0-9组合。最长长度32位。
 * @method string getName() 获取姓名。（未使用OCR服务时，必须传入）最长长度32位。中文请使用UTF-8编码。
 * @method void setName(string $Name) 设置姓名。（未使用OCR服务时，必须传入）最长长度32位。中文请使用UTF-8编码。
 * @method string getExtra() 获取透传字段，在获取验证结果时返回。最长长度1024位。
 * @method void setExtra(string $Extra) 设置透传字段，在获取验证结果时返回。最长长度1024位。
 * @method GetEidTokenConfig getConfig() 获取小程序模式配置，包括如何传入姓名身份证的配置。
 * @method void setConfig(GetEidTokenConfig $Config) 设置小程序模式配置，包括如何传入姓名身份证的配置。
 */
class GetEidTokenRequest extends AbstractModel
{
    /**
     * @var string EID商户id，字段长度最长50位。
     */
    public $MerchantId;

    /**
     * @var string 身份标识（未使用OCR服务时，必须传入）。
规则：a-zA-Z0-9组合。最长长度32位。
     */
    public $IdCard;

    /**
     * @var string 姓名。（未使用OCR服务时，必须传入）最长长度32位。中文请使用UTF-8编码。
     */
    public $Name;

    /**
     * @var string 透传字段，在获取验证结果时返回。最长长度1024位。
     */
    public $Extra;

    /**
     * @var GetEidTokenConfig 小程序模式配置，包括如何传入姓名身份证的配置。
     */
    public $Config;

    /**
     * @param string $MerchantId EID商户id，字段长度最长50位。
     * @param string $IdCard 身份标识（未使用OCR服务时，必须传入）。
规则：a-zA-Z0-9组合。最长长度32位。
     * @param string $Name 姓名。（未使用OCR服务时，必须传入）最长长度32位。中文请使用UTF-8编码。
     * @param string $Extra 透传字段，在获取验证结果时返回。最长长度1024位。
     * @param GetEidTokenConfig $Config 小程序模式配置，包括如何传入姓名身份证的配置。
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new GetEidTokenConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
