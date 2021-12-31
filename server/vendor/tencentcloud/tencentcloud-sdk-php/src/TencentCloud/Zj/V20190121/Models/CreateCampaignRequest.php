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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCampaign请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method integer getSendTime() 获取短信活动发送时间
 * @method void setSendTime(integer $SendTime) 设置短信活动发送时间
 * @method string getName() 获取短信活动名称
 * @method void setName(string $Name) 设置短信活动名称
 * @method array getStrategies() 获取发送策略
 * @method void setStrategies(array $Strategies) 设置发送策略
 * @method integer getTemplateId() 获取废弃
 * @method void setTemplateId(integer $TemplateId) 设置废弃
 * @method integer getCrowdID() 获取废弃
 * @method void setCrowdID(integer $CrowdID) 设置废弃
 * @method integer getSmsType() 获取活动类型(0-短信,1-超短,不填默认为超短)
 * @method void setSmsType(integer $SmsType) 设置活动类型(0-短信,1-超短,不填默认为超短)
 */
class CreateCampaignRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var integer 短信活动发送时间
     */
    public $SendTime;

    /**
     * @var string 短信活动名称
     */
    public $Name;

    /**
     * @var array 发送策略
     */
    public $Strategies;

    /**
     * @var integer 废弃
     */
    public $TemplateId;

    /**
     * @var integer 废弃
     */
    public $CrowdID;

    /**
     * @var integer 活动类型(0-短信,1-超短,不填默认为超短)
     */
    public $SmsType;

    /**
     * @param string $License 商户证书
     * @param integer $SendTime 短信活动发送时间
     * @param string $Name 短信活动名称
     * @param array $Strategies 发送策略
     * @param integer $TemplateId 废弃
     * @param integer $CrowdID 废弃
     * @param integer $SmsType 活动类型(0-短信,1-超短,不填默认为超短)
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
        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("SendTime",$param) and $param["SendTime"] !== null) {
            $this->SendTime = $param["SendTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new PaasStrategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("CrowdID",$param) and $param["CrowdID"] !== null) {
            $this->CrowdID = $param["CrowdID"];
        }

        if (array_key_exists("SmsType",$param) and $param["SmsType"] !== null) {
            $this->SmsType = $param["SmsType"];
        }
    }
}
