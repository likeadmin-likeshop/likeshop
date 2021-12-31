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
 * DescribeDBPrice请求参数结构体
 *
 * @method integer getPeriod() 获取实例时长，单位：月，最小值 1，最大值为 36；查询按量计费价格时，该字段无效。
 * @method void setPeriod(integer $Period) 设置实例时长，单位：月，最小值 1，最大值为 36；查询按量计费价格时，该字段无效。
 * @method string getZone() 获取可用区信息，格式如 "ap-guangzhou-2"。具体能设置的值请通过 <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> 接口查询。InstanceId为空时该参数为必填项。
 * @method void setZone(string $Zone) 设置可用区信息，格式如 "ap-guangzhou-2"。具体能设置的值请通过 <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> 接口查询。InstanceId为空时该参数为必填项。
 * @method integer getGoodsNum() 获取实例数量，默认值为 1，最小值 1，最大值为 100。InstanceId为空时该参数为必填项。
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，默认值为 1，最小值 1，最大值为 100。InstanceId为空时该参数为必填项。
 * @method integer getMemory() 获取实例内存大小，单位：MB。InstanceId为空时该参数为必填项。
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：MB。InstanceId为空时该参数为必填项。
 * @method integer getVolume() 获取实例硬盘大小，单位：GB。InstanceId为空时该参数为必填项。
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB。InstanceId为空时该参数为必填项。
 * @method string getInstanceRole() 获取实例类型，默认为 master，支持值包括：master - 表示主实例，ro - 表示只读实例，dr - 表示灾备实例。InstanceId为空时该参数为必填项。
 * @method void setInstanceRole(string $InstanceRole) 设置实例类型，默认为 master，支持值包括：master - 表示主实例，ro - 表示只读实例，dr - 表示灾备实例。InstanceId为空时该参数为必填项。
 * @method string getPayType() 获取付费类型，支持值包括：PRE_PAID - 包年包月，HOUR_PAID - 按量计费。InstanceId为空时该参数为必填项。
 * @method void setPayType(string $PayType) 设置付费类型，支持值包括：PRE_PAID - 包年包月，HOUR_PAID - 按量计费。InstanceId为空时该参数为必填项。
 * @method integer getProtectMode() 获取数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
 * @method void setProtectMode(integer $ProtectMode) 设置数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
 * @method string getDeviceType() 获取实例隔离类型。支持值包括： "UNIVERSAL" - 通用型实例， "EXCLUSIVE" - 独享型实例， "BASIC" - 基础版实例。 不指定则默认为通用型实例。
 * @method void setDeviceType(string $DeviceType) 设置实例隔离类型。支持值包括： "UNIVERSAL" - 通用型实例， "EXCLUSIVE" - 独享型实例， "BASIC" - 基础版实例。 不指定则默认为通用型实例。
 * @method integer getInstanceNodes() 获取实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要询价三节点实例， 请将该值设置为3。其余主实例该值默认为2。
 * @method void setInstanceNodes(integer $InstanceNodes) 设置实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要询价三节点实例， 请将该值设置为3。其余主实例该值默认为2。
 * @method integer getCpu() 获取询价实例的CPU核心数目，单位：核，为保证传入 CPU 值有效，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/product/236/17229) 接口获取可售卖的核心数目，当未指定该值时，将按照 Memory 大小补全一个默认值。
 * @method void setCpu(integer $Cpu) 设置询价实例的CPU核心数目，单位：核，为保证传入 CPU 值有效，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/product/236/17229) 接口获取可售卖的核心数目，当未指定该值时，将按照 Memory 大小补全一个默认值。
 * @method string getInstanceId() 获取续费询价实例ID。如需查询实例续费价格，填写InstanceId和Period即可。
 * @method void setInstanceId(string $InstanceId) 设置续费询价实例ID。如需查询实例续费价格，填写InstanceId和Period即可。
 */
class DescribeDBPriceRequest extends AbstractModel
{
    /**
     * @var integer 实例时长，单位：月，最小值 1，最大值为 36；查询按量计费价格时，该字段无效。
     */
    public $Period;

    /**
     * @var string 可用区信息，格式如 "ap-guangzhou-2"。具体能设置的值请通过 <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> 接口查询。InstanceId为空时该参数为必填项。
     */
    public $Zone;

    /**
     * @var integer 实例数量，默认值为 1，最小值 1，最大值为 100。InstanceId为空时该参数为必填项。
     */
    public $GoodsNum;

    /**
     * @var integer 实例内存大小，单位：MB。InstanceId为空时该参数为必填项。
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB。InstanceId为空时该参数为必填项。
     */
    public $Volume;

    /**
     * @var string 实例类型，默认为 master，支持值包括：master - 表示主实例，ro - 表示只读实例，dr - 表示灾备实例。InstanceId为空时该参数为必填项。
     */
    public $InstanceRole;

    /**
     * @var string 付费类型，支持值包括：PRE_PAID - 包年包月，HOUR_PAID - 按量计费。InstanceId为空时该参数为必填项。
     */
    public $PayType;

    /**
     * @var integer 数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
     */
    public $ProtectMode;

    /**
     * @var string 实例隔离类型。支持值包括： "UNIVERSAL" - 通用型实例， "EXCLUSIVE" - 独享型实例， "BASIC" - 基础版实例。 不指定则默认为通用型实例。
     */
    public $DeviceType;

    /**
     * @var integer 实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要询价三节点实例， 请将该值设置为3。其余主实例该值默认为2。
     */
    public $InstanceNodes;

    /**
     * @var integer 询价实例的CPU核心数目，单位：核，为保证传入 CPU 值有效，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/product/236/17229) 接口获取可售卖的核心数目，当未指定该值时，将按照 Memory 大小补全一个默认值。
     */
    public $Cpu;

    /**
     * @var string 续费询价实例ID。如需查询实例续费价格，填写InstanceId和Period即可。
     */
    public $InstanceId;

    /**
     * @param integer $Period 实例时长，单位：月，最小值 1，最大值为 36；查询按量计费价格时，该字段无效。
     * @param string $Zone 可用区信息，格式如 "ap-guangzhou-2"。具体能设置的值请通过 <a href="https://cloud.tencent.com/document/api/236/17229">DescribeDBZoneConfig</a> 接口查询。InstanceId为空时该参数为必填项。
     * @param integer $GoodsNum 实例数量，默认值为 1，最小值 1，最大值为 100。InstanceId为空时该参数为必填项。
     * @param integer $Memory 实例内存大小，单位：MB。InstanceId为空时该参数为必填项。
     * @param integer $Volume 实例硬盘大小，单位：GB。InstanceId为空时该参数为必填项。
     * @param string $InstanceRole 实例类型，默认为 master，支持值包括：master - 表示主实例，ro - 表示只读实例，dr - 表示灾备实例。InstanceId为空时该参数为必填项。
     * @param string $PayType 付费类型，支持值包括：PRE_PAID - 包年包月，HOUR_PAID - 按量计费。InstanceId为空时该参数为必填项。
     * @param integer $ProtectMode 数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
     * @param string $DeviceType 实例隔离类型。支持值包括： "UNIVERSAL" - 通用型实例， "EXCLUSIVE" - 独享型实例， "BASIC" - 基础版实例。 不指定则默认为通用型实例。
     * @param integer $InstanceNodes 实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要询价三节点实例， 请将该值设置为3。其余主实例该值默认为2。
     * @param integer $Cpu 询价实例的CPU核心数目，单位：核，为保证传入 CPU 值有效，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/product/236/17229) 接口获取可售卖的核心数目，当未指定该值时，将按照 Memory 大小补全一个默认值。
     * @param string $InstanceId 续费询价实例ID。如需查询实例续费价格，填写InstanceId和Period即可。
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
