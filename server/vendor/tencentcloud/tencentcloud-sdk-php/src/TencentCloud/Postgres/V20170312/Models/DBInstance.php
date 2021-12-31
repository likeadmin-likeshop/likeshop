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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例的详细信息
 *
 * @method string getRegion() 获取实例所属地域，如: ap-guangzhou，对应RegionSet的Region字段
 * @method void setRegion(string $Region) 设置实例所属地域，如: ap-guangzhou，对应RegionSet的Region字段
 * @method string getZone() 获取实例所属可用区， 如：ap-guangzhou-3，对应ZoneSet的Zone字段
 * @method void setZone(string $Zone) 设置实例所属可用区， 如：ap-guangzhou-3，对应ZoneSet的Zone字段
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getDBInstanceId() 获取实例ID
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID
 * @method string getDBInstanceName() 获取实例名称
 * @method void setDBInstanceName(string $DBInstanceName) 设置实例名称
 * @method string getDBInstanceStatus() 获取实例状态，分别为：applying（申请中）、init(待初始化)、initing(初始化中)、running(运行中)、limited run（受限运行）、isolated（已隔离）、recycling（回收中）、recycled（已回收）、job running（任务执行中）、offline（下线）、migrating（迁移中）、expanding（扩容中）、readonly（只读）、restarting（重启中）
 * @method void setDBInstanceStatus(string $DBInstanceStatus) 设置实例状态，分别为：applying（申请中）、init(待初始化)、initing(初始化中)、running(运行中)、limited run（受限运行）、isolated（已隔离）、recycling（回收中）、recycled（已回收）、job running（任务执行中）、offline（下线）、migrating（迁移中）、expanding（扩容中）、readonly（只读）、restarting（重启中）
 * @method integer getDBInstanceMemory() 获取实例分配的内存大小，单位：GB
 * @method void setDBInstanceMemory(integer $DBInstanceMemory) 设置实例分配的内存大小，单位：GB
 * @method integer getDBInstanceStorage() 获取实例分配的存储空间大小，单位：GB
 * @method void setDBInstanceStorage(integer $DBInstanceStorage) 设置实例分配的存储空间大小，单位：GB
 * @method integer getDBInstanceCpu() 获取实例分配的CPU数量，单位：个
 * @method void setDBInstanceCpu(integer $DBInstanceCpu) 设置实例分配的CPU数量，单位：个
 * @method string getDBInstanceClass() 获取售卖规格ID
 * @method void setDBInstanceClass(string $DBInstanceClass) 设置售卖规格ID
 * @method string getDBInstanceType() 获取实例类型，类型有：1、primary（主实例）；2、readonly（只读实例）；3、guard（灾备实例）；4、temp（临时实例）
 * @method void setDBInstanceType(string $DBInstanceType) 设置实例类型，类型有：1、primary（主实例）；2、readonly（只读实例）；3、guard（灾备实例）；4、temp（临时实例）
 * @method string getDBInstanceVersion() 获取实例版本，目前只支持standard（双机高可用版, 一主一从）
 * @method void setDBInstanceVersion(string $DBInstanceVersion) 设置实例版本，目前只支持standard（双机高可用版, 一主一从）
 * @method string getDBCharset() 获取实例DB字符集
 * @method void setDBCharset(string $DBCharset) 设置实例DB字符集
 * @method string getDBVersion() 获取PostgreSQL内核版本
 * @method void setDBVersion(string $DBVersion) 设置PostgreSQL内核版本
 * @method string getCreateTime() 获取实例创建时间
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间
 * @method string getUpdateTime() 获取实例执行最后一次更新的时间
 * @method void setUpdateTime(string $UpdateTime) 设置实例执行最后一次更新的时间
 * @method string getExpireTime() 获取实例到期时间
 * @method void setExpireTime(string $ExpireTime) 设置实例到期时间
 * @method string getIsolatedTime() 获取实例隔离时间
 * @method void setIsolatedTime(string $IsolatedTime) 设置实例隔离时间
 * @method string getPayType() 获取计费模式，1、prepaid（包年包月,预付费）；2、postpaid（按量计费，后付费）
 * @method void setPayType(string $PayType) 设置计费模式，1、prepaid（包年包月,预付费）；2、postpaid（按量计费，后付费）
 * @method integer getAutoRenew() 获取是否自动续费，1：自动续费，0：不自动续费
 * @method void setAutoRenew(integer $AutoRenew) 设置是否自动续费，1：自动续费，0：不自动续费
 * @method array getDBInstanceNetInfo() 获取实例网络连接信息
 * @method void setDBInstanceNetInfo(array $DBInstanceNetInfo) 设置实例网络连接信息
 * @method string getType() 获取机器类型
 * @method void setType(string $Type) 设置机器类型
 * @method integer getAppId() 获取用户的AppId
 * @method void setAppId(integer $AppId) 设置用户的AppId
 * @method integer getUid() 获取实例的Uid
 * @method void setUid(integer $Uid) 设置实例的Uid
 * @method integer getSupportIpv6() 获取实例是否支持Ipv6，1：支持，0：不支持
 * @method void setSupportIpv6(integer $SupportIpv6) 设置实例是否支持Ipv6，1：支持，0：不支持
 * @method array getTagList() 获取实例绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置实例绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterDBInstanceId() 获取主实例信息，仅在实例为只读实例时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) 设置主实例信息，仅在实例为只读实例时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReadOnlyInstanceNum() 获取只读实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadOnlyInstanceNum(integer $ReadOnlyInstanceNum) 设置只读实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusInReadonlyGroup() 获取只读实例在只读组中的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusInReadonlyGroup(string $StatusInReadonlyGroup) 设置只读实例在只读组中的状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOfflineTime() 获取下线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTime(string $OfflineTime) 设置下线时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string 实例所属地域，如: ap-guangzhou，对应RegionSet的Region字段
     */
    public $Region;

    /**
     * @var string 实例所属可用区， 如：ap-guangzhou-3，对应ZoneSet的Zone字段
     */
    public $Zone;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 实例ID
     */
    public $DBInstanceId;

    /**
     * @var string 实例名称
     */
    public $DBInstanceName;

    /**
     * @var string 实例状态，分别为：applying（申请中）、init(待初始化)、initing(初始化中)、running(运行中)、limited run（受限运行）、isolated（已隔离）、recycling（回收中）、recycled（已回收）、job running（任务执行中）、offline（下线）、migrating（迁移中）、expanding（扩容中）、readonly（只读）、restarting（重启中）
     */
    public $DBInstanceStatus;

    /**
     * @var integer 实例分配的内存大小，单位：GB
     */
    public $DBInstanceMemory;

    /**
     * @var integer 实例分配的存储空间大小，单位：GB
     */
    public $DBInstanceStorage;

    /**
     * @var integer 实例分配的CPU数量，单位：个
     */
    public $DBInstanceCpu;

    /**
     * @var string 售卖规格ID
     */
    public $DBInstanceClass;

    /**
     * @var string 实例类型，类型有：1、primary（主实例）；2、readonly（只读实例）；3、guard（灾备实例）；4、temp（临时实例）
     */
    public $DBInstanceType;

    /**
     * @var string 实例版本，目前只支持standard（双机高可用版, 一主一从）
     */
    public $DBInstanceVersion;

    /**
     * @var string 实例DB字符集
     */
    public $DBCharset;

    /**
     * @var string PostgreSQL内核版本
     */
    public $DBVersion;

    /**
     * @var string 实例创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例执行最后一次更新的时间
     */
    public $UpdateTime;

    /**
     * @var string 实例到期时间
     */
    public $ExpireTime;

    /**
     * @var string 实例隔离时间
     */
    public $IsolatedTime;

    /**
     * @var string 计费模式，1、prepaid（包年包月,预付费）；2、postpaid（按量计费，后付费）
     */
    public $PayType;

    /**
     * @var integer 是否自动续费，1：自动续费，0：不自动续费
     */
    public $AutoRenew;

    /**
     * @var array 实例网络连接信息
     */
    public $DBInstanceNetInfo;

    /**
     * @var string 机器类型
     */
    public $Type;

    /**
     * @var integer 用户的AppId
     */
    public $AppId;

    /**
     * @var integer 实例的Uid
     */
    public $Uid;

    /**
     * @var integer 实例是否支持Ipv6，1：支持，0：不支持
     */
    public $SupportIpv6;

    /**
     * @var array 实例绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var string 主实例信息，仅在实例为只读实例时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterDBInstanceId;

    /**
     * @var integer 只读实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadOnlyInstanceNum;

    /**
     * @var string 只读实例在只读组中的状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusInReadonlyGroup;

    /**
     * @var string 下线时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTime;

    /**
     * @param string $Region 实例所属地域，如: ap-guangzhou，对应RegionSet的Region字段
     * @param string $Zone 实例所属可用区， 如：ap-guangzhou-3，对应ZoneSet的Zone字段
     * @param integer $ProjectId 项目ID
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param string $DBInstanceId 实例ID
     * @param string $DBInstanceName 实例名称
     * @param string $DBInstanceStatus 实例状态，分别为：applying（申请中）、init(待初始化)、initing(初始化中)、running(运行中)、limited run（受限运行）、isolated（已隔离）、recycling（回收中）、recycled（已回收）、job running（任务执行中）、offline（下线）、migrating（迁移中）、expanding（扩容中）、readonly（只读）、restarting（重启中）
     * @param integer $DBInstanceMemory 实例分配的内存大小，单位：GB
     * @param integer $DBInstanceStorage 实例分配的存储空间大小，单位：GB
     * @param integer $DBInstanceCpu 实例分配的CPU数量，单位：个
     * @param string $DBInstanceClass 售卖规格ID
     * @param string $DBInstanceType 实例类型，类型有：1、primary（主实例）；2、readonly（只读实例）；3、guard（灾备实例）；4、temp（临时实例）
     * @param string $DBInstanceVersion 实例版本，目前只支持standard（双机高可用版, 一主一从）
     * @param string $DBCharset 实例DB字符集
     * @param string $DBVersion PostgreSQL内核版本
     * @param string $CreateTime 实例创建时间
     * @param string $UpdateTime 实例执行最后一次更新的时间
     * @param string $ExpireTime 实例到期时间
     * @param string $IsolatedTime 实例隔离时间
     * @param string $PayType 计费模式，1、prepaid（包年包月,预付费）；2、postpaid（按量计费，后付费）
     * @param integer $AutoRenew 是否自动续费，1：自动续费，0：不自动续费
     * @param array $DBInstanceNetInfo 实例网络连接信息
     * @param string $Type 机器类型
     * @param integer $AppId 用户的AppId
     * @param integer $Uid 实例的Uid
     * @param integer $SupportIpv6 实例是否支持Ipv6，1：支持，0：不支持
     * @param array $TagList 实例绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterDBInstanceId 主实例信息，仅在实例为只读实例时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReadOnlyInstanceNum 只读实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusInReadonlyGroup 只读实例在只读组中的状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OfflineTime 下线时间
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            $this->DBInstanceName = $param["DBInstanceName"];
        }

        if (array_key_exists("DBInstanceStatus",$param) and $param["DBInstanceStatus"] !== null) {
            $this->DBInstanceStatus = $param["DBInstanceStatus"];
        }

        if (array_key_exists("DBInstanceMemory",$param) and $param["DBInstanceMemory"] !== null) {
            $this->DBInstanceMemory = $param["DBInstanceMemory"];
        }

        if (array_key_exists("DBInstanceStorage",$param) and $param["DBInstanceStorage"] !== null) {
            $this->DBInstanceStorage = $param["DBInstanceStorage"];
        }

        if (array_key_exists("DBInstanceCpu",$param) and $param["DBInstanceCpu"] !== null) {
            $this->DBInstanceCpu = $param["DBInstanceCpu"];
        }

        if (array_key_exists("DBInstanceClass",$param) and $param["DBInstanceClass"] !== null) {
            $this->DBInstanceClass = $param["DBInstanceClass"];
        }

        if (array_key_exists("DBInstanceType",$param) and $param["DBInstanceType"] !== null) {
            $this->DBInstanceType = $param["DBInstanceType"];
        }

        if (array_key_exists("DBInstanceVersion",$param) and $param["DBInstanceVersion"] !== null) {
            $this->DBInstanceVersion = $param["DBInstanceVersion"];
        }

        if (array_key_exists("DBCharset",$param) and $param["DBCharset"] !== null) {
            $this->DBCharset = $param["DBCharset"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("DBInstanceNetInfo",$param) and $param["DBInstanceNetInfo"] !== null) {
            $this->DBInstanceNetInfo = [];
            foreach ($param["DBInstanceNetInfo"] as $key => $value){
                $obj = new DBInstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->DBInstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("SupportIpv6",$param) and $param["SupportIpv6"] !== null) {
            $this->SupportIpv6 = $param["SupportIpv6"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("ReadOnlyInstanceNum",$param) and $param["ReadOnlyInstanceNum"] !== null) {
            $this->ReadOnlyInstanceNum = $param["ReadOnlyInstanceNum"];
        }

        if (array_key_exists("StatusInReadonlyGroup",$param) and $param["StatusInReadonlyGroup"] !== null) {
            $this->StatusInReadonlyGroup = $param["StatusInReadonlyGroup"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }
    }
}
