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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户任务信息
 *
 * @method integer getId() 获取任务ID
 * @method void setId(integer $Id) 设置任务ID
 * @method integer getAppId() 获取用户账户ID
 * @method void setAppId(integer $AppId) 设置用户账户ID
 * @method integer getStatus() 获取任务状态，0-任务初始化中；1-任务运行中；2-任务成功；3-任务失败
 * @method void setStatus(integer $Status) 设置任务状态，0-任务初始化中；1-任务运行中；2-任务成功；3-任务失败
 * @method integer getUserTaskType() 获取任务类型，0-实例回档；1-实例创建；2-实例扩容；3-实例迁移；4-实例删除；5-实例重启
 * @method void setUserTaskType(integer $UserTaskType) 设置任务类型，0-实例回档；1-实例创建；2-实例扩容；3-实例迁移；4-实例删除；5-实例重启
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method string getErrMsg() 获取任务错误信息
 * @method void setErrMsg(string $ErrMsg) 设置任务错误信息
 * @method string getInputData() 获取客户端参数
 * @method void setInputData(string $InputData) 设置客户端参数
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 */
class UserTaskInfo extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $Id;

    /**
     * @var integer 用户账户ID
     */
    public $AppId;

    /**
     * @var integer 任务状态，0-任务初始化中；1-任务运行中；2-任务成功；3-任务失败
     */
    public $Status;

    /**
     * @var integer 任务类型，0-实例回档；1-实例创建；2-实例扩容；3-实例迁移；4-实例删除；5-实例重启
     */
    public $UserTaskType;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var string 任务错误信息
     */
    public $ErrMsg;

    /**
     * @var string 客户端参数
     */
    public $InputData;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @param integer $Id 任务ID
     * @param integer $AppId 用户账户ID
     * @param integer $Status 任务状态，0-任务初始化中；1-任务运行中；2-任务成功；3-任务失败
     * @param integer $UserTaskType 任务类型，0-实例回档；1-实例创建；2-实例扩容；3-实例迁移；4-实例删除；5-实例重启
     * @param string $CreateTime 任务创建时间
     * @param string $EndTime 任务结束时间
     * @param string $ErrMsg 任务错误信息
     * @param string $InputData 客户端参数
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $RegionId 地域ID
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserTaskType",$param) and $param["UserTaskType"] !== null) {
            $this->UserTaskType = $param["UserTaskType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("InputData",$param) and $param["InputData"] !== null) {
            $this->InputData = $param["InputData"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
