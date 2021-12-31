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
 * SendCustomAlarmMsg请求参数结构体
 *
 * @method string getModule() 获取接口模块名，当前取值monitor
 * @method void setModule(string $Module) 设置接口模块名，当前取值monitor
 * @method string getPolicyId() 获取消息策略ID，在云监控自定义消息页面配置
 * @method void setPolicyId(string $PolicyId) 设置消息策略ID，在云监控自定义消息页面配置
 * @method string getMsg() 获取用户想要发送的自定义消息内容
 * @method void setMsg(string $Msg) 设置用户想要发送的自定义消息内容
 */
class SendCustomAlarmMsgRequest extends AbstractModel
{
    /**
     * @var string 接口模块名，当前取值monitor
     */
    public $Module;

    /**
     * @var string 消息策略ID，在云监控自定义消息页面配置
     */
    public $PolicyId;

    /**
     * @var string 用户想要发送的自定义消息内容
     */
    public $Msg;

    /**
     * @param string $Module 接口模块名，当前取值monitor
     * @param string $PolicyId 消息策略ID，在云监控自定义消息页面配置
     * @param string $Msg 用户想要发送的自定义消息内容
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

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }
    }
}
