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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 伸缩组活动信息
 *
 * @method string getId() 获取伸缩组活动 ID
 * @method void setId(string $Id) 设置伸缩组活动 ID
 * @method string getRsgAsGroupId() 获取关联的伸缩组 ID
 * @method void setRsgAsGroupId(string $RsgAsGroupId) 设置关联的伸缩组 ID
 * @method string getActivityType() 获取活动类型
 * @method void setActivityType(string $ActivityType) 设置活动类型
 * @method string getStatusCode() 获取状态的编码
 * @method void setStatusCode(string $StatusCode) 设置状态的编码
 * @method string getStatusMessage() 获取状态的消息
 * @method void setStatusMessage(string $StatusMessage) 设置状态的消息
 * @method string getCause() 获取活动原因
 * @method void setCause(string $Cause) 设置活动原因
 * @method string getDescription() 获取活动描述
 * @method void setDescription(string $Description) 设置活动描述
 * @method string getStartTime() 获取活动开始时间
 * @method void setStartTime(string $StartTime) 设置活动开始时间
 * @method string getEndTime() 获取活动结束时间
 * @method void setEndTime(string $EndTime) 设置活动结束时间
 * @method string getCreateTime() 获取活动创建时间
 * @method void setCreateTime(string $CreateTime) 设置活动创建时间
 * @method array getRsgAsActivityRelatedInstance() 获取活动相关联的节点
 * @method void setRsgAsActivityRelatedInstance(array $RsgAsActivityRelatedInstance) 设置活动相关联的节点
 * @method string getStatusMessageSimplified() 获取简略的状态消息
 * @method void setStatusMessageSimplified(string $StatusMessageSimplified) 设置简略的状态消息
 */
class RsgAsGroupActivity extends AbstractModel
{
    /**
     * @var string 伸缩组活动 ID
     */
    public $Id;

    /**
     * @var string 关联的伸缩组 ID
     */
    public $RsgAsGroupId;

    /**
     * @var string 活动类型
     */
    public $ActivityType;

    /**
     * @var string 状态的编码
     */
    public $StatusCode;

    /**
     * @var string 状态的消息
     */
    public $StatusMessage;

    /**
     * @var string 活动原因
     */
    public $Cause;

    /**
     * @var string 活动描述
     */
    public $Description;

    /**
     * @var string 活动开始时间
     */
    public $StartTime;

    /**
     * @var string 活动结束时间
     */
    public $EndTime;

    /**
     * @var string 活动创建时间
     */
    public $CreateTime;

    /**
     * @var array 活动相关联的节点
     */
    public $RsgAsActivityRelatedInstance;

    /**
     * @var string 简略的状态消息
     */
    public $StatusMessageSimplified;

    /**
     * @param string $Id 伸缩组活动 ID
     * @param string $RsgAsGroupId 关联的伸缩组 ID
     * @param string $ActivityType 活动类型
     * @param string $StatusCode 状态的编码
     * @param string $StatusMessage 状态的消息
     * @param string $Cause 活动原因
     * @param string $Description 活动描述
     * @param string $StartTime 活动开始时间
     * @param string $EndTime 活动结束时间
     * @param string $CreateTime 活动创建时间
     * @param array $RsgAsActivityRelatedInstance 活动相关联的节点
     * @param string $StatusMessageSimplified 简略的状态消息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RsgAsGroupId",$param) and $param["RsgAsGroupId"] !== null) {
            $this->RsgAsGroupId = $param["RsgAsGroupId"];
        }

        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("Cause",$param) and $param["Cause"] !== null) {
            $this->Cause = $param["Cause"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RsgAsActivityRelatedInstance",$param) and $param["RsgAsActivityRelatedInstance"] !== null) {
            $this->RsgAsActivityRelatedInstance = [];
            foreach ($param["RsgAsActivityRelatedInstance"] as $key => $value){
                $obj = new RsgAsActivityRelatedInstance();
                $obj->deserialize($value);
                array_push($this->RsgAsActivityRelatedInstance, $obj);
            }
        }

        if (array_key_exists("StatusMessageSimplified",$param) and $param["StatusMessageSimplified"] !== null) {
            $this->StatusMessageSimplified = $param["StatusMessageSimplified"];
        }
    }
}
