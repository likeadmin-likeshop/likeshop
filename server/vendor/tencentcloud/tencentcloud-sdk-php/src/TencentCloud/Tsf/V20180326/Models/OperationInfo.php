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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 提供给前端，控制按钮是否显示
 *
 * @method OperationInfoDetail getInit() 获取初始化按钮的控制信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInit(OperationInfoDetail $Init) 设置初始化按钮的控制信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method OperationInfoDetail getAddInstance() 获取添加实例按钮的控制信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddInstance(OperationInfoDetail $AddInstance) 设置添加实例按钮的控制信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method OperationInfoDetail getDestroy() 获取销毁机器的控制信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestroy(OperationInfoDetail $Destroy) 设置销毁机器的控制信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class OperationInfo extends AbstractModel
{
    /**
     * @var OperationInfoDetail 初始化按钮的控制信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Init;

    /**
     * @var OperationInfoDetail 添加实例按钮的控制信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddInstance;

    /**
     * @var OperationInfoDetail 销毁机器的控制信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destroy;

    /**
     * @param OperationInfoDetail $Init 初始化按钮的控制信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param OperationInfoDetail $AddInstance 添加实例按钮的控制信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param OperationInfoDetail $Destroy 销毁机器的控制信息
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
        if (array_key_exists("Init",$param) and $param["Init"] !== null) {
            $this->Init = new OperationInfoDetail();
            $this->Init->deserialize($param["Init"]);
        }

        if (array_key_exists("AddInstance",$param) and $param["AddInstance"] !== null) {
            $this->AddInstance = new OperationInfoDetail();
            $this->AddInstance->deserialize($param["AddInstance"]);
        }

        if (array_key_exists("Destroy",$param) and $param["Destroy"] !== null) {
            $this->Destroy = new OperationInfoDetail();
            $this->Destroy->deserialize($param["Destroy"]);
        }
    }
}
