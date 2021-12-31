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
 * usagePlan详情
 *
 * @method string getEnvironment() 获取环境名称。
 * @method void setEnvironment(string $Environment) 设置环境名称。
 * @method string getUsagePlanId() 获取使用计划唯一ID。
 * @method void setUsagePlanId(string $UsagePlanId) 设置使用计划唯一ID。
 * @method string getUsagePlanName() 获取使用计划名称。
 * @method void setUsagePlanName(string $UsagePlanName) 设置使用计划名称。
 * @method string getUsagePlanDesc() 获取使用计划描述。
 * @method void setUsagePlanDesc(string $UsagePlanDesc) 设置使用计划描述。
 * @method integer getMaxRequestNumPreSec() 获取使用计划qps，-1表示没有限制。
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) 设置使用计划qps，-1表示没有限制。
 * @method string getCreatedTime() 获取使用计划时间。
 * @method void setCreatedTime(string $CreatedTime) 设置使用计划时间。
 * @method string getModifiedTime() 获取使用计划修改时间。
 * @method void setModifiedTime(string $ModifiedTime) 设置使用计划修改时间。
 */
class UsagePlan extends AbstractModel
{
    /**
     * @var string 环境名称。
     */
    public $Environment;

    /**
     * @var string 使用计划唯一ID。
     */
    public $UsagePlanId;

    /**
     * @var string 使用计划名称。
     */
    public $UsagePlanName;

    /**
     * @var string 使用计划描述。
     */
    public $UsagePlanDesc;

    /**
     * @var integer 使用计划qps，-1表示没有限制。
     */
    public $MaxRequestNumPreSec;

    /**
     * @var string 使用计划时间。
     */
    public $CreatedTime;

    /**
     * @var string 使用计划修改时间。
     */
    public $ModifiedTime;

    /**
     * @param string $Environment 环境名称。
     * @param string $UsagePlanId 使用计划唯一ID。
     * @param string $UsagePlanName 使用计划名称。
     * @param string $UsagePlanDesc 使用计划描述。
     * @param integer $MaxRequestNumPreSec 使用计划qps，-1表示没有限制。
     * @param string $CreatedTime 使用计划时间。
     * @param string $ModifiedTime 使用计划修改时间。
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
        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
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

        if (array_key_exists("MaxRequestNumPreSec",$param) and $param["MaxRequestNumPreSec"] !== null) {
            $this->MaxRequestNumPreSec = $param["MaxRequestNumPreSec"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
