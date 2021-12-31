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
 * 时间戳防盗链高级版模式D配置。
 *
 * @method string getSecretKey() 获取用于计算签名的密钥，只允许字母和数字，长度6-32字节。
 * @method void setSecretKey(string $SecretKey) 设置用于计算签名的密钥，只允许字母和数字，长度6-32字节。
 * @method string getBackupSecretKey() 获取备份密钥，当使用SecretKey鉴权失败时会使用该密钥重新鉴权。
 * @method void setBackupSecretKey(string $BackupSecretKey) 设置备份密钥，当使用SecretKey鉴权失败时会使用该密钥重新鉴权。
 * @method string getSignParam() 获取uri串中签名的字段名，字母，数字或下划线构成，同时必须以字母开头。
 * @method void setSignParam(string $SignParam) 设置uri串中签名的字段名，字母，数字或下划线构成，同时必须以字母开头。
 * @method string getTimeParam() 获取uri串中时间的字段名，字母，数字或下划线构成，同时必须以字母开头。
 * @method void setTimeParam(string $TimeParam) 设置uri串中时间的字段名，字母，数字或下划线构成，同时必须以字母开头。
 * @method integer getExpireTime() 获取过期时间，单位秒。
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间，单位秒。
 * @method string getTimeFormat() 获取时间格式，dec，hex分别表示十进制，十六进制。
 * @method void setTimeFormat(string $TimeFormat) 设置时间格式，dec，hex分别表示十进制，十六进制。
 */
class AdvancedAuthenticationTypeD extends AbstractModel
{
    /**
     * @var string 用于计算签名的密钥，只允许字母和数字，长度6-32字节。
     */
    public $SecretKey;

    /**
     * @var string 备份密钥，当使用SecretKey鉴权失败时会使用该密钥重新鉴权。
     */
    public $BackupSecretKey;

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
     * @var string 时间格式，dec，hex分别表示十进制，十六进制。
     */
    public $TimeFormat;

    /**
     * @param string $SecretKey 用于计算签名的密钥，只允许字母和数字，长度6-32字节。
     * @param string $BackupSecretKey 备份密钥，当使用SecretKey鉴权失败时会使用该密钥重新鉴权。
     * @param string $SignParam uri串中签名的字段名，字母，数字或下划线构成，同时必须以字母开头。
     * @param string $TimeParam uri串中时间的字段名，字母，数字或下划线构成，同时必须以字母开头。
     * @param integer $ExpireTime 过期时间，单位秒。
     * @param string $TimeFormat 时间格式，dec，hex分别表示十进制，十六进制。
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

        if (array_key_exists("BackupSecretKey",$param) and $param["BackupSecretKey"] !== null) {
            $this->BackupSecretKey = $param["BackupSecretKey"];
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

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }
    }
}
