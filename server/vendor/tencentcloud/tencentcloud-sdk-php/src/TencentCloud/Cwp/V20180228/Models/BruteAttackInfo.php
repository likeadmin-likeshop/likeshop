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
 * 密码破解列表实体
 *
 * @method integer getId() 获取唯一Id
 * @method void setId(integer $Id) 设置唯一Id
 * @method string getUuid() 获取云镜客户端唯一标识UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一标识UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineIp() 获取主机ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineIp(string $MachineIp) 设置主机ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineName() 获取主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineName(string $MachineName) 设置主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcIp() 获取来源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcIp(string $SrcIp) 设置来源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取失败：FAILED；成功：SUCCESS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置失败：FAILED；成功：SUCCESS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCountry() 获取国家id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountry(integer $Country) 设置国家id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCity() 获取城市id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(integer $City) 设置城市id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProvince() 获取省份id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(integer $Province) 设置省份id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBanStatus() 获取阻断状态：0-未阻断；1-已阻断；2-阻断失败；3-内网攻击暂不支持阻断；4-安平暂不支持阻断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBanStatus(integer $BanStatus) 设置阻断状态：0-未阻断；1-已阻断；2-阻断失败；3-内网攻击暂不支持阻断；4-安平暂不支持阻断
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventType() 获取事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType(integer $EventType) 设置事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取发生次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置发生次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuuid() 获取机器UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置机器UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsProVersion() 获取是否为专业版（true/false）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsProVersion(boolean $IsProVersion) 设置是否为专业版（true/false）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取被攻击的服务的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置被攻击的服务的用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取最近攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置最近攻击时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BruteAttackInfo extends AbstractModel
{
    /**
     * @var integer 唯一Id
     */
    public $Id;

    /**
     * @var string 云镜客户端唯一标识UUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var string 主机ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineIp;

    /**
     * @var string 主机名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineName;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 来源ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcIp;

    /**
     * @var string 失败：FAILED；成功：SUCCESS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 国家id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Country;

    /**
     * @var integer 城市id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var integer 省份id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 阻断状态：0-未阻断；1-已阻断；2-阻断失败；3-内网攻击暂不支持阻断；4-安平暂不支持阻断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BanStatus;

    /**
     * @var integer 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType;

    /**
     * @var integer 发生次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var string 机器UUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var boolean 是否为专业版（true/false）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsProVersion;

    /**
     * @var string 被攻击的服务的用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var integer 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 最近攻击时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @param integer $Id 唯一Id
     * @param string $Uuid 云镜客户端唯一标识UUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineIp 主机ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineName 主机名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcIp 来源ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 失败：FAILED；成功：SUCCESS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Country 国家id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $City 城市id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Province 省份id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BanStatus 阻断状态：0-未阻断；1-已阻断；2-阻断失败；3-内网攻击暂不支持阻断；4-安平暂不支持阻断
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventType 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 发生次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Quuid 机器UUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsProVersion 是否为专业版（true/false）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 被攻击的服务的用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 最近攻击时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
