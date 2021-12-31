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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDiagnoseReport返回参数结构体
 *
 * @method DiagnoseData getBaskInfo() 获取诊断报告基础信息
 * @method void setBaskInfo(DiagnoseData $BaskInfo) 设置诊断报告基础信息
 * @method DiagnoseData getCnameInfo() 获取CNAME检测信息
 * @method void setCnameInfo(DiagnoseData $CnameInfo) 设置CNAME检测信息
 * @method DiagnoseData getClientInfo() 获取客户端检测信息
 * @method void setClientInfo(DiagnoseData $ClientInfo) 设置客户端检测信息
 * @method DiagnoseData getDnsInfo() 获取DNS检测信息
 * @method void setDnsInfo(DiagnoseData $DnsInfo) 设置DNS检测信息
 * @method DiagnoseData getNetworkInfo() 获取网络检测信息
 * @method void setNetworkInfo(DiagnoseData $NetworkInfo) 设置网络检测信息
 * @method DiagnoseData getOcNodeInfo() 获取边缘节点检测信息
 * @method void setOcNodeInfo(DiagnoseData $OcNodeInfo) 设置边缘节点检测信息
 * @method DiagnoseData getMidNodeInfo() 获取中间源节点检测信息
 * @method void setMidNodeInfo(DiagnoseData $MidNodeInfo) 设置中间源节点检测信息
 * @method DiagnoseData getOriginInfo() 获取源站检测信息
 * @method void setOriginInfo(DiagnoseData $OriginInfo) 设置源站检测信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDiagnoseReportResponse extends AbstractModel
{
    /**
     * @var DiagnoseData 诊断报告基础信息
     */
    public $BaskInfo;

    /**
     * @var DiagnoseData CNAME检测信息
     */
    public $CnameInfo;

    /**
     * @var DiagnoseData 客户端检测信息
     */
    public $ClientInfo;

    /**
     * @var DiagnoseData DNS检测信息
     */
    public $DnsInfo;

    /**
     * @var DiagnoseData 网络检测信息
     */
    public $NetworkInfo;

    /**
     * @var DiagnoseData 边缘节点检测信息
     */
    public $OcNodeInfo;

    /**
     * @var DiagnoseData 中间源节点检测信息
     */
    public $MidNodeInfo;

    /**
     * @var DiagnoseData 源站检测信息
     */
    public $OriginInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param DiagnoseData $BaskInfo 诊断报告基础信息
     * @param DiagnoseData $CnameInfo CNAME检测信息
     * @param DiagnoseData $ClientInfo 客户端检测信息
     * @param DiagnoseData $DnsInfo DNS检测信息
     * @param DiagnoseData $NetworkInfo 网络检测信息
     * @param DiagnoseData $OcNodeInfo 边缘节点检测信息
     * @param DiagnoseData $MidNodeInfo 中间源节点检测信息
     * @param DiagnoseData $OriginInfo 源站检测信息
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
        if (array_key_exists("BaskInfo",$param) and $param["BaskInfo"] !== null) {
            $this->BaskInfo = new DiagnoseData();
            $this->BaskInfo->deserialize($param["BaskInfo"]);
        }

        if (array_key_exists("CnameInfo",$param) and $param["CnameInfo"] !== null) {
            $this->CnameInfo = new DiagnoseData();
            $this->CnameInfo->deserialize($param["CnameInfo"]);
        }

        if (array_key_exists("ClientInfo",$param) and $param["ClientInfo"] !== null) {
            $this->ClientInfo = new DiagnoseData();
            $this->ClientInfo->deserialize($param["ClientInfo"]);
        }

        if (array_key_exists("DnsInfo",$param) and $param["DnsInfo"] !== null) {
            $this->DnsInfo = new DiagnoseData();
            $this->DnsInfo->deserialize($param["DnsInfo"]);
        }

        if (array_key_exists("NetworkInfo",$param) and $param["NetworkInfo"] !== null) {
            $this->NetworkInfo = new DiagnoseData();
            $this->NetworkInfo->deserialize($param["NetworkInfo"]);
        }

        if (array_key_exists("OcNodeInfo",$param) and $param["OcNodeInfo"] !== null) {
            $this->OcNodeInfo = new DiagnoseData();
            $this->OcNodeInfo->deserialize($param["OcNodeInfo"]);
        }

        if (array_key_exists("MidNodeInfo",$param) and $param["MidNodeInfo"] !== null) {
            $this->MidNodeInfo = new DiagnoseData();
            $this->MidNodeInfo->deserialize($param["MidNodeInfo"]);
        }

        if (array_key_exists("OriginInfo",$param) and $param["OriginInfo"] !== null) {
            $this->OriginInfo = new DiagnoseData();
            $this->OriginInfo->deserialize($param["OriginInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
