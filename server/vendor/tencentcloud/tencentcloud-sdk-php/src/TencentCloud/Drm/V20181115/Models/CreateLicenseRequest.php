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
namespace TencentCloud\Drm\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLicense请求参数结构体
 *
 * @method string getDrmType() 获取DRM方案类型，接口取值：WIDEVINE，FAIRPLAY。
 * @method void setDrmType(string $DrmType) 设置DRM方案类型，接口取值：WIDEVINE，FAIRPLAY。
 * @method string getLicenseRequest() 获取Base64编码的终端设备License Request数据。
 * @method void setLicenseRequest(string $LicenseRequest) 设置Base64编码的终端设备License Request数据。
 * @method string getContentType() 获取内容类型，接口取值：VodVideo,LiveVideo。
 * @method void setContentType(string $ContentType) 设置内容类型，接口取值：VodVideo,LiveVideo。
 * @method array getTracks() 获取授权播放的Track列表。
该值为空时，默认授权所有track播放。
 * @method void setTracks(array $Tracks) 设置授权播放的Track列表。
该值为空时，默认授权所有track播放。
 * @method PlaybackPolicy getPlaybackPolicy() 获取播放策略参数。
 * @method void setPlaybackPolicy(PlaybackPolicy $PlaybackPolicy) 设置播放策略参数。
 */
class CreateLicenseRequest extends AbstractModel
{
    /**
     * @var string DRM方案类型，接口取值：WIDEVINE，FAIRPLAY。
     */
    public $DrmType;

    /**
     * @var string Base64编码的终端设备License Request数据。
     */
    public $LicenseRequest;

    /**
     * @var string 内容类型，接口取值：VodVideo,LiveVideo。
     */
    public $ContentType;

    /**
     * @var array 授权播放的Track列表。
该值为空时，默认授权所有track播放。
     */
    public $Tracks;

    /**
     * @var PlaybackPolicy 播放策略参数。
     */
    public $PlaybackPolicy;

    /**
     * @param string $DrmType DRM方案类型，接口取值：WIDEVINE，FAIRPLAY。
     * @param string $LicenseRequest Base64编码的终端设备License Request数据。
     * @param string $ContentType 内容类型，接口取值：VodVideo,LiveVideo。
     * @param array $Tracks 授权播放的Track列表。
该值为空时，默认授权所有track播放。
     * @param PlaybackPolicy $PlaybackPolicy 播放策略参数。
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
        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("LicenseRequest",$param) and $param["LicenseRequest"] !== null) {
            $this->LicenseRequest = $param["LicenseRequest"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Tracks",$param) and $param["Tracks"] !== null) {
            $this->Tracks = $param["Tracks"];
        }

        if (array_key_exists("PlaybackPolicy",$param) and $param["PlaybackPolicy"] !== null) {
            $this->PlaybackPolicy = new PlaybackPolicy();
            $this->PlaybackPolicy->deserialize($param["PlaybackPolicy"]);
        }
    }
}
