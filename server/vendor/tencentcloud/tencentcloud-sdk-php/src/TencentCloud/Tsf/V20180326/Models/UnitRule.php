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
 * 微服务网关单元化规则
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayInstanceId() 获取网关实体ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实体ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取使用状态：enabled/disabled
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置使用状态：enabled/disabled
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUnitRuleItemList() 获取规则项列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitRuleItemList(array $UnitRuleItemList) 设置规则项列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class UnitRule extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 网关实体ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayInstanceId;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 使用状态：enabled/disabled
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 规则项列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitRuleItemList;

    /**
     * @param string $Name 规则名称
     * @param string $Id 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayInstanceId 网关实体ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 使用状态：enabled/disabled
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UnitRuleItemList 规则项列表
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UnitRuleItemList",$param) and $param["UnitRuleItemList"] !== null) {
            $this->UnitRuleItemList = [];
            foreach ($param["UnitRuleItemList"] as $key => $value){
                $obj = new UnitRuleItem();
                $obj->deserialize($value);
                array_push($this->UnitRuleItemList, $obj);
            }
        }
    }
}
