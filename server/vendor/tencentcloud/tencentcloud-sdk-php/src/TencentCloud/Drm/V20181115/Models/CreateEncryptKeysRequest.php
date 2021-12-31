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
 * CreateEncryptKeys请求参数结构体
 *
 * @method string getDrmType() 获取使用的DRM方案类型，接口取值WIDEVINE、FAIRPLAY、NORMALAES。
 * @method void setDrmType(string $DrmType) 设置使用的DRM方案类型，接口取值WIDEVINE、FAIRPLAY、NORMALAES。
 * @method array getKeys() 获取设置的加密密钥列表。
 * @method void setKeys(array $Keys) 设置设置的加密密钥列表。
 * @method string getContentId() 获取一个加密内容的唯一标识。
 * @method void setContentId(string $ContentId) 设置一个加密内容的唯一标识。
 * @method string getContentType() 获取内容类型。接口取值VodVideo,LiveVideo。
 * @method void setContentType(string $ContentType) 设置内容类型。接口取值VodVideo,LiveVideo。
 */
class CreateEncryptKeysRequest extends AbstractModel
{
    /**
     * @var string 使用的DRM方案类型，接口取值WIDEVINE、FAIRPLAY、NORMALAES。
     */
    public $DrmType;

    /**
     * @var array 设置的加密密钥列表。
     */
    public $Keys;

    /**
     * @var string 一个加密内容的唯一标识。
     */
    public $ContentId;

    /**
     * @var string 内容类型。接口取值VodVideo,LiveVideo。
     */
    public $ContentType;

    /**
     * @param string $DrmType 使用的DRM方案类型，接口取值WIDEVINE、FAIRPLAY、NORMALAES。
     * @param array $Keys 设置的加密密钥列表。
     * @param string $ContentId 一个加密内容的唯一标识。
     * @param string $ContentType 内容类型。接口取值VodVideo,LiveVideo。
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

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new KeyParam();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("ContentId",$param) and $param["ContentId"] !== null) {
            $this->ContentId = $param["ContentId"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }
    }
}
