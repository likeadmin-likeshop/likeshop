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
 * DescribeSmpnChp请求参数结构体
 *
 * @method string getResourceId() 获取客户用于计费的资源Id
 * @method void setResourceId(string $ResourceId) 设置客户用于计费的资源Id
 * @method CHPRequest getRequestData() 获取终端骚扰保护请求
 * @method void setRequestData(CHPRequest $RequestData) 设置终端骚扰保护请求
 */
class DescribeSmpnChpRequest extends AbstractModel
{
    /**
     * @var string 客户用于计费的资源Id
     */
    public $ResourceId;

    /**
     * @var CHPRequest 终端骚扰保护请求
     */
    public $RequestData;

    /**
     * @param string $ResourceId 客户用于计费的资源Id
     * @param CHPRequest $RequestData 终端骚扰保护请求
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("RequestData",$param) and $param["RequestData"] !== null) {
            $this->RequestData = new CHPRequest();
            $this->RequestData->deserialize($param["RequestData"]);
        }
    }
}
