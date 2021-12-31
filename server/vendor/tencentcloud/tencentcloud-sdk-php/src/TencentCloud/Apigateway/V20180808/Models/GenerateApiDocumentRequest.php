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
 * GenerateApiDocument请求参数结构体
 *
 * @method string getServiceId() 获取待创建文档的服务唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置待创建文档的服务唯一 ID。
 * @method string getGenEnvironment() 获取待创建 SDK 的服务所在环境。
 * @method void setGenEnvironment(string $GenEnvironment) 设置待创建 SDK 的服务所在环境。
 * @method string getGenLanguage() 获取待创建 SDK 的语言。当前只支持 Python 和 JavaScript。
 * @method void setGenLanguage(string $GenLanguage) 设置待创建 SDK 的语言。当前只支持 Python 和 JavaScript。
 */
class GenerateApiDocumentRequest extends AbstractModel
{
    /**
     * @var string 待创建文档的服务唯一 ID。
     */
    public $ServiceId;

    /**
     * @var string 待创建 SDK 的服务所在环境。
     */
    public $GenEnvironment;

    /**
     * @var string 待创建 SDK 的语言。当前只支持 Python 和 JavaScript。
     */
    public $GenLanguage;

    /**
     * @param string $ServiceId 待创建文档的服务唯一 ID。
     * @param string $GenEnvironment 待创建 SDK 的服务所在环境。
     * @param string $GenLanguage 待创建 SDK 的语言。当前只支持 Python 和 JavaScript。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("GenEnvironment",$param) and $param["GenEnvironment"] !== null) {
            $this->GenEnvironment = $param["GenEnvironment"];
        }

        if (array_key_exists("GenLanguage",$param) and $param["GenLanguage"] !== null) {
            $this->GenLanguage = $param["GenLanguage"];
        }
    }
}
