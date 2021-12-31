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
 * ScaleOutInstance返回参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method array getDealNames() 获取订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealNames(array $DealNames) 设置订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientToken() 获取客户端Token。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientToken(string $ClientToken) 设置客户端Token。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlowId() 获取扩容流程ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowId(integer $FlowId) 设置扩容流程ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillId() 获取大订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillId(string $BillId) 设置大订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ScaleOutInstanceResponse extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var array 订单号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealNames;

    /**
     * @var string 客户端Token。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientToken;

    /**
     * @var integer 扩容流程ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowId;

    /**
     * @var string 大订单号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例ID。
     * @param array $DealNames 订单号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientToken 客户端Token。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlowId 扩容流程ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillId 大订单号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
