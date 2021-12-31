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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api文档下载
 *
 * @method string getDocumentURL() 获取生成的 document 会存放到 COS 中，此出参返回产生文件的下载链接。
 * @method void setDocumentURL(string $DocumentURL) 设置生成的 document 会存放到 COS 中，此出参返回产生文件的下载链接。
 * @method string getSdkURL() 获取生成的 SDK 会存放到 COS 中，此出参返回产生 SDK 文件的下载链接。
 * @method void setSdkURL(string $SdkURL) 设置生成的 SDK 会存放到 COS 中，此出参返回产生 SDK 文件的下载链接。
 */
class DocumentSDK extends AbstractModel
{
    /**
     * @var string 生成的 document 会存放到 COS 中，此出参返回产生文件的下载链接。
     */
    public $DocumentURL;

    /**
     * @var string 生成的 SDK 会存放到 COS 中，此出参返回产生 SDK 文件的下载链接。
     */
    public $SdkURL;

    /**
     * @param string $DocumentURL 生成的 document 会存放到 COS 中，此出参返回产生文件的下载链接。
     * @param string $SdkURL 生成的 SDK 会存放到 COS 中，此出参返回产生 SDK 文件的下载链接。
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
        if (array_key_exists("DocumentURL",$param) and $param["DocumentURL"] !== null) {
            $this->DocumentURL = $param["DocumentURL"];
        }

        if (array_key_exists("SdkURL",$param) and $param["SdkURL"] !== null) {
            $this->SdkURL = $param["SdkURL"];
        }
    }
}
