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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextModeration请求参数结构体
 *
 * @method string getContent() 获取文本内容Base64编码。原文长度需小于15000字节，即5000个汉字以内。
 * @method void setContent(string $Content) 设置文本内容Base64编码。原文长度需小于15000字节，即5000个汉字以内。
 * @method Device getDevice() 获取设备相关信息
 * @method void setDevice(Device $Device) 设置设备相关信息
 * @method User getUser() 获取用户相关信息
 * @method void setUser(User $User) 设置用户相关信息
 * @method integer getBizType() 获取该字段用于标识业务场景。您可以在内容安全控制台创建对应的ID，配置不同的内容审核策略，通过接口调用，默认不填为0，后端使用默认策略
 * @method void setBizType(integer $BizType) 设置该字段用于标识业务场景。您可以在内容安全控制台创建对应的ID，配置不同的内容审核策略，通过接口调用，默认不填为0，后端使用默认策略
 * @method string getDataId() 获取数据ID，英文字母、下划线、-组成，不超过64个字符
 * @method void setDataId(string $DataId) 设置数据ID，英文字母、下划线、-组成，不超过64个字符
 * @method integer getSdkAppId() 获取业务应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置业务应用ID
 */
class TextModerationRequest extends AbstractModel
{
    /**
     * @var string 文本内容Base64编码。原文长度需小于15000字节，即5000个汉字以内。
     */
    public $Content;

    /**
     * @var Device 设备相关信息
     */
    public $Device;

    /**
     * @var User 用户相关信息
     */
    public $User;

    /**
     * @var integer 该字段用于标识业务场景。您可以在内容安全控制台创建对应的ID，配置不同的内容审核策略，通过接口调用，默认不填为0，后端使用默认策略
     */
    public $BizType;

    /**
     * @var string 数据ID，英文字母、下划线、-组成，不超过64个字符
     */
    public $DataId;

    /**
     * @var integer 业务应用ID
     */
    public $SdkAppId;

    /**
     * @param string $Content 文本内容Base64编码。原文长度需小于15000字节，即5000个汉字以内。
     * @param Device $Device 设备相关信息
     * @param User $User 用户相关信息
     * @param integer $BizType 该字段用于标识业务场景。您可以在内容安全控制台创建对应的ID，配置不同的内容审核策略，通过接口调用，默认不填为0，后端使用默认策略
     * @param string $DataId 数据ID，英文字母、下划线、-组成，不超过64个字符
     * @param integer $SdkAppId 业务应用ID
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new User();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
