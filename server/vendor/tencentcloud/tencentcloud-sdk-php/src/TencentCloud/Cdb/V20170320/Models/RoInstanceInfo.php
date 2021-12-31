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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RO实例的详细信息
 *
 * @method string getMasterInstanceId() 获取RO组对应的主实例的ID
 * @method void setMasterInstanceId(string $MasterInstanceId) 设置RO组对应的主实例的ID
 * @method string getRoStatus() 获取RO实例在RO组内的状态，可能的值：online-在线，offline-下线
 * @method void setRoStatus(string $RoStatus) 设置RO实例在RO组内的状态，可能的值：online-在线，offline-下线
 * @method string getOfflineTime() 获取RO实例在RO组内上一次下线的时间
 * @method void setOfflineTime(string $OfflineTime) 设置RO实例在RO组内上一次下线的时间
 * @method integer getWeight() 获取RO实例在RO组内的权重
 * @method void setWeight(integer $Weight) 设置RO实例在RO组内的权重
 * @method string getRegion() 获取RO实例所在区域名称，如ap-shanghai
 * @method void setRegion(string $Region) 设置RO实例所在区域名称，如ap-shanghai
 * @method string getZone() 获取RO可用区的正式名称，如ap-shanghai-1
 * @method void setZone(string $Zone) 设置RO可用区的正式名称，如ap-shanghai-1
 * @method string getInstanceId() 获取RO实例ID，格式如：cdbro-c1nl9rpv
 * @method void setInstanceId(string $InstanceId) 设置RO实例ID，格式如：cdbro-c1nl9rpv
 * @method integer getStatus() 获取RO实例状态，可能返回值：0-创建中，1-运行中，4-删除中
 * @method void setStatus(integer $Status) 设置RO实例状态，可能返回值：0-创建中，1-运行中，4-删除中
 * @method integer getInstanceType() 获取实例类型，可能返回值：1-主实例，2-灾备实例，3-只读实例
 * @method void setInstanceType(integer $InstanceType) 设置实例类型，可能返回值：1-主实例，2-灾备实例，3-只读实例
 * @method string getInstanceName() 获取RO实例名称
 * @method void setInstanceName(string $InstanceName) 设置RO实例名称
 * @method integer getHourFeeStatus() 获取按量计费状态，可能的取值：1-正常，2-欠费
 * @method void setHourFeeStatus(integer $HourFeeStatus) 设置按量计费状态，可能的取值：1-正常，2-欠费
 * @method integer getTaskStatus() 获取RO实例任务状态，可能返回值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
 * @method void setTaskStatus(integer $TaskStatus) 设置RO实例任务状态，可能返回值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
 * @method integer getMemory() 获取RO实例内存大小，单位：MB
 * @method void setMemory(integer $Memory) 设置RO实例内存大小，单位：MB
 * @method integer getVolume() 获取RO实例硬盘大小，单位：GB
 * @method void setVolume(integer $Volume) 设置RO实例硬盘大小，单位：GB
 * @method integer getQps() 获取每次查询数量
 * @method void setQps(integer $Qps) 设置每次查询数量
 * @method string getVip() 获取RO实例的内网IP地址
 * @method void setVip(string $Vip) 设置RO实例的内网IP地址
 * @method integer getVport() 获取RO实例访问端口
 * @method void setVport(integer $Vport) 设置RO实例访问端口
 * @method integer getVpcId() 获取RO实例所在私有网络ID
 * @method void setVpcId(integer $VpcId) 设置RO实例所在私有网络ID
 * @method integer getSubnetId() 获取RO实例所在私有网络子网ID
 * @method void setSubnetId(integer $SubnetId) 设置RO实例所在私有网络子网ID
 * @method string getDeviceType() 获取RO实例规格描述，目前可取值 CUSTOM
 * @method void setDeviceType(string $DeviceType) 设置RO实例规格描述，目前可取值 CUSTOM
 * @method string getEngineVersion() 获取RO实例数据库引擎版本，可能返回值：5.1、5.5、5.6、5.7、8.0
 * @method void setEngineVersion(string $EngineVersion) 设置RO实例数据库引擎版本，可能返回值：5.1、5.5、5.6、5.7、8.0
 * @method string getDeadlineTime() 获取RO实例到期时间，时间格式：yyyy-mm-dd hh:mm:ss，如实例为按量计费模式，则此字段值为0000-00-00 00:00:00
 * @method void setDeadlineTime(string $DeadlineTime) 设置RO实例到期时间，时间格式：yyyy-mm-dd hh:mm:ss，如实例为按量计费模式，则此字段值为0000-00-00 00:00:00
 * @method integer getPayType() 获取RO实例计费类型，可能返回值：0-包年包月，1-按量计费，2-后付费月结
 * @method void setPayType(integer $PayType) 设置RO实例计费类型，可能返回值：0-包年包月，1-按量计费，2-后付费月结
 */
class RoInstanceInfo extends AbstractModel
{
    /**
     * @var string RO组对应的主实例的ID
     */
    public $MasterInstanceId;

    /**
     * @var string RO实例在RO组内的状态，可能的值：online-在线，offline-下线
     */
    public $RoStatus;

    /**
     * @var string RO实例在RO组内上一次下线的时间
     */
    public $OfflineTime;

    /**
     * @var integer RO实例在RO组内的权重
     */
    public $Weight;

    /**
     * @var string RO实例所在区域名称，如ap-shanghai
     */
    public $Region;

    /**
     * @var string RO可用区的正式名称，如ap-shanghai-1
     */
    public $Zone;

    /**
     * @var string RO实例ID，格式如：cdbro-c1nl9rpv
     */
    public $InstanceId;

    /**
     * @var integer RO实例状态，可能返回值：0-创建中，1-运行中，4-删除中
     */
    public $Status;

    /**
     * @var integer 实例类型，可能返回值：1-主实例，2-灾备实例，3-只读实例
     */
    public $InstanceType;

    /**
     * @var string RO实例名称
     */
    public $InstanceName;

    /**
     * @var integer 按量计费状态，可能的取值：1-正常，2-欠费
     */
    public $HourFeeStatus;

    /**
     * @var integer RO实例任务状态，可能返回值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
     */
    public $TaskStatus;

    /**
     * @var integer RO实例内存大小，单位：MB
     */
    public $Memory;

    /**
     * @var integer RO实例硬盘大小，单位：GB
     */
    public $Volume;

    /**
     * @var integer 每次查询数量
     */
    public $Qps;

    /**
     * @var string RO实例的内网IP地址
     */
    public $Vip;

    /**
     * @var integer RO实例访问端口
     */
    public $Vport;

    /**
     * @var integer RO实例所在私有网络ID
     */
    public $VpcId;

    /**
     * @var integer RO实例所在私有网络子网ID
     */
    public $SubnetId;

    /**
     * @var string RO实例规格描述，目前可取值 CUSTOM
     */
    public $DeviceType;

    /**
     * @var string RO实例数据库引擎版本，可能返回值：5.1、5.5、5.6、5.7、8.0
     */
    public $EngineVersion;

    /**
     * @var string RO实例到期时间，时间格式：yyyy-mm-dd hh:mm:ss，如实例为按量计费模式，则此字段值为0000-00-00 00:00:00
     */
    public $DeadlineTime;

    /**
     * @var integer RO实例计费类型，可能返回值：0-包年包月，1-按量计费，2-后付费月结
     */
    public $PayType;

    /**
     * @param string $MasterInstanceId RO组对应的主实例的ID
     * @param string $RoStatus RO实例在RO组内的状态，可能的值：online-在线，offline-下线
     * @param string $OfflineTime RO实例在RO组内上一次下线的时间
     * @param integer $Weight RO实例在RO组内的权重
     * @param string $Region RO实例所在区域名称，如ap-shanghai
     * @param string $Zone RO可用区的正式名称，如ap-shanghai-1
     * @param string $InstanceId RO实例ID，格式如：cdbro-c1nl9rpv
     * @param integer $Status RO实例状态，可能返回值：0-创建中，1-运行中，4-删除中
     * @param integer $InstanceType 实例类型，可能返回值：1-主实例，2-灾备实例，3-只读实例
     * @param string $InstanceName RO实例名称
     * @param integer $HourFeeStatus 按量计费状态，可能的取值：1-正常，2-欠费
     * @param integer $TaskStatus RO实例任务状态，可能返回值：<br>0-没有任务<br>1-升级中<br>2-数据导入中<br>3-开放Slave中<br>4-外网访问开通中<br>5-批量操作执行中<br>6-回档中<br>7-外网访问关闭中<br>8-密码修改中<br>9-实例名修改中<br>10-重启中<br>12-自建迁移中<br>13-删除库表中<br>14-灾备实例创建同步中
     * @param integer $Memory RO实例内存大小，单位：MB
     * @param integer $Volume RO实例硬盘大小，单位：GB
     * @param integer $Qps 每次查询数量
     * @param string $Vip RO实例的内网IP地址
     * @param integer $Vport RO实例访问端口
     * @param integer $VpcId RO实例所在私有网络ID
     * @param integer $SubnetId RO实例所在私有网络子网ID
     * @param string $DeviceType RO实例规格描述，目前可取值 CUSTOM
     * @param string $EngineVersion RO实例数据库引擎版本，可能返回值：5.1、5.5、5.6、5.7、8.0
     * @param string $DeadlineTime RO实例到期时间，时间格式：yyyy-mm-dd hh:mm:ss，如实例为按量计费模式，则此字段值为0000-00-00 00:00:00
     * @param integer $PayType RO实例计费类型，可能返回值：0-包年包月，1-按量计费，2-后付费月结
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
        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->MasterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("RoStatus",$param) and $param["RoStatus"] !== null) {
            $this->RoStatus = $param["RoStatus"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("HourFeeStatus",$param) and $param["HourFeeStatus"] !== null) {
            $this->HourFeeStatus = $param["HourFeeStatus"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }
    }
}
