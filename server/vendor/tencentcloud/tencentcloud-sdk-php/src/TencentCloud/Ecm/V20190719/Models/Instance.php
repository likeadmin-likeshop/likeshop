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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述实例相关的信息。
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInstanceName() 获取实例名称，如ens-34241f3s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称，如ens-34241f3s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceState() 获取实例状态。取值范围：
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
STOPPED：表示关机
STARTING：表示开机中
STOPPING：表示关机中
REBOOTING：表示重启中
SHUTDOWN：表示停止待销毁
TERMINATING：表示销毁中。
 * @method void setInstanceState(string $InstanceState) 设置实例状态。取值范围：
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
STOPPED：表示关机
STARTING：表示开机中
STOPPING：表示关机中
REBOOTING：表示重启中
SHUTDOWN：表示停止待销毁
TERMINATING：表示销毁中。
 * @method Image getImage() 获取实例当前使用的镜像的信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(Image $Image) 设置实例当前使用的镜像的信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SimpleModule getSimpleModule() 获取实例当前所属的模块简要信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimpleModule(SimpleModule $SimpleModule) 设置实例当前所属的模块简要信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Position getPosition() 获取实例所在的位置相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(Position $Position) 设置实例所在的位置相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Internet getInternet() 获取实例的网络相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternet(Internet $Internet) 设置实例的网络相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceTypeConfig getInstanceTypeConfig() 获取实例的配置相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTypeConfig(InstanceTypeConfig $InstanceTypeConfig) 设置实例的配置相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperation() 获取实例最后一次操作。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperation(string $LatestOperation) 设置实例最后一次操作。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationState() 获取实例最后一次操作结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置实例最后一次操作结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRestrictState() 获取实例业务状态。取值范围：
NORMAL：表示正常状态的实例
EXPIRED：表示过期的实例
PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestrictState(string $RestrictState) 设置实例业务状态。取值范围：
NORMAL：表示正常状态的实例
EXPIRED：表示过期的实例
PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSystemDiskSize() 获取系统盘大小，单位GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemDiskSize(integer $SystemDiskSize) 设置系统盘大小，单位GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataDiskSize() 获取数据盘大小，单位GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDiskSize(integer $DataDiskSize) 设置数据盘大小，单位GB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUUID() 获取实例UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUUID(string $UUID) 设置实例UUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取付费方式。
    0为后付费。
    1为预付费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置付费方式。
    0为后付费。
    1为预付费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取过期时间。格式为yyyy-mm-dd HH:mm:ss。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间。格式为yyyy-mm-dd HH:mm:ss。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTime() 获取隔离时间。格式为yyyy-mm-dd HH:mm:ss。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置隔离时间。格式为yyyy-mm-dd HH:mm:ss。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewFlag() 获取是否自动续费。
      0为不自动续费。
      1为自动续费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置是否自动续费。
      0为不自动续费。
      1为自动续费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireState() 获取过期状态。
    NORMAL 表示机器运行正常。
    WILL_EXPIRE 表示即将过期。
    EXPIRED 表示已过期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireState(string $ExpireState) 设置过期状态。
    NORMAL 表示机器运行正常。
    WILL_EXPIRE 表示即将过期。
    EXPIRED 表示已过期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DiskInfo getSystemDisk() 获取系统盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemDisk(DiskInfo $SystemDisk) 设置系统盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataDisks() 获取数据盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDisks(array $DataDisks) 设置数据盘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNewFlag() 获取新实例标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewFlag(integer $NewFlag) 设置新实例标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroupIds() 获取实例所属安全组。该参数可以通过调用 DescribeSecurityGroups 的返回值中的sgId字段来获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组。该参数可以通过调用 DescribeSecurityGroups 的返回值中的sgId字段来获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取VPC属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置VPC属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getISP() 获取实例运营商字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setISP(string $ISP) 设置实例运营商字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PhysicalPosition getPhysicalPosition() 获取物理位置信息。注意该字段目前为保留字段，均为空值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhysicalPosition(PhysicalPosition $PhysicalPosition) 设置物理位置信息。注意该字段目前为保留字段，均为空值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Instance extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 实例名称，如ens-34241f3s。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 实例状态。取值范围：
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
STOPPED：表示关机
STARTING：表示开机中
STOPPING：表示关机中
REBOOTING：表示重启中
SHUTDOWN：表示停止待销毁
TERMINATING：表示销毁中。
     */
    public $InstanceState;

    /**
     * @var Image 实例当前使用的镜像的信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var SimpleModule 实例当前所属的模块简要信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimpleModule;

    /**
     * @var Position 实例所在的位置相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var Internet 实例的网络相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Internet;

    /**
     * @var InstanceTypeConfig 实例的配置相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTypeConfig;

    /**
     * @var string 实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var array 实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var string 实例最后一次操作。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperation;

    /**
     * @var string 实例最后一次操作结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @var string 实例业务状态。取值范围：
NORMAL：表示正常状态的实例
EXPIRED：表示过期的实例
PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestrictState;

    /**
     * @var integer 系统盘大小，单位GB。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemDiskSize;

    /**
     * @var integer 数据盘大小，单位GB。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDiskSize;

    /**
     * @var string 实例UUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UUID;

    /**
     * @var integer 付费方式。
    0为后付费。
    1为预付费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var string 过期时间。格式为yyyy-mm-dd HH:mm:ss。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 隔离时间。格式为yyyy-mm-dd HH:mm:ss。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @var integer 是否自动续费。
      0为不自动续费。
      1为自动续费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var string 过期状态。
    NORMAL 表示机器运行正常。
    WILL_EXPIRE 表示即将过期。
    EXPIRED 表示已过期。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireState;

    /**
     * @var DiskInfo 系统盘信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemDisk;

    /**
     * @var array 数据盘信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDisks;

    /**
     * @var integer 新实例标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewFlag;

    /**
     * @var array 实例所属安全组。该参数可以通过调用 DescribeSecurityGroups 的返回值中的sgId字段来获取。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @var VirtualPrivateCloud VPC属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualPrivateCloud;

    /**
     * @var string 实例运营商字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ISP;

    /**
     * @var PhysicalPosition 物理位置信息。注意该字段目前为保留字段，均为空值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhysicalPosition;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $InstanceName 实例名称，如ens-34241f3s。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceState 实例状态。取值范围：
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
STOPPED：表示关机
STARTING：表示开机中
STOPPING：表示关机中
REBOOTING：表示重启中
SHUTDOWN：表示停止待销毁
TERMINATING：表示销毁中。
     * @param Image $Image 实例当前使用的镜像的信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SimpleModule $SimpleModule 实例当前所属的模块简要信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Position $Position 实例所在的位置相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Internet $Internet 实例的网络相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceTypeConfig $InstanceTypeConfig 实例的配置相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet 实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperation 实例最后一次操作。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationState 实例最后一次操作结果。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RestrictState 实例业务状态。取值范围：
NORMAL：表示正常状态的实例
EXPIRED：表示过期的实例
PROTECTIVELY_ISOLATED：表示被安全隔离的实例。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SystemDiskSize 系统盘大小，单位GB。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataDiskSize 数据盘大小，单位GB。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UUID 实例UUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode 付费方式。
    0为后付费。
    1为预付费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 过期时间。格式为yyyy-mm-dd HH:mm:ss。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTime 隔离时间。格式为yyyy-mm-dd HH:mm:ss。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewFlag 是否自动续费。
      0为不自动续费。
      1为自动续费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireState 过期状态。
    NORMAL 表示机器运行正常。
    WILL_EXPIRE 表示即将过期。
    EXPIRED 表示已过期。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DiskInfo $SystemDisk 系统盘信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataDisks 数据盘信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NewFlag 新实例标志
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroupIds 实例所属安全组。该参数可以通过调用 DescribeSecurityGroups 的返回值中的sgId字段来获取。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VirtualPrivateCloud $VirtualPrivateCloud VPC属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ISP 实例运营商字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PhysicalPosition $PhysicalPosition 物理位置信息。注意该字段目前为保留字段，均为空值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new Image();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("SimpleModule",$param) and $param["SimpleModule"] !== null) {
            $this->SimpleModule = new SimpleModule();
            $this->SimpleModule->deserialize($param["SimpleModule"]);
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = new Position();
            $this->Position->deserialize($param["Position"]);
        }

        if (array_key_exists("Internet",$param) and $param["Internet"] !== null) {
            $this->Internet = new Internet();
            $this->Internet->deserialize($param["Internet"]);
        }

        if (array_key_exists("InstanceTypeConfig",$param) and $param["InstanceTypeConfig"] !== null) {
            $this->InstanceTypeConfig = new InstanceTypeConfig();
            $this->InstanceTypeConfig->deserialize($param["InstanceTypeConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
            $this->SystemDiskSize = $param["SystemDiskSize"];
        }

        if (array_key_exists("DataDiskSize",$param) and $param["DataDiskSize"] !== null) {
            $this->DataDiskSize = $param["DataDiskSize"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ExpireState",$param) and $param["ExpireState"] !== null) {
            $this->ExpireState = $param["ExpireState"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new DiskInfo();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DiskInfo();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("NewFlag",$param) and $param["NewFlag"] !== null) {
            $this->NewFlag = $param["NewFlag"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("PhysicalPosition",$param) and $param["PhysicalPosition"] !== null) {
            $this->PhysicalPosition = new PhysicalPosition();
            $this->PhysicalPosition->deserialize($param["PhysicalPosition"]);
        }
    }
}
