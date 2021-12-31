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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvs请求参数结构体
 *
 * @method string getEnvId() 获取环境ID，如果传了这个参数则只返回该环境的相关信息
 * @method void setEnvId(string $EnvId) 设置环境ID，如果传了这个参数则只返回该环境的相关信息
 * @method boolean getIsVisible() 获取指定Channels字段为可见渠道列表或不可见渠道列表
如只想获取渠道A的环境 就填写IsVisible= true,Channels = ["A"], 过滤渠道A拉取其他渠道环境时填写IsVisible= false,Channels = ["A"]
 * @method void setIsVisible(boolean $IsVisible) 设置指定Channels字段为可见渠道列表或不可见渠道列表
如只想获取渠道A的环境 就填写IsVisible= true,Channels = ["A"], 过滤渠道A拉取其他渠道环境时填写IsVisible= false,Channels = ["A"]
 * @method array getChannels() 获取渠道列表，代表可见或不可见渠道由IsVisible参数指定
 * @method void setChannels(array $Channels) 设置渠道列表，代表可见或不可见渠道由IsVisible参数指定
 */
class DescribeEnvsRequest extends AbstractModel
{
    /**
     * @var string 环境ID，如果传了这个参数则只返回该环境的相关信息
     */
    public $EnvId;

    /**
     * @var boolean 指定Channels字段为可见渠道列表或不可见渠道列表
如只想获取渠道A的环境 就填写IsVisible= true,Channels = ["A"], 过滤渠道A拉取其他渠道环境时填写IsVisible= false,Channels = ["A"]
     */
    public $IsVisible;

    /**
     * @var array 渠道列表，代表可见或不可见渠道由IsVisible参数指定
     */
    public $Channels;

    /**
     * @param string $EnvId 环境ID，如果传了这个参数则只返回该环境的相关信息
     * @param boolean $IsVisible 指定Channels字段为可见渠道列表或不可见渠道列表
如只想获取渠道A的环境 就填写IsVisible= true,Channels = ["A"], 过滤渠道A拉取其他渠道环境时填写IsVisible= false,Channels = ["A"]
     * @param array $Channels 渠道列表，代表可见或不可见渠道由IsVisible参数指定
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("IsVisible",$param) and $param["IsVisible"] !== null) {
            $this->IsVisible = $param["IsVisible"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = $param["Channels"];
        }
    }
}
