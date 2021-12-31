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
 * MigrateOrderRefundQuery返回参数结构体
 *
 * @method boolean getIsSuccess() 获取请求成功状态
 * @method void setIsSuccess(boolean $IsSuccess) 设置请求成功状态
 * @method string getTradeSerialNo() 获取交易流水号
 * @method void setTradeSerialNo(string $TradeSerialNo) 设置交易流水号
 * @method string getTradeMsg() 获取交易备注
 * @method void setTradeMsg(string $TradeMsg) 设置交易备注
 * @method integer getTradeStatus() 获取交易状态：0=交易待处理；1=交易处理中；2=交易处理成功；3=交易失败；4=状态未知
 * @method void setTradeStatus(integer $TradeStatus) 设置交易状态：0=交易待处理；1=交易处理中；2=交易处理成功；3=交易失败；4=状态未知
 * @method string getThirdChannelOrderId() 获取第三方支付机构支付交易号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdChannelOrderId(string $ThirdChannelOrderId) 设置第三方支付机构支付交易号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class MigrateOrderRefundQueryResponse extends AbstractModel
{
    /**
     * @var boolean 请求成功状态
     */
    public $IsSuccess;

    /**
     * @var string 交易流水号
     */
    public $TradeSerialNo;

    /**
     * @var string 交易备注
     */
    public $TradeMsg;

    /**
     * @var integer 交易状态：0=交易待处理；1=交易处理中；2=交易处理成功；3=交易失败；4=状态未知
     */
    public $TradeStatus;

    /**
     * @var string 第三方支付机构支付交易号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdChannelOrderId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsSuccess 请求成功状态
     * @param string $TradeSerialNo 交易流水号
     * @param string $TradeMsg 交易备注
     * @param integer $TradeStatus 交易状态：0=交易待处理；1=交易处理中；2=交易处理成功；3=交易失败；4=状态未知
     * @param string $ThirdChannelOrderId 第三方支付机构支付交易号
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
        if (array_key_exists("IsSuccess",$param) and $param["IsSuccess"] !== null) {
            $this->IsSuccess = $param["IsSuccess"];
        }

        if (array_key_exists("TradeSerialNo",$param) and $param["TradeSerialNo"] !== null) {
            $this->TradeSerialNo = $param["TradeSerialNo"];
        }

        if (array_key_exists("TradeMsg",$param) and $param["TradeMsg"] !== null) {
            $this->TradeMsg = $param["TradeMsg"];
        }

        if (array_key_exists("TradeStatus",$param) and $param["TradeStatus"] !== null) {
            $this->TradeStatus = $param["TradeStatus"];
        }

        if (array_key_exists("ThirdChannelOrderId",$param) and $param["ThirdChannelOrderId"] !== null) {
            $this->ThirdChannelOrderId = $param["ThirdChannelOrderId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
