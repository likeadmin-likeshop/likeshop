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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDevices请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回数量
 * @method void setLimit(integer $Limit) 设置返回数量
 * @method string getDeviceClassCode() 获取机型ID，通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置机型ID，通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询
 * @method array getInstanceIds() 获取设备ID数组
 * @method void setInstanceIds(array $InstanceIds) 设置设备ID数组
 * @method array getWanIps() 获取外网IP数组
 * @method void setWanIps(array $WanIps) 设置外网IP数组
 * @method array getLanIps() 获取内网IP数组
 * @method void setLanIps(array $LanIps) 设置内网IP数组
 * @method string getAlias() 获取设备名称
 * @method void setAlias(string $Alias) 设置设备名称
 * @method string getVagueIp() 获取模糊IP查询
 * @method void setVagueIp(string $VagueIp) 设置模糊IP查询
 * @method string getDeadlineStartTime() 获取设备到期时间查询的起始时间
 * @method void setDeadlineStartTime(string $DeadlineStartTime) 设置设备到期时间查询的起始时间
 * @method string getDeadlineEndTime() 获取设备到期时间查询的结束时间
 * @method void setDeadlineEndTime(string $DeadlineEndTime) 设置设备到期时间查询的结束时间
 * @method integer getAutoRenewFlag() 获取自动续费标志 0:不自动续费，1:自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志 0:不自动续费，1:自动续费
 * @method string getVpcId() 获取私有网络唯一ID
 * @method void setVpcId(string $VpcId) 设置私有网络唯一ID
 * @method string getSubnetId() 获取子网唯一ID
 * @method void setSubnetId(string $SubnetId) 设置子网唯一ID
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method string getDeviceType() 获取设备类型，取值有: compute(计算型), standard(标准型), storage(存储型) 等
 * @method void setDeviceType(string $DeviceType) 设置设备类型，取值有: compute(计算型), standard(标准型), storage(存储型) 等
 * @method integer getIsLuckyDevice() 获取竞价实例机器的过滤。如果未指定此参数，则不做过滤。0: 查询非竞价实例的机器; 1: 查询竞价实例的机器。
 * @method void setIsLuckyDevice(integer $IsLuckyDevice) 设置竞价实例机器的过滤。如果未指定此参数，则不做过滤。0: 查询非竞价实例的机器; 1: 查询竞价实例的机器。
 * @method string getOrderField() 获取排序字段
 * @method void setOrderField(string $OrderField) 设置排序字段
 * @method integer getOrder() 获取排序方式，取值：0:增序(默认)，1:降序
 * @method void setOrder(integer $Order) 设置排序方式，取值：0:增序(默认)，1:降序
 */
class DescribeDevicesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回数量
     */
    public $Limit;

    /**
     * @var string 机型ID，通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询
     */
    public $DeviceClassCode;

    /**
     * @var array 设备ID数组
     */
    public $InstanceIds;

    /**
     * @var array 外网IP数组
     */
    public $WanIps;

    /**
     * @var array 内网IP数组
     */
    public $LanIps;

    /**
     * @var string 设备名称
     */
    public $Alias;

    /**
     * @var string 模糊IP查询
     */
    public $VagueIp;

    /**
     * @var string 设备到期时间查询的起始时间
     */
    public $DeadlineStartTime;

    /**
     * @var string 设备到期时间查询的结束时间
     */
    public $DeadlineEndTime;

    /**
     * @var integer 自动续费标志 0:不自动续费，1:自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 私有网络唯一ID
     */
    public $VpcId;

    /**
     * @var string 子网唯一ID
     */
    public $SubnetId;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var string 设备类型，取值有: compute(计算型), standard(标准型), storage(存储型) 等
     */
    public $DeviceType;

    /**
     * @var integer 竞价实例机器的过滤。如果未指定此参数，则不做过滤。0: 查询非竞价实例的机器; 1: 查询竞价实例的机器。
     */
    public $IsLuckyDevice;

    /**
     * @var string 排序字段
     */
    public $OrderField;

    /**
     * @var integer 排序方式，取值：0:增序(默认)，1:降序
     */
    public $Order;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回数量
     * @param string $DeviceClassCode 机型ID，通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询
     * @param array $InstanceIds 设备ID数组
     * @param array $WanIps 外网IP数组
     * @param array $LanIps 内网IP数组
     * @param string $Alias 设备名称
     * @param string $VagueIp 模糊IP查询
     * @param string $DeadlineStartTime 设备到期时间查询的起始时间
     * @param string $DeadlineEndTime 设备到期时间查询的结束时间
     * @param integer $AutoRenewFlag 自动续费标志 0:不自动续费，1:自动续费
     * @param string $VpcId 私有网络唯一ID
     * @param string $SubnetId 子网唯一ID
     * @param array $Tags 标签列表
     * @param string $DeviceType 设备类型，取值有: compute(计算型), standard(标准型), storage(存储型) 等
     * @param integer $IsLuckyDevice 竞价实例机器的过滤。如果未指定此参数，则不做过滤。0: 查询非竞价实例的机器; 1: 查询竞价实例的机器。
     * @param string $OrderField 排序字段
     * @param integer $Order 排序方式，取值：0:增序(默认)，1:降序
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("WanIps",$param) and $param["WanIps"] !== null) {
            $this->WanIps = $param["WanIps"];
        }

        if (array_key_exists("LanIps",$param) and $param["LanIps"] !== null) {
            $this->LanIps = $param["LanIps"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("VagueIp",$param) and $param["VagueIp"] !== null) {
            $this->VagueIp = $param["VagueIp"];
        }

        if (array_key_exists("DeadlineStartTime",$param) and $param["DeadlineStartTime"] !== null) {
            $this->DeadlineStartTime = $param["DeadlineStartTime"];
        }

        if (array_key_exists("DeadlineEndTime",$param) and $param["DeadlineEndTime"] !== null) {
            $this->DeadlineEndTime = $param["DeadlineEndTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("IsLuckyDevice",$param) and $param["IsLuckyDevice"] !== null) {
            $this->IsLuckyDevice = $param["IsLuckyDevice"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
