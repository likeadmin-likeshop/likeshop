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
 * CreateCallBack请求参数结构体
 *
 * @method string getBizAppId() 获取业务appid
 * @method void setBizAppId(string $BizAppId) 设置业务appid
 * @method string getSrc() 获取主叫号码(必须为 11 位手机号，号码前加 0086，如 008613631686024)
 * @method void setSrc(string $Src) 设置主叫号码(必须为 11 位手机号，号码前加 0086，如 008613631686024)
 * @method string getDst() 获取被叫号码(必须为 11 位手机或固话号码,号码前加 0086，如008613631686024，固话如：0086075586013388)
 * @method void setDst(string $Dst) 设置被叫号码(必须为 11 位手机或固话号码,号码前加 0086，如008613631686024，固话如：0086075586013388)
 * @method string getSrcDisplayNum() 获取主叫显示系统分配的固话号码，如不填显示随机分配号码
 * @method void setSrcDisplayNum(string $SrcDisplayNum) 设置主叫显示系统分配的固话号码，如不填显示随机分配号码
 * @method string getDstDisplayNum() 获取被叫显示系统分配的固话号码，如不填显示随机分配号码
 * @method void setDstDisplayNum(string $DstDisplayNum) 设置被叫显示系统分配的固话号码，如不填显示随机分配号码
 * @method string getRecord() 获取是否录音，0 表示不录音，1 表示录音。默认为不录音
 * @method void setRecord(string $Record) 设置是否录音，0 表示不录音，1 表示录音。默认为不录音
 * @method string getMaxAllowTime() 获取允许最大通话时间，不填默认为 30 分钟（单位：分钟）
 * @method void setMaxAllowTime(string $MaxAllowTime) 设置允许最大通话时间，不填默认为 30 分钟（单位：分钟）
 * @method string getStatusFlag() 获取主叫发起呼叫状态：1 被叫发起呼叫状态：256 主叫响铃状态：2 被叫响铃状态：512 主叫接听状态：4 被叫接听状态：1024 主叫拒绝接听状态：8 被叫拒绝接听状态：2048 主叫正常挂机状态：16 被叫正常挂机状态：4096 主叫呼叫异常：32 被叫呼叫异常：8192
例如：当值为 0：表示所有状态不需要推送；当值为 4：表示只要推送主叫接听状态；当值为 16191：表示所有状态都需要推送(上面所有值和)
 * @method void setStatusFlag(string $StatusFlag) 设置主叫发起呼叫状态：1 被叫发起呼叫状态：256 主叫响铃状态：2 被叫响铃状态：512 主叫接听状态：4 被叫接听状态：1024 主叫拒绝接听状态：8 被叫拒绝接听状态：2048 主叫正常挂机状态：16 被叫正常挂机状态：4096 主叫呼叫异常：32 被叫呼叫异常：8192
例如：当值为 0：表示所有状态不需要推送；当值为 4：表示只要推送主叫接听状态；当值为 16191：表示所有状态都需要推送(上面所有值和)
 * @method string getStatusUrl() 获取状态回调通知地址，正式环境可以配置默认推送地址
 * @method void setStatusUrl(string $StatusUrl) 设置状态回调通知地址，正式环境可以配置默认推送地址
 * @method string getHangupUrl() 获取话单回调通知地址，正式环境可以配置默认推送地址
 * @method void setHangupUrl(string $HangupUrl) 设置话单回调通知地址，正式环境可以配置默认推送地址
 * @method string getRecordUrl() 获取录单 URL 回调通知地址，正式环境可以配置默认推送地址
 * @method void setRecordUrl(string $RecordUrl) 设置录单 URL 回调通知地址，正式环境可以配置默认推送地址
 * @method string getBizId() 获取业务应用 key，业务用该 key 可以区分内部业务或客户产品等，该 key 需保证在该 appId 下全局唯一，最大长度不超过 64 个字节，bizId 只能包含数字、字母。
 * @method void setBizId(string $BizId) 设置业务应用 key，业务用该 key 可以区分内部业务或客户产品等，该 key 需保证在该 appId 下全局唯一，最大长度不超过 64 个字节，bizId 只能包含数字、字母。
 * @method string getLastCallId() 获取最后一次呼叫 callId，带上该字段以后，平台会参考该 callId 分配线路，优先不分配该 callId 通话线路（注：谨慎使用，这个会影响线路调度）
 * @method void setLastCallId(string $LastCallId) 设置最后一次呼叫 callId，带上该字段以后，平台会参考该 callId 分配线路，优先不分配该 callId 通话线路（注：谨慎使用，这个会影响线路调度）
 * @method RreCallerHandle getPreCallerHandle() 获取结构体，主叫呼叫预处理操作，根据不同操作确认是否呼通被叫。如需使用，本结构体需要与 keyList 结构体配合使用，此时这两个参数都为必填项
 * @method void setPreCallerHandle(RreCallerHandle $PreCallerHandle) 设置结构体，主叫呼叫预处理操作，根据不同操作确认是否呼通被叫。如需使用，本结构体需要与 keyList 结构体配合使用，此时这两个参数都为必填项
 * @method string getOrderId() 获取订单 ID，最大长度不超过64个字节，对于一些有订单状态 App 相关应用使用（如达人帮接入 App 应用)，该字段只在帐单中带上，其它回调不附带该字段
 * @method void setOrderId(string $OrderId) 设置订单 ID，最大长度不超过64个字节，对于一些有订单状态 App 相关应用使用（如达人帮接入 App 应用)，该字段只在帐单中带上，其它回调不附带该字段
 */
class CreateCallBackRequest extends AbstractModel
{
    /**
     * @var string 业务appid
     */
    public $BizAppId;

    /**
     * @var string 主叫号码(必须为 11 位手机号，号码前加 0086，如 008613631686024)
     */
    public $Src;

    /**
     * @var string 被叫号码(必须为 11 位手机或固话号码,号码前加 0086，如008613631686024，固话如：0086075586013388)
     */
    public $Dst;

    /**
     * @var string 主叫显示系统分配的固话号码，如不填显示随机分配号码
     */
    public $SrcDisplayNum;

    /**
     * @var string 被叫显示系统分配的固话号码，如不填显示随机分配号码
     */
    public $DstDisplayNum;

    /**
     * @var string 是否录音，0 表示不录音，1 表示录音。默认为不录音
     */
    public $Record;

    /**
     * @var string 允许最大通话时间，不填默认为 30 分钟（单位：分钟）
     */
    public $MaxAllowTime;

    /**
     * @var string 主叫发起呼叫状态：1 被叫发起呼叫状态：256 主叫响铃状态：2 被叫响铃状态：512 主叫接听状态：4 被叫接听状态：1024 主叫拒绝接听状态：8 被叫拒绝接听状态：2048 主叫正常挂机状态：16 被叫正常挂机状态：4096 主叫呼叫异常：32 被叫呼叫异常：8192
例如：当值为 0：表示所有状态不需要推送；当值为 4：表示只要推送主叫接听状态；当值为 16191：表示所有状态都需要推送(上面所有值和)
     */
    public $StatusFlag;

    /**
     * @var string 状态回调通知地址，正式环境可以配置默认推送地址
     */
    public $StatusUrl;

    /**
     * @var string 话单回调通知地址，正式环境可以配置默认推送地址
     */
    public $HangupUrl;

    /**
     * @var string 录单 URL 回调通知地址，正式环境可以配置默认推送地址
     */
    public $RecordUrl;

    /**
     * @var string 业务应用 key，业务用该 key 可以区分内部业务或客户产品等，该 key 需保证在该 appId 下全局唯一，最大长度不超过 64 个字节，bizId 只能包含数字、字母。
     */
    public $BizId;

    /**
     * @var string 最后一次呼叫 callId，带上该字段以后，平台会参考该 callId 分配线路，优先不分配该 callId 通话线路（注：谨慎使用，这个会影响线路调度）
     */
    public $LastCallId;

    /**
     * @var RreCallerHandle 结构体，主叫呼叫预处理操作，根据不同操作确认是否呼通被叫。如需使用，本结构体需要与 keyList 结构体配合使用，此时这两个参数都为必填项
     */
    public $PreCallerHandle;

    /**
     * @var string 订单 ID，最大长度不超过64个字节，对于一些有订单状态 App 相关应用使用（如达人帮接入 App 应用)，该字段只在帐单中带上，其它回调不附带该字段
     */
    public $OrderId;

    /**
     * @param string $BizAppId 业务appid
     * @param string $Src 主叫号码(必须为 11 位手机号，号码前加 0086，如 008613631686024)
     * @param string $Dst 被叫号码(必须为 11 位手机或固话号码,号码前加 0086，如008613631686024，固话如：0086075586013388)
     * @param string $SrcDisplayNum 主叫显示系统分配的固话号码，如不填显示随机分配号码
     * @param string $DstDisplayNum 被叫显示系统分配的固话号码，如不填显示随机分配号码
     * @param string $Record 是否录音，0 表示不录音，1 表示录音。默认为不录音
     * @param string $MaxAllowTime 允许最大通话时间，不填默认为 30 分钟（单位：分钟）
     * @param string $StatusFlag 主叫发起呼叫状态：1 被叫发起呼叫状态：256 主叫响铃状态：2 被叫响铃状态：512 主叫接听状态：4 被叫接听状态：1024 主叫拒绝接听状态：8 被叫拒绝接听状态：2048 主叫正常挂机状态：16 被叫正常挂机状态：4096 主叫呼叫异常：32 被叫呼叫异常：8192
例如：当值为 0：表示所有状态不需要推送；当值为 4：表示只要推送主叫接听状态；当值为 16191：表示所有状态都需要推送(上面所有值和)
     * @param string $StatusUrl 状态回调通知地址，正式环境可以配置默认推送地址
     * @param string $HangupUrl 话单回调通知地址，正式环境可以配置默认推送地址
     * @param string $RecordUrl 录单 URL 回调通知地址，正式环境可以配置默认推送地址
     * @param string $BizId 业务应用 key，业务用该 key 可以区分内部业务或客户产品等，该 key 需保证在该 appId 下全局唯一，最大长度不超过 64 个字节，bizId 只能包含数字、字母。
     * @param string $LastCallId 最后一次呼叫 callId，带上该字段以后，平台会参考该 callId 分配线路，优先不分配该 callId 通话线路（注：谨慎使用，这个会影响线路调度）
     * @param RreCallerHandle $PreCallerHandle 结构体，主叫呼叫预处理操作，根据不同操作确认是否呼通被叫。如需使用，本结构体需要与 keyList 结构体配合使用，此时这两个参数都为必填项
     * @param string $OrderId 订单 ID，最大长度不超过64个字节，对于一些有订单状态 App 相关应用使用（如达人帮接入 App 应用)，该字段只在帐单中带上，其它回调不附带该字段
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
        if (array_key_exists("BizAppId",$param) and $param["BizAppId"] !== null) {
            $this->BizAppId = $param["BizAppId"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Dst",$param) and $param["Dst"] !== null) {
            $this->Dst = $param["Dst"];
        }

        if (array_key_exists("SrcDisplayNum",$param) and $param["SrcDisplayNum"] !== null) {
            $this->SrcDisplayNum = $param["SrcDisplayNum"];
        }

        if (array_key_exists("DstDisplayNum",$param) and $param["DstDisplayNum"] !== null) {
            $this->DstDisplayNum = $param["DstDisplayNum"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("MaxAllowTime",$param) and $param["MaxAllowTime"] !== null) {
            $this->MaxAllowTime = $param["MaxAllowTime"];
        }

        if (array_key_exists("StatusFlag",$param) and $param["StatusFlag"] !== null) {
            $this->StatusFlag = $param["StatusFlag"];
        }

        if (array_key_exists("StatusUrl",$param) and $param["StatusUrl"] !== null) {
            $this->StatusUrl = $param["StatusUrl"];
        }

        if (array_key_exists("HangupUrl",$param) and $param["HangupUrl"] !== null) {
            $this->HangupUrl = $param["HangupUrl"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("LastCallId",$param) and $param["LastCallId"] !== null) {
            $this->LastCallId = $param["LastCallId"];
        }

        if (array_key_exists("PreCallerHandle",$param) and $param["PreCallerHandle"] !== null) {
            $this->PreCallerHandle = new RreCallerHandle();
            $this->PreCallerHandle->deserialize($param["PreCallerHandle"]);
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }
    }
}
