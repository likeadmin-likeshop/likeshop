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
namespace TencentCloud\Asw\V20200722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFlowService返回参数结构体
 *
 * @method string getFlowServiceResource() 获取状态机资源名
 * @method void setFlowServiceResource(string $FlowServiceResource) 设置状态机资源名
 * @method string getUpdateDate() 获取更新时间
 * @method void setUpdateDate(string $UpdateDate) 设置更新时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyFlowServiceResponse extends AbstractModel
{
    /**
     * @var string 状态机资源名
     */
    public $FlowServiceResource;

    /**
     * @var string 更新时间
     */
    public $UpdateDate;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FlowServiceResource 状态机资源名
     * @param string $UpdateDate 更新时间
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
        if (array_key_exists("FlowServiceResource",$param) and $param["FlowServiceResource"] !== null) {
            $this->FlowServiceResource = $param["FlowServiceResource"];
        }

        if (array_key_exists("UpdateDate",$param) and $param["UpdateDate"] !== null) {
            $this->UpdateDate = $param["UpdateDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
