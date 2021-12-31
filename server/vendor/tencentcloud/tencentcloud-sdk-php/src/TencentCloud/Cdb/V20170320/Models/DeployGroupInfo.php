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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 置放群组信息
 *
 * @method string getDeployGroupId() 获取置放群组 ID。
 * @method void setDeployGroupId(string $DeployGroupId) 设置置放群组 ID。
 * @method string getDeployGroupName() 获取置放群组名称。
 * @method void setDeployGroupName(string $DeployGroupName) 设置置放群组名称。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method integer getQuota() 获取置放群组实例配额，表示一个置放群组中可容纳的最大实例数目。
 * @method void setQuota(integer $Quota) 设置置放群组实例配额，表示一个置放群组中可容纳的最大实例数目。
 * @method string getAffinity() 获取置放群组亲和性策略，目前仅支持策略1，即在物理机纬度打散实例的分布。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffinity(string $Affinity) 设置置放群组亲和性策略，目前仅支持策略1，即在物理机纬度打散实例的分布。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLimitNum() 获取置放群组亲和性策略1中，同台物理机上同个置放群组实例的限制个数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitNum(integer $LimitNum) 设置置放群组亲和性策略1中，同台物理机上同个置放群组实例的限制个数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取置放群组详细信息。
 * @method void setDescription(string $Description) 设置置放群组详细信息。
 * @method string getDevClass() 获取置放群组物理机型属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevClass(string $DevClass) 设置置放群组物理机型属性。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeployGroupInfo extends AbstractModel
{
    /**
     * @var string 置放群组 ID。
     */
    public $DeployGroupId;

    /**
     * @var string 置放群组名称。
     */
    public $DeployGroupName;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 置放群组实例配额，表示一个置放群组中可容纳的最大实例数目。
     */
    public $Quota;

    /**
     * @var string 置放群组亲和性策略，目前仅支持策略1，即在物理机纬度打散实例的分布。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Affinity;

    /**
     * @var integer 置放群组亲和性策略1中，同台物理机上同个置放群组实例的限制个数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitNum;

    /**
     * @var string 置放群组详细信息。
     */
    public $Description;

    /**
     * @var string 置放群组物理机型属性。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevClass;

    /**
     * @param string $DeployGroupId 置放群组 ID。
     * @param string $DeployGroupName 置放群组名称。
     * @param string $CreateTime 创建时间。
     * @param integer $Quota 置放群组实例配额，表示一个置放群组中可容纳的最大实例数目。
     * @param string $Affinity 置放群组亲和性策略，目前仅支持策略1，即在物理机纬度打散实例的分布。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LimitNum 置放群组亲和性策略1中，同台物理机上同个置放群组实例的限制个数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 置放群组详细信息。
     * @param string $DevClass 置放群组物理机型属性。
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
        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("DeployGroupName",$param) and $param["DeployGroupName"] !== null) {
            $this->DeployGroupName = $param["DeployGroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = $param["Affinity"];
        }

        if (array_key_exists("LimitNum",$param) and $param["LimitNum"] !== null) {
            $this->LimitNum = $param["LimitNum"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DevClass",$param) and $param["DevClass"] !== null) {
            $this->DevClass = $param["DevClass"];
        }
    }
}
