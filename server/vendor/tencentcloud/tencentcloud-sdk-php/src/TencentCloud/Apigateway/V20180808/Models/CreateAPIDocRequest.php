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
 * CreateAPIDoc请求参数结构体
 *
 * @method string getApiDocName() 获取API文档名称
 * @method void setApiDocName(string $ApiDocName) 设置API文档名称
 * @method string getServiceId() 获取服务名称
 * @method void setServiceId(string $ServiceId) 设置服务名称
 * @method string getEnvironment() 获取环境名称
 * @method void setEnvironment(string $Environment) 设置环境名称
 * @method array getApiIds() 获取生成文档的API列表
 * @method void setApiIds(array $ApiIds) 设置生成文档的API列表
 */
class CreateAPIDocRequest extends AbstractModel
{
    /**
     * @var string API文档名称
     */
    public $ApiDocName;

    /**
     * @var string 服务名称
     */
    public $ServiceId;

    /**
     * @var string 环境名称
     */
    public $Environment;

    /**
     * @var array 生成文档的API列表
     */
    public $ApiIds;

    /**
     * @param string $ApiDocName API文档名称
     * @param string $ServiceId 服务名称
     * @param string $Environment 环境名称
     * @param array $ApiIds 生成文档的API列表
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
        if (array_key_exists("ApiDocName",$param) and $param["ApiDocName"] !== null) {
            $this->ApiDocName = $param["ApiDocName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
