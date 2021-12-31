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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api或service绑定使用计划详情
 *
 * @method string getServiceId() 获取服务唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置服务唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiId() 获取API 唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置API 唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiName() 获取API 名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiName(string $ApiName) 设置API 名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取API 路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置API 路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethod() 获取API 方法。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置API 方法。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsagePlanId() 获取使用计划的唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanId(string $UsagePlanId) 设置使用计划的唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsagePlanName() 获取使用计划的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanName(string $UsagePlanName) 设置使用计划的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsagePlanDesc() 获取使用计划的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanDesc(string $UsagePlanDesc) 设置使用计划的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironment() 获取使用计划绑定的服务环境。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironment(string $Environment) 设置使用计划绑定的服务环境。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInUseRequestNum() 获取已经使用的配额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInUseRequestNum(integer $InUseRequestNum) 设置已经使用的配额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestNum() 获取请求配额总量，-1表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestNum(integer $MaxRequestNum) 设置请求配额总量，-1表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestNumPreSec() 获取请求 QPS 上限，-1 表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) 设置请求 QPS 上限，-1 表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取使用计划创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置使用计划创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取使用计划最后修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置使用计划最后修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取服务名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置服务名称。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiUsagePlan extends AbstractModel
{
    /**
     * @var string 服务唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string API 唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var string API 名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiName;

    /**
     * @var string API 路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string API 方法。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var string 使用计划的唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanId;

    /**
     * @var string 使用计划的名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanName;

    /**
     * @var string 使用计划的描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanDesc;

    /**
     * @var string 使用计划绑定的服务环境。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Environment;

    /**
     * @var integer 已经使用的配额。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InUseRequestNum;

    /**
     * @var integer 请求配额总量，-1表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestNum;

    /**
     * @var integer 请求 QPS 上限，-1 表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestNumPreSec;

    /**
     * @var string 使用计划创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 使用计划最后修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string 服务名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @param string $ServiceId 服务唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiId API 唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiName API 名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path API 路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Method API 方法。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsagePlanId 使用计划的唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsagePlanName 使用计划的名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsagePlanDesc 使用计划的描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Environment 使用计划绑定的服务环境。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InUseRequestNum 已经使用的配额。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestNum 请求配额总量，-1表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestNumPreSec 请求 QPS 上限，-1 表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 使用计划创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 使用计划最后修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 服务名称。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("UsagePlanId",$param) and $param["UsagePlanId"] !== null) {
            $this->UsagePlanId = $param["UsagePlanId"];
        }

        if (array_key_exists("UsagePlanName",$param) and $param["UsagePlanName"] !== null) {
            $this->UsagePlanName = $param["UsagePlanName"];
        }

        if (array_key_exists("UsagePlanDesc",$param) and $param["UsagePlanDesc"] !== null) {
            $this->UsagePlanDesc = $param["UsagePlanDesc"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("InUseRequestNum",$param) and $param["InUseRequestNum"] !== null) {
            $this->InUseRequestNum = $param["InUseRequestNum"];
        }

        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
        }

        if (array_key_exists("MaxRequestNumPreSec",$param) and $param["MaxRequestNumPreSec"] !== null) {
            $this->MaxRequestNumPreSec = $param["MaxRequestNumPreSec"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
