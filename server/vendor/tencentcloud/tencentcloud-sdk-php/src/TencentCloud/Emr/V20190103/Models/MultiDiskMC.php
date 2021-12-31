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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多云盘参数
 *
 * @method integer getCount() 获取该类型云盘个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置该类型云盘个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVolume() 获取云盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolume(integer $Volume) 设置云盘大小
注意：此字段可能返回 null，表示取不到有效值。
 */
class MultiDiskMC extends AbstractModel
{
    /**
     * @var integer 该类型云盘个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var integer 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 云盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Volume;

    /**
     * @param integer $Count 该类型云盘个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Volume 云盘大小
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
