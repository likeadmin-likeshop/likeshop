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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenProxyGroup返回参数结构体
 *
 * @method array getInvalidStatusInstanceSet() 获取非关闭状态下的通道实例ID列表，不可开启。
 * @method void setInvalidStatusInstanceSet(array $InvalidStatusInstanceSet) 设置非关闭状态下的通道实例ID列表，不可开启。
 * @method array getOperationFailedInstanceSet() 获取开启操作失败的通道实例ID列表。
 * @method void setOperationFailedInstanceSet(array $OperationFailedInstanceSet) 设置开启操作失败的通道实例ID列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class OpenProxyGroupResponse extends AbstractModel
{
    /**
     * @var array 非关闭状态下的通道实例ID列表，不可开启。
     */
    public $InvalidStatusInstanceSet;

    /**
     * @var array 开启操作失败的通道实例ID列表。
     */
    public $OperationFailedInstanceSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InvalidStatusInstanceSet 非关闭状态下的通道实例ID列表，不可开启。
     * @param array $OperationFailedInstanceSet 开启操作失败的通道实例ID列表。
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
        if (array_key_exists("InvalidStatusInstanceSet",$param) and $param["InvalidStatusInstanceSet"] !== null) {
            $this->InvalidStatusInstanceSet = $param["InvalidStatusInstanceSet"];
        }

        if (array_key_exists("OperationFailedInstanceSet",$param) and $param["OperationFailedInstanceSet"] !== null) {
            $this->OperationFailedInstanceSet = $param["OperationFailedInstanceSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
