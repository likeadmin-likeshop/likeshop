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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源实例信息
 *
 * @method string getAccessKey() 获取阿里云AccessKey。源库是阿里云RDS5.6适用
 * @method void setAccessKey(string $AccessKey) 设置阿里云AccessKey。源库是阿里云RDS5.6适用
 * @method string getIp() 获取实例的IP地址
 * @method void setIp(string $Ip) 设置实例的IP地址
 * @method integer getPort() 获取实例的端口
 * @method void setPort(integer $Port) 设置实例的端口
 * @method string getUser() 获取实例的用户名
 * @method void setUser(string $User) 设置实例的用户名
 * @method string getPassword() 获取实例的密码
 * @method void setPassword(string $Password) 设置实例的密码
 * @method string getRdsInstanceId() 获取阿里云RDS实例ID。源库是阿里云RDS5.6/5.6适用
 * @method void setRdsInstanceId(string $RdsInstanceId) 设置阿里云RDS实例ID。源库是阿里云RDS5.6/5.6适用
 * @method string getCvmInstanceId() 获取CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段
 * @method string getUniqDcgId() 获取专线网关ID，格式如：dcg-0rxtqqxb
 * @method void setUniqDcgId(string $UniqDcgId) 设置专线网关ID，格式如：dcg-0rxtqqxb
 * @method string getVpcId() 获取私有网络ID，格式如：vpc-92jblxto
 * @method void setVpcId(string $VpcId) 设置私有网络ID，格式如：vpc-92jblxto
 * @method string getSubnetId() 获取私有网络下的子网ID，格式如：subnet-3paxmkdz
 * @method void setSubnetId(string $SubnetId) 设置私有网络下的子网ID，格式如：subnet-3paxmkdz
 * @method string getUniqVpnGwId() 获取VPN网关ID，格式如：vpngw-9ghexg7q
 * @method void setUniqVpnGwId(string $UniqVpnGwId) 设置VPN网关ID，格式如：vpngw-9ghexg7q
 * @method string getInstanceId() 获取数据库实例ID，格式如：cdb-powiqx8q
 * @method void setInstanceId(string $InstanceId) 设置数据库实例ID，格式如：cdb-powiqx8q
 * @method string getRegion() 获取地域英文名，如：ap-guangzhou
 * @method void setRegion(string $Region) 设置地域英文名，如：ap-guangzhou
 * @method string getSupplier() 获取当实例为RDS实例时，填写为aliyun, 其他情况均填写others
 * @method void setSupplier(string $Supplier) 设置当实例为RDS实例时，填写为aliyun, 其他情况均填写others
 * @method string getCcnId() 获取云联网ID，如：ccn-afp6kltc
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCcnId(string $CcnId) 设置云联网ID，如：ccn-afp6kltc
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineVersion() 获取数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6
 * @method void setEngineVersion(string $EngineVersion) 设置数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6
 */
class SrcInfo extends AbstractModel
{
    /**
     * @var string 阿里云AccessKey。源库是阿里云RDS5.6适用
     */
    public $AccessKey;

    /**
     * @var string 实例的IP地址
     */
    public $Ip;

    /**
     * @var integer 实例的端口
     */
    public $Port;

    /**
     * @var string 实例的用户名
     */
    public $User;

    /**
     * @var string 实例的密码
     */
    public $Password;

    /**
     * @var string 阿里云RDS实例ID。源库是阿里云RDS5.6/5.6适用
     */
    public $RdsInstanceId;

    /**
     * @var string CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段
     */
    public $CvmInstanceId;

    /**
     * @var string 专线网关ID，格式如：dcg-0rxtqqxb
     */
    public $UniqDcgId;

    /**
     * @var string 私有网络ID，格式如：vpc-92jblxto
     */
    public $VpcId;

    /**
     * @var string 私有网络下的子网ID，格式如：subnet-3paxmkdz
     */
    public $SubnetId;

    /**
     * @var string VPN网关ID，格式如：vpngw-9ghexg7q
     */
    public $UniqVpnGwId;

    /**
     * @var string 数据库实例ID，格式如：cdb-powiqx8q
     */
    public $InstanceId;

    /**
     * @var string 地域英文名，如：ap-guangzhou
     */
    public $Region;

    /**
     * @var string 当实例为RDS实例时，填写为aliyun, 其他情况均填写others
     */
    public $Supplier;

    /**
     * @var string 云联网ID，如：ccn-afp6kltc
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CcnId;

    /**
     * @var string 数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6
     */
    public $EngineVersion;

    /**
     * @param string $AccessKey 阿里云AccessKey。源库是阿里云RDS5.6适用
     * @param string $Ip 实例的IP地址
     * @param integer $Port 实例的端口
     * @param string $User 实例的用户名
     * @param string $Password 实例的密码
     * @param string $RdsInstanceId 阿里云RDS实例ID。源库是阿里云RDS5.6/5.6适用
     * @param string $CvmInstanceId CVM实例短ID，格式如：ins-olgl39y8，与云服务器控制台页面显示的实例ID相同。如果是CVM自建实例，需要传递此字段
     * @param string $UniqDcgId 专线网关ID，格式如：dcg-0rxtqqxb
     * @param string $VpcId 私有网络ID，格式如：vpc-92jblxto
     * @param string $SubnetId 私有网络下的子网ID，格式如：subnet-3paxmkdz
     * @param string $UniqVpnGwId VPN网关ID，格式如：vpngw-9ghexg7q
     * @param string $InstanceId 数据库实例ID，格式如：cdb-powiqx8q
     * @param string $Region 地域英文名，如：ap-guangzhou
     * @param string $Supplier 当实例为RDS实例时，填写为aliyun, 其他情况均填写others
     * @param string $CcnId 云联网ID，如：ccn-afp6kltc
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineVersion 数据库版本，当实例为RDS实例时才有效，格式如：5.6或者5.7，默认为5.6
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
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("RdsInstanceId",$param) and $param["RdsInstanceId"] !== null) {
            $this->RdsInstanceId = $param["RdsInstanceId"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("UniqDcgId",$param) and $param["UniqDcgId"] !== null) {
            $this->UniqDcgId = $param["UniqDcgId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("UniqVpnGwId",$param) and $param["UniqVpnGwId"] !== null) {
            $this->UniqVpnGwId = $param["UniqVpnGwId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Supplier",$param) and $param["Supplier"] !== null) {
            $this->Supplier = $param["Supplier"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }
    }
}
