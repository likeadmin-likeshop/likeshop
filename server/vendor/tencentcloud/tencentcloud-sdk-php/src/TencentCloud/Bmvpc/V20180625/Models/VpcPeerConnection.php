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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对等连接对象
 *
 * @method string getVpcId() 获取本端VPC唯一ID
 * @method void setVpcId(string $VpcId) 设置本端VPC唯一ID
 * @method string getPeerVpcId() 获取对端VPC唯一ID
 * @method void setPeerVpcId(string $PeerVpcId) 设置对端VPC唯一ID
 * @method string getAppId() 获取本端APPID
 * @method void setAppId(string $AppId) 设置本端APPID
 * @method string getPeerAppId() 获取对端APPID
 * @method void setPeerAppId(string $PeerAppId) 设置对端APPID
 * @method string getVpcPeerConnectionId() 获取对等连接唯一ID
 * @method void setVpcPeerConnectionId(string $VpcPeerConnectionId) 设置对等连接唯一ID
 * @method string getVpcPeerConnectionName() 获取对等连接名称
 * @method void setVpcPeerConnectionName(string $VpcPeerConnectionName) 设置对等连接名称
 * @method string getState() 获取对等连接状态。pending:申请中,available:运行中,expired:已过期,rejected:已拒绝,deleted:已删除
 * @method void setState(string $State) 设置对等连接状态。pending:申请中,available:运行中,expired:已过期,rejected:已拒绝,deleted:已删除
 * @method string getVpcZone() 获取本端VPC所属可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcZone(string $VpcZone) 设置本端VPC所属可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPeerVpcZone() 获取对端VPC所属可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeerVpcZone(string $PeerVpcZone) 设置对端VPC所属可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUin() 获取本端Uin
 * @method void setUin(integer $Uin) 设置本端Uin
 * @method integer getPeerUin() 获取对端Uin
 * @method void setPeerUin(integer $PeerUin) 设置对端Uin
 * @method integer getPeerType() 获取对等连接类型
 * @method void setPeerType(integer $PeerType) 设置对等连接类型
 * @method integer getBandwidth() 获取对等连接带宽
 * @method void setBandwidth(integer $Bandwidth) 设置对等连接带宽
 * @method string getRegion() 获取本端VPC地域
 * @method void setRegion(string $Region) 设置本端VPC地域
 * @method string getPeerRegion() 获取对端VPC地域
 * @method void setPeerRegion(string $PeerRegion) 设置对端VPC地域
 * @method integer getDeleteFlag() 获取是否允许删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteFlag(integer $DeleteFlag) 设置是否允许删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class VpcPeerConnection extends AbstractModel
{
    /**
     * @var string 本端VPC唯一ID
     */
    public $VpcId;

    /**
     * @var string 对端VPC唯一ID
     */
    public $PeerVpcId;

    /**
     * @var string 本端APPID
     */
    public $AppId;

    /**
     * @var string 对端APPID
     */
    public $PeerAppId;

    /**
     * @var string 对等连接唯一ID
     */
    public $VpcPeerConnectionId;

    /**
     * @var string 对等连接名称
     */
    public $VpcPeerConnectionName;

    /**
     * @var string 对等连接状态。pending:申请中,available:运行中,expired:已过期,rejected:已拒绝,deleted:已删除
     */
    public $State;

    /**
     * @var string 本端VPC所属可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcZone;

    /**
     * @var string 对端VPC所属可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PeerVpcZone;

    /**
     * @var integer 本端Uin
     */
    public $Uin;

    /**
     * @var integer 对端Uin
     */
    public $PeerUin;

    /**
     * @var integer 对等连接类型
     */
    public $PeerType;

    /**
     * @var integer 对等连接带宽
     */
    public $Bandwidth;

    /**
     * @var string 本端VPC地域
     */
    public $Region;

    /**
     * @var string 对端VPC地域
     */
    public $PeerRegion;

    /**
     * @var integer 是否允许删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteFlag;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $VpcId 本端VPC唯一ID
     * @param string $PeerVpcId 对端VPC唯一ID
     * @param string $AppId 本端APPID
     * @param string $PeerAppId 对端APPID
     * @param string $VpcPeerConnectionId 对等连接唯一ID
     * @param string $VpcPeerConnectionName 对等连接名称
     * @param string $State 对等连接状态。pending:申请中,available:运行中,expired:已过期,rejected:已拒绝,deleted:已删除
     * @param string $VpcZone 本端VPC所属可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PeerVpcZone 对端VPC所属可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Uin 本端Uin
     * @param integer $PeerUin 对端Uin
     * @param integer $PeerType 对等连接类型
     * @param integer $Bandwidth 对等连接带宽
     * @param string $Region 本端VPC地域
     * @param string $PeerRegion 对端VPC地域
     * @param integer $DeleteFlag 是否允许删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("PeerVpcId",$param) and $param["PeerVpcId"] !== null) {
            $this->PeerVpcId = $param["PeerVpcId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PeerAppId",$param) and $param["PeerAppId"] !== null) {
            $this->PeerAppId = $param["PeerAppId"];
        }

        if (array_key_exists("VpcPeerConnectionId",$param) and $param["VpcPeerConnectionId"] !== null) {
            $this->VpcPeerConnectionId = $param["VpcPeerConnectionId"];
        }

        if (array_key_exists("VpcPeerConnectionName",$param) and $param["VpcPeerConnectionName"] !== null) {
            $this->VpcPeerConnectionName = $param["VpcPeerConnectionName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("VpcZone",$param) and $param["VpcZone"] !== null) {
            $this->VpcZone = $param["VpcZone"];
        }

        if (array_key_exists("PeerVpcZone",$param) and $param["PeerVpcZone"] !== null) {
            $this->PeerVpcZone = $param["PeerVpcZone"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("PeerUin",$param) and $param["PeerUin"] !== null) {
            $this->PeerUin = $param["PeerUin"];
        }

        if (array_key_exists("PeerType",$param) and $param["PeerType"] !== null) {
            $this->PeerType = $param["PeerType"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PeerRegion",$param) and $param["PeerRegion"] !== null) {
            $this->PeerRegion = $param["PeerRegion"];
        }

        if (array_key_exists("DeleteFlag",$param) and $param["DeleteFlag"] !== null) {
            $this->DeleteFlag = $param["DeleteFlag"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
