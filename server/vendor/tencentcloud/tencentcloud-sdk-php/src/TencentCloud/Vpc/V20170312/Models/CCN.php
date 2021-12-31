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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网（CCN）对象
 *
 * @method string getCcnId() 获取云联网唯一ID
 * @method void setCcnId(string $CcnId) 设置云联网唯一ID
 * @method string getCcnName() 获取云联网名称
 * @method void setCcnName(string $CcnName) 设置云联网名称
 * @method string getCcnDescription() 获取云联网描述信息
 * @method void setCcnDescription(string $CcnDescription) 设置云联网描述信息
 * @method integer getInstanceCount() 获取关联实例数量
 * @method void setInstanceCount(integer $InstanceCount) 设置关联实例数量
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getState() 获取实例状态， 'ISOLATED': 隔离中（欠费停服），'AVAILABLE'：运行中。
 * @method void setState(string $State) 设置实例状态， 'ISOLATED': 隔离中（欠费停服），'AVAILABLE'：运行中。
 * @method string getQosLevel() 获取实例服务质量，’PT’：白金，'AU'：金，'AG'：银。
 * @method void setQosLevel(string $QosLevel) 设置实例服务质量，’PT’：白金，'AU'：金，'AG'：银。
 * @method string getInstanceChargeType() 获取付费类型，PREPAID为预付费，POSTPAID为后付费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置付费类型，PREPAID为预付费，POSTPAID为后付费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBandwidthLimitType() 获取限速类型，INTER_REGION_LIMIT为地域间限速；OUTER_REGION_LIMIT为地域出口限速。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthLimitType(string $BandwidthLimitType) 设置限速类型，INTER_REGION_LIMIT为地域间限速；OUTER_REGION_LIMIT为地域出口限速。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 * @method boolean getRoutePriorityFlag() 获取是否支持云联网路由优先级的功能。False：不支持，True：支持。
 * @method void setRoutePriorityFlag(boolean $RoutePriorityFlag) 设置是否支持云联网路由优先级的功能。False：不支持，True：支持。
 */
class CCN extends AbstractModel
{
    /**
     * @var string 云联网唯一ID
     */
    public $CcnId;

    /**
     * @var string 云联网名称
     */
    public $CcnName;

    /**
     * @var string 云联网描述信息
     */
    public $CcnDescription;

    /**
     * @var integer 关联实例数量
     */
    public $InstanceCount;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例状态， 'ISOLATED': 隔离中（欠费停服），'AVAILABLE'：运行中。
     */
    public $State;

    /**
     * @var string 实例服务质量，’PT’：白金，'AU'：金，'AG'：银。
     */
    public $QosLevel;

    /**
     * @var string 付费类型，PREPAID为预付费，POSTPAID为后付费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceChargeType;

    /**
     * @var string 限速类型，INTER_REGION_LIMIT为地域间限速；OUTER_REGION_LIMIT为地域出口限速。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthLimitType;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @var boolean 是否支持云联网路由优先级的功能。False：不支持，True：支持。
     */
    public $RoutePriorityFlag;

    /**
     * @param string $CcnId 云联网唯一ID
     * @param string $CcnName 云联网名称
     * @param string $CcnDescription 云联网描述信息
     * @param integer $InstanceCount 关联实例数量
     * @param string $CreateTime 创建时间
     * @param string $State 实例状态， 'ISOLATED': 隔离中（欠费停服），'AVAILABLE'：运行中。
     * @param string $QosLevel 实例服务质量，’PT’：白金，'AU'：金，'AG'：银。
     * @param string $InstanceChargeType 付费类型，PREPAID为预付费，POSTPAID为后付费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BandwidthLimitType 限速类型，INTER_REGION_LIMIT为地域间限速；OUTER_REGION_LIMIT为地域出口限速。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet 标签键值对。
     * @param boolean $RoutePriorityFlag 是否支持云联网路由优先级的功能。False：不支持，True：支持。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnName",$param) and $param["CcnName"] !== null) {
            $this->CcnName = $param["CcnName"];
        }

        if (array_key_exists("CcnDescription",$param) and $param["CcnDescription"] !== null) {
            $this->CcnDescription = $param["CcnDescription"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("BandwidthLimitType",$param) and $param["BandwidthLimitType"] !== null) {
            $this->BandwidthLimitType = $param["BandwidthLimitType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("RoutePriorityFlag",$param) and $param["RoutePriorityFlag"] !== null) {
            $this->RoutePriorityFlag = $param["RoutePriorityFlag"];
        }
    }
}
