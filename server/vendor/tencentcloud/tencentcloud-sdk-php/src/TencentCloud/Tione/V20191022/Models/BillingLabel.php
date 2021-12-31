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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费标签
 *
 * @method string getLabel() 获取计费项标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置计费项标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVolumeSize() 获取存储大小
 * @method void setVolumeSize(integer $VolumeSize) 设置存储大小
 * @method string getStatus() 获取计费状态
None: 不计费
StorageOnly: 仅存储计费
Computing: 计算和存储都计费
 * @method void setStatus(string $Status) 设置计费状态
None: 不计费
StorageOnly: 仅存储计费
Computing: 计算和存储都计费
 */
class BillingLabel extends AbstractModel
{
    /**
     * @var string 计费项标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var integer 存储大小
     */
    public $VolumeSize;

    /**
     * @var string 计费状态
None: 不计费
StorageOnly: 仅存储计费
Computing: 计算和存储都计费
     */
    public $Status;

    /**
     * @param string $Label 计费项标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VolumeSize 存储大小
     * @param string $Status 计费状态
None: 不计费
StorageOnly: 仅存储计费
Computing: 计算和存储都计费
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("VolumeSize",$param) and $param["VolumeSize"] !== null) {
            $this->VolumeSize = $param["VolumeSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
