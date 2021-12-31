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
 * 可用区售卖配置
 *
 * @method integer getStatus() 获取可用区状态。可能的返回值为：0-未上线；1-上线；2-开放；3-停售；4-不展示
 * @method void setStatus(integer $Status) 设置可用区状态。可能的返回值为：0-未上线；1-上线；2-开放；3-停售；4-不展示
 * @method string getZoneName() 获取可用区中文名称
 * @method void setZoneName(string $ZoneName) 设置可用区中文名称
 * @method boolean getIsCustom() 获取实例类型是否为自定义类型
 * @method void setIsCustom(boolean $IsCustom) 设置实例类型是否为自定义类型
 * @method boolean getIsSupportDr() 获取是否支持灾备
 * @method void setIsSupportDr(boolean $IsSupportDr) 设置是否支持灾备
 * @method boolean getIsSupportVpc() 获取是否支持私有网络
 * @method void setIsSupportVpc(boolean $IsSupportVpc) 设置是否支持私有网络
 * @method integer getHourInstanceSaleMaxNum() 获取小时计费实例最大售卖数量
 * @method void setHourInstanceSaleMaxNum(integer $HourInstanceSaleMaxNum) 设置小时计费实例最大售卖数量
 * @method boolean getIsDefaultZone() 获取是否为默认可用区
 * @method void setIsDefaultZone(boolean $IsDefaultZone) 设置是否为默认可用区
 * @method boolean getIsBm() 获取是否为黑石区
 * @method void setIsBm(boolean $IsBm) 设置是否为黑石区
 * @method array getPayType() 获取支持的付费类型。可能的返回值为：0-包年包月；1-小时计费；2-后付费
 * @method void setPayType(array $PayType) 设置支持的付费类型。可能的返回值为：0-包年包月；1-小时计费；2-后付费
 * @method array getProtectMode() 获取数据复制类型。0-异步复制；1-半同步复制；2-强同步复制
 * @method void setProtectMode(array $ProtectMode) 设置数据复制类型。0-异步复制；1-半同步复制；2-强同步复制
 * @method string getZone() 获取可用区名称
 * @method void setZone(string $Zone) 设置可用区名称
 * @method array getSellType() 获取售卖实例类型数组
 * @method void setSellType(array $SellType) 设置售卖实例类型数组
 * @method ZoneConf getZoneConf() 获取多可用区信息
 * @method void setZoneConf(ZoneConf $ZoneConf) 设置多可用区信息
 * @method array getDrZone() 获取可支持的灾备可用区信息
 * @method void setDrZone(array $DrZone) 设置可支持的灾备可用区信息
 * @method boolean getIsSupportRemoteRo() 获取是否支持跨可用区只读
 * @method void setIsSupportRemoteRo(boolean $IsSupportRemoteRo) 设置是否支持跨可用区只读
 * @method array getRemoteRoZone() 获取可支持的跨可用区只读区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteRoZone(array $RemoteRoZone) 设置可支持的跨可用区只读区信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ZoneSellConf extends AbstractModel
{
    /**
     * @var integer 可用区状态。可能的返回值为：0-未上线；1-上线；2-开放；3-停售；4-不展示
     */
    public $Status;

    /**
     * @var string 可用区中文名称
     */
    public $ZoneName;

    /**
     * @var boolean 实例类型是否为自定义类型
     */
    public $IsCustom;

    /**
     * @var boolean 是否支持灾备
     */
    public $IsSupportDr;

    /**
     * @var boolean 是否支持私有网络
     */
    public $IsSupportVpc;

    /**
     * @var integer 小时计费实例最大售卖数量
     */
    public $HourInstanceSaleMaxNum;

    /**
     * @var boolean 是否为默认可用区
     */
    public $IsDefaultZone;

    /**
     * @var boolean 是否为黑石区
     */
    public $IsBm;

    /**
     * @var array 支持的付费类型。可能的返回值为：0-包年包月；1-小时计费；2-后付费
     */
    public $PayType;

    /**
     * @var array 数据复制类型。0-异步复制；1-半同步复制；2-强同步复制
     */
    public $ProtectMode;

    /**
     * @var string 可用区名称
     */
    public $Zone;

    /**
     * @var array 售卖实例类型数组
     */
    public $SellType;

    /**
     * @var ZoneConf 多可用区信息
     */
    public $ZoneConf;

    /**
     * @var array 可支持的灾备可用区信息
     */
    public $DrZone;

    /**
     * @var boolean 是否支持跨可用区只读
     */
    public $IsSupportRemoteRo;

    /**
     * @var array 可支持的跨可用区只读区信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteRoZone;

    /**
     * @param integer $Status 可用区状态。可能的返回值为：0-未上线；1-上线；2-开放；3-停售；4-不展示
     * @param string $ZoneName 可用区中文名称
     * @param boolean $IsCustom 实例类型是否为自定义类型
     * @param boolean $IsSupportDr 是否支持灾备
     * @param boolean $IsSupportVpc 是否支持私有网络
     * @param integer $HourInstanceSaleMaxNum 小时计费实例最大售卖数量
     * @param boolean $IsDefaultZone 是否为默认可用区
     * @param boolean $IsBm 是否为黑石区
     * @param array $PayType 支持的付费类型。可能的返回值为：0-包年包月；1-小时计费；2-后付费
     * @param array $ProtectMode 数据复制类型。0-异步复制；1-半同步复制；2-强同步复制
     * @param string $Zone 可用区名称
     * @param array $SellType 售卖实例类型数组
     * @param ZoneConf $ZoneConf 多可用区信息
     * @param array $DrZone 可支持的灾备可用区信息
     * @param boolean $IsSupportRemoteRo 是否支持跨可用区只读
     * @param array $RemoteRoZone 可支持的跨可用区只读区信息
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("IsCustom",$param) and $param["IsCustom"] !== null) {
            $this->IsCustom = $param["IsCustom"];
        }

        if (array_key_exists("IsSupportDr",$param) and $param["IsSupportDr"] !== null) {
            $this->IsSupportDr = $param["IsSupportDr"];
        }

        if (array_key_exists("IsSupportVpc",$param) and $param["IsSupportVpc"] !== null) {
            $this->IsSupportVpc = $param["IsSupportVpc"];
        }

        if (array_key_exists("HourInstanceSaleMaxNum",$param) and $param["HourInstanceSaleMaxNum"] !== null) {
            $this->HourInstanceSaleMaxNum = $param["HourInstanceSaleMaxNum"];
        }

        if (array_key_exists("IsDefaultZone",$param) and $param["IsDefaultZone"] !== null) {
            $this->IsDefaultZone = $param["IsDefaultZone"];
        }

        if (array_key_exists("IsBm",$param) and $param["IsBm"] !== null) {
            $this->IsBm = $param["IsBm"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SellType",$param) and $param["SellType"] !== null) {
            $this->SellType = [];
            foreach ($param["SellType"] as $key => $value){
                $obj = new SellType();
                $obj->deserialize($value);
                array_push($this->SellType, $obj);
            }
        }

        if (array_key_exists("ZoneConf",$param) and $param["ZoneConf"] !== null) {
            $this->ZoneConf = new ZoneConf();
            $this->ZoneConf->deserialize($param["ZoneConf"]);
        }

        if (array_key_exists("DrZone",$param) and $param["DrZone"] !== null) {
            $this->DrZone = $param["DrZone"];
        }

        if (array_key_exists("IsSupportRemoteRo",$param) and $param["IsSupportRemoteRo"] !== null) {
            $this->IsSupportRemoteRo = $param["IsSupportRemoteRo"];
        }

        if (array_key_exists("RemoteRoZone",$param) and $param["RemoteRoZone"] !== null) {
            $this->RemoteRoZone = $param["RemoteRoZone"];
        }
    }
}
