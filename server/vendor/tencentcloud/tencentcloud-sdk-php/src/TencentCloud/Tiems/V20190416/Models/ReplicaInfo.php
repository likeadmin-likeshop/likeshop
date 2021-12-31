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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getEniIp() 获取弹性网卡模式时，弹性网卡Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEniIp(string $EniIp) 设置弹性网卡模式时，弹性网卡Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取Normal: 正常运行中; Abnormal: 异常；Waiting：等待中
 * @method void setStatus(string $Status) 设置Normal: 正常运行中; Abnormal: 异常；Waiting：等待中
 * @method string getMessage() 获取当 status为 Abnormal 的时候，一些额外的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置当 status为 Abnormal 的时候，一些额外的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestarted() 获取重启次数
 * @method void setRestarted(integer $Restarted) 设置重启次数
 */
class ReplicaInfo extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 弹性网卡模式时，弹性网卡Ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EniIp;

    /**
     * @var string Normal: 正常运行中; Abnormal: 异常；Waiting：等待中
     */
    public $Status;

    /**
     * @var string 当 status为 Abnormal 的时候，一些额外的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 重启次数
     */
    public $Restarted;

    /**
     * @param string $Name 实例名称
     * @param string $EniIp 弹性网卡模式时，弹性网卡Ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status Normal: 正常运行中; Abnormal: 异常；Waiting：等待中
     * @param string $Message 当 status为 Abnormal 的时候，一些额外的信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Restarted 重启次数
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

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Restarted",$param) and $param["Restarted"] !== null) {
            $this->Restarted = $param["Restarted"];
        }
    }
}
