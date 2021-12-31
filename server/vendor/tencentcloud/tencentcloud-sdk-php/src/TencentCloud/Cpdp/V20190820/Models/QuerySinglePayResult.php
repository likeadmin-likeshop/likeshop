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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 银企直连-查询单笔支付状态结果
 *
 * @method string getHandleStatus() 获取受理状态（S：处理成功；F：处理失败）
 * @method void setHandleStatus(string $HandleStatus) 设置受理状态（S：处理成功；F：处理失败）
 * @method string getHandleMsg() 获取受理状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHandleMsg(string $HandleMsg) 设置受理状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerialNo() 获取业务流水号
 * @method void setSerialNo(string $SerialNo) 设置业务流水号
 * @method array getItems() 获取支付明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置支付明细
注意：此字段可能返回 null，表示取不到有效值。
 */
class QuerySinglePayResult extends AbstractModel
{
    /**
     * @var string 受理状态（S：处理成功；F：处理失败）
     */
    public $HandleStatus;

    /**
     * @var string 受理状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HandleMsg;

    /**
     * @var string 业务流水号
     */
    public $SerialNo;

    /**
     * @var array 支付明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param string $HandleStatus 受理状态（S：处理成功；F：处理失败）
     * @param string $HandleMsg 受理状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerialNo 业务流水号
     * @param array $Items 支付明细
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
        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("HandleMsg",$param) and $param["HandleMsg"] !== null) {
            $this->HandleMsg = $param["HandleMsg"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new QuerySinglePayItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
