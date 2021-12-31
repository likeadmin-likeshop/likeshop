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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModuleDisableWanIp请求参数结构体
 *
 * @method string getModuleId() 获取模块ID
 * @method void setModuleId(string $ModuleId) 设置模块ID
 * @method boolean getDisableWanIp() 获取是否禁止分配外网ip,true：统一分配外网ip，false：禁止分配外网ip.
 * @method void setDisableWanIp(boolean $DisableWanIp) 设置是否禁止分配外网ip,true：统一分配外网ip，false：禁止分配外网ip.
 */
class ModifyModuleDisableWanIpRequest extends AbstractModel
{
    /**
     * @var string 模块ID
     */
    public $ModuleId;

    /**
     * @var boolean 是否禁止分配外网ip,true：统一分配外网ip，false：禁止分配外网ip.
     */
    public $DisableWanIp;

    /**
     * @param string $ModuleId 模块ID
     * @param boolean $DisableWanIp 是否禁止分配外网ip,true：统一分配外网ip，false：禁止分配外网ip.
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("DisableWanIp",$param) and $param["DisableWanIp"] !== null) {
            $this->DisableWanIp = $param["DisableWanIp"];
        }
    }
}
