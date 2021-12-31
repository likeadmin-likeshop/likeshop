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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询kafka的zone信息返回的实体
 *
 * @method array getZoneList() 获取zone列表
 * @method void setZoneList(array $ZoneList) 设置zone列表
 * @method integer getMaxBuyInstanceNum() 获取最大购买实例个数
 * @method void setMaxBuyInstanceNum(integer $MaxBuyInstanceNum) 设置最大购买实例个数
 * @method integer getMaxBandwidth() 获取最大购买带宽 单位Mb/s
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置最大购买带宽 单位Mb/s
 * @method Price getUnitPrice() 获取后付费单位价格
 * @method void setUnitPrice(Price $UnitPrice) 设置后付费单位价格
 * @method Price getMessagePrice() 获取后付费消息单价
 * @method void setMessagePrice(Price $MessagePrice) 设置后付费消息单价
 * @method array getClusterInfo() 获取用户独占集群信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterInfo(array $ClusterInfo) 设置用户独占集群信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStandard() 获取购买标准版配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandard(string $Standard) 设置购买标准版配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStandardS2() 获取购买标准版S2配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardS2(string $StandardS2) 设置购买标准版S2配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProfession() 获取购买专业版配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfession(string $Profession) 设置购买专业版配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhysical() 获取购买物理独占版配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhysical(string $Physical) 设置购买物理独占版配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ZoneResponse extends AbstractModel
{
    /**
     * @var array zone列表
     */
    public $ZoneList;

    /**
     * @var integer 最大购买实例个数
     */
    public $MaxBuyInstanceNum;

    /**
     * @var integer 最大购买带宽 单位Mb/s
     */
    public $MaxBandwidth;

    /**
     * @var Price 后付费单位价格
     */
    public $UnitPrice;

    /**
     * @var Price 后付费消息单价
     */
    public $MessagePrice;

    /**
     * @var array 用户独占集群信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterInfo;

    /**
     * @var string 购买标准版配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Standard;

    /**
     * @var string 购买标准版S2配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardS2;

    /**
     * @var string 购买专业版配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Profession;

    /**
     * @var string 购买物理独占版配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Physical;

    /**
     * @param array $ZoneList zone列表
     * @param integer $MaxBuyInstanceNum 最大购买实例个数
     * @param integer $MaxBandwidth 最大购买带宽 单位Mb/s
     * @param Price $UnitPrice 后付费单位价格
     * @param Price $MessagePrice 后付费消息单价
     * @param array $ClusterInfo 用户独占集群信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Standard 购买标准版配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StandardS2 购买标准版S2配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Profession 购买专业版配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Physical 购买物理独占版配置
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
        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = [];
            foreach ($param["ZoneList"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->ZoneList, $obj);
            }
        }

        if (array_key_exists("MaxBuyInstanceNum",$param) and $param["MaxBuyInstanceNum"] !== null) {
            $this->MaxBuyInstanceNum = $param["MaxBuyInstanceNum"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = new Price();
            $this->UnitPrice->deserialize($param["UnitPrice"]);
        }

        if (array_key_exists("MessagePrice",$param) and $param["MessagePrice"] !== null) {
            $this->MessagePrice = new Price();
            $this->MessagePrice->deserialize($param["MessagePrice"]);
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = [];
            foreach ($param["ClusterInfo"] as $key => $value){
                $obj = new ClusterInfo();
                $obj->deserialize($value);
                array_push($this->ClusterInfo, $obj);
            }
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }

        if (array_key_exists("StandardS2",$param) and $param["StandardS2"] !== null) {
            $this->StandardS2 = $param["StandardS2"];
        }

        if (array_key_exists("Profession",$param) and $param["Profession"] !== null) {
            $this->Profession = $param["Profession"];
        }

        if (array_key_exists("Physical",$param) and $param["Physical"] !== null) {
            $this->Physical = $param["Physical"];
        }
    }
}
