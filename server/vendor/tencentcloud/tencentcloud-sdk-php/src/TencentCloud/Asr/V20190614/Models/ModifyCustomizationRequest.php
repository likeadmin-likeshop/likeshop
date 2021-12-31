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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomization请求参数结构体
 *
 * @method string getModelId() 获取要修改的模型ID
 * @method void setModelId(string $ModelId) 设置要修改的模型ID
 * @method string getModelName() 获取要修改的模型名称，长度需在1-20个字符之间
 * @method void setModelName(string $ModelName) 设置要修改的模型名称，长度需在1-20个字符之间
 * @method string getModelType() 获取要修改的模型类型，为8k或者16k
 * @method void setModelType(string $ModelType) 设置要修改的模型类型，为8k或者16k
 * @method string getTextUrl() 获取要修改的模型语料的下载地址，目前仅支持腾讯云cos
 * @method void setTextUrl(string $TextUrl) 设置要修改的模型语料的下载地址，目前仅支持腾讯云cos
 */
class ModifyCustomizationRequest extends AbstractModel
{
    /**
     * @var string 要修改的模型ID
     */
    public $ModelId;

    /**
     * @var string 要修改的模型名称，长度需在1-20个字符之间
     */
    public $ModelName;

    /**
     * @var string 要修改的模型类型，为8k或者16k
     */
    public $ModelType;

    /**
     * @var string 要修改的模型语料的下载地址，目前仅支持腾讯云cos
     */
    public $TextUrl;

    /**
     * @param string $ModelId 要修改的模型ID
     * @param string $ModelName 要修改的模型名称，长度需在1-20个字符之间
     * @param string $ModelType 要修改的模型类型，为8k或者16k
     * @param string $TextUrl 要修改的模型语料的下载地址，目前仅支持腾讯云cos
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("TextUrl",$param) and $param["TextUrl"] !== null) {
            $this->TextUrl = $param["TextUrl"];
        }
    }
}
