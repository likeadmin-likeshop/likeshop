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
 * 用于使用计划列表展示
 *
 * @method string getUsagePlanId() 获取使用计划唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanId(string $UsagePlanId) 设置使用计划唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsagePlanName() 获取用户自定义的使用计划名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanName(string $UsagePlanName) 设置用户自定义的使用计划名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsagePlanDesc() 获取用户自定义的使用计划描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanDesc(string $UsagePlanDesc) 设置用户自定义的使用计划描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestNumPreSec() 获取每秒最大请求次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) 设置每秒最大请求次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestNum() 获取请求配额总量，-1表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestNum(integer $MaxRequestNum) 设置请求配额总量，-1表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsagePlanStatusInfo extends AbstractModel
{
    /**
     * @var string 使用计划唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanId;

    /**
     * @var string 用户自定义的使用计划名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanName;

    /**
     * @var string 用户自定义的使用计划描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanDesc;

    /**
     * @var integer 每秒最大请求次数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestNumPreSec;

    /**
     * @var integer 请求配额总量，-1表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestNum;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @param string $UsagePlanId 使用计划唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsagePlanName 用户自定义的使用计划名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsagePlanDesc 用户自定义的使用计划描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestNumPreSec 每秒最大请求次数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestNum 请求配额总量，-1表示没有限制。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
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

        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
