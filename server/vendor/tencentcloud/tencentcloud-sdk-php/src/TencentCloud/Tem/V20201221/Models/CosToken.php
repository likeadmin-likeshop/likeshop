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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cos token
 *
 * @method string getRequestId() 获取唯一请求 ID
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID
 * @method string getBucket() 获取存储桶桶名
 * @method void setBucket(string $Bucket) 设置存储桶桶名
 * @method string getRegion() 获取存储桶所在区域
 * @method void setRegion(string $Region) 设置存储桶所在区域
 * @method string getTmpSecretId() 获取临时密钥的SecretId
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时密钥的SecretId
 * @method string getTmpSecretKey() 获取临时密钥的SecretKey
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时密钥的SecretKey
 * @method string getSessionToken() 获取临时密钥的 sessionToken
 * @method void setSessionToken(string $SessionToken) 设置临时密钥的 sessionToken
 * @method string getStartTime() 获取临时密钥获取的开始时间
 * @method void setStartTime(string $StartTime) 设置临时密钥获取的开始时间
 * @method string getExpiredTime() 获取临时密钥的 expiredTime
 * @method void setExpiredTime(string $ExpiredTime) 设置临时密钥的 expiredTime
 * @method string getFullPath() 获取包完整路径
 * @method void setFullPath(string $FullPath) 设置包完整路径
 */
class CosToken extends AbstractModel
{
    /**
     * @var string 唯一请求 ID
     */
    public $RequestId;

    /**
     * @var string 存储桶桶名
     */
    public $Bucket;

    /**
     * @var string 存储桶所在区域
     */
    public $Region;

    /**
     * @var string 临时密钥的SecretId
     */
    public $TmpSecretId;

    /**
     * @var string 临时密钥的SecretKey
     */
    public $TmpSecretKey;

    /**
     * @var string 临时密钥的 sessionToken
     */
    public $SessionToken;

    /**
     * @var string 临时密钥获取的开始时间
     */
    public $StartTime;

    /**
     * @var string 临时密钥的 expiredTime
     */
    public $ExpiredTime;

    /**
     * @var string 包完整路径
     */
    public $FullPath;

    /**
     * @param string $RequestId 唯一请求 ID
     * @param string $Bucket 存储桶桶名
     * @param string $Region 存储桶所在区域
     * @param string $TmpSecretId 临时密钥的SecretId
     * @param string $TmpSecretKey 临时密钥的SecretKey
     * @param string $SessionToken 临时密钥的 sessionToken
     * @param string $StartTime 临时密钥获取的开始时间
     * @param string $ExpiredTime 临时密钥的 expiredTime
     * @param string $FullPath 包完整路径
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
        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }
    }
}
