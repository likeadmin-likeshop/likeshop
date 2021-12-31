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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产测绘对象
 *
 * @method string getAssetIp() 获取资产主IP地址(公网IP)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetIp(string $AssetIp) 设置资产主IP地址(公网IP)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstid() 获取资产ID(各模块间通用)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstid(string $Instid) 设置资产ID(各模块间通用)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetRegionEn() 获取资产可用区(英文)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetRegionEn(string $AssetRegionEn) 设置资产可用区(英文)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetRegionCn() 获取资产可用区(中文)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetRegionCn(string $AssetRegionCn) 设置资产可用区(中文)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetNetwork() 获取资产所属网络
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetNetwork(string $AssetNetwork) 设置资产所属网络
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetStatusEn() 获取资产运行状态(英文)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetStatusEn(string $AssetStatusEn) 设置资产运行状态(英文)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetStatusCn() 获取资产运行状态(中文)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetStatusCn(string $AssetStatusCn) 设置资产运行状态(中文)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsWhite() 获取是否白名单：“True”为白名单不测绘，默认“False”正常测绘
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWhite(string $IsWhite) 设置是否白名单：“True”为白名单不测绘，默认“False”正常测绘
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取资产测绘状态(“unstart”未开始/“running”测绘中/“finish”已完成/“abandoned”任务中止)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置资产测绘状态(“unstart”未开始/“running”测绘中/“finish”已完成/“abandoned”任务中止)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTag() 获取资产标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置资产标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroup() 获取资产组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroup(array $Group) 设置资产组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取端口和服务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口和服务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComponent() 获取组件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponent(string $Component) 设置组件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetInstanceType() 获取资产实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetInstanceType(string $AssetInstanceType) 设置资产实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsIntranet() 获取资产是否是内网类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIntranet(integer $IsIntranet) 设置资产是否是内网类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataAssetMapping extends AbstractModel
{
    /**
     * @var string 资产主IP地址(公网IP)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetIp;

    /**
     * @var string 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string 资产ID(各模块间通用)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Instid;

    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var string 资产可用区(英文)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetRegionEn;

    /**
     * @var string 资产可用区(中文)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetRegionCn;

    /**
     * @var string 资产所属网络
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetNetwork;

    /**
     * @var string 资产运行状态(英文)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetStatusEn;

    /**
     * @var string 资产运行状态(中文)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetStatusCn;

    /**
     * @var string 是否白名单：“True”为白名单不测绘，默认“False”正常测绘
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWhite;

    /**
     * @var string 资产测绘状态(“unstart”未开始/“running”测绘中/“finish”已完成/“abandoned”任务中止)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var array 资产标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var array 资产组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Group;

    /**
     * @var string 端口和服务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 组件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Component;

    /**
     * @var string 资产实例类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetInstanceType;

    /**
     * @var integer 资产是否是内网类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIntranet;

    /**
     * @param string $AssetIp 资产主IP地址(公网IP)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Instid 资产ID(各模块间通用)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetRegionEn 资产可用区(英文)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetRegionCn 资产可用区(中文)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetNetwork 资产所属网络
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetStatusEn 资产运行状态(英文)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetStatusCn 资产运行状态(中文)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsWhite 是否白名单：“True”为白名单不测绘，默认“False”正常测绘
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 资产测绘状态(“unstart”未开始/“running”测绘中/“finish”已完成/“abandoned”任务中止)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tag 资产标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Group 资产组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 端口和服务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Component 组件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetInstanceType 资产实例类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsIntranet 资产是否是内网类型
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
        if (array_key_exists("AssetIp",$param) and $param["AssetIp"] !== null) {
            $this->AssetIp = $param["AssetIp"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("Instid",$param) and $param["Instid"] !== null) {
            $this->Instid = $param["Instid"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetRegionEn",$param) and $param["AssetRegionEn"] !== null) {
            $this->AssetRegionEn = $param["AssetRegionEn"];
        }

        if (array_key_exists("AssetRegionCn",$param) and $param["AssetRegionCn"] !== null) {
            $this->AssetRegionCn = $param["AssetRegionCn"];
        }

        if (array_key_exists("AssetNetwork",$param) and $param["AssetNetwork"] !== null) {
            $this->AssetNetwork = $param["AssetNetwork"];
        }

        if (array_key_exists("AssetStatusEn",$param) and $param["AssetStatusEn"] !== null) {
            $this->AssetStatusEn = $param["AssetStatusEn"];
        }

        if (array_key_exists("AssetStatusCn",$param) and $param["AssetStatusCn"] !== null) {
            $this->AssetStatusCn = $param["AssetStatusCn"];
        }

        if (array_key_exists("IsWhite",$param) and $param["IsWhite"] !== null) {
            $this->IsWhite = $param["IsWhite"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("AssetInstanceType",$param) and $param["AssetInstanceType"] !== null) {
            $this->AssetInstanceType = $param["AssetInstanceType"];
        }

        if (array_key_exists("IsIntranet",$param) and $param["IsIntranet"] !== null) {
            $this->IsIntranet = $param["IsIntranet"];
        }
    }
}
