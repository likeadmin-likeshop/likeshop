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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeShieldPlanInstance返回参数结构体
 *
 * @method BindInfo getBindInfo() 获取绑定资源信息
 * @method void setBindInfo(BindInfo $BindInfo) 设置绑定资源信息
 * @method ShieldPlanInfo getShieldPlanInfo() 获取加固策略信息
 * @method void setShieldPlanInfo(ShieldPlanInfo $ShieldPlanInfo) 设置加固策略信息
 * @method ResourceServiceInfo getResourceServiceInfo() 获取加固资源信息
 * @method void setResourceServiceInfo(ResourceServiceInfo $ResourceServiceInfo) 设置加固资源信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeShieldPlanInstanceResponse extends AbstractModel
{
    /**
     * @var BindInfo 绑定资源信息
     */
    public $BindInfo;

    /**
     * @var ShieldPlanInfo 加固策略信息
     */
    public $ShieldPlanInfo;

    /**
     * @var ResourceServiceInfo 加固资源信息
     */
    public $ResourceServiceInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param BindInfo $BindInfo 绑定资源信息
     * @param ShieldPlanInfo $ShieldPlanInfo 加固策略信息
     * @param ResourceServiceInfo $ResourceServiceInfo 加固资源信息
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
        if (array_key_exists("BindInfo",$param) and $param["BindInfo"] !== null) {
            $this->BindInfo = new BindInfo();
            $this->BindInfo->deserialize($param["BindInfo"]);
        }

        if (array_key_exists("ShieldPlanInfo",$param) and $param["ShieldPlanInfo"] !== null) {
            $this->ShieldPlanInfo = new ShieldPlanInfo();
            $this->ShieldPlanInfo->deserialize($param["ShieldPlanInfo"]);
        }

        if (array_key_exists("ResourceServiceInfo",$param) and $param["ResourceServiceInfo"] !== null) {
            $this->ResourceServiceInfo = new ResourceServiceInfo();
            $this->ResourceServiceInfo->deserialize($param["ResourceServiceInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
