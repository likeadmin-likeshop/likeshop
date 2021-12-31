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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadHelmChart返回参数结构体
 *
 * @method string getTmpToken() 获取临时token
 * @method void setTmpToken(string $TmpToken) 设置临时token
 * @method string getTmpSecretId() 获取临时的secretId
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时的secretId
 * @method string getTmpSecretKey() 获取临时的secretKey
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时的secretKey
 * @method string getBucket() 获取存储桶信息
 * @method void setBucket(string $Bucket) 设置存储桶信息
 * @method string getRegion() 获取实例ID
 * @method void setRegion(string $Region) 设置实例ID
 * @method string getPath() 获取chart信息
 * @method void setPath(string $Path) 设置chart信息
 * @method integer getStartTime() 获取开始时间时间戳
 * @method void setStartTime(integer $StartTime) 设置开始时间时间戳
 * @method integer getExpiredTime() 获取token过期时间时间戳
 * @method void setExpiredTime(integer $ExpiredTime) 设置token过期时间时间戳
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DownloadHelmChartResponse extends AbstractModel
{
    /**
     * @var string 临时token
     */
    public $TmpToken;

    /**
     * @var string 临时的secretId
     */
    public $TmpSecretId;

    /**
     * @var string 临时的secretKey
     */
    public $TmpSecretKey;

    /**
     * @var string 存储桶信息
     */
    public $Bucket;

    /**
     * @var string 实例ID
     */
    public $Region;

    /**
     * @var string chart信息
     */
    public $Path;

    /**
     * @var integer 开始时间时间戳
     */
    public $StartTime;

    /**
     * @var integer token过期时间时间戳
     */
    public $ExpiredTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TmpToken 临时token
     * @param string $TmpSecretId 临时的secretId
     * @param string $TmpSecretKey 临时的secretKey
     * @param string $Bucket 存储桶信息
     * @param string $Region 实例ID
     * @param string $Path chart信息
     * @param integer $StartTime 开始时间时间戳
     * @param integer $ExpiredTime token过期时间时间戳
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
        if (array_key_exists("TmpToken",$param) and $param["TmpToken"] !== null) {
            $this->TmpToken = $param["TmpToken"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
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
