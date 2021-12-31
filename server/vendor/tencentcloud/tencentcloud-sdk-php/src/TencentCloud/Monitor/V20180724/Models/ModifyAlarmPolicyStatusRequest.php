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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmPolicyStatus请求参数结构体
 *
 * @method string getModule() 获取模块名，固定值 monitor
 * @method void setModule(string $Module) 设置模块名，固定值 monitor
 * @method string getPolicyId() 获取告警策略 ID
 * @method void setPolicyId(string $PolicyId) 设置告警策略 ID
 * @method integer getEnable() 获取启停状态 0=停用 1=启用
 * @method void setEnable(integer $Enable) 设置启停状态 0=停用 1=启用
 */
class ModifyAlarmPolicyStatusRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定值 monitor
     */
    public $Module;

    /**
     * @var string 告警策略 ID
     */
    public $PolicyId;

    /**
     * @var integer 启停状态 0=停用 1=启用
     */
    public $Enable;

    /**
     * @param string $Module 模块名，固定值 monitor
     * @param string $PolicyId 告警策略 ID
     * @param integer $Enable 启停状态 0=停用 1=启用
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
