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
namespace TencentCloud\Tav\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanFile返回参数结构体
 *
 * @method integer getStatus() 获取接口调用状态，成功返回200，失败返回400
 * @method void setStatus(integer $Status) 设置接口调用状态，成功返回200，失败返回400
 * @method string getInfo() 获取接口调用描述信息，成功返回"success"，失败返回"invalid request"
 * @method void setInfo(string $Info) 设置接口调用描述信息，成功返回"success"，失败返回"invalid request"
 * @method string getData() 获取异步扫描任务提交成功返回success
 * @method void setData(string $Data) 设置异步扫描任务提交成功返回success
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ScanFileResponse extends AbstractModel
{
    /**
     * @var integer 接口调用状态，成功返回200，失败返回400
     */
    public $Status;

    /**
     * @var string 接口调用描述信息，成功返回"success"，失败返回"invalid request"
     */
    public $Info;

    /**
     * @var string 异步扫描任务提交成功返回success
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 接口调用状态，成功返回200，失败返回400
     * @param string $Info 接口调用描述信息，成功返回"success"，失败返回"invalid request"
     * @param string $Data 异步扫描任务提交成功返回success
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
