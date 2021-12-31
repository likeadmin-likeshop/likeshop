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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置
 *
 * @method string getId() 获取Id
 * @method void setId(string $Id) 设置Id
 * @method string getName() 获取配置名
 * @method void setName(string $Name) 设置配置名
 * @method string getModelUri() 获取模型地址
 * @method void setModelUri(string $ModelUri) 设置模型地址
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getRuntime() 获取运行环境
 * @method void setRuntime(string $Runtime) 设置运行环境
 * @method string getVersion() 获取配置版本
 * @method void setVersion(string $Version) 设置配置版本
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getDescription() 获取配置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置配置描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class Config extends AbstractModel
{
    /**
     * @var string Id
     */
    public $Id;

    /**
     * @var string 配置名
     */
    public $Name;

    /**
     * @var string 模型地址
     */
    public $ModelUri;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 运行环境
     */
    public $Runtime;

    /**
     * @var string 配置版本
     */
    public $Version;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 配置描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $Id Id
     * @param string $Name 配置名
     * @param string $ModelUri 模型地址
     * @param string $CreateTime 创建时间
     * @param string $Runtime 运行环境
     * @param string $Version 配置版本
     * @param string $UpdateTime 更新时间
     * @param string $Description 配置描述
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ModelUri",$param) and $param["ModelUri"] !== null) {
            $this->ModelUri = $param["ModelUri"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
