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

namespace TencentCloud\Vms\V20200902;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vms\V20200902\Models as Models;

/**
 * @method Models\SendCodeVoiceResponse SendCodeVoice(Models\SendCodeVoiceRequest $req) 给用户发语音验证码（仅支持数字）。
 * @method Models\SendTtsVoiceResponse SendTtsVoice(Models\SendTtsVoiceRequest $req) 给用户发送指定模板的语音通知。
 */

class VmsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vms.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vms";

    /**
     * @var string
     */
    protected $version = "2020-09-02";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("vms")."\\"."V20200902\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
