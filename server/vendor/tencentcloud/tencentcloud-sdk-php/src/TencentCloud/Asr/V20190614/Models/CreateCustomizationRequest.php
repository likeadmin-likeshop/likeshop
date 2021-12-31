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
 * CreateCustomization请求参数结构体
 *
 * @method string getModelName() 获取自学习模型名称，需在1-20字符之间
 * @method void setModelName(string $ModelName) 设置自学习模型名称，需在1-20字符之间
 * @method string getTextUrl() 获取文本文件的下载地址，服务会从该地址下载文件，目前仅支持腾讯云cos
 * @method void setTextUrl(string $TextUrl) 设置文本文件的下载地址，服务会从该地址下载文件，目前仅支持腾讯云cos
 * @method string getModelType() 获取自学习模型类型，填写8k或者16k
 * @method void setModelType(string $ModelType) 设置自学习模型类型，填写8k或者16k
 * @method array getTagInfos() 获取标签信息
 * @method void setTagInfos(array $TagInfos) 设置标签信息
 */
class CreateCustomizationRequest extends AbstractModel
{
    /**
     * @var string 自学习模型名称，需在1-20字符之间
     */
    public $ModelName;

    /**
     * @var string 文本文件的下载地址，服务会从该地址下载文件，目前仅支持腾讯云cos
     */
    public $TextUrl;

    /**
     * @var string 自学习模型类型，填写8k或者16k
     */
    public $ModelType;

    /**
     * @var array 标签信息
     */
    public $TagInfos;

    /**
     * @param string $ModelName 自学习模型名称，需在1-20字符之间
     * @param string $TextUrl 文本文件的下载地址，服务会从该地址下载文件，目前仅支持腾讯云cos
     * @param string $ModelType 自学习模型类型，填写8k或者16k
     * @param array $TagInfos 标签信息
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("TextUrl",$param) and $param["TextUrl"] !== null) {
            $this->TextUrl = $param["TextUrl"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("TagInfos",$param) and $param["TagInfos"] !== null) {
            $this->TagInfos = $param["TagInfos"];
        }
    }
}
