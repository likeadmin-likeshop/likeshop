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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetUploadCredentials返回参数结构体
 *
 * @method string getBucketAuth() 获取上传文件授权信息Auth
 * @method void setBucketAuth(string $BucketAuth) 设置上传文件授权信息Auth
 * @method string getBucketName() 获取Bucket名字
 * @method void setBucketName(string $BucketName) 设置Bucket名字
 * @method string getAssetRegion() 获取生成包所在地域
 * @method void setAssetRegion(string $AssetRegion) 设置生成包所在地域
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetUploadCredentialsResponse extends AbstractModel
{
    /**
     * @var string 上传文件授权信息Auth
     */
    public $BucketAuth;

    /**
     * @var string Bucket名字
     */
    public $BucketName;

    /**
     * @var string 生成包所在地域
     */
    public $AssetRegion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BucketAuth 上传文件授权信息Auth
     * @param string $BucketName Bucket名字
     * @param string $AssetRegion 生成包所在地域
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
        if (array_key_exists("BucketAuth",$param) and $param["BucketAuth"] !== null) {
            $this->BucketAuth = $param["BucketAuth"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("AssetRegion",$param) and $param["AssetRegion"] !== null) {
            $this->AssetRegion = $param["AssetRegion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
