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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例状态
 *
 * @method string getRegistryId() 获取实例的Id
 * @method void setRegistryId(string $RegistryId) 设置实例的Id
 * @method string getStatus() 获取实例的状态
 * @method void setStatus(string $Status) 设置实例的状态
 * @method array getConditions() 获取附加状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置附加状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegistryStatus extends AbstractModel
{
    /**
     * @var string 实例的Id
     */
    public $RegistryId;

    /**
     * @var string 实例的状态
     */
    public $Status;

    /**
     * @var array 附加状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @param string $RegistryId 实例的Id
     * @param string $Status 实例的状态
     * @param array $Conditions 附加状态
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RegistryCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
