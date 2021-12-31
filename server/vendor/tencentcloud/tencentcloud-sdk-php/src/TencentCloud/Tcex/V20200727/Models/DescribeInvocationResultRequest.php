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
namespace TencentCloud\Tcex\V20200727\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInvocationResult请求参数结构体
 *
 * @method string getInvokeId() 获取调用id，为调用InvokeService接口返回的RequestId
 * @method void setInvokeId(string $InvokeId) 设置调用id，为调用InvokeService接口返回的RequestId
 */
class DescribeInvocationResultRequest extends AbstractModel
{
    /**
     * @var string 调用id，为调用InvokeService接口返回的RequestId
     */
    public $InvokeId;

    /**
     * @param string $InvokeId 调用id，为调用InvokeService接口返回的RequestId
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
        if (array_key_exists("InvokeId",$param) and $param["InvokeId"] !== null) {
            $this->InvokeId = $param["InvokeId"];
        }
    }
}
