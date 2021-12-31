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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS高级策略的禁用协议选项
 *
 * @method integer getDropTcp() 获取禁用TCP协议，取值范围[0,1]
 * @method void setDropTcp(integer $DropTcp) 设置禁用TCP协议，取值范围[0,1]
 * @method integer getDropUdp() 获取禁用UDP协议，取值范围[0,1]
 * @method void setDropUdp(integer $DropUdp) 设置禁用UDP协议，取值范围[0,1]
 * @method integer getDropIcmp() 获取禁用ICMP协议，取值范围[0,1]
 * @method void setDropIcmp(integer $DropIcmp) 设置禁用ICMP协议，取值范围[0,1]
 * @method integer getDropOther() 获取禁用其他协议，取值范围[0,1]
 * @method void setDropOther(integer $DropOther) 设置禁用其他协议，取值范围[0,1]
 * @method integer getDropAbroad() 获取拒绝海外流量，取值范围[0,1]
 * @method void setDropAbroad(integer $DropAbroad) 设置拒绝海外流量，取值范围[0,1]
 * @method integer getCheckSyncConn() 获取空连接防护，取值范围[0,1]
 * @method void setCheckSyncConn(integer $CheckSyncConn) 设置空连接防护，取值范围[0,1]
 * @method integer getSdNewLimit() 获取基于来源IP及目的IP的新建连接抑制，取值范围[0,4294967295]
 * @method void setSdNewLimit(integer $SdNewLimit) 设置基于来源IP及目的IP的新建连接抑制，取值范围[0,4294967295]
 * @method integer getDstNewLimit() 获取基于目的IP的新建连接抑制，取值范围[0,4294967295]
 * @method void setDstNewLimit(integer $DstNewLimit) 设置基于目的IP的新建连接抑制，取值范围[0,4294967295]
 * @method integer getSdConnLimit() 获取基于来源IP及目的IP的并发连接抑制，取值范围[0,4294967295]
 * @method void setSdConnLimit(integer $SdConnLimit) 设置基于来源IP及目的IP的并发连接抑制，取值范围[0,4294967295]
 * @method integer getDstConnLimit() 获取基于目的IP的并发连接抑制，取值范围[0,4294967295]
 * @method void setDstConnLimit(integer $DstConnLimit) 设置基于目的IP的并发连接抑制，取值范围[0,4294967295]
 * @method integer getBadConnThreshold() 获取基于连接抑制触发阈值，取值范围[0,4294967295]
 * @method void setBadConnThreshold(integer $BadConnThreshold) 设置基于连接抑制触发阈值，取值范围[0,4294967295]
 * @method integer getNullConnEnable() 获取异常连接检测条件，空连接防护开关，，取值范围[0,1]
 * @method void setNullConnEnable(integer $NullConnEnable) 设置异常连接检测条件，空连接防护开关，，取值范围[0,1]
 * @method integer getConnTimeout() 获取异常连接检测条件，连接超时，，取值范围[0,65535]
 * @method void setConnTimeout(integer $ConnTimeout) 设置异常连接检测条件，连接超时，，取值范围[0,65535]
 * @method integer getSynRate() 获取异常连接检测条件，syn占比ack百分比，，取值范围[0,100]
 * @method void setSynRate(integer $SynRate) 设置异常连接检测条件，syn占比ack百分比，，取值范围[0,100]
 * @method integer getSynLimit() 获取异常连接检测条件，syn阈值，取值范围[0,100]
 * @method void setSynLimit(integer $SynLimit) 设置异常连接检测条件，syn阈值，取值范围[0,100]
 * @method integer getDTcpMbpsLimit() 获取tcp限速，取值范围[0,4294967295]
 * @method void setDTcpMbpsLimit(integer $DTcpMbpsLimit) 设置tcp限速，取值范围[0,4294967295]
 * @method integer getDUdpMbpsLimit() 获取udp限速，取值范围[0,4294967295]
 * @method void setDUdpMbpsLimit(integer $DUdpMbpsLimit) 设置udp限速，取值范围[0,4294967295]
 * @method integer getDIcmpMbpsLimit() 获取icmp限速，取值范围[0,4294967295]
 * @method void setDIcmpMbpsLimit(integer $DIcmpMbpsLimit) 设置icmp限速，取值范围[0,4294967295]
 * @method integer getDOtherMbpsLimit() 获取other协议限速，取值范围[0,4294967295]
 * @method void setDOtherMbpsLimit(integer $DOtherMbpsLimit) 设置other协议限速，取值范围[0,4294967295]
 */
class DDoSPolicyDropOption extends AbstractModel
{
    /**
     * @var integer 禁用TCP协议，取值范围[0,1]
     */
    public $DropTcp;

    /**
     * @var integer 禁用UDP协议，取值范围[0,1]
     */
    public $DropUdp;

    /**
     * @var integer 禁用ICMP协议，取值范围[0,1]
     */
    public $DropIcmp;

    /**
     * @var integer 禁用其他协议，取值范围[0,1]
     */
    public $DropOther;

    /**
     * @var integer 拒绝海外流量，取值范围[0,1]
     */
    public $DropAbroad;

    /**
     * @var integer 空连接防护，取值范围[0,1]
     */
    public $CheckSyncConn;

    /**
     * @var integer 基于来源IP及目的IP的新建连接抑制，取值范围[0,4294967295]
     */
    public $SdNewLimit;

    /**
     * @var integer 基于目的IP的新建连接抑制，取值范围[0,4294967295]
     */
    public $DstNewLimit;

    /**
     * @var integer 基于来源IP及目的IP的并发连接抑制，取值范围[0,4294967295]
     */
    public $SdConnLimit;

    /**
     * @var integer 基于目的IP的并发连接抑制，取值范围[0,4294967295]
     */
    public $DstConnLimit;

    /**
     * @var integer 基于连接抑制触发阈值，取值范围[0,4294967295]
     */
    public $BadConnThreshold;

    /**
     * @var integer 异常连接检测条件，空连接防护开关，，取值范围[0,1]
     */
    public $NullConnEnable;

    /**
     * @var integer 异常连接检测条件，连接超时，，取值范围[0,65535]
     */
    public $ConnTimeout;

    /**
     * @var integer 异常连接检测条件，syn占比ack百分比，，取值范围[0,100]
     */
    public $SynRate;

    /**
     * @var integer 异常连接检测条件，syn阈值，取值范围[0,100]
     */
    public $SynLimit;

    /**
     * @var integer tcp限速，取值范围[0,4294967295]
     */
    public $DTcpMbpsLimit;

    /**
     * @var integer udp限速，取值范围[0,4294967295]
     */
    public $DUdpMbpsLimit;

    /**
     * @var integer icmp限速，取值范围[0,4294967295]
     */
    public $DIcmpMbpsLimit;

    /**
     * @var integer other协议限速，取值范围[0,4294967295]
     */
    public $DOtherMbpsLimit;

    /**
     * @param integer $DropTcp 禁用TCP协议，取值范围[0,1]
     * @param integer $DropUdp 禁用UDP协议，取值范围[0,1]
     * @param integer $DropIcmp 禁用ICMP协议，取值范围[0,1]
     * @param integer $DropOther 禁用其他协议，取值范围[0,1]
     * @param integer $DropAbroad 拒绝海外流量，取值范围[0,1]
     * @param integer $CheckSyncConn 空连接防护，取值范围[0,1]
     * @param integer $SdNewLimit 基于来源IP及目的IP的新建连接抑制，取值范围[0,4294967295]
     * @param integer $DstNewLimit 基于目的IP的新建连接抑制，取值范围[0,4294967295]
     * @param integer $SdConnLimit 基于来源IP及目的IP的并发连接抑制，取值范围[0,4294967295]
     * @param integer $DstConnLimit 基于目的IP的并发连接抑制，取值范围[0,4294967295]
     * @param integer $BadConnThreshold 基于连接抑制触发阈值，取值范围[0,4294967295]
     * @param integer $NullConnEnable 异常连接检测条件，空连接防护开关，，取值范围[0,1]
     * @param integer $ConnTimeout 异常连接检测条件，连接超时，，取值范围[0,65535]
     * @param integer $SynRate 异常连接检测条件，syn占比ack百分比，，取值范围[0,100]
     * @param integer $SynLimit 异常连接检测条件，syn阈值，取值范围[0,100]
     * @param integer $DTcpMbpsLimit tcp限速，取值范围[0,4294967295]
     * @param integer $DUdpMbpsLimit udp限速，取值范围[0,4294967295]
     * @param integer $DIcmpMbpsLimit icmp限速，取值范围[0,4294967295]
     * @param integer $DOtherMbpsLimit other协议限速，取值范围[0,4294967295]
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
        if (array_key_exists("DropTcp",$param) and $param["DropTcp"] !== null) {
            $this->DropTcp = $param["DropTcp"];
        }

        if (array_key_exists("DropUdp",$param) and $param["DropUdp"] !== null) {
            $this->DropUdp = $param["DropUdp"];
        }

        if (array_key_exists("DropIcmp",$param) and $param["DropIcmp"] !== null) {
            $this->DropIcmp = $param["DropIcmp"];
        }

        if (array_key_exists("DropOther",$param) and $param["DropOther"] !== null) {
            $this->DropOther = $param["DropOther"];
        }

        if (array_key_exists("DropAbroad",$param) and $param["DropAbroad"] !== null) {
            $this->DropAbroad = $param["DropAbroad"];
        }

        if (array_key_exists("CheckSyncConn",$param) and $param["CheckSyncConn"] !== null) {
            $this->CheckSyncConn = $param["CheckSyncConn"];
        }

        if (array_key_exists("SdNewLimit",$param) and $param["SdNewLimit"] !== null) {
            $this->SdNewLimit = $param["SdNewLimit"];
        }

        if (array_key_exists("DstNewLimit",$param) and $param["DstNewLimit"] !== null) {
            $this->DstNewLimit = $param["DstNewLimit"];
        }

        if (array_key_exists("SdConnLimit",$param) and $param["SdConnLimit"] !== null) {
            $this->SdConnLimit = $param["SdConnLimit"];
        }

        if (array_key_exists("DstConnLimit",$param) and $param["DstConnLimit"] !== null) {
            $this->DstConnLimit = $param["DstConnLimit"];
        }

        if (array_key_exists("BadConnThreshold",$param) and $param["BadConnThreshold"] !== null) {
            $this->BadConnThreshold = $param["BadConnThreshold"];
        }

        if (array_key_exists("NullConnEnable",$param) and $param["NullConnEnable"] !== null) {
            $this->NullConnEnable = $param["NullConnEnable"];
        }

        if (array_key_exists("ConnTimeout",$param) and $param["ConnTimeout"] !== null) {
            $this->ConnTimeout = $param["ConnTimeout"];
        }

        if (array_key_exists("SynRate",$param) and $param["SynRate"] !== null) {
            $this->SynRate = $param["SynRate"];
        }

        if (array_key_exists("SynLimit",$param) and $param["SynLimit"] !== null) {
            $this->SynLimit = $param["SynLimit"];
        }

        if (array_key_exists("DTcpMbpsLimit",$param) and $param["DTcpMbpsLimit"] !== null) {
            $this->DTcpMbpsLimit = $param["DTcpMbpsLimit"];
        }

        if (array_key_exists("DUdpMbpsLimit",$param) and $param["DUdpMbpsLimit"] !== null) {
            $this->DUdpMbpsLimit = $param["DUdpMbpsLimit"];
        }

        if (array_key_exists("DIcmpMbpsLimit",$param) and $param["DIcmpMbpsLimit"] !== null) {
            $this->DIcmpMbpsLimit = $param["DIcmpMbpsLimit"];
        }

        if (array_key_exists("DOtherMbpsLimit",$param) and $param["DOtherMbpsLimit"] !== null) {
            $this->DOtherMbpsLimit = $param["DOtherMbpsLimit"];
        }
    }
}
