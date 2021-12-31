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
 * 策略列表详情标签返回体
 *
 * @method string getKey() 获取标签Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置标签Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取标签Value
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置标签Value
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceSum() 获取实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceSum(integer $InstanceSum) 设置实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceType() 获取产品类型，如：cvm
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置产品类型，如：cvm
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionId() 获取地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(string $RegionId) 设置地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBindingStatus() 获取绑定状态，2：绑定成功，1：绑定中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindingStatus(integer $BindingStatus) 设置绑定状态，2：绑定成功，1：绑定中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTagStatus() 获取标签状态，2：标签存在，1：标签不存在
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagStatus(integer $TagStatus) 设置标签状态，2：标签存在，1：标签不存在
注意：此字段可能返回 null，表示取不到有效值。
 */
class TagInstance extends AbstractModel
{
    /**
     * @var string 标签Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 标签Value
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer 实例个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceSum;

    /**
     * @var string 产品类型，如：cvm
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var string 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var integer 绑定状态，2：绑定成功，1：绑定中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindingStatus;

    /**
     * @var integer 标签状态，2：标签存在，1：标签不存在
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagStatus;

    /**
     * @param string $Key 标签Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 标签Value
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceSum 实例个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceType 产品类型，如：cvm
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionId 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BindingStatus 绑定状态，2：绑定成功，1：绑定中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TagStatus 标签状态，2：标签存在，1：标签不存在
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("InstanceSum",$param) and $param["InstanceSum"] !== null) {
            $this->InstanceSum = $param["InstanceSum"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("BindingStatus",$param) and $param["BindingStatus"] !== null) {
            $this->BindingStatus = $param["BindingStatus"];
        }

        if (array_key_exists("TagStatus",$param) and $param["TagStatus"] !== null) {
            $this->TagStatus = $param["TagStatus"];
        }
    }
}
