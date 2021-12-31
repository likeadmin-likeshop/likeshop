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
 * 创建集群时，选择安装的扩展组件的信息
 *
 * @method string getAddonName() 获取扩展组件名称
 * @method void setAddonName(string $AddonName) 设置扩展组件名称
 * @method string getAddonParam() 获取扩展组件信息(扩展组件资源对象的json字符串描述)
 * @method void setAddonParam(string $AddonParam) 设置扩展组件信息(扩展组件资源对象的json字符串描述)
 */
class ExtensionAddon extends AbstractModel
{
    /**
     * @var string 扩展组件名称
     */
    public $AddonName;

    /**
     * @var string 扩展组件信息(扩展组件资源对象的json字符串描述)
     */
    public $AddonParam;

    /**
     * @param string $AddonName 扩展组件名称
     * @param string $AddonParam 扩展组件信息(扩展组件资源对象的json字符串描述)
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
        if (array_key_exists("AddonName",$param) and $param["AddonName"] !== null) {
            $this->AddonName = $param["AddonName"];
        }

        if (array_key_exists("AddonParam",$param) and $param["AddonParam"] !== null) {
            $this->AddonParam = $param["AddonParam"];
        }
    }
}
