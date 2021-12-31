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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群详细信息
 *
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getRegion() 获取集群所在地域
 * @method void setRegion(string $Region) 设置集群所在地域
 * @method string getIdlType() 获取集群数据描述语言类型，如：`PROTO`,`TDR`
 * @method void setIdlType(string $IdlType) 设置集群数据描述语言类型，如：`PROTO`,`TDR`
 * @method string getNetworkType() 获取网络类型
 * @method void setNetworkType(string $NetworkType) 设置网络类型
 * @method string getVpcId() 获取集群关联的用户私有网络实例ID
 * @method void setVpcId(string $VpcId) 设置集群关联的用户私有网络实例ID
 * @method string getSubnetId() 获取集群关联的用户子网实例ID
 * @method void setSubnetId(string $SubnetId) 设置集群关联的用户子网实例ID
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getPassword() 获取集群密码
 * @method void setPassword(string $Password) 设置集群密码
 * @method string getPasswordStatus() 获取密码状态
 * @method void setPasswordStatus(string $PasswordStatus) 设置密码状态
 * @method string getApiAccessId() 获取TcaplusDB SDK连接参数，接入ID
 * @method void setApiAccessId(string $ApiAccessId) 设置TcaplusDB SDK连接参数，接入ID
 * @method string getApiAccessIp() 获取TcaplusDB SDK连接参数，接入地址
 * @method void setApiAccessIp(string $ApiAccessIp) 设置TcaplusDB SDK连接参数，接入地址
 * @method integer getApiAccessPort() 获取TcaplusDB SDK连接参数，接入端口
 * @method void setApiAccessPort(integer $ApiAccessPort) 设置TcaplusDB SDK连接参数，接入端口
 * @method string getOldPasswordExpireTime() 获取如果PasswordStatus是unmodifiable说明有旧密码还未过期，此字段将显示旧密码过期的时间，否则为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldPasswordExpireTime(string $OldPasswordExpireTime) 设置如果PasswordStatus是unmodifiable说明有旧密码还未过期，此字段将显示旧密码过期的时间，否则为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiAccessIpv6() 获取TcaplusDB SDK连接参数，接入ipv6地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiAccessIpv6(string $ApiAccessIpv6) 设置TcaplusDB SDK连接参数，接入ipv6地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterType() 获取集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(integer $ClusterType) 设置集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterStatus() 获取集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterStatus(integer $ClusterStatus) 设置集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReadCapacityUnit() 获取读CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadCapacityUnit(integer $ReadCapacityUnit) 设置读CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWriteCapacityUnit() 获取写CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWriteCapacityUnit(integer $WriteCapacityUnit) 设置写CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskVolume() 获取磁盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskVolume(integer $DiskVolume) 设置磁盘容量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServerList() 获取独占server机器信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerList(array $ServerList) 设置独占server机器信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProxyList() 获取独占proxy机器信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyList(array $ProxyList) 设置独占proxy机器信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCensorship() 获取是否开启审核 0-不开启 1-开启
 * @method void setCensorship(integer $Censorship) 设置是否开启审核 0-不开启 1-开启
 * @method array getDbaUins() 获取审批人uin列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbaUins(array $DbaUins) 设置审批人uin列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterInfo extends AbstractModel
{
    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群所在地域
     */
    public $Region;

    /**
     * @var string 集群数据描述语言类型，如：`PROTO`,`TDR`
     */
    public $IdlType;

    /**
     * @var string 网络类型
     */
    public $NetworkType;

    /**
     * @var string 集群关联的用户私有网络实例ID
     */
    public $VpcId;

    /**
     * @var string 集群关联的用户子网实例ID
     */
    public $SubnetId;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 集群密码
     */
    public $Password;

    /**
     * @var string 密码状态
     */
    public $PasswordStatus;

    /**
     * @var string TcaplusDB SDK连接参数，接入ID
     */
    public $ApiAccessId;

    /**
     * @var string TcaplusDB SDK连接参数，接入地址
     */
    public $ApiAccessIp;

    /**
     * @var integer TcaplusDB SDK连接参数，接入端口
     */
    public $ApiAccessPort;

    /**
     * @var string 如果PasswordStatus是unmodifiable说明有旧密码还未过期，此字段将显示旧密码过期的时间，否则为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldPasswordExpireTime;

    /**
     * @var string TcaplusDB SDK连接参数，接入ipv6地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiAccessIpv6;

    /**
     * @var integer 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var integer 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterStatus;

    /**
     * @var integer 读CU
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadCapacityUnit;

    /**
     * @var integer 写CU
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WriteCapacityUnit;

    /**
     * @var integer 磁盘容量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskVolume;

    /**
     * @var array 独占server机器信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerList;

    /**
     * @var array 独占proxy机器信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyList;

    /**
     * @var integer 是否开启审核 0-不开启 1-开启
     */
    public $Censorship;

    /**
     * @var array 审批人uin列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbaUins;

    /**
     * @param string $ClusterName 集群名称
     * @param string $ClusterId 集群ID
     * @param string $Region 集群所在地域
     * @param string $IdlType 集群数据描述语言类型，如：`PROTO`,`TDR`
     * @param string $NetworkType 网络类型
     * @param string $VpcId 集群关联的用户私有网络实例ID
     * @param string $SubnetId 集群关联的用户子网实例ID
     * @param string $CreatedTime 创建时间
     * @param string $Password 集群密码
     * @param string $PasswordStatus 密码状态
     * @param string $ApiAccessId TcaplusDB SDK连接参数，接入ID
     * @param string $ApiAccessIp TcaplusDB SDK连接参数，接入地址
     * @param integer $ApiAccessPort TcaplusDB SDK连接参数，接入端口
     * @param string $OldPasswordExpireTime 如果PasswordStatus是unmodifiable说明有旧密码还未过期，此字段将显示旧密码过期的时间，否则为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiAccessIpv6 TcaplusDB SDK连接参数，接入ipv6地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterType 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterStatus 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReadCapacityUnit 读CU
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WriteCapacityUnit 写CU
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskVolume 磁盘容量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServerList 独占server机器信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProxyList 独占proxy机器信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Censorship 是否开启审核 0-不开启 1-开启
     * @param array $DbaUins 审批人uin列表
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("IdlType",$param) and $param["IdlType"] !== null) {
            $this->IdlType = $param["IdlType"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("PasswordStatus",$param) and $param["PasswordStatus"] !== null) {
            $this->PasswordStatus = $param["PasswordStatus"];
        }

        if (array_key_exists("ApiAccessId",$param) and $param["ApiAccessId"] !== null) {
            $this->ApiAccessId = $param["ApiAccessId"];
        }

        if (array_key_exists("ApiAccessIp",$param) and $param["ApiAccessIp"] !== null) {
            $this->ApiAccessIp = $param["ApiAccessIp"];
        }

        if (array_key_exists("ApiAccessPort",$param) and $param["ApiAccessPort"] !== null) {
            $this->ApiAccessPort = $param["ApiAccessPort"];
        }

        if (array_key_exists("OldPasswordExpireTime",$param) and $param["OldPasswordExpireTime"] !== null) {
            $this->OldPasswordExpireTime = $param["OldPasswordExpireTime"];
        }

        if (array_key_exists("ApiAccessIpv6",$param) and $param["ApiAccessIpv6"] !== null) {
            $this->ApiAccessIpv6 = $param["ApiAccessIpv6"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ReadCapacityUnit",$param) and $param["ReadCapacityUnit"] !== null) {
            $this->ReadCapacityUnit = $param["ReadCapacityUnit"];
        }

        if (array_key_exists("WriteCapacityUnit",$param) and $param["WriteCapacityUnit"] !== null) {
            $this->WriteCapacityUnit = $param["WriteCapacityUnit"];
        }

        if (array_key_exists("DiskVolume",$param) and $param["DiskVolume"] !== null) {
            $this->DiskVolume = $param["DiskVolume"];
        }

        if (array_key_exists("ServerList",$param) and $param["ServerList"] !== null) {
            $this->ServerList = [];
            foreach ($param["ServerList"] as $key => $value){
                $obj = new ServerDetailInfo();
                $obj->deserialize($value);
                array_push($this->ServerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new ProxyDetailInfo();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }

        if (array_key_exists("Censorship",$param) and $param["Censorship"] !== null) {
            $this->Censorship = $param["Censorship"];
        }

        if (array_key_exists("DbaUins",$param) and $param["DbaUins"] !== null) {
            $this->DbaUins = $param["DbaUins"];
        }
    }
}
