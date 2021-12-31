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
 * StartEncryption请求参数结构体
 *
 * @method string getCosEndPoint() 获取cos的end point。
 * @method void setCosEndPoint(string $CosEndPoint) 设置cos的end point。
 * @method string getCosSecretId() 获取cos api密钥id。
 * @method void setCosSecretId(string $CosSecretId) 设置cos api密钥id。
 * @method string getCosSecretKey() 获取cos api密钥。
 * @method void setCosSecretKey(string $CosSecretKey) 设置cos api密钥。
 * @method string getDrmType() 获取使用的DRM方案类型，接口取值WIDEVINE,FAIRPLAY
 * @method void setDrmType(string $DrmType) 设置使用的DRM方案类型，接口取值WIDEVINE,FAIRPLAY
 * @method DrmSourceObject getSourceObject() 获取存储在COS上的原始内容信息
 * @method void setSourceObject(DrmSourceObject $SourceObject) 设置存储在COS上的原始内容信息
 * @method array getOutputObjects() 获取加密后的内容存储到COS的对象
 * @method void setOutputObjects(array $OutputObjects) 设置加密后的内容存储到COS的对象
 */
class StartEncryptionRequest extends AbstractModel
{
    /**
     * @var string cos的end point。
     */
    public $CosEndPoint;

    /**
     * @var string cos api密钥id。
     */
    public $CosSecretId;

    /**
     * @var string cos api密钥。
     */
    public $CosSecretKey;

    /**
     * @var string 使用的DRM方案类型，接口取值WIDEVINE,FAIRPLAY
     */
    public $DrmType;

    /**
     * @var DrmSourceObject 存储在COS上的原始内容信息
     */
    public $SourceObject;

    /**
     * @var array 加密后的内容存储到COS的对象
     */
    public $OutputObjects;

    /**
     * @param string $CosEndPoint cos的end point。
     * @param string $CosSecretId cos api密钥id。
     * @param string $CosSecretKey cos api密钥。
     * @param string $DrmType 使用的DRM方案类型，接口取值WIDEVINE,FAIRPLAY
     * @param DrmSourceObject $SourceObject 存储在COS上的原始内容信息
     * @param array $OutputObjects 加密后的内容存储到COS的对象
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
        if (array_key_exists("CosEndPoint",$param) and $param["CosEndPoint"] !== null) {
            $this->CosEndPoint = $param["CosEndPoint"];
        }

        if (array_key_exists("CosSecretId",$param) and $param["CosSecretId"] !== null) {
            $this->CosSecretId = $param["CosSecretId"];
        }

        if (array_key_exists("CosSecretKey",$param) and $param["CosSecretKey"] !== null) {
            $this->CosSecretKey = $param["CosSecretKey"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("SourceObject",$param) and $param["SourceObject"] !== null) {
            $this->SourceObject = new DrmSourceObject();
            $this->SourceObject->deserialize($param["SourceObject"]);
        }

        if (array_key_exists("OutputObjects",$param) and $param["OutputObjects"] !== null) {
            $this->OutputObjects = [];
            foreach ($param["OutputObjects"] as $key => $value){
                $obj = new DrmOutputObject();
                $obj->deserialize($value);
                array_push($this->OutputObjects, $obj);
            }
        }
    }
}
