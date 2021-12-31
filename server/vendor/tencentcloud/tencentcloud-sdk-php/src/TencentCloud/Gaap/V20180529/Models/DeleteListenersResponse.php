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
 * DeleteListeners返回参数结构体
 *
 * @method array getOperationFailedListenerSet() 获取删除操作失败的监听器ID列表
 * @method void setOperationFailedListenerSet(array $OperationFailedListenerSet) 设置删除操作失败的监听器ID列表
 * @method array getOperationSucceedListenerSet() 获取删除操作成功的监听器ID列表
 * @method void setOperationSucceedListenerSet(array $OperationSucceedListenerSet) 设置删除操作成功的监听器ID列表
 * @method array getInvalidStatusListenerSet() 获取无效的监听器ID列表，如：监听器不存在，监听器对应实例不匹配
 * @method void setInvalidStatusListenerSet(array $InvalidStatusListenerSet) 设置无效的监听器ID列表，如：监听器不存在，监听器对应实例不匹配
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DeleteListenersResponse extends AbstractModel
{
    /**
     * @var array 删除操作失败的监听器ID列表
     */
    public $OperationFailedListenerSet;

    /**
     * @var array 删除操作成功的监听器ID列表
     */
    public $OperationSucceedListenerSet;

    /**
     * @var array 无效的监听器ID列表，如：监听器不存在，监听器对应实例不匹配
     */
    public $InvalidStatusListenerSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $OperationFailedListenerSet 删除操作失败的监听器ID列表
     * @param array $OperationSucceedListenerSet 删除操作成功的监听器ID列表
     * @param array $InvalidStatusListenerSet 无效的监听器ID列表，如：监听器不存在，监听器对应实例不匹配
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
        if (array_key_exists("OperationFailedListenerSet",$param) and $param["OperationFailedListenerSet"] !== null) {
            $this->OperationFailedListenerSet = $param["OperationFailedListenerSet"];
        }

        if (array_key_exists("OperationSucceedListenerSet",$param) and $param["OperationSucceedListenerSet"] !== null) {
            $this->OperationSucceedListenerSet = $param["OperationSucceedListenerSet"];
        }

        if (array_key_exists("InvalidStatusListenerSet",$param) and $param["InvalidStatusListenerSet"] !== null) {
            $this->InvalidStatusListenerSet = $param["InvalidStatusListenerSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
