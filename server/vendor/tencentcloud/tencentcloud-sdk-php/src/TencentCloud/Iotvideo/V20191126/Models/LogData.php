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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备日志信息
 *
 * @method integer getOccurtime() 获取发生时间 UNIX时间戳，单位秒
 * @method void setOccurtime(integer $Occurtime) 设置发生时间 UNIX时间戳，单位秒
 * @method integer getLogType() 获取日志类型 1在线状态变更 2FP变更 3SP变更 4CO控制 5ST变更 6EV事件
 * @method void setLogType(integer $LogType) 设置日志类型 1在线状态变更 2FP变更 3SP变更 4CO控制 5ST变更 6EV事件
 * @method string getDataObject() 获取物模型对象索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataObject(string $DataObject) 设置物模型对象索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldValue() 获取物模型旧值  json串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldValue(string $OldValue) 设置物模型旧值  json串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewValue() 获取物模型新值  json串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewValue(string $NewValue) 设置物模型新值  json串
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogData extends AbstractModel
{
    /**
     * @var integer 发生时间 UNIX时间戳，单位秒
     */
    public $Occurtime;

    /**
     * @var integer 日志类型 1在线状态变更 2FP变更 3SP变更 4CO控制 5ST变更 6EV事件
     */
    public $LogType;

    /**
     * @var string 物模型对象索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataObject;

    /**
     * @var string 物模型旧值  json串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldValue;

    /**
     * @var string 物模型新值  json串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewValue;

    /**
     * @param integer $Occurtime 发生时间 UNIX时间戳，单位秒
     * @param integer $LogType 日志类型 1在线状态变更 2FP变更 3SP变更 4CO控制 5ST变更 6EV事件
     * @param string $DataObject 物模型对象索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldValue 物模型旧值  json串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewValue 物模型新值  json串
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
        if (array_key_exists("Occurtime",$param) and $param["Occurtime"] !== null) {
            $this->Occurtime = $param["Occurtime"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("DataObject",$param) and $param["DataObject"] !== null) {
            $this->DataObject = $param["DataObject"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }
    }
}
