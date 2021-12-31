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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployServerlessGroup请求参数结构体
 *
 * @method string getGroupId() 获取部署组ID
 * @method void setGroupId(string $GroupId) 设置部署组ID
 * @method string getPkgId() 获取程序包ID
 * @method void setPkgId(string $PkgId) 设置程序包ID
 * @method string getMemory() 获取所需实例内存大小，取值为 1Gi 2Gi 4Gi 8Gi 16Gi，缺省为 1Gi，不传表示维持原态
 * @method void setMemory(string $Memory) 设置所需实例内存大小，取值为 1Gi 2Gi 4Gi 8Gi 16Gi，缺省为 1Gi，不传表示维持原态
 * @method integer getInstanceRequest() 获取要求最小实例数，取值范围 [1, 4]，缺省为 1，不传表示维持原态
 * @method void setInstanceRequest(integer $InstanceRequest) 设置要求最小实例数，取值范围 [1, 4]，缺省为 1，不传表示维持原态
 * @method string getStartupParameters() 获取部署组启动参数，不传表示维持原态
 * @method void setStartupParameters(string $StartupParameters) 设置部署组启动参数，不传表示维持原态
 */
class DeployServerlessGroupRequest extends AbstractModel
{
    /**
     * @var string 部署组ID
     */
    public $GroupId;

    /**
     * @var string 程序包ID
     */
    public $PkgId;

    /**
     * @var string 所需实例内存大小，取值为 1Gi 2Gi 4Gi 8Gi 16Gi，缺省为 1Gi，不传表示维持原态
     */
    public $Memory;

    /**
     * @var integer 要求最小实例数，取值范围 [1, 4]，缺省为 1，不传表示维持原态
     */
    public $InstanceRequest;

    /**
     * @var string 部署组启动参数，不传表示维持原态
     */
    public $StartupParameters;

    /**
     * @param string $GroupId 部署组ID
     * @param string $PkgId 程序包ID
     * @param string $Memory 所需实例内存大小，取值为 1Gi 2Gi 4Gi 8Gi 16Gi，缺省为 1Gi，不传表示维持原态
     * @param integer $InstanceRequest 要求最小实例数，取值范围 [1, 4]，缺省为 1，不传表示维持原态
     * @param string $StartupParameters 部署组启动参数，不传表示维持原态
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceRequest",$param) and $param["InstanceRequest"] !== null) {
            $this->InstanceRequest = $param["InstanceRequest"];
        }

        if (array_key_exists("StartupParameters",$param) and $param["StartupParameters"] !== null) {
            $this->StartupParameters = $param["StartupParameters"];
        }
    }
}
