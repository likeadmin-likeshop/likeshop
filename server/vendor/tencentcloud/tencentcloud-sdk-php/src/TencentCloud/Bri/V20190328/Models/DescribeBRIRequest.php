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
namespace TencentCloud\Bri\V20190328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBRI请求参数结构体
 *
 * @method BRIRequest getRequestData() 获取业务风险情报请求体
 * @method void setRequestData(BRIRequest $RequestData) 设置业务风险情报请求体
 * @method string getResourceId() 获取客户用于计费的资源ID
 * @method void setResourceId(string $ResourceId) 设置客户用于计费的资源ID
 */
class DescribeBRIRequest extends AbstractModel
{
    /**
     * @var BRIRequest 业务风险情报请求体
     */
    public $RequestData;

    /**
     * @var string 客户用于计费的资源ID
     */
    public $ResourceId;

    /**
     * @param BRIRequest $RequestData 业务风险情报请求体
     * @param string $ResourceId 客户用于计费的资源ID
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
            $this->RequestData = new BRIRequest();
            $this->RequestData->deserialize($param["RequestData"]);
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
