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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源引用参数
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method integer getVersion() 获取资源版本ID，-1表示使用最新版本
 * @method void setVersion(integer $Version) 设置资源版本ID，-1表示使用最新版本
 * @method integer getType() 获取引用资源类型，例如主资源设置为1，代表main class所在的jar包
 * @method void setType(integer $Type) 设置引用资源类型，例如主资源设置为1，代表main class所在的jar包
 */
class ResourceRef extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var integer 资源版本ID，-1表示使用最新版本
     */
    public $Version;

    /**
     * @var integer 引用资源类型，例如主资源设置为1，代表main class所在的jar包
     */
    public $Type;

    /**
     * @param string $ResourceId 资源ID
     * @param integer $Version 资源版本ID，-1表示使用最新版本
     * @param integer $Type 引用资源类型，例如主资源设置为1，代表main class所在的jar包
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
