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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线语音服务配置数据
 *
 * @method string getStatus() 获取离线语音服务开关，取值：open/close
 * @method void setStatus(string $Status) 设置离线语音服务开关，取值：open/close
 * @method string getLanguage() 获取离线语音支持语种，取值： all-全部，cnen-中英文。默认为中英文
 * @method void setLanguage(string $Language) 设置离线语音支持语种，取值： all-全部，cnen-中英文。默认为中英文
 */
class VoiceMessageConf extends AbstractModel
{
    /**
     * @var string 离线语音服务开关，取值：open/close
     */
    public $Status;

    /**
     * @var string 离线语音支持语种，取值： all-全部，cnen-中英文。默认为中英文
     */
    public $Language;

    /**
     * @param string $Status 离线语音服务开关，取值：open/close
     * @param string $Language 离线语音支持语种，取值： all-全部，cnen-中英文。默认为中英文
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }
    }
}
