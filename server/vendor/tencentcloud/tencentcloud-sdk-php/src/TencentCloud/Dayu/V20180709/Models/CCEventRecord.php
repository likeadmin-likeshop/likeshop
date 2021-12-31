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
 * CC攻击事件记录
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
 * @method integer getReqQps() 获取总请求QPS峰值
 * @method void setReqQps(integer $ReqQps) 设置总请求QPS峰值
 * @method integer getDropQps() 获取攻击QPS峰值
 * @method void setDropQps(integer $DropQps) 设置攻击QPS峰值
 * @method integer getAttackStatus() 获取攻击状态，取值[0（攻击中）, 1（攻击结束）]
 * @method void setAttackStatus(integer $AttackStatus) 设置攻击状态，取值[0（攻击中）, 1（攻击结束）]
 * @method string getResourceName() 获取资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainList() 获取域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainList(string $DomainList) 设置域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUriList() 获取uri列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUriList(string $UriList) 设置uri列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackipList() 获取攻击源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackipList(string $AttackipList) 设置攻击源列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class CCEventRecord extends AbstractModel
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
     * @var integer 总请求QPS峰值
     */
    public $ReqQps;

    /**
     * @var integer 攻击QPS峰值
     */
    public $DropQps;

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
     * @var string 域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainList;

    /**
     * @var string uri列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UriList;

    /**
     * @var string 攻击源列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackipList;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
     * @param string $Id 资源ID
     * @param string $Vip 资源的IP
     * @param string $StartTime 攻击开始时间
     * @param string $EndTime 攻击结束时间
     * @param integer $ReqQps 总请求QPS峰值
     * @param integer $DropQps 攻击QPS峰值
     * @param integer $AttackStatus 攻击状态，取值[0（攻击中）, 1（攻击结束）]
     * @param string $ResourceName 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainList 域名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UriList uri列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackipList 攻击源列表
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

        if (array_key_exists("ReqQps",$param) and $param["ReqQps"] !== null) {
            $this->ReqQps = $param["ReqQps"];
        }

        if (array_key_exists("DropQps",$param) and $param["DropQps"] !== null) {
            $this->DropQps = $param["DropQps"];
        }

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("UriList",$param) and $param["UriList"] !== null) {
            $this->UriList = $param["UriList"];
        }

        if (array_key_exists("AttackipList",$param) and $param["AttackipList"] !== null) {
            $this->AttackipList = $param["AttackipList"];
        }
    }
}
