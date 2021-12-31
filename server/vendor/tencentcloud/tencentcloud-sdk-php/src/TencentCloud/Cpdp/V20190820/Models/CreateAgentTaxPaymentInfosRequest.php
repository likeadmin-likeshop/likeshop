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
 * CreateAgentTaxPaymentInfos请求参数结构体
 *
 * @method string getAgentId() 获取代理商ID
 * @method void setAgentId(string $AgentId) 设置代理商ID
 * @method integer getChannel() 获取平台渠道
 * @method void setChannel(integer $Channel) 设置平台渠道
 * @method integer getType() 获取类型。0-视同，1-个体工商户
 * @method void setType(integer $Type) 设置类型。0-视同，1-个体工商户
 * @method string getRawElectronicCertUrl() 获取源电子凭证下载地址
 * @method void setRawElectronicCertUrl(string $RawElectronicCertUrl) 设置源电子凭证下载地址
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method array getAgentTaxPaymentInfos() 获取完税信息
 * @method void setAgentTaxPaymentInfos(array $AgentTaxPaymentInfos) 设置完税信息
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox
 */
class CreateAgentTaxPaymentInfosRequest extends AbstractModel
{
    /**
     * @var string 代理商ID
     */
    public $AgentId;

    /**
     * @var integer 平台渠道
     */
    public $Channel;

    /**
     * @var integer 类型。0-视同，1-个体工商户
     */
    public $Type;

    /**
     * @var string 源电子凭证下载地址
     */
    public $RawElectronicCertUrl;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var array 完税信息
     */
    public $AgentTaxPaymentInfos;

    /**
     * @var string 接入环境。沙箱环境填sandbox
     */
    public $Profile;

    /**
     * @param string $AgentId 代理商ID
     * @param integer $Channel 平台渠道
     * @param integer $Type 类型。0-视同，1-个体工商户
     * @param string $RawElectronicCertUrl 源电子凭证下载地址
     * @param string $FileName 文件名
     * @param array $AgentTaxPaymentInfos 完税信息
     * @param string $Profile 接入环境。沙箱环境填sandbox
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RawElectronicCertUrl",$param) and $param["RawElectronicCertUrl"] !== null) {
            $this->RawElectronicCertUrl = $param["RawElectronicCertUrl"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("AgentTaxPaymentInfos",$param) and $param["AgentTaxPaymentInfos"] !== null) {
            $this->AgentTaxPaymentInfos = [];
            foreach ($param["AgentTaxPaymentInfos"] as $key => $value){
                $obj = new AgentTaxPayment();
                $obj->deserialize($value);
                array_push($this->AgentTaxPaymentInfos, $obj);
            }
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
