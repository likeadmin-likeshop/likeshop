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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 片头片尾识别任务参数信息
 *
 * @method integer getSwitch() 获取是否开启片头片尾识别。0为关闭，1为开启。其他非0非1值默认为0。
 * @method void setSwitch(integer $Switch) 设置是否开启片头片尾识别。0为关闭，1为开启。其他非0非1值默认为0。
 * @method string getCustomInfo() 获取额外定制化服务参数。参数为序列化的Json字符串，例如：{"k1":"v1"}。
 * @method void setCustomInfo(string $CustomInfo) 设置额外定制化服务参数。参数为序列化的Json字符串，例如：{"k1":"v1"}。
 */
class OpeningEndingEditingInfo extends AbstractModel
{
    /**
     * @var integer 是否开启片头片尾识别。0为关闭，1为开启。其他非0非1值默认为0。
     */
    public $Switch;

    /**
     * @var string 额外定制化服务参数。参数为序列化的Json字符串，例如：{"k1":"v1"}。
     */
    public $CustomInfo;

    /**
     * @param integer $Switch 是否开启片头片尾识别。0为关闭，1为开启。其他非0非1值默认为0。
     * @param string $CustomInfo 额外定制化服务参数。参数为序列化的Json字符串，例如：{"k1":"v1"}。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CustomInfo",$param) and $param["CustomInfo"] !== null) {
            $this->CustomInfo = $param["CustomInfo"];
        }
    }
}
