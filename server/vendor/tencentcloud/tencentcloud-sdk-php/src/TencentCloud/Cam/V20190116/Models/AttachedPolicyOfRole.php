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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色关联的策略信息
 *
 * @method integer getPolicyId() 获取策略ID
 * @method void setPolicyId(integer $PolicyId) 设置策略ID
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method string getAddTime() 获取绑定时间
 * @method void setAddTime(string $AddTime) 设置绑定时间
 * @method string getPolicyType() 获取策略类型，User表示自定义策略，QCS表示预设策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyType(string $PolicyType) 设置策略类型，User表示自定义策略，QCS表示预设策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateMode() 获取策略创建方式，1表示按产品功能或项目权限创建，其他表示按策略语法创建
 * @method void setCreateMode(integer $CreateMode) 设置策略创建方式，1表示按产品功能或项目权限创建，其他表示按策略语法创建
 * @method integer getDeactived() 获取是否已下线(0:否 1:是)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeactived(integer $Deactived) 设置是否已下线(0:否 1:是)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeactivedDetail() 获取已下线的产品列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeactivedDetail(array $DeactivedDetail) 设置已下线的产品列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置策略描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttachedPolicyOfRole extends AbstractModel
{
    /**
     * @var integer 策略ID
     */
    public $PolicyId;

    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var string 绑定时间
     */
    public $AddTime;

    /**
     * @var string 策略类型，User表示自定义策略，QCS表示预设策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyType;

    /**
     * @var integer 策略创建方式，1表示按产品功能或项目权限创建，其他表示按策略语法创建
     */
    public $CreateMode;

    /**
     * @var integer 是否已下线(0:否 1:是)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deactived;

    /**
     * @var array 已下线的产品列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeactivedDetail;

    /**
     * @var string 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param integer $PolicyId 策略ID
     * @param string $PolicyName 策略名称
     * @param string $AddTime 绑定时间
     * @param string $PolicyType 策略类型，User表示自定义策略，QCS表示预设策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateMode 策略创建方式，1表示按产品功能或项目权限创建，其他表示按策略语法创建
     * @param integer $Deactived 是否已下线(0:否 1:是)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeactivedDetail 已下线的产品列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 策略描述
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("Deactived",$param) and $param["Deactived"] !== null) {
            $this->Deactived = $param["Deactived"];
        }

        if (array_key_exists("DeactivedDetail",$param) and $param["DeactivedDetail"] !== null) {
            $this->DeactivedDetail = $param["DeactivedDetail"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
