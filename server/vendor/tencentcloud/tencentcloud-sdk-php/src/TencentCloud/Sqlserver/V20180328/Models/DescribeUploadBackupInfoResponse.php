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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUploadBackupInfo返回参数结构体
 *
 * @method string getBucketName() 获取存储桶名称
 * @method void setBucketName(string $BucketName) 设置存储桶名称
 * @method string getRegion() 获取存储桶地域信息
 * @method void setRegion(string $Region) 设置存储桶地域信息
 * @method string getPath() 获取存储路径
 * @method void setPath(string $Path) 设置存储路径
 * @method string getTmpSecretId() 获取临时密钥ID
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时密钥ID
 * @method string getTmpSecretKey() 获取临时密钥Key
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时密钥Key
 * @method string getXCosSecurityToken() 获取临时密钥Token
 * @method void setXCosSecurityToken(string $XCosSecurityToken) 设置临时密钥Token
 * @method string getStartTime() 获取临时密钥开始时间
 * @method void setStartTime(string $StartTime) 设置临时密钥开始时间
 * @method string getExpiredTime() 获取临时密钥到期时间
 * @method void setExpiredTime(string $ExpiredTime) 设置临时密钥到期时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUploadBackupInfoResponse extends AbstractModel
{
    /**
     * @var string 存储桶名称
     */
    public $BucketName;

    /**
     * @var string 存储桶地域信息
     */
    public $Region;

    /**
     * @var string 存储路径
     */
    public $Path;

    /**
     * @var string 临时密钥ID
     */
    public $TmpSecretId;

    /**
     * @var string 临时密钥Key
     */
    public $TmpSecretKey;

    /**
     * @var string 临时密钥Token
     */
    public $XCosSecurityToken;

    /**
     * @var string 临时密钥开始时间
     */
    public $StartTime;

    /**
     * @var string 临时密钥到期时间
     */
    public $ExpiredTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BucketName 存储桶名称
     * @param string $Region 存储桶地域信息
     * @param string $Path 存储路径
     * @param string $TmpSecretId 临时密钥ID
     * @param string $TmpSecretKey 临时密钥Key
     * @param string $XCosSecurityToken 临时密钥Token
     * @param string $StartTime 临时密钥开始时间
     * @param string $ExpiredTime 临时密钥到期时间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("XCosSecurityToken",$param) and $param["XCosSecurityToken"] !== null) {
            $this->XCosSecurityToken = $param["XCosSecurityToken"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
