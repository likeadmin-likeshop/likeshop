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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectAuth返回参数结构体
 *
 * @method string getUrl() 获取用于发起核身流程的URL，仅微信H5场景使用。
 * @method void setUrl(string $Url) 设置用于发起核身流程的URL，仅微信H5场景使用。
 * @method string getBizToken() 获取一次核身流程的标识，有效时间为7,200秒；
完成核身后，可用该标识获取验证结果信息。
 * @method void setBizToken(string $BizToken) 设置一次核身流程的标识，有效时间为7,200秒；
完成核身后，可用该标识获取验证结果信息。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DetectAuthResponse extends AbstractModel
{
    /**
     * @var string 用于发起核身流程的URL，仅微信H5场景使用。
     */
    public $Url;

    /**
     * @var string 一次核身流程的标识，有效时间为7,200秒；
完成核身后，可用该标识获取验证结果信息。
     */
    public $BizToken;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Url 用于发起核身流程的URL，仅微信H5场景使用。
     * @param string $BizToken 一次核身流程的标识，有效时间为7,200秒；
完成核身后，可用该标识获取验证结果信息。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BizToken",$param) and $param["BizToken"] !== null) {
            $this->BizToken = $param["BizToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
