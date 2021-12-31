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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCosSecKeyInstance返回参数结构体
 *
 * @method integer getCosAppid() 获取COS密钥对应的AppId
 * @method void setCosAppid(integer $CosAppid) 设置COS密钥对应的AppId
 * @method string getCosBucket() 获取COS密钥对应的存储桶名
 * @method void setCosBucket(string $CosBucket) 设置COS密钥对应的存储桶名
 * @method string getCosRegion() 获取存储桶对应的地域
 * @method void setCosRegion(string $CosRegion) 设置存储桶对应的地域
 * @method integer getExpireTime() 获取密钥过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置密钥过期时间
 * @method string getCosId() 获取密钥ID信息
 * @method void setCosId(string $CosId) 设置密钥ID信息
 * @method string getCosKey() 获取密钥KEY信息
 * @method void setCosKey(string $CosKey) 设置密钥KEY信息
 * @method string getCosTocken() 获取密钥TOCKEN信息
 * @method void setCosTocken(string $CosTocken) 设置密钥TOCKEN信息
 * @method string getCosPrefix() 获取密钥可访问的文件前缀人。例如：CosPrefix=test/123/666，则该密钥只能操作test/123/666为前缀的文件，例如test/123/666/1.txt
 * @method void setCosPrefix(string $CosPrefix) 设置密钥可访问的文件前缀人。例如：CosPrefix=test/123/666，则该密钥只能操作test/123/666为前缀的文件，例如test/123/666/1.txt
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCosSecKeyInstanceResponse extends AbstractModel
{
    /**
     * @var integer COS密钥对应的AppId
     */
    public $CosAppid;

    /**
     * @var string COS密钥对应的存储桶名
     */
    public $CosBucket;

    /**
     * @var string 存储桶对应的地域
     */
    public $CosRegion;

    /**
     * @var integer 密钥过期时间
     */
    public $ExpireTime;

    /**
     * @var string 密钥ID信息
     */
    public $CosId;

    /**
     * @var string 密钥KEY信息
     */
    public $CosKey;

    /**
     * @var string 密钥TOCKEN信息
     */
    public $CosTocken;

    /**
     * @var string 密钥可访问的文件前缀人。例如：CosPrefix=test/123/666，则该密钥只能操作test/123/666为前缀的文件，例如test/123/666/1.txt
     */
    public $CosPrefix;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $CosAppid COS密钥对应的AppId
     * @param string $CosBucket COS密钥对应的存储桶名
     * @param string $CosRegion 存储桶对应的地域
     * @param integer $ExpireTime 密钥过期时间
     * @param string $CosId 密钥ID信息
     * @param string $CosKey 密钥KEY信息
     * @param string $CosTocken 密钥TOCKEN信息
     * @param string $CosPrefix 密钥可访问的文件前缀人。例如：CosPrefix=test/123/666，则该密钥只能操作test/123/666为前缀的文件，例如test/123/666/1.txt
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
        if (array_key_exists("CosAppid",$param) and $param["CosAppid"] !== null) {
            $this->CosAppid = $param["CosAppid"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CosId",$param) and $param["CosId"] !== null) {
            $this->CosId = $param["CosId"];
        }

        if (array_key_exists("CosKey",$param) and $param["CosKey"] !== null) {
            $this->CosKey = $param["CosKey"];
        }

        if (array_key_exists("CosTocken",$param) and $param["CosTocken"] !== null) {
            $this->CosTocken = $param["CosTocken"];
        }

        if (array_key_exists("CosPrefix",$param) and $param["CosPrefix"] !== null) {
            $this->CosPrefix = $param["CosPrefix"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
