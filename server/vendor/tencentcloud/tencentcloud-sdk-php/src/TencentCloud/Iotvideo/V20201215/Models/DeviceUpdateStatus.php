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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备固件更新状态
 *
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method integer getLastProcessTime() 获取最后处理时间
 * @method void setLastProcessTime(integer $LastProcessTime) 设置最后处理时间
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getErrMsg() 获取错误消息
 * @method void setErrMsg(string $ErrMsg) 设置错误消息
 * @method integer getRetcode() 获取返回码
 * @method void setRetcode(integer $Retcode) 设置返回码
 * @method string getDstVersion() 获取目标更新版本
 * @method void setDstVersion(string $DstVersion) 设置目标更新版本
 * @method integer getPercent() 获取下载中状态时的下载进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置下载中状态时的下载进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriVersion() 获取原版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriVersion(string $OriVersion) 设置原版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(integer $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceUpdateStatus extends AbstractModel
{
    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var integer 最后处理时间
     */
    public $LastProcessTime;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 错误消息
     */
    public $ErrMsg;

    /**
     * @var integer 返回码
     */
    public $Retcode;

    /**
     * @var string 目标更新版本
     */
    public $DstVersion;

    /**
     * @var integer 下载中状态时的下载进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var string 原版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriVersion;

    /**
     * @var integer 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @param string $DeviceName 设备名
     * @param integer $LastProcessTime 最后处理时间
     * @param integer $Status 状态
     * @param string $ErrMsg 错误消息
     * @param integer $Retcode 返回码
     * @param string $DstVersion 目标更新版本
     * @param integer $Percent 下载中状态时的下载进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriVersion 原版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskId 任务ID
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("LastProcessTime",$param) and $param["LastProcessTime"] !== null) {
            $this->LastProcessTime = $param["LastProcessTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Retcode",$param) and $param["Retcode"] !== null) {
            $this->Retcode = $param["Retcode"];
        }

        if (array_key_exists("DstVersion",$param) and $param["DstVersion"] !== null) {
            $this->DstVersion = $param["DstVersion"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("OriVersion",$param) and $param["OriVersion"] !== null) {
            $this->OriVersion = $param["OriVersion"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
