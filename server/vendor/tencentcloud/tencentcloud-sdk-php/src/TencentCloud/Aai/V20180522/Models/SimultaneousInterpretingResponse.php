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
namespace TencentCloud\Aai\V20180522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SimultaneousInterpreting返回参数结构体
 *
 * @method string getAsrText() 获取语音识别的结果
 * @method void setAsrText(string $AsrText) 设置语音识别的结果
 * @method string getNmtText() 获取机器翻译的结果
 * @method void setNmtText(string $NmtText) 设置机器翻译的结果
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SimultaneousInterpretingResponse extends AbstractModel
{
    /**
     * @var string 语音识别的结果
     */
    public $AsrText;

    /**
     * @var string 机器翻译的结果
     */
    public $NmtText;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AsrText 语音识别的结果
     * @param string $NmtText 机器翻译的结果
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AsrText",$param) and $param["AsrText"] !== null) {
            $this->AsrText = $param["AsrText"];
        }

        if (array_key_exists("NmtText",$param) and $param["NmtText"] !== null) {
            $this->NmtText = $param["NmtText"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
