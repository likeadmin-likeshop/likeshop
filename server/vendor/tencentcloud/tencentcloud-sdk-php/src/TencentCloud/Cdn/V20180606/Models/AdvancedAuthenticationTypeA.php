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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间戳防盗链高级版模式A配置。
 *
 * @method string getSecretKey() 获取用于计算签名的密钥，只允许字母和数字，长度6-32字节。
 * @method void setSecretKey(string $SecretKey) 设置用于计算签名的密钥，只允许字母和数字，长度6-32字节。
 * @method string getSignParam() 获取uri串中签名的字段名，字母，数字或下划线构成，同时必须以字母开头。
 * @method void setSignParam(string $SignParam) 设置uri串中签名的字段名，字母，数字或下划线构成，同时必须以字母开头。
 * @method string getTimeParam() 获取uri串中时间的字段名，字母，数字或下划线构成，同时必须以字母开头。
 * @method void setTimeParam(string $TimeParam) 设置uri串中时间的字段名，字母，数字或下划线构成，同时必须以字母开头。
 * @method integer getExpireTime() 获取过期时间，单位秒。
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间，单位秒。
 * @method boolean getExpireTimeRequired() 获取是否必须提供过期时间参数。
 * @method void setExpireTimeRequired(boolean $ExpireTimeRequired) 设置是否必须提供过期时间参数。
 * @method string getFormat() 获取Url组成格式，如：${private_key}${schema}${host}${full_uri。
 * @method void setFormat(string $Format) 设置Url组成格式，如：${private_key}${schema}${host}${full_uri。
 * @method string getTimeFormat() 获取时间格式，dec，hex分别表示十进制，十六进制。
 * @method void setTimeFormat(string $TimeFormat) 设置时间格式，dec，hex分别表示十进制，十六进制。
 * @method integer getFailCode() 获取鉴权失败时返回的状态码。
 * @method void setFailCode(integer $FailCode) 设置鉴权失败时返回的状态码。
 * @method integer getExpireCode() 获取链接过期时返回的状态码。
 * @method void setExpireCode(integer $ExpireCode) 设置链接过期时返回的状态码。
 * @method array getRulePaths() 获取需要鉴权的url路径列表。
 * @method void setRulePaths(array $RulePaths) 设置需要鉴权的url路径列表。
 * @method integer getTransformation() 获取保留字段。
 * @method void setTransformation(integer $Transformation) 设置保留字段。
 */
class AdvancedAuthenticationTypeA extends AbstractModel
{
    /**
     * @var string 用于计算签名的密钥，只允许字母和数字，长度6-32字节。
     */
    public $SecretKey;

    /**
     * @var string uri串中签名的字段名，字母，数字或下划线构成，同时必须以字母开头。
     */
    public $SignParam;

    /**
     * @var string uri串中时间的字段名，字母，数字或下划线构成，同时必须以字母开头。
     */
    public $TimeParam;

    /**
     * @var integer 过期时间，单位秒。
     */
    public $ExpireTime;

    /**
     * @var boolean 是否必须提供过期时间参数。
     */
    public $ExpireTimeRequired;

    /**
     * @var string Url组成格式，如：${private_key}${schema}${host}${full_uri。
     */
    public $Format;

    /**
     * @var string 时间格式，dec，hex分别表示十进制，十六进制。
     */
    public $TimeFormat;

    /**
     * @var integer 鉴权失败时返回的状态码。
     */
    public $FailCode;

    /**
     * @var integer 链接过期时返回的状态码。
     */
    public $ExpireCode;

    /**
     * @var array 需要鉴权的url路径列表。
     */
    public $RulePaths;

    /**
     * @var integer 保留字段。
     */
    public $Transformation;

    /**
     * @param string $SecretKey 用于计算签名的密钥，只允许字母和数字，长度6-32字节。
     * @param string $SignParam uri串中签名的字段名，字母，数字或下划线构成，同时必须以字母开头。
     * @param string $TimeParam uri串中时间的字段名，字母，数字或下划线构成，同时必须以字母开头。
     * @param integer $ExpireTime 过期时间，单位秒。
     * @param boolean $ExpireTimeRequired 是否必须提供过期时间参数。
     * @param string $Format Url组成格式，如：${private_key}${schema}${host}${full_uri。
     * @param string $TimeFormat 时间格式，dec，hex分别表示十进制，十六进制。
     * @param integer $FailCode 鉴权失败时返回的状态码。
     * @param integer $ExpireCode 链接过期时返回的状态码。
     * @param array $RulePaths 需要鉴权的url路径列表。
     * @param integer $Transformation 保留字段。
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
        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("SignParam",$param) and $param["SignParam"] !== null) {
            $this->SignParam = $param["SignParam"];
        }

        if (array_key_exists("TimeParam",$param) and $param["TimeParam"] !== null) {
            $this->TimeParam = $param["TimeParam"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ExpireTimeRequired",$param) and $param["ExpireTimeRequired"] !== null) {
            $this->ExpireTimeRequired = $param["ExpireTimeRequired"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("FailCode",$param) and $param["FailCode"] !== null) {
            $this->FailCode = $param["FailCode"];
        }

        if (array_key_exists("ExpireCode",$param) and $param["ExpireCode"] !== null) {
            $this->ExpireCode = $param["ExpireCode"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("Transformation",$param) and $param["Transformation"] !== null) {
            $this->Transformation = $param["Transformation"];
        }
    }
}
