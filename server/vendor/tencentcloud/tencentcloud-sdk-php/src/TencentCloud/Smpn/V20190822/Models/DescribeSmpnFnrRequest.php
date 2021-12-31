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
namespace TencentCloud\Smpn\V20190822\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSmpnFnr请求参数结构体
 *
 * @method FNRRequest getRequestData() 获取虚假号码识别请求内容
 * @method void setRequestData(FNRRequest $RequestData) 设置虚假号码识别请求内容
 * @method string getResourceId() 获取用于计费的资源ID
 * @method void setResourceId(string $ResourceId) 设置用于计费的资源ID
 */
class DescribeSmpnFnrRequest extends AbstractModel
{
    /**
     * @var FNRRequest 虚假号码识别请求内容
     */
    public $RequestData;

    /**
     * @var string 用于计费的资源ID
     */
    public $ResourceId;

    /**
     * @param FNRRequest $RequestData 虚假号码识别请求内容
     * @param string $ResourceId 用于计费的资源ID
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
        if (array_key_exists("RequestData",$param) and $param["RequestData"] !== null) {
            $this->RequestData = new FNRRequest();
            $this->RequestData->deserialize($param["RequestData"]);
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
