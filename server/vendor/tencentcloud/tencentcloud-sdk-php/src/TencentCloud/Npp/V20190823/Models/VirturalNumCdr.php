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
 * 直拨话单详情
 *
 * @method string getCallId() 获取呼叫通话 ID
 * @method void setCallId(string $CallId) 设置呼叫通话 ID
 * @method string getBindId() 获取双方号码 + 中间号绑定 ID，该 ID 全局唯一
 * @method void setBindId(string $BindId) 设置双方号码 + 中间号绑定 ID，该 ID 全局唯一
 * @method string getSrc() 获取主叫号码
 * @method void setSrc(string $Src) 设置主叫号码
 * @method string getDst() 获取被叫号码
 * @method void setDst(string $Dst) 设置被叫号码
 * @method string getDstVirtualNum() 获取主叫通讯录直拨虚拟保护号码
 * @method void setDstVirtualNum(string $DstVirtualNum) 设置主叫通讯录直拨虚拟保护号码
 * @method string getCallCenterAcceptTime() 获取虚拟保护号码平台收到呼叫时间
 * @method void setCallCenterAcceptTime(string $CallCenterAcceptTime) 设置虚拟保护号码平台收到呼叫时间
 * @method string getStartDstCallTime() 获取被叫呼叫开始时间
 * @method void setStartDstCallTime(string $StartDstCallTime) 设置被叫呼叫开始时间
 * @method string getStartDstRingTime() 获取被叫响铃开始时间
 * @method void setStartDstRingTime(string $StartDstRingTime) 设置被叫响铃开始时间
 * @method string getDstAcceptTime() 获取被叫接听时间
 * @method void setDstAcceptTime(string $DstAcceptTime) 设置被叫接听时间
 * @method string getEndCallTime() 获取用户挂机通话结束时间
 * @method void setEndCallTime(string $EndCallTime) 设置用户挂机通话结束时间
 * @method string getCallEndStatus() 获取通话最后状态：0：未知状态 1：正常通话 2：查询呼叫转移被叫号异常 3：未接通 4：未接听 5：拒接挂断 6：关机 7：空号 8：通话中 9：欠费 10：运营商线路或平台异常
 * @method void setCallEndStatus(string $CallEndStatus) 设置通话最后状态：0：未知状态 1：正常通话 2：查询呼叫转移被叫号异常 3：未接通 4：未接听 5：拒接挂断 6：关机 7：空号 8：通话中 9：欠费 10：运营商线路或平台异常
 * @method string getSrcDuration() 获取主叫接通虚拟保护号码到通话结束通话时间
 * @method void setSrcDuration(string $SrcDuration) 设置主叫接通虚拟保护号码到通话结束通话时间
 * @method string getDstDuration() 获取呼叫转接被叫接通到通话结束通话时间
 * @method void setDstDuration(string $DstDuration) 设置呼叫转接被叫接通到通话结束通话时间
 * @method string getRecordUrl() 获取录音 URL，如果不录音或录音失败，该值为空
 * @method void setRecordUrl(string $RecordUrl) 设置录音 URL，如果不录音或录音失败，该值为空
 */
class VirturalNumCdr extends AbstractModel
{
    /**
     * @var string 呼叫通话 ID
     */
    public $CallId;

    /**
     * @var string 双方号码 + 中间号绑定 ID，该 ID 全局唯一
     */
    public $BindId;

    /**
     * @var string 主叫号码
     */
    public $Src;

    /**
     * @var string 被叫号码
     */
    public $Dst;

    /**
     * @var string 主叫通讯录直拨虚拟保护号码
     */
    public $DstVirtualNum;

    /**
     * @var string 虚拟保护号码平台收到呼叫时间
     */
    public $CallCenterAcceptTime;

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
     * @var string 通话最后状态：0：未知状态 1：正常通话 2：查询呼叫转移被叫号异常 3：未接通 4：未接听 5：拒接挂断 6：关机 7：空号 8：通话中 9：欠费 10：运营商线路或平台异常
     */
    public $CallEndStatus;

    /**
     * @var string 主叫接通虚拟保护号码到通话结束通话时间
     */
    public $SrcDuration;

    /**
     * @var string 呼叫转接被叫接通到通话结束通话时间
     */
    public $DstDuration;

    /**
     * @var string 录音 URL，如果不录音或录音失败，该值为空
     */
    public $RecordUrl;

    /**
     * @param string $CallId 呼叫通话 ID
     * @param string $BindId 双方号码 + 中间号绑定 ID，该 ID 全局唯一
     * @param string $Src 主叫号码
     * @param string $Dst 被叫号码
     * @param string $DstVirtualNum 主叫通讯录直拨虚拟保护号码
     * @param string $CallCenterAcceptTime 虚拟保护号码平台收到呼叫时间
     * @param string $StartDstCallTime 被叫呼叫开始时间
     * @param string $StartDstRingTime 被叫响铃开始时间
     * @param string $DstAcceptTime 被叫接听时间
     * @param string $EndCallTime 用户挂机通话结束时间
     * @param string $CallEndStatus 通话最后状态：0：未知状态 1：正常通话 2：查询呼叫转移被叫号异常 3：未接通 4：未接听 5：拒接挂断 6：关机 7：空号 8：通话中 9：欠费 10：运营商线路或平台异常
     * @param string $SrcDuration 主叫接通虚拟保护号码到通话结束通话时间
     * @param string $DstDuration 呼叫转接被叫接通到通话结束通话时间
     * @param string $RecordUrl 录音 URL，如果不录音或录音失败，该值为空
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

        if (array_key_exists("BindId",$param) and $param["BindId"] !== null) {
            $this->BindId = $param["BindId"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Dst",$param) and $param["Dst"] !== null) {
            $this->Dst = $param["Dst"];
        }

        if (array_key_exists("DstVirtualNum",$param) and $param["DstVirtualNum"] !== null) {
            $this->DstVirtualNum = $param["DstVirtualNum"];
        }

        if (array_key_exists("CallCenterAcceptTime",$param) and $param["CallCenterAcceptTime"] !== null) {
            $this->CallCenterAcceptTime = $param["CallCenterAcceptTime"];
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

        if (array_key_exists("SrcDuration",$param) and $param["SrcDuration"] !== null) {
            $this->SrcDuration = $param["SrcDuration"];
        }

        if (array_key_exists("DstDuration",$param) and $param["DstDuration"] !== null) {
            $this->DstDuration = $param["DstDuration"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }
    }
}
