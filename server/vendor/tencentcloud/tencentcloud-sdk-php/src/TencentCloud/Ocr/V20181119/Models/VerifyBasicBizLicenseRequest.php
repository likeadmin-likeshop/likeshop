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
 * VerifyBasicBizLicense请求参数结构体
 *
 * @method string getImageBase64() 获取用于入参是营业执照图片的场景，ImageBase64和ImageUrl必须提供一个，如果都提供，只使用 ImageUrl。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
 * @method void setImageBase64(string $ImageBase64) 设置用于入参是营业执照图片的场景，ImageBase64和ImageUrl必须提供一个，如果都提供，只使用 ImageUrl。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
 * @method string getImageUrl() 获取用于入参是营业执照图片的场景，ImageBase64和ImageUrl必须提供一个，如果都提供，只使用 ImageUrl。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
 * @method void setImageUrl(string $ImageUrl) 设置用于入参是营业执照图片的场景，ImageBase64和ImageUrl必须提供一个，如果都提供，只使用 ImageUrl。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
 * @method string getImageConfig() 获取用于入参是营业执照图片的场景，表示需要校验的参数：RegNum（注册号或者统一社会信用代码），Name（企业名称），Address（经营地址）。选择后会返回相关参数校验结果。RegNum为必选，Name和Address可选。
格式为{RegNum: true, Name:true/false, Address:true/false}

设置方式参考：
Config = Json.stringify({"Name":true,"Address":true})
API 3.0 Explorer 设置方式参考：
Config = {"Name":true,"Address":true}
 * @method void setImageConfig(string $ImageConfig) 设置用于入参是营业执照图片的场景，表示需要校验的参数：RegNum（注册号或者统一社会信用代码），Name（企业名称），Address（经营地址）。选择后会返回相关参数校验结果。RegNum为必选，Name和Address可选。
格式为{RegNum: true, Name:true/false, Address:true/false}

设置方式参考：
Config = Json.stringify({"Name":true,"Address":true})
API 3.0 Explorer 设置方式参考：
Config = {"Name":true,"Address":true}
 * @method string getRegNum() 获取用于入参是文本的场景，RegNum表示注册号或者统一社会信用代码。若没有传入营业执照图片，则RegNum为必选项，若图片和RegNum都传入，则只使用RegNum。
 * @method void setRegNum(string $RegNum) 设置用于入参是文本的场景，RegNum表示注册号或者统一社会信用代码。若没有传入营业执照图片，则RegNum为必选项，若图片和RegNum都传入，则只使用RegNum。
 * @method string getName() 获取用于入参是文本的场景，Name表示企业名称。Name为可选项，填写后会返回Name的校验结果。
 * @method void setName(string $Name) 设置用于入参是文本的场景，Name表示企业名称。Name为可选项，填写后会返回Name的校验结果。
 * @method string getAddress() 获取用于入参是文本的场景，Address表示经营地址。Address为可选项，填写后会返回Address的校验结果。
 * @method void setAddress(string $Address) 设置用于入参是文本的场景，Address表示经营地址。Address为可选项，填写后会返回Address的校验结果。
 * @method integer getRegCapital() 获取1表示输出注册资本字段（单位：万元），其他值表示不输出。默认不输出。
 * @method void setRegCapital(integer $RegCapital) 设置1表示输出注册资本字段（单位：万元），其他值表示不输出。默认不输出。
 * @method boolean getEstablishTime() 获取true表示展示成立/注册日期
 * @method void setEstablishTime(boolean $EstablishTime) 设置true表示展示成立/注册日期
 */
class VerifyBasicBizLicenseRequest extends AbstractModel
{
    /**
     * @var string 用于入参是营业执照图片的场景，ImageBase64和ImageUrl必须提供一个，如果都提供，只使用 ImageUrl。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
     */
    public $ImageBase64;

    /**
     * @var string 用于入参是营业执照图片的场景，ImageBase64和ImageUrl必须提供一个，如果都提供，只使用 ImageUrl。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
     */
    public $ImageUrl;

    /**
     * @var string 用于入参是营业执照图片的场景，表示需要校验的参数：RegNum（注册号或者统一社会信用代码），Name（企业名称），Address（经营地址）。选择后会返回相关参数校验结果。RegNum为必选，Name和Address可选。
格式为{RegNum: true, Name:true/false, Address:true/false}

设置方式参考：
Config = Json.stringify({"Name":true,"Address":true})
API 3.0 Explorer 设置方式参考：
Config = {"Name":true,"Address":true}
     */
    public $ImageConfig;

    /**
     * @var string 用于入参是文本的场景，RegNum表示注册号或者统一社会信用代码。若没有传入营业执照图片，则RegNum为必选项，若图片和RegNum都传入，则只使用RegNum。
     */
    public $RegNum;

    /**
     * @var string 用于入参是文本的场景，Name表示企业名称。Name为可选项，填写后会返回Name的校验结果。
     */
    public $Name;

    /**
     * @var string 用于入参是文本的场景，Address表示经营地址。Address为可选项，填写后会返回Address的校验结果。
     */
    public $Address;

    /**
     * @var integer 1表示输出注册资本字段（单位：万元），其他值表示不输出。默认不输出。
     */
    public $RegCapital;

    /**
     * @var boolean true表示展示成立/注册日期
     */
    public $EstablishTime;

    /**
     * @param string $ImageBase64 用于入参是营业执照图片的场景，ImageBase64和ImageUrl必须提供一个，如果都提供，只使用 ImageUrl。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
     * @param string $ImageUrl 用于入参是营业执照图片的场景，ImageBase64和ImageUrl必须提供一个，如果都提供，只使用 ImageUrl。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
     * @param string $ImageConfig 用于入参是营业执照图片的场景，表示需要校验的参数：RegNum（注册号或者统一社会信用代码），Name（企业名称），Address（经营地址）。选择后会返回相关参数校验结果。RegNum为必选，Name和Address可选。
格式为{RegNum: true, Name:true/false, Address:true/false}

设置方式参考：
Config = Json.stringify({"Name":true,"Address":true})
API 3.0 Explorer 设置方式参考：
Config = {"Name":true,"Address":true}
     * @param string $RegNum 用于入参是文本的场景，RegNum表示注册号或者统一社会信用代码。若没有传入营业执照图片，则RegNum为必选项，若图片和RegNum都传入，则只使用RegNum。
     * @param string $Name 用于入参是文本的场景，Name表示企业名称。Name为可选项，填写后会返回Name的校验结果。
     * @param string $Address 用于入参是文本的场景，Address表示经营地址。Address为可选项，填写后会返回Address的校验结果。
     * @param integer $RegCapital 1表示输出注册资本字段（单位：万元），其他值表示不输出。默认不输出。
     * @param boolean $EstablishTime true表示展示成立/注册日期
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageConfig",$param) and $param["ImageConfig"] !== null) {
            $this->ImageConfig = $param["ImageConfig"];
        }

        if (array_key_exists("RegNum",$param) and $param["RegNum"] !== null) {
            $this->RegNum = $param["RegNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("RegCapital",$param) and $param["RegCapital"] !== null) {
            $this->RegCapital = $param["RegCapital"];
        }

        if (array_key_exists("EstablishTime",$param) and $param["EstablishTime"] !== null) {
            $this->EstablishTime = $param["EstablishTime"];
        }
    }
}
