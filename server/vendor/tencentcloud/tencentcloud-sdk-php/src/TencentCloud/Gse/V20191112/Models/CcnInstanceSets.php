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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网实例信息
 *
 * @method string getAccountId() 获取云联网账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountId(string $AccountId) 设置云联网账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCcnId() 获取云联网 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnId(string $CcnId) 设置云联网 Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取云联网关联时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置云联网关联时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取云联网实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置云联网实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取云联网状态：申请中、已连接、已过期、已拒绝、已删除、失败的、关联中、解关联中、解关联失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置云联网状态：申请中、已连接、已过期、已拒绝、已删除、失败的、关联中、解关联中、解关联失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class CcnInstanceSets extends AbstractModel
{
    /**
     * @var string 云联网账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountId;

    /**
     * @var string 云联网 Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnId;

    /**
     * @var string 云联网关联时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 云联网实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 云联网状态：申请中、已连接、已过期、已拒绝、已删除、失败的、关联中、解关联中、解关联失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @param string $AccountId 云联网账号 Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CcnId 云联网 Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 云联网关联时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 云联网实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 云联网状态：申请中、已连接、已过期、已拒绝、已删除、失败的、关联中、解关联中、解关联失败
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
