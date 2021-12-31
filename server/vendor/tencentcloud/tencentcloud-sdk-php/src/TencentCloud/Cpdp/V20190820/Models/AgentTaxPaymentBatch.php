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
 * 代理商完税证明批次信息
 *
 * @method string getStatusMsg() 获取状态消息
 * @method void setStatusMsg(string $StatusMsg) 设置状态消息
 * @method integer getBatchNum() 获取批次号
 * @method void setBatchNum(integer $BatchNum) 设置批次号
 * @method integer getInfoNum() 获取录入记录的条数
 * @method void setInfoNum(integer $InfoNum) 设置录入记录的条数
 * @method string getRawElectronicCertUrl() 获取源电子凭证下载地址
 * @method void setRawElectronicCertUrl(string $RawElectronicCertUrl) 设置源电子凭证下载地址
 * @method string getAgentId() 获取代理商账号
 * @method void setAgentId(string $AgentId) 设置代理商账号
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getStatusCode() 获取状态码。0表示下载成功
 * @method void setStatusCode(integer $StatusCode) 设置状态码。0表示下载成功
 * @method integer getChannel() 获取渠道号
 * @method void setChannel(integer $Channel) 设置渠道号
 * @method integer getType() 获取0-视同，1-个体工商户
 * @method void setType(integer $Type) 设置0-视同，1-个体工商户
 */
class AgentTaxPaymentBatch extends AbstractModel
{
    /**
     * @var string 状态消息
     */
    public $StatusMsg;

    /**
     * @var integer 批次号
     */
    public $BatchNum;

    /**
     * @var integer 录入记录的条数
     */
    public $InfoNum;

    /**
     * @var string 源电子凭证下载地址
     */
    public $RawElectronicCertUrl;

    /**
     * @var string 代理商账号
     */
    public $AgentId;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 状态码。0表示下载成功
     */
    public $StatusCode;

    /**
     * @var integer 渠道号
     */
    public $Channel;

    /**
     * @var integer 0-视同，1-个体工商户
     */
    public $Type;

    /**
     * @param string $StatusMsg 状态消息
     * @param integer $BatchNum 批次号
     * @param integer $InfoNum 录入记录的条数
     * @param string $RawElectronicCertUrl 源电子凭证下载地址
     * @param string $AgentId 代理商账号
     * @param string $FileName 文件名
     * @param integer $StatusCode 状态码。0表示下载成功
     * @param integer $Channel 渠道号
     * @param integer $Type 0-视同，1-个体工商户
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
        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("BatchNum",$param) and $param["BatchNum"] !== null) {
            $this->BatchNum = $param["BatchNum"];
        }

        if (array_key_exists("InfoNum",$param) and $param["InfoNum"] !== null) {
            $this->InfoNum = $param["InfoNum"];
        }

        if (array_key_exists("RawElectronicCertUrl",$param) and $param["RawElectronicCertUrl"] !== null) {
            $this->RawElectronicCertUrl = $param["RawElectronicCertUrl"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
