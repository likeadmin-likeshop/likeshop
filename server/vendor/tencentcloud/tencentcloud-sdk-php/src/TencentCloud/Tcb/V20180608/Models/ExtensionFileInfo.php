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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩展文件信息
 *
 * @method string getCodeUri() 获取模板里使用的地址
 * @method void setCodeUri(string $CodeUri) 设置模板里使用的地址
 * @method string getUploadUrl() 获取上传文件的临时地址，含签名
 * @method void setUploadUrl(string $UploadUrl) 设置上传文件的临时地址，含签名
 * @method string getCustomKey() 获取自定义密钥。如果为空，则表示不需要加密
 * @method void setCustomKey(string $CustomKey) 设置自定义密钥。如果为空，则表示不需要加密
 * @method integer getMaxSize() 获取文件大小限制，单位M，客户端上传前需要主动检查文件大小，超过限制的文件会被删除。
 * @method void setMaxSize(integer $MaxSize) 设置文件大小限制，单位M，客户端上传前需要主动检查文件大小，超过限制的文件会被删除。
 */
class ExtensionFileInfo extends AbstractModel
{
    /**
     * @var string 模板里使用的地址
     */
    public $CodeUri;

    /**
     * @var string 上传文件的临时地址，含签名
     */
    public $UploadUrl;

    /**
     * @var string 自定义密钥。如果为空，则表示不需要加密
     */
    public $CustomKey;

    /**
     * @var integer 文件大小限制，单位M，客户端上传前需要主动检查文件大小，超过限制的文件会被删除。
     */
    public $MaxSize;

    /**
     * @param string $CodeUri 模板里使用的地址
     * @param string $UploadUrl 上传文件的临时地址，含签名
     * @param string $CustomKey 自定义密钥。如果为空，则表示不需要加密
     * @param integer $MaxSize 文件大小限制，单位M，客户端上传前需要主动检查文件大小，超过限制的文件会被删除。
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
        if (array_key_exists("CodeUri",$param) and $param["CodeUri"] !== null) {
            $this->CodeUri = $param["CodeUri"];
        }

        if (array_key_exists("UploadUrl",$param) and $param["UploadUrl"] !== null) {
            $this->UploadUrl = $param["UploadUrl"];
        }

        if (array_key_exists("CustomKey",$param) and $param["CustomKey"] !== null) {
            $this->CustomKey = $param["CustomKey"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
