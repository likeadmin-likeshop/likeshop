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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConfig请求参数结构体
 *
 * @method string getConfigName() 获取配置项名称
 * @method void setConfigName(string $ConfigName) 设置配置项名称
 * @method string getConfigVersion() 获取配置项版本
 * @method void setConfigVersion(string $ConfigVersion) 设置配置项版本
 * @method string getConfigValue() 获取配置项值
 * @method void setConfigValue(string $ConfigValue) 设置配置项值
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getConfigVersionDesc() 获取配置项版本描述
 * @method void setConfigVersionDesc(string $ConfigVersionDesc) 设置配置项版本描述
 * @method string getConfigType() 获取配置项值类型
 * @method void setConfigType(string $ConfigType) 设置配置项值类型
 * @method boolean getEncodeWithBase64() 获取Base64编码的配置项
 * @method void setEncodeWithBase64(boolean $EncodeWithBase64) 设置Base64编码的配置项
 */
class CreateConfigRequest extends AbstractModel
{
    /**
     * @var string 配置项名称
     */
    public $ConfigName;

    /**
     * @var string 配置项版本
     */
    public $ConfigVersion;

    /**
     * @var string 配置项值
     */
    public $ConfigValue;

    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 配置项版本描述
     */
    public $ConfigVersionDesc;

    /**
     * @var string 配置项值类型
     */
    public $ConfigType;

    /**
     * @var boolean Base64编码的配置项
     */
    public $EncodeWithBase64;

    /**
     * @param string $ConfigName 配置项名称
     * @param string $ConfigVersion 配置项版本
     * @param string $ConfigValue 配置项值
     * @param string $ApplicationId 应用ID
     * @param string $ConfigVersionDesc 配置项版本描述
     * @param string $ConfigType 配置项值类型
     * @param boolean $EncodeWithBase64 Base64编码的配置项
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
        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }

        if (array_key_exists("ConfigValue",$param) and $param["ConfigValue"] !== null) {
            $this->ConfigValue = $param["ConfigValue"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ConfigVersionDesc",$param) and $param["ConfigVersionDesc"] !== null) {
            $this->ConfigVersionDesc = $param["ConfigVersionDesc"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("EncodeWithBase64",$param) and $param["EncodeWithBase64"] !== null) {
            $this->EncodeWithBase64 = $param["EncodeWithBase64"];
        }
    }
}
