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
 * 使用计划详情。
 *
 * @method string getUsagePlanId() 获取使用计划唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanId(string $UsagePlanId) 设置使用计划唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsagePlanName() 获取使用计划名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanName(string $UsagePlanName) 设置使用计划名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsagePlanDesc() 获取使用计划描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanDesc(string $UsagePlanDesc) 设置使用计划描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInitQuota() 获取初始化调用次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitQuota(integer $InitQuota) 设置初始化调用次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestNumPreSec() 获取每秒请求限制数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestNumPreSec(integer $MaxRequestNumPreSec) 设置每秒请求限制数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxRequestNum() 获取最大调用次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxRequestNum(integer $MaxRequestNum) 设置最大调用次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsHide() 获取是否隐藏。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsHide(integer $IsHide) 设置是否隐藏。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBindSecretIdTotalCount() 获取绑定密钥的数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindSecretIdTotalCount(integer $BindSecretIdTotalCount) 设置绑定密钥的数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBindSecretIds() 获取绑定密钥的详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindSecretIds(array $BindSecretIds) 设置绑定密钥的详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBindEnvironmentTotalCount() 获取绑定环境数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindEnvironmentTotalCount(integer $BindEnvironmentTotalCount) 设置绑定环境数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBindEnvironments() 获取绑定环境详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindEnvironments(array $BindEnvironments) 设置绑定环境详情。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsagePlanInfo extends AbstractModel
{
    /**
     * @var string 使用计划唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanId;

    /**
     * @var string 使用计划名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanName;

    /**
     * @var string 使用计划描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanDesc;

    /**
     * @var integer 初始化调用次数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitQuota;

    /**
     * @var integer 每秒请求限制数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestNumPreSec;

    /**
     * @var integer 最大调用次数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxRequestNum;

    /**
     * @var integer 是否隐藏。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsHide;

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
     * @var integer 绑定密钥的数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindSecretIdTotalCount;

    /**
     * @var array 绑定密钥的详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindSecretIds;

    /**
     * @var integer 绑定环境数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindEnvironmentTotalCount;

    /**
     * @var array 绑定环境详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindEnvironments;

    /**
     * @param string $UsagePlanId 使用计划唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsagePlanName 使用计划名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsagePlanDesc 使用计划描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InitQuota 初始化调用次数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestNumPreSec 每秒请求限制数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxRequestNum 最大调用次数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsHide 是否隐藏。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BindSecretIdTotalCount 绑定密钥的数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BindSecretIds 绑定密钥的详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BindEnvironmentTotalCount 绑定环境数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BindEnvironments 绑定环境详情。
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

        if (array_key_exists("InitQuota",$param) and $param["InitQuota"] !== null) {
            $this->InitQuota = $param["InitQuota"];
        }

        if (array_key_exists("MaxRequestNumPreSec",$param) and $param["MaxRequestNumPreSec"] !== null) {
            $this->MaxRequestNumPreSec = $param["MaxRequestNumPreSec"];
        }

        if (array_key_exists("MaxRequestNum",$param) and $param["MaxRequestNum"] !== null) {
            $this->MaxRequestNum = $param["MaxRequestNum"];
        }

        if (array_key_exists("IsHide",$param) and $param["IsHide"] !== null) {
            $this->IsHide = $param["IsHide"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("BindSecretIdTotalCount",$param) and $param["BindSecretIdTotalCount"] !== null) {
            $this->BindSecretIdTotalCount = $param["BindSecretIdTotalCount"];
        }

        if (array_key_exists("BindSecretIds",$param) and $param["BindSecretIds"] !== null) {
            $this->BindSecretIds = $param["BindSecretIds"];
        }

        if (array_key_exists("BindEnvironmentTotalCount",$param) and $param["BindEnvironmentTotalCount"] !== null) {
            $this->BindEnvironmentTotalCount = $param["BindEnvironmentTotalCount"];
        }

        if (array_key_exists("BindEnvironments",$param) and $param["BindEnvironments"] !== null) {
            $this->BindEnvironments = [];
            foreach ($param["BindEnvironments"] as $key => $value){
                $obj = new UsagePlanBindEnvironment();
                $obj->deserialize($value);
                array_push($this->BindEnvironments, $obj);
            }
        }
    }
}
