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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyUpload返回参数结构体
 *
 * @method string getStorageBucket() 获取存储桶，用于上传接口 URL 的 bucket_name。
 * @method void setStorageBucket(string $StorageBucket) 设置存储桶，用于上传接口 URL 的 bucket_name。
 * @method string getStorageRegion() 获取存储园区，用于上传接口 Host 的 Region。
 * @method void setStorageRegion(string $StorageRegion) 设置存储园区，用于上传接口 Host 的 Region。
 * @method string getVodSessionKey() 获取点播会话，用于确认上传接口的参数 VodSessionKey。
 * @method void setVodSessionKey(string $VodSessionKey) 设置点播会话，用于确认上传接口的参数 VodSessionKey。
 * @method string getMediaStoragePath() 获取媒体存储路径，用于上传接口存储媒体的对象键（Key）。
 * @method void setMediaStoragePath(string $MediaStoragePath) 设置媒体存储路径，用于上传接口存储媒体的对象键（Key）。
 * @method string getCoverStoragePath() 获取封面存储路径，用于上传接口存储封面的对象键（Key）。
 * @method void setCoverStoragePath(string $CoverStoragePath) 设置封面存储路径，用于上传接口存储封面的对象键（Key）。
 * @method TempCertificate getTempCertificate() 获取临时凭证，用于上传接口的权限验证。
 * @method void setTempCertificate(TempCertificate $TempCertificate) 设置临时凭证，用于上传接口的权限验证。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ApplyUploadResponse extends AbstractModel
{
    /**
     * @var string 存储桶，用于上传接口 URL 的 bucket_name。
     */
    public $StorageBucket;

    /**
     * @var string 存储园区，用于上传接口 Host 的 Region。
     */
    public $StorageRegion;

    /**
     * @var string 点播会话，用于确认上传接口的参数 VodSessionKey。
     */
    public $VodSessionKey;

    /**
     * @var string 媒体存储路径，用于上传接口存储媒体的对象键（Key）。
     */
    public $MediaStoragePath;

    /**
     * @var string 封面存储路径，用于上传接口存储封面的对象键（Key）。
     */
    public $CoverStoragePath;

    /**
     * @var TempCertificate 临时凭证，用于上传接口的权限验证。
     */
    public $TempCertificate;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $StorageBucket 存储桶，用于上传接口 URL 的 bucket_name。
     * @param string $StorageRegion 存储园区，用于上传接口 Host 的 Region。
     * @param string $VodSessionKey 点播会话，用于确认上传接口的参数 VodSessionKey。
     * @param string $MediaStoragePath 媒体存储路径，用于上传接口存储媒体的对象键（Key）。
     * @param string $CoverStoragePath 封面存储路径，用于上传接口存储封面的对象键（Key）。
     * @param TempCertificate $TempCertificate 临时凭证，用于上传接口的权限验证。
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
        if (array_key_exists("StorageBucket",$param) and $param["StorageBucket"] !== null) {
            $this->StorageBucket = $param["StorageBucket"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("VodSessionKey",$param) and $param["VodSessionKey"] !== null) {
            $this->VodSessionKey = $param["VodSessionKey"];
        }

        if (array_key_exists("MediaStoragePath",$param) and $param["MediaStoragePath"] !== null) {
            $this->MediaStoragePath = $param["MediaStoragePath"];
        }

        if (array_key_exists("CoverStoragePath",$param) and $param["CoverStoragePath"] !== null) {
            $this->CoverStoragePath = $param["CoverStoragePath"];
        }

        if (array_key_exists("TempCertificate",$param) and $param["TempCertificate"] !== null) {
            $this->TempCertificate = new TempCertificate();
            $this->TempCertificate->deserialize($param["TempCertificate"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
