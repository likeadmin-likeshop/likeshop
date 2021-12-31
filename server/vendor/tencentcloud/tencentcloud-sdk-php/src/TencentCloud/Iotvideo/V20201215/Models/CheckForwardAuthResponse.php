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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckForwardAuth返回参数结构体
 *
 * @method string getEndpoint() 获取腾讯云账号
 * @method void setEndpoint(string $Endpoint) 设置腾讯云账号
 * @method integer getResult() 获取结果
 * @method void setResult(integer $Result) 设置结果
 * @method string getProductid() 获取产品ID
 * @method void setProductid(string $Productid) 设置产品ID
 * @method string getErrMsg() 获取错误消息
 * @method void setErrMsg(string $ErrMsg) 设置错误消息
 * @method integer getQueueType() 获取队列类型
 * @method void setQueueType(integer $QueueType) 设置队列类型
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckForwardAuthResponse extends AbstractModel
{
    /**
     * @var string 腾讯云账号
     */
    public $Endpoint;

    /**
     * @var integer 结果
     */
    public $Result;

    /**
     * @var string 产品ID
     */
    public $Productid;

    /**
     * @var string 错误消息
     */
    public $ErrMsg;

    /**
     * @var integer 队列类型
     */
    public $QueueType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Endpoint 腾讯云账号
     * @param integer $Result 结果
     * @param string $Productid 产品ID
     * @param string $ErrMsg 错误消息
     * @param integer $QueueType 队列类型
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
        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Productid",$param) and $param["Productid"] !== null) {
            $this->Productid = $param["Productid"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
