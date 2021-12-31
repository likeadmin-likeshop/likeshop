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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS高级策略
 *
 * @method array getResources() 获取策略绑定的资源
 * @method void setResources(array $Resources) 设置策略绑定的资源
 * @method DDoSPolicyDropOption getDropOptions() 获取禁用协议
 * @method void setDropOptions(DDoSPolicyDropOption $DropOptions) 设置禁用协议
 * @method array getPortLimits() 获取禁用端口
 * @method void setPortLimits(array $PortLimits) 设置禁用端口
 * @method array getPacketFilters() 获取报文过滤
 * @method void setPacketFilters(array $PacketFilters) 设置报文过滤
 * @method array getIpBlackWhiteLists() 获取黑白IP名单
 * @method void setIpBlackWhiteLists(array $IpBlackWhiteLists) 设置黑白IP名单
 * @method string getPolicyId() 获取策略ID
 * @method void setPolicyId(string $PolicyId) 设置策略ID
 * @method string getPolicyName() 获取策略名称
 * @method void setPolicyName(string $PolicyName) 设置策略名称
 * @method string getCreateTime() 获取策略创建时间
 * @method void setCreateTime(string $CreateTime) 设置策略创建时间
 * @method array getWaterPrint() 获取水印策略参数，最多只有一个，当没有水印策略时数组为空
 * @method void setWaterPrint(array $WaterPrint) 设置水印策略参数，最多只有一个，当没有水印策略时数组为空
 * @method array getWaterKey() 获取水印密钥，最多只有2个，当没有水印策略时数组为空
 * @method void setWaterKey(array $WaterKey) 设置水印密钥，最多只有2个，当没有水印策略时数组为空
 * @method array getBoundResources() 获取策略绑定的资源实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBoundResources(array $BoundResources) 设置策略绑定的资源实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSceneId() 获取策略所属的策略场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneId(string $SceneId) 设置策略所属的策略场景
注意：此字段可能返回 null，表示取不到有效值。
 */
class DDosPolicy extends AbstractModel
{
    /**
     * @var array 策略绑定的资源
     */
    public $Resources;

    /**
     * @var DDoSPolicyDropOption 禁用协议
     */
    public $DropOptions;

    /**
     * @var array 禁用端口
     */
    public $PortLimits;

    /**
     * @var array 报文过滤
     */
    public $PacketFilters;

    /**
     * @var array 黑白IP名单
     */
    public $IpBlackWhiteLists;

    /**
     * @var string 策略ID
     */
    public $PolicyId;

    /**
     * @var string 策略名称
     */
    public $PolicyName;

    /**
     * @var string 策略创建时间
     */
    public $CreateTime;

    /**
     * @var array 水印策略参数，最多只有一个，当没有水印策略时数组为空
     */
    public $WaterPrint;

    /**
     * @var array 水印密钥，最多只有2个，当没有水印策略时数组为空
     */
    public $WaterKey;

    /**
     * @var array 策略绑定的资源实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BoundResources;

    /**
     * @var string 策略所属的策略场景
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneId;

    /**
     * @param array $Resources 策略绑定的资源
     * @param DDoSPolicyDropOption $DropOptions 禁用协议
     * @param array $PortLimits 禁用端口
     * @param array $PacketFilters 报文过滤
     * @param array $IpBlackWhiteLists 黑白IP名单
     * @param string $PolicyId 策略ID
     * @param string $PolicyName 策略名称
     * @param string $CreateTime 策略创建时间
     * @param array $WaterPrint 水印策略参数，最多只有一个，当没有水印策略时数组为空
     * @param array $WaterKey 水印密钥，最多只有2个，当没有水印策略时数组为空
     * @param array $BoundResources 策略绑定的资源实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SceneId 策略所属的策略场景
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
        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceIp();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("DropOptions",$param) and $param["DropOptions"] !== null) {
            $this->DropOptions = new DDoSPolicyDropOption();
            $this->DropOptions->deserialize($param["DropOptions"]);
        }

        if (array_key_exists("PortLimits",$param) and $param["PortLimits"] !== null) {
            $this->PortLimits = [];
            foreach ($param["PortLimits"] as $key => $value){
                $obj = new DDoSPolicyPortLimit();
                $obj->deserialize($value);
                array_push($this->PortLimits, $obj);
            }
        }

        if (array_key_exists("PacketFilters",$param) and $param["PacketFilters"] !== null) {
            $this->PacketFilters = [];
            foreach ($param["PacketFilters"] as $key => $value){
                $obj = new DDoSPolicyPacketFilter();
                $obj->deserialize($value);
                array_push($this->PacketFilters, $obj);
            }
        }

        if (array_key_exists("IpBlackWhiteLists",$param) and $param["IpBlackWhiteLists"] !== null) {
            $this->IpBlackWhiteLists = [];
            foreach ($param["IpBlackWhiteLists"] as $key => $value){
                $obj = new IpBlackWhite();
                $obj->deserialize($value);
                array_push($this->IpBlackWhiteLists, $obj);
            }
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("WaterPrint",$param) and $param["WaterPrint"] !== null) {
            $this->WaterPrint = [];
            foreach ($param["WaterPrint"] as $key => $value){
                $obj = new WaterPrintPolicy();
                $obj->deserialize($value);
                array_push($this->WaterPrint, $obj);
            }
        }

        if (array_key_exists("WaterKey",$param) and $param["WaterKey"] !== null) {
            $this->WaterKey = [];
            foreach ($param["WaterKey"] as $key => $value){
                $obj = new WaterPrintKey();
                $obj->deserialize($value);
                array_push($this->WaterKey, $obj);
            }
        }

        if (array_key_exists("BoundResources",$param) and $param["BoundResources"] !== null) {
            $this->BoundResources = $param["BoundResources"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }
    }
}
