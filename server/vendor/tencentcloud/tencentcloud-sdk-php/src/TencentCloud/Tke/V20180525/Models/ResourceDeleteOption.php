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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源删除选项
 *
 * @method string getResourceType() 获取资源类型，例如CBS
 * @method void setResourceType(string $ResourceType) 设置资源类型，例如CBS
 * @method string getDeleteMode() 获取集群删除时资源的删除模式：terminate（销毁），retain （保留）
 * @method void setDeleteMode(string $DeleteMode) 设置集群删除时资源的删除模式：terminate（销毁），retain （保留）
 */
class ResourceDeleteOption extends AbstractModel
{
    /**
     * @var string 资源类型，例如CBS
     */
    public $ResourceType;

    /**
     * @var string 集群删除时资源的删除模式：terminate（销毁），retain （保留）
     */
    public $DeleteMode;

    /**
     * @param string $ResourceType 资源类型，例如CBS
     * @param string $DeleteMode 集群删除时资源的删除模式：terminate（销毁），retain （保留）
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
