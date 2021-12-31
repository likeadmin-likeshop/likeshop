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
 * DescribeAttackLogInfo返回参数结构体
 *
 * @method integer getId() 获取日志ID
 * @method void setId(integer $Id) 设置日志ID
 * @method string getQuuid() 获取主机ID
 * @method void setQuuid(string $Quuid) 设置主机ID
 * @method integer getSrcPort() 获取攻击来源端口
 * @method void setSrcPort(integer $SrcPort) 设置攻击来源端口
 * @method string getSrcIp() 获取攻击来源IP
 * @method void setSrcIp(string $SrcIp) 设置攻击来源IP
 * @method integer getDstPort() 获取攻击目标端口
 * @method void setDstPort(integer $DstPort) 设置攻击目标端口
 * @method string getDstIp() 获取攻击目标IP
 * @method void setDstIp(string $DstIp) 设置攻击目标IP
 * @method string getHttpMethod() 获取攻击方法
 * @method void setHttpMethod(string $HttpMethod) 设置攻击方法
 * @method string getHttpHost() 获取攻击目标主机
 * @method void setHttpHost(string $HttpHost) 设置攻击目标主机
 * @method string getHttpHead() 获取攻击头信息
 * @method void setHttpHead(string $HttpHead) 设置攻击头信息
 * @method string getHttpUserAgent() 获取攻击者浏览器标识
 * @method void setHttpUserAgent(string $HttpUserAgent) 设置攻击者浏览器标识
 * @method string getHttpReferer() 获取请求源
 * @method void setHttpReferer(string $HttpReferer) 设置请求源
 * @method string getVulType() 获取威胁类型
 * @method void setVulType(string $VulType) 设置威胁类型
 * @method string getHttpCgi() 获取攻击路径
 * @method void setHttpCgi(string $HttpCgi) 设置攻击路径
 * @method string getHttpParam() 获取攻击参数
 * @method void setHttpParam(string $HttpParam) 设置攻击参数
 * @method string getCreatedAt() 获取攻击时间
 * @method void setCreatedAt(string $CreatedAt) 设置攻击时间
 * @method string getHttpContent() 获取攻击内容
 * @method void setHttpContent(string $HttpContent) 设置攻击内容
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAttackLogInfoResponse extends AbstractModel
{
    /**
     * @var integer 日志ID
     */
    public $Id;

    /**
     * @var string 主机ID
     */
    public $Quuid;

    /**
     * @var integer 攻击来源端口
     */
    public $SrcPort;

    /**
     * @var string 攻击来源IP
     */
    public $SrcIp;

    /**
     * @var integer 攻击目标端口
     */
    public $DstPort;

    /**
     * @var string 攻击目标IP
     */
    public $DstIp;

    /**
     * @var string 攻击方法
     */
    public $HttpMethod;

    /**
     * @var string 攻击目标主机
     */
    public $HttpHost;

    /**
     * @var string 攻击头信息
     */
    public $HttpHead;

    /**
     * @var string 攻击者浏览器标识
     */
    public $HttpUserAgent;

    /**
     * @var string 请求源
     */
    public $HttpReferer;

    /**
     * @var string 威胁类型
     */
    public $VulType;

    /**
     * @var string 攻击路径
     */
    public $HttpCgi;

    /**
     * @var string 攻击参数
     */
    public $HttpParam;

    /**
     * @var string 攻击时间
     */
    public $CreatedAt;

    /**
     * @var string 攻击内容
     */
    public $HttpContent;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id 日志ID
     * @param string $Quuid 主机ID
     * @param integer $SrcPort 攻击来源端口
     * @param string $SrcIp 攻击来源IP
     * @param integer $DstPort 攻击目标端口
     * @param string $DstIp 攻击目标IP
     * @param string $HttpMethod 攻击方法
     * @param string $HttpHost 攻击目标主机
     * @param string $HttpHead 攻击头信息
     * @param string $HttpUserAgent 攻击者浏览器标识
     * @param string $HttpReferer 请求源
     * @param string $VulType 威胁类型
     * @param string $HttpCgi 攻击路径
     * @param string $HttpParam 攻击参数
     * @param string $CreatedAt 攻击时间
     * @param string $HttpContent 攻击内容
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("SrcPort",$param) and $param["SrcPort"] !== null) {
            $this->SrcPort = $param["SrcPort"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("HttpMethod",$param) and $param["HttpMethod"] !== null) {
            $this->HttpMethod = $param["HttpMethod"];
        }

        if (array_key_exists("HttpHost",$param) and $param["HttpHost"] !== null) {
            $this->HttpHost = $param["HttpHost"];
        }

        if (array_key_exists("HttpHead",$param) and $param["HttpHead"] !== null) {
            $this->HttpHead = $param["HttpHead"];
        }

        if (array_key_exists("HttpUserAgent",$param) and $param["HttpUserAgent"] !== null) {
            $this->HttpUserAgent = $param["HttpUserAgent"];
        }

        if (array_key_exists("HttpReferer",$param) and $param["HttpReferer"] !== null) {
            $this->HttpReferer = $param["HttpReferer"];
        }

        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("HttpCgi",$param) and $param["HttpCgi"] !== null) {
            $this->HttpCgi = $param["HttpCgi"];
        }

        if (array_key_exists("HttpParam",$param) and $param["HttpParam"] !== null) {
            $this->HttpParam = $param["HttpParam"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("HttpContent",$param) and $param["HttpContent"] !== null) {
            $this->HttpContent = $param["HttpContent"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
