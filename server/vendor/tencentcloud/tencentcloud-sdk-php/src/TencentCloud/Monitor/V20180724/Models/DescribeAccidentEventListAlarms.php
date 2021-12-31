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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccidentEventList接口的出参类型
 *
 * @method string getBusinessTypeDesc() 获取事件分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessTypeDesc(string $BusinessTypeDesc) 设置事件分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccidentTypeDesc() 获取事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccidentTypeDesc(string $AccidentTypeDesc) 设置事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBusinessID() 获取事件分类的ID，1表示服务问题，2表示其他订阅
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessID(integer $BusinessID) 设置事件分类的ID，1表示服务问题，2表示其他订阅
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventStatus() 获取事件状态的ID，0表示已恢复，1表示未恢复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventStatus(integer $EventStatus) 设置事件状态的ID，0表示已恢复，1表示未恢复
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAffectResource() 获取影响的对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectResource(string $AffectResource) 设置影响的对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取事件的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置事件的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOccurTime() 获取事件发生的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOccurTime(string $OccurTime) 设置事件发生的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAccidentEventListAlarms extends AbstractModel
{
    /**
     * @var string 事件分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessTypeDesc;

    /**
     * @var string 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccidentTypeDesc;

    /**
     * @var integer 事件分类的ID，1表示服务问题，2表示其他订阅
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessID;

    /**
     * @var integer 事件状态的ID，0表示已恢复，1表示未恢复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventStatus;

    /**
     * @var string 影响的对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectResource;

    /**
     * @var string 事件的地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 事件发生的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OccurTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $BusinessTypeDesc 事件分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccidentTypeDesc 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BusinessID 事件分类的ID，1表示服务问题，2表示其他订阅
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventStatus 事件状态的ID，0表示已恢复，1表示未恢复
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AffectResource 影响的对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 事件的地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OccurTime 事件发生的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("BusinessTypeDesc",$param) and $param["BusinessTypeDesc"] !== null) {
            $this->BusinessTypeDesc = $param["BusinessTypeDesc"];
        }

        if (array_key_exists("AccidentTypeDesc",$param) and $param["AccidentTypeDesc"] !== null) {
            $this->AccidentTypeDesc = $param["AccidentTypeDesc"];
        }

        if (array_key_exists("BusinessID",$param) and $param["BusinessID"] !== null) {
            $this->BusinessID = $param["BusinessID"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("AffectResource",$param) and $param["AffectResource"] !== null) {
            $this->AffectResource = $param["AffectResource"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("OccurTime",$param) and $param["OccurTime"] !== null) {
            $this->OccurTime = $param["OccurTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
