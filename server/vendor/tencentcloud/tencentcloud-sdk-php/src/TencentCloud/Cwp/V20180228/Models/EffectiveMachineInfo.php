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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量导入机器信息.
 *
 * @method string getMachineName() 获取机器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineName(string $MachineName) 设置机器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachinePublicIp() 获取机器公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachinePublicIp(string $MachinePublicIp) 设置机器公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachinePrivateIp() 获取机器内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachinePrivateIp(string $MachinePrivateIp) 设置机器内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMachineTag() 获取机器标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineTag(array $MachineTag) 设置机器标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuuid() 获取机器Quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置机器Quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUuid() 获取云镜Uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置云镜Uuid
注意：此字段可能返回 null，表示取不到有效值。
 */
class EffectiveMachineInfo extends AbstractModel
{
    /**
     * @var string 机器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineName;

    /**
     * @var string 机器公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachinePublicIp;

    /**
     * @var string 机器内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachinePrivateIp;

    /**
     * @var array 机器标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineTag;

    /**
     * @var string 机器Quuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var string 云镜Uuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @param string $MachineName 机器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachinePublicIp 机器公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachinePrivateIp 机器内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MachineTag 机器标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Quuid 机器Quuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uuid 云镜Uuid
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachinePublicIp",$param) and $param["MachinePublicIp"] !== null) {
            $this->MachinePublicIp = $param["MachinePublicIp"];
        }

        if (array_key_exists("MachinePrivateIp",$param) and $param["MachinePrivateIp"] !== null) {
            $this->MachinePrivateIp = $param["MachinePrivateIp"];
        }

        if (array_key_exists("MachineTag",$param) and $param["MachineTag"] !== null) {
            $this->MachineTag = [];
            foreach ($param["MachineTag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->MachineTag, $obj);
            }
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
