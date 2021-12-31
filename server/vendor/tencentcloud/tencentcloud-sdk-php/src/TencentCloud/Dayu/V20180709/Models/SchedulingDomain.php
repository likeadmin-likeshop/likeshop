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
 * 调度域名信息
 *
 * @method string getDomain() 获取调度域名
 * @method void setDomain(string $Domain) 设置调度域名
 * @method array getBGPIpList() 获取BGP线路IP列表
 * @method void setBGPIpList(array $BGPIpList) 设置BGP线路IP列表
 * @method array getCTCCIpList() 获取电信线路IP列表
 * @method void setCTCCIpList(array $CTCCIpList) 设置电信线路IP列表
 * @method array getCUCCIpList() 获取联通线路IP列表
 * @method void setCUCCIpList(array $CUCCIpList) 设置联通线路IP列表
 * @method array getCMCCIpList() 获取移动线路IP列表
 * @method void setCMCCIpList(array $CMCCIpList) 设置移动线路IP列表
 * @method array getOverseaIpList() 获取海外线路IP列表
 * @method void setOverseaIpList(array $OverseaIpList) 设置海外线路IP列表
 * @method string getMethod() 获取调度方式，当前仅支持优先级, 取值为priority
 * @method void setMethod(string $Method) 设置调度方式，当前仅支持优先级, 取值为priority
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getTTL() 获取ttl
 * @method void setTTL(integer $TTL) 设置ttl
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class SchedulingDomain extends AbstractModel
{
    /**
     * @var string 调度域名
     */
    public $Domain;

    /**
     * @var array BGP线路IP列表
     */
    public $BGPIpList;

    /**
     * @var array 电信线路IP列表
     */
    public $CTCCIpList;

    /**
     * @var array 联通线路IP列表
     */
    public $CUCCIpList;

    /**
     * @var array 移动线路IP列表
     */
    public $CMCCIpList;

    /**
     * @var array 海外线路IP列表
     */
    public $OverseaIpList;

    /**
     * @var string 调度方式，当前仅支持优先级, 取值为priority
     */
    public $Method;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer ttl
     */
    public $TTL;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @param string $Domain 调度域名
     * @param array $BGPIpList BGP线路IP列表
     * @param array $CTCCIpList 电信线路IP列表
     * @param array $CUCCIpList 联通线路IP列表
     * @param array $CMCCIpList 移动线路IP列表
     * @param array $OverseaIpList 海外线路IP列表
     * @param string $Method 调度方式，当前仅支持优先级, 取值为priority
     * @param string $CreateTime 创建时间
     * @param integer $TTL ttl
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("BGPIpList",$param) and $param["BGPIpList"] !== null) {
            $this->BGPIpList = $param["BGPIpList"];
        }

        if (array_key_exists("CTCCIpList",$param) and $param["CTCCIpList"] !== null) {
            $this->CTCCIpList = $param["CTCCIpList"];
        }

        if (array_key_exists("CUCCIpList",$param) and $param["CUCCIpList"] !== null) {
            $this->CUCCIpList = $param["CUCCIpList"];
        }

        if (array_key_exists("CMCCIpList",$param) and $param["CMCCIpList"] !== null) {
            $this->CMCCIpList = $param["CMCCIpList"];
        }

        if (array_key_exists("OverseaIpList",$param) and $param["OverseaIpList"] !== null) {
            $this->OverseaIpList = $param["OverseaIpList"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
