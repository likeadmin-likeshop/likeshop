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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群详情详细信息
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method string getVpcName() 获取VPC名称
 * @method void setVpcName(string $VpcName) 设置VPC名称
 * @method string getVpcId() 获取vpc唯一id
 * @method void setVpcId(string $VpcId) 设置vpc唯一id
 * @method string getSubnetName() 获取子网名称
 * @method void setSubnetName(string $SubnetName) 设置子网名称
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getCharset() 获取字符集
 * @method void setCharset(string $Charset) 设置字符集
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getDbType() 获取数据库类型
 * @method void setDbType(string $DbType) 设置数据库类型
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method integer getUsedStorage() 获取使用容量
 * @method void setUsedStorage(integer $UsedStorage) 设置使用容量
 * @method array getRoAddr() 获取读写分离Vport
 * @method void setRoAddr(array $RoAddr) 设置读写分离Vport
 * @method array getInstanceSet() 获取实例信息
 * @method void setInstanceSet(array $InstanceSet) 设置实例信息
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getPeriodEndTime() 获取到期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间
 * @method string getVip() 获取vip地址
 * @method void setVip(string $Vip) 设置vip地址
 * @method integer getVport() 获取vport端口
 * @method void setVport(integer $Vport) 设置vport端口
 * @method integer getProjectID() 获取项目id
 * @method void setProjectID(integer $ProjectID) 设置项目id
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method array getResourceTags() 获取实例绑定的tag数组信息
 * @method void setResourceTags(array $ResourceTags) 设置实例绑定的tag数组信息
 * @method string getServerlessStatus() 获取当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
 * @method void setServerlessStatus(string $ServerlessStatus) 设置当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
 */
class CynosdbClusterDetail extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var string VPC名称
     */
    public $VpcName;

    /**
     * @var string vpc唯一id
     */
    public $VpcId;

    /**
     * @var string 子网名称
     */
    public $SubnetName;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 字符集
     */
    public $Charset;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 数据库类型
     */
    public $DbType;

    /**
     * @var string 数据库版本
     */
    public $DbVersion;

    /**
     * @var integer 使用容量
     */
    public $UsedStorage;

    /**
     * @var array 读写分离Vport
     */
    public $RoAddr;

    /**
     * @var array 实例信息
     */
    public $InstanceSet;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var string 到期时间
     */
    public $PeriodEndTime;

    /**
     * @var string vip地址
     */
    public $Vip;

    /**
     * @var integer vport端口
     */
    public $Vport;

    /**
     * @var integer 项目id
     */
    public $ProjectID;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var array 实例绑定的tag数组信息
     */
    public $ResourceTags;

    /**
     * @var string 当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
     */
    public $ServerlessStatus;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Region 地域
     * @param string $Status 状态
     * @param string $StatusDesc 状态描述
     * @param string $VpcName VPC名称
     * @param string $VpcId vpc唯一id
     * @param string $SubnetName 子网名称
     * @param string $SubnetId 子网ID
     * @param string $Charset 字符集
     * @param string $CreateTime 创建时间
     * @param string $DbType 数据库类型
     * @param string $DbVersion 数据库版本
     * @param integer $UsedStorage 使用容量
     * @param array $RoAddr 读写分离Vport
     * @param array $InstanceSet 实例信息
     * @param integer $PayMode 付费模式
     * @param string $PeriodEndTime 到期时间
     * @param string $Vip vip地址
     * @param integer $Vport vport端口
     * @param integer $ProjectID 项目id
     * @param string $Zone 可用区
     * @param array $ResourceTags 实例绑定的tag数组信息
     * @param string $ServerlessStatus 当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
resuming
pause
pausing
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("RoAddr",$param) and $param["RoAddr"] !== null) {
            $this->RoAddr = [];
            foreach ($param["RoAddr"] as $key => $value){
                $obj = new Addr();
                $obj->deserialize($value);
                array_push($this->RoAddr, $obj);
            }
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new ClusterInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }
    }
}
