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
 * ModifyUsagePlan请求参数结构体
 *
 * @method string getUsagePlanId() 获取使用计划唯一 ID。
 * @method void setUsagePlanId(string $UsagePlanId) 设置使用计划唯一 ID。
 * @method string getUsagePlanName() 获取修改后的用户自定义的使用计划名称。
 * @method void setUsagePlanName(string $UsagePlanName) 设置修改后的用户自定义的使用计划名称。
 * @method string getUsagePlanDesc() 获取修改后的用户自定义的使用计划描述。
 * @method void setUsagePlanDesc(string $UsagePlanDesc) 设置修改后的用户自定义的使用计划描述。
 * @method integer getMaxRequestNum() 获取请求配额总数，取值范围为-1或者[1, 99999999]，默认为-1，表示不开启。
 * @method void setMaxRequestNum(integer $MaxRequestNum) 设置请求配额总数，取值范围为-1或者[1, 99999999]，默认为-1，表示不开启。
 * @method integer getMaxRequestNumPreSec() 获取每秒请求限制数，取值范围为-1或者[1, 2000]，默认-1，表示不开启。
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) 设置每秒请求限制数，取值范围为-1或者[1, 2000]，默认-1，表示不开启。
 */
class ModifyUsagePlanRequest extends AbstractModel
{
    /**
     * @var string 使用计划唯一 ID。
     */
    public $UsagePlanId;

    /**
     * @var string 修改后的用户自定义的使用计划名称。
     */
    public $UsagePlanName;

    /**
     * @var string 修改后的用户自定义的使用计划描述。
     */
    public $UsagePlanDesc;

    /**
     * @var integer 请求配额总数，取值范围为-1或者[1, 99999999]，默认为-1，表示不开启。
     */
    public $MaxRequestNum;

    /**
     * @var integer 每秒请求限制数，取值范围为-1或者[1, 2000]，默认-1，表示不开启。
     */
    public $MaxRequestNumPreSec;

    /**
     * @param string $UsagePlanId 使用计划唯一 ID。
     * @param string $UsagePlanName 修改后的用户自定义的使用计划名称。
     * @param string $UsagePlanDesc 修改后的用户自定义的使用计划描述。
     * @param integer $MaxRequestNum 请求配额总数，取值范围为-1或者[1, 99999999]，默认为-1，表示不开启。
     * @param integer $MaxRequestNumPreSec 每秒请求限制数，取值范围为-1或者[1, 2000]，默认-1，表示不开启。
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
        if (array_key_exists("UsagePlanId",$param) and $param["UsagePlanId"] !== null) {
            $this->UsagePlanId = $param["UsagePlanId"];
        }

        if (array_key_exists("UsagePlanName",$param) and $param["UsagePlanName"] !== null) {
            $this->UsagePlanName = $param["UsagePlanName"];
        }

        if (array_key_exists("UsagePlanDesc",$param) and $param["UsagePlanDesc"] !== null) {
            $this->UsagePlanDesc = $param["UsagePlanDesc"];
        }

        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
        }

        if (array_key_exists("MaxRequestNumPreSec",$param) and $param["MaxRequestNumPreSec"] !== null) {
            $this->MaxRequestNumPreSec = $param["MaxRequestNumPreSec"];
        }
    }
}
