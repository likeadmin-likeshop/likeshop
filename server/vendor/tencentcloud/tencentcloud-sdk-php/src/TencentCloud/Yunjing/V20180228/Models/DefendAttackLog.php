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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络攻击日志
 *
 * @method integer getId() 获取日志ID
 * @method void setId(integer $Id) 设置日志ID
 * @method string getUuid() 获取客户端ID
 * @method void setUuid(string $Uuid) 设置客户端ID
 * @method string getSrcIp() 获取来源IP
 * @method void setSrcIp(string $SrcIp) 设置来源IP
 * @method integer getSrcPort() 获取来源端口
 * @method void setSrcPort(integer $SrcPort) 设置来源端口
 * @method string getHttpMethod() 获取攻击方式
 * @method void setHttpMethod(string $HttpMethod) 设置攻击方式
 * @method string getHttpCgi() 获取攻击描述
 * @method void setHttpCgi(string $HttpCgi) 设置攻击描述
 * @method string getHttpParam() 获取攻击参数
 * @method void setHttpParam(string $HttpParam) 设置攻击参数
 * @method string getVulType() 获取威胁类型
 * @method void setVulType(string $VulType) 设置威胁类型
 * @method string getCreatedAt() 获取攻击时间
 * @method void setCreatedAt(string $CreatedAt) 设置攻击时间
 * @method string getMachineIp() 获取目标服务器IP
 * @method void setMachineIp(string $MachineIp) 设置目标服务器IP
 * @method string getMachineName() 获取目标服务器名称
 * @method void setMachineName(string $MachineName) 设置目标服务器名称
 * @method string getDstIp() 获取目标IP
 * @method void setDstIp(string $DstIp) 设置目标IP
 * @method integer getDstPort() 获取目标端口
 * @method void setDstPort(integer $DstPort) 设置目标端口
 * @method string getHttpContent() 获取攻击内容
 * @method void setHttpContent(string $HttpContent) 设置攻击内容
 */
class DefendAttackLog extends AbstractModel
{
    /**
     * @var integer 日志ID
     */
    public $Id;

    /**
     * @var string 客户端ID
     */
    public $Uuid;

    /**
     * @var string 来源IP
     */
    public $SrcIp;

    /**
     * @var integer 来源端口
     */
    public $SrcPort;

    /**
     * @var string 攻击方式
     */
    public $HttpMethod;

    /**
     * @var string 攻击描述
     */
    public $HttpCgi;

    /**
     * @var string 攻击参数
     */
    public $HttpParam;

    /**
     * @var string 威胁类型
     */
    public $VulType;

    /**
     * @var string 攻击时间
     */
    public $CreatedAt;

    /**
     * @var string 目标服务器IP
     */
    public $MachineIp;

    /**
     * @var string 目标服务器名称
     */
    public $MachineName;

    /**
     * @var string 目标IP
     */
    public $DstIp;

    /**
     * @var integer 目标端口
     */
    public $DstPort;

    /**
     * @var string 攻击内容
     */
    public $HttpContent;

    /**
     * @param integer $Id 日志ID
     * @param string $Uuid 客户端ID
     * @param string $SrcIp 来源IP
     * @param integer $SrcPort 来源端口
     * @param string $HttpMethod 攻击方式
     * @param string $HttpCgi 攻击描述
     * @param string $HttpParam 攻击参数
     * @param string $VulType 威胁类型
     * @param string $CreatedAt 攻击时间
     * @param string $MachineIp 目标服务器IP
     * @param string $MachineName 目标服务器名称
     * @param string $DstIp 目标IP
     * @param integer $DstPort 目标端口
     * @param string $HttpContent 攻击内容
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("SrcPort",$param) and $param["SrcPort"] !== null) {
            $this->SrcPort = $param["SrcPort"];
        }

        if (array_key_exists("HttpMethod",$param) and $param["HttpMethod"] !== null) {
            $this->HttpMethod = $param["HttpMethod"];
        }

        if (array_key_exists("HttpCgi",$param) and $param["HttpCgi"] !== null) {
            $this->HttpCgi = $param["HttpCgi"];
        }

        if (array_key_exists("HttpParam",$param) and $param["HttpParam"] !== null) {
            $this->HttpParam = $param["HttpParam"];
        }

        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("HttpContent",$param) and $param["HttpContent"] !== null) {
            $this->HttpContent = $param["HttpContent"];
        }
    }
}
