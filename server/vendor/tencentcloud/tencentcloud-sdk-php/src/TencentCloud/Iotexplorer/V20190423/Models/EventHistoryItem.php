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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备事件的搜索结果项
 *
 * @method integer getTimeStamp() 获取事件的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeStamp(integer $TimeStamp) 设置事件的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductId() 获取事件的产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置事件的产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceName() 获取事件的设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置事件的设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventId() 获取事件的标识符ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(string $EventId) 设置事件的标识符ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取事件的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置事件的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getData() 获取事件的数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(string $Data) 设置事件的数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventHistoryItem extends AbstractModel
{
    /**
     * @var integer 事件的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeStamp;

    /**
     * @var string 事件的产品ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var string 事件的设备名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var string 事件的标识符ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var string 事件的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 事件的数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param integer $TimeStamp 事件的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductId 事件的产品ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceName 事件的设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventId 事件的标识符ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 事件的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Data 事件的数据
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
        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
