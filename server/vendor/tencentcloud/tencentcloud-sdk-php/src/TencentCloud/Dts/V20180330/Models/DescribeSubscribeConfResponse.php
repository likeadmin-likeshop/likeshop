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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscribeConf返回参数结构体
 *
 * @method string getSubscribeId() 获取订阅实例ID
 * @method void setSubscribeId(string $SubscribeId) 设置订阅实例ID
 * @method string getSubscribeName() 获取订阅实例名称
 * @method void setSubscribeName(string $SubscribeName) 设置订阅实例名称
 * @method string getChannelId() 获取订阅通道
 * @method void setChannelId(string $ChannelId) 设置订阅通道
 * @method string getProduct() 获取订阅数据库类型
 * @method void setProduct(string $Product) 设置订阅数据库类型
 * @method string getInstanceId() 获取被订阅的实例
 * @method void setInstanceId(string $InstanceId) 设置被订阅的实例
 * @method string getInstanceStatus() 获取被订阅的实例的状态，可能的值有running,offline,isolate
 * @method void setInstanceStatus(string $InstanceStatus) 设置被订阅的实例的状态，可能的值有running,offline,isolate
 * @method string getSubsStatus() 获取订阅实例状态，可能的值有unconfigure-未配置，configuring-配置中，configured-已配置
 * @method void setSubsStatus(string $SubsStatus) 设置订阅实例状态，可能的值有unconfigure-未配置，configuring-配置中，configured-已配置
 * @method string getStatus() 获取订阅实例生命周期状态，可能的值有：normal-正常，isolating-隔离中，isolated-已隔离，offlining-下线中
 * @method void setStatus(string $Status) 设置订阅实例生命周期状态，可能的值有：normal-正常，isolating-隔离中，isolated-已隔离，offlining-下线中
 * @method string getCreateTime() 获取订阅实例创建时间
 * @method void setCreateTime(string $CreateTime) 设置订阅实例创建时间
 * @method string getIsolateTime() 获取订阅实例被隔离时间
 * @method void setIsolateTime(string $IsolateTime) 设置订阅实例被隔离时间
 * @method string getExpireTime() 获取订阅实例到期时间
 * @method void setExpireTime(string $ExpireTime) 设置订阅实例到期时间
 * @method string getOfflineTime() 获取订阅实例下线时间
 * @method void setOfflineTime(string $OfflineTime) 设置订阅实例下线时间
 * @method string getConsumeStartTime() 获取订阅实例消费时间起点。
 * @method void setConsumeStartTime(string $ConsumeStartTime) 设置订阅实例消费时间起点。
 * @method integer getPayType() 获取订阅实例计费类型，1-小时计费，0-包年包月
 * @method void setPayType(integer $PayType) 设置订阅实例计费类型，1-小时计费，0-包年包月
 * @method string getVip() 获取订阅通道Vip
 * @method void setVip(string $Vip) 设置订阅通道Vip
 * @method integer getVport() 获取订阅通道Port
 * @method void setVport(integer $Vport) 设置订阅通道Port
 * @method string getUniqVpcId() 获取订阅通道所在VpcId
 * @method void setUniqVpcId(string $UniqVpcId) 设置订阅通道所在VpcId
 * @method string getUniqSubnetId() 获取订阅通道所在SubnetId
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置订阅通道所在SubnetId
 * @method string getSdkConsumedTime() 获取当前SDK消费时间位点
 * @method void setSdkConsumedTime(string $SdkConsumedTime) 设置当前SDK消费时间位点
 * @method string getSdkHost() 获取订阅SDK IP地址
 * @method void setSdkHost(string $SdkHost) 设置订阅SDK IP地址
 * @method integer getSubscribeObjectType() 获取订阅对象类型0-全实例订阅，1-DDL数据订阅，2-DML结构订阅，3-DDL数据订阅+DML结构订阅
 * @method void setSubscribeObjectType(integer $SubscribeObjectType) 设置订阅对象类型0-全实例订阅，1-DDL数据订阅，2-DML结构订阅，3-DDL数据订阅+DML结构订阅
 * @method array getSubscribeObjects() 获取订阅对象，当SubscribeObjectType 为0时，此字段为空数组
 * @method void setSubscribeObjects(array $SubscribeObjects) 设置订阅对象，当SubscribeObjectType 为0时，此字段为空数组
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method array getTags() 获取订阅实例的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置订阅实例的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费标识,0-不自动续费，1-自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标识,0-不自动续费，1-自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSubscribeConfResponse extends AbstractModel
{
    /**
     * @var string 订阅实例ID
     */
    public $SubscribeId;

    /**
     * @var string 订阅实例名称
     */
    public $SubscribeName;

    /**
     * @var string 订阅通道
     */
    public $ChannelId;

    /**
     * @var string 订阅数据库类型
     */
    public $Product;

    /**
     * @var string 被订阅的实例
     */
    public $InstanceId;

    /**
     * @var string 被订阅的实例的状态，可能的值有running,offline,isolate
     */
    public $InstanceStatus;

    /**
     * @var string 订阅实例状态，可能的值有unconfigure-未配置，configuring-配置中，configured-已配置
     */
    public $SubsStatus;

    /**
     * @var string 订阅实例生命周期状态，可能的值有：normal-正常，isolating-隔离中，isolated-已隔离，offlining-下线中
     */
    public $Status;

    /**
     * @var string 订阅实例创建时间
     */
    public $CreateTime;

    /**
     * @var string 订阅实例被隔离时间
     */
    public $IsolateTime;

    /**
     * @var string 订阅实例到期时间
     */
    public $ExpireTime;

    /**
     * @var string 订阅实例下线时间
     */
    public $OfflineTime;

    /**
     * @var string 订阅实例消费时间起点。
     */
    public $ConsumeStartTime;

    /**
     * @var integer 订阅实例计费类型，1-小时计费，0-包年包月
     */
    public $PayType;

    /**
     * @var string 订阅通道Vip
     */
    public $Vip;

    /**
     * @var integer 订阅通道Port
     */
    public $Vport;

    /**
     * @var string 订阅通道所在VpcId
     */
    public $UniqVpcId;

    /**
     * @var string 订阅通道所在SubnetId
     */
    public $UniqSubnetId;

    /**
     * @var string 当前SDK消费时间位点
     */
    public $SdkConsumedTime;

    /**
     * @var string 订阅SDK IP地址
     */
    public $SdkHost;

    /**
     * @var integer 订阅对象类型0-全实例订阅，1-DDL数据订阅，2-DML结构订阅，3-DDL数据订阅+DML结构订阅
     */
    public $SubscribeObjectType;

    /**
     * @var array 订阅对象，当SubscribeObjectType 为0时，此字段为空数组
     */
    public $SubscribeObjects;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var array 订阅实例的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 自动续费标识,0-不自动续费，1-自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SubscribeId 订阅实例ID
     * @param string $SubscribeName 订阅实例名称
     * @param string $ChannelId 订阅通道
     * @param string $Product 订阅数据库类型
     * @param string $InstanceId 被订阅的实例
     * @param string $InstanceStatus 被订阅的实例的状态，可能的值有running,offline,isolate
     * @param string $SubsStatus 订阅实例状态，可能的值有unconfigure-未配置，configuring-配置中，configured-已配置
     * @param string $Status 订阅实例生命周期状态，可能的值有：normal-正常，isolating-隔离中，isolated-已隔离，offlining-下线中
     * @param string $CreateTime 订阅实例创建时间
     * @param string $IsolateTime 订阅实例被隔离时间
     * @param string $ExpireTime 订阅实例到期时间
     * @param string $OfflineTime 订阅实例下线时间
     * @param string $ConsumeStartTime 订阅实例消费时间起点。
     * @param integer $PayType 订阅实例计费类型，1-小时计费，0-包年包月
     * @param string $Vip 订阅通道Vip
     * @param integer $Vport 订阅通道Port
     * @param string $UniqVpcId 订阅通道所在VpcId
     * @param string $UniqSubnetId 订阅通道所在SubnetId
     * @param string $SdkConsumedTime 当前SDK消费时间位点
     * @param string $SdkHost 订阅SDK IP地址
     * @param integer $SubscribeObjectType 订阅对象类型0-全实例订阅，1-DDL数据订阅，2-DML结构订阅，3-DDL数据订阅+DML结构订阅
     * @param array $SubscribeObjects 订阅对象，当SubscribeObjectType 为0时，此字段为空数组
     * @param string $ModifyTime 修改时间
     * @param string $Region 地域
     * @param array $Tags 订阅实例的标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费标识,0-不自动续费，1-自动续费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeName",$param) and $param["SubscribeName"] !== null) {
            $this->SubscribeName = $param["SubscribeName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SubsStatus",$param) and $param["SubsStatus"] !== null) {
            $this->SubsStatus = $param["SubsStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("ConsumeStartTime",$param) and $param["ConsumeStartTime"] !== null) {
            $this->ConsumeStartTime = $param["ConsumeStartTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("SdkConsumedTime",$param) and $param["SdkConsumedTime"] !== null) {
            $this->SdkConsumedTime = $param["SdkConsumedTime"];
        }

        if (array_key_exists("SdkHost",$param) and $param["SdkHost"] !== null) {
            $this->SdkHost = $param["SdkHost"];
        }

        if (array_key_exists("SubscribeObjectType",$param) and $param["SubscribeObjectType"] !== null) {
            $this->SubscribeObjectType = $param["SubscribeObjectType"];
        }

        if (array_key_exists("SubscribeObjects",$param) and $param["SubscribeObjects"] !== null) {
            $this->SubscribeObjects = [];
            foreach ($param["SubscribeObjects"] as $key => $value){
                $obj = new SubscribeObject();
                $obj->deserialize($value);
                array_push($this->SubscribeObjects, $obj);
            }
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
