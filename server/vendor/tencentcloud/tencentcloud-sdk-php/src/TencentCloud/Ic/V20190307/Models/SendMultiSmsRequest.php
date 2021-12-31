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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendMultiSms请求参数结构体
 *
 * @method string getSdkappid() 获取应用ID
 * @method void setSdkappid(string $Sdkappid) 设置应用ID
 * @method array getIccids() 获取卡片列表
 * @method void setIccids(array $Iccids) 设置卡片列表
 * @method string getContent() 获取短信内容 长度限制 70
 * @method void setContent(string $Content) 设置短信内容 长度限制 70
 */
class SendMultiSmsRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $Sdkappid;

    /**
     * @var array 卡片列表
     */
    public $Iccids;

    /**
     * @var string 短信内容 长度限制 70
     */
    public $Content;

    /**
     * @param string $Sdkappid 应用ID
     * @param array $Iccids 卡片列表
     * @param string $Content 短信内容 长度限制 70
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
        if (array_key_exists("Sdkappid",$param) and $param["Sdkappid"] !== null) {
            $this->Sdkappid = $param["Sdkappid"];
        }

        if (array_key_exists("Iccids",$param) and $param["Iccids"] !== null) {
            $this->Iccids = $param["Iccids"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
