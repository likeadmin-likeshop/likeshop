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
namespace TencentCloud\Npp\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 话单详情
 *
 * @method string getCallId() 获取呼叫通话 ID
 * @method void setCallId(string $CallId) 设置呼叫通话 ID
 * @method string getSrc() 获取主叫号码
 * @method void setSrc(string $Src) 设置主叫号码
 * @method string getDst() 获取被叫号码
 * @method void setDst(string $Dst) 设置被叫号码
 * @method string getStartSrcCallTime() 获取主叫呼叫开始时间
 * @method void setStartSrcCallTime(string $StartSrcCallTime) 设置主叫呼叫开始时间
 * @method string getStartSrcRingTime() 获取主叫响铃开始时间
 * @method void setStartSrcRingTime(string $StartSrcRingTime) 设置主叫响铃开始时间
 * @method string getSrcAcceptTime() 获取主叫接听时间
 * @method void setSrcAcceptTime(string $SrcAcceptTime) 设置主叫接听时间
 * @method string getStartDstCallTime() 获取被叫呼叫开始时间
 * @method void setStartDstCallTime(string $StartDstCallTime) 设置被叫呼叫开始时间
 * @method string getStartDstRingTime() 获取被叫响铃开始时间
 * @method void setStartDstRingTime(string $StartDstRingTime) 设置被叫响铃开始时间
 * @method string getDstAcceptTime() 获取被叫接听时间
 * @method void setDstAcceptTime(string $DstAcceptTime) 设置被叫接听时间
 * @method string getEndCallTime() 获取用户挂机通话结束时间
 * @method void setEndCallTime(string $EndCallTime) 设置用户挂机通话结束时间
 * @method string getCallEndStatus() 获取通话最后状态：0：未知状态 1：正常通话 2：主叫未接 3：主叫接听，被叫未接 4：主叫未接通 5：被叫未接通
 * @method void setCallEndStatus(string $CallEndStatus) 设置通话最后状态：0：未知状态 1：正常通话 2：主叫未接 3：主叫接听，被叫未接 4：主叫未接通 5：被叫未接通
 * @method string getDuration() 获取通话计费时间
 * @method void setDuration(string $Duration) 设置通话计费时间
 * @method string getRecordUrl() 获取录音 URL，如果不录音或录音失败，该值为空
 * @method void setRecordUrl(string $RecordUrl) 设置录音 URL，如果不录音或录音失败，该值为空
 * @method string getCallType() 获取通话类型(1: VOIP 2:IP TO PSTN 3: PSTN TO PSTN)，如果话单中没有该字段，默认值为回拨 3 (PSTN TO PSTN)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallType(string $CallType) 设置通话类型(1: VOIP 2:IP TO PSTN 3: PSTN TO PSTN)，如果话单中没有该字段，默认值为回拨 3 (PSTN TO PSTN)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizId() 获取同回拨请求中的 bizId，如果回拨请求中带 bizId 会有该字段返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizId(string $BizId) 设置同回拨请求中的 bizId，如果回拨请求中带 bizId 会有该字段返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderId() 获取订单 ID,最大长度不超过 64 个字节，对于一些有订单状态 App 相关应用（如达人帮接入 App 应用)，该字段只在帐单中带上，其它回调不附带该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置订单 ID,最大长度不超过 64 个字节，对于一些有订单状态 App 相关应用（如达人帮接入 App 应用)，该字段只在帐单中带上，其它回调不附带该字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class CallBackCdr extends AbstractModel
{
    /**
     * @var string 呼叫通话 ID
     */
    public $CallId;

    /**
     * @var string 主叫号码
     */
    public $Src;

    /**
     * @var string 被叫号码
     */
    public $Dst;

    /**
     * @var string 主叫呼叫开始时间
     */
    public $StartSrcCallTime;

    /**
     * @var string 主叫响铃开始时间
     */
    public $StartSrcRingTime;

    /**
     * @var string 主叫接听时间
     */
    public $SrcAcceptTime;

    /**
     * @var string 被叫呼叫开始时间
     */
    public $StartDstCallTime;

    /**
     * @var string 被叫响铃开始时间
     */
    public $StartDstRingTime;

    /**
     * @var string 被叫接听时间
     */
    public $DstAcceptTime;

    /**
     * @var string 用户挂机通话结束时间
     */
    public $EndCallTime;

    /**
     * @var string 通话最后状态：0：未知状态 1：正常通话 2：主叫未接 3：主叫接听，被叫未接 4：主叫未接通 5：被叫未接通
     */
    public $CallEndStatus;

    /**
     * @var string 通话计费时间
     */
    public $Duration;

    /**
     * @var string 录音 URL，如果不录音或录音失败，该值为空
     */
    public $RecordUrl;

    /**
     * @var string 通话类型(1: VOIP 2:IP TO PSTN 3: PSTN TO PSTN)，如果话单中没有该字段，默认值为回拨 3 (PSTN TO PSTN)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallType;

    /**
     * @var string 同回拨请求中的 bizId，如果回拨请求中带 bizId 会有该字段返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizId;

    /**
     * @var string 订单 ID,最大长度不超过 64 个字节，对于一些有订单状态 App 相关应用（如达人帮接入 App 应用)，该字段只在帐单中带上，其它回调不附带该字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @param string $CallId 呼叫通话 ID
     * @param string $Src 主叫号码
     * @param string $Dst 被叫号码
     * @param string $StartSrcCallTime 主叫呼叫开始时间
     * @param string $StartSrcRingTime 主叫响铃开始时间
     * @param string $SrcAcceptTime 主叫接听时间
     * @param string $StartDstCallTime 被叫呼叫开始时间
     * @param string $StartDstRingTime 被叫响铃开始时间
     * @param string $DstAcceptTime 被叫接听时间
     * @param string $EndCallTime 用户挂机通话结束时间
     * @param string $CallEndStatus 通话最后状态：0：未知状态 1：正常通话 2：主叫未接 3：主叫接听，被叫未接 4：主叫未接通 5：被叫未接通
     * @param string $Duration 通话计费时间
     * @param string $RecordUrl 录音 URL，如果不录音或录音失败，该值为空
     * @param string $CallType 通话类型(1: VOIP 2:IP TO PSTN 3: PSTN TO PSTN)，如果话单中没有该字段，默认值为回拨 3 (PSTN TO PSTN)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizId 同回拨请求中的 bizId，如果回拨请求中带 bizId 会有该字段返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderId 订单 ID,最大长度不超过 64 个字节，对于一些有订单状态 App 相关应用（如达人帮接入 App 应用)，该字段只在帐单中带上，其它回调不附带该字段
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
        if (array_key_exists("CallId",$param) and $param["CallId"] !== null) {
            $this->CallId = $param["CallId"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Dst",$param) and $param["Dst"] !== null) {
            $this->Dst = $param["Dst"];
        }

        if (array_key_exists("StartSrcCallTime",$param) and $param["StartSrcCallTime"] !== null) {
            $this->StartSrcCallTime = $param["StartSrcCallTime"];
        }

        if (array_key_exists("StartSrcRingTime",$param) and $param["StartSrcRingTime"] !== null) {
            $this->StartSrcRingTime = $param["StartSrcRingTime"];
        }

        if (array_key_exists("SrcAcceptTime",$param) and $param["SrcAcceptTime"] !== null) {
            $this->SrcAcceptTime = $param["SrcAcceptTime"];
        }

        if (array_key_exists("StartDstCallTime",$param) and $param["StartDstCallTime"] !== null) {
            $this->StartDstCallTime = $param["StartDstCallTime"];
        }

        if (array_key_exists("StartDstRingTime",$param) and $param["StartDstRingTime"] !== null) {
            $this->StartDstRingTime = $param["StartDstRingTime"];
        }

        if (array_key_exists("DstAcceptTime",$param) and $param["DstAcceptTime"] !== null) {
            $this->DstAcceptTime = $param["DstAcceptTime"];
        }

        if (array_key_exists("EndCallTime",$param) and $param["EndCallTime"] !== null) {
            $this->EndCallTime = $param["EndCallTime"];
        }

        if (array_key_exists("CallEndStatus",$param) and $param["CallEndStatus"] !== null) {
            $this->CallEndStatus = $param["CallEndStatus"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }
    }
}
