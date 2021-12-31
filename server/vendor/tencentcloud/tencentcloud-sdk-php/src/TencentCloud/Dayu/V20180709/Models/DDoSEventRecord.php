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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS攻击事件记录
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getVip() 获取资源的IP
 * @method void setVip(string $Vip) 设置资源的IP
 * @method string getStartTime() 获取攻击开始时间
 * @method void setStartTime(string $StartTime) 设置攻击开始时间
 * @method string getEndTime() 获取攻击结束时间
 * @method void setEndTime(string $EndTime) 设置攻击结束时间
 * @method integer getMbps() 获取攻击最大带宽
 * @method void setMbps(integer $Mbps) 设置攻击最大带宽
 * @method integer getPps() 获取攻击最大包速率
 * @method void setPps(integer $Pps) 设置攻击最大包速率
 * @method string getAttackType() 获取攻击类型
 * @method void setAttackType(string $AttackType) 设置攻击类型
 * @method integer getBlockFlag() 获取是否被封堵，取值[1（是），0（否），2（无效值）]
 * @method void setBlockFlag(integer $BlockFlag) 设置是否被封堵，取值[1（是），0（否），2（无效值）]
 * @method string getOverLoad() 获取是否超过弹性防护峰值，取值取值[yes(是)，no(否)，空字符串（未知值）]
 * @method void setOverLoad(string $OverLoad) 设置是否超过弹性防护峰值，取值取值[yes(是)，no(否)，空字符串（未知值）]
 * @method integer getAttackStatus() 获取攻击状态，取值[0（攻击中）, 1（攻击结束）]
 * @method void setAttackStatus(integer $AttackStatus) 设置攻击状态，取值[0（攻击中）, 1（攻击结束）]
 * @method string getResourceName() 获取资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventId() 获取攻击事件Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(string $EventId) 设置攻击事件Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class DDoSEventRecord extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
     */
    public $Business;

    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var string 资源的IP
     */
    public $Vip;

    /**
     * @var string 攻击开始时间
     */
    public $StartTime;

    /**
     * @var string 攻击结束时间
     */
    public $EndTime;

    /**
     * @var integer 攻击最大带宽
     */
    public $Mbps;

    /**
     * @var integer 攻击最大包速率
     */
    public $Pps;

    /**
     * @var string 攻击类型
     */
    public $AttackType;

    /**
     * @var integer 是否被封堵，取值[1（是），0（否），2（无效值）]
     */
    public $BlockFlag;

    /**
     * @var string 是否超过弹性防护峰值，取值取值[yes(是)，no(否)，空字符串（未知值）]
     */
    public $OverLoad;

    /**
     * @var integer 攻击状态，取值[0（攻击中）, 1（攻击结束）]
     */
    public $AttackStatus;

    /**
     * @var string 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var string 攻击事件Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
     * @param string $Id 资源ID
     * @param string $Vip 资源的IP
     * @param string $StartTime 攻击开始时间
     * @param string $EndTime 攻击结束时间
     * @param integer $Mbps 攻击最大带宽
     * @param integer $Pps 攻击最大包速率
     * @param string $AttackType 攻击类型
     * @param integer $BlockFlag 是否被封堵，取值[1（是），0（否），2（无效值）]
     * @param string $OverLoad 是否超过弹性防护峰值，取值取值[yes(是)，no(否)，空字符串（未知值）]
     * @param integer $AttackStatus 攻击状态，取值[0（攻击中）, 1（攻击结束）]
     * @param string $ResourceName 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventId 攻击事件Id
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Mbps",$param) and $param["Mbps"] !== null) {
            $this->Mbps = $param["Mbps"];
        }

        if (array_key_exists("Pps",$param) and $param["Pps"] !== null) {
            $this->Pps = $param["Pps"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("BlockFlag",$param) and $param["BlockFlag"] !== null) {
            $this->BlockFlag = $param["BlockFlag"];
        }

        if (array_key_exists("OverLoad",$param) and $param["OverLoad"] !== null) {
            $this->OverLoad = $param["OverLoad"];
        }

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
