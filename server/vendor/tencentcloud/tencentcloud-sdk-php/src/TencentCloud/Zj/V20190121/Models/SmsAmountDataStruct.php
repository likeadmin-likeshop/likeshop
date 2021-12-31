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
 * 短信子账号额度接口出参
 *
 * @method integer getSmsCampaignAmount() 获取短信活动配额
 * @method void setSmsCampaignAmount(integer $SmsCampaignAmount) 设置短信活动配额
 * @method integer getSmsCampaignConsume() 获取短信活动消耗配额
 * @method void setSmsCampaignConsume(integer $SmsCampaignConsume) 设置短信活动消耗配额
 * @method integer getSmsSendAmount() 获取短信发送额度
 * @method void setSmsSendAmount(integer $SmsSendAmount) 设置短信发送额度
 * @method integer getSmsSendConsume() 获取短信发送消耗额度
 * @method void setSmsSendConsume(integer $SmsSendConsume) 设置短信发送消耗额度
 * @method integer getMmsCampaignAmount() 获取超短活动额度
 * @method void setMmsCampaignAmount(integer $MmsCampaignAmount) 设置超短活动额度
 * @method integer getMmsCampaignConsume() 获取超短活动消耗额度
 * @method void setMmsCampaignConsume(integer $MmsCampaignConsume) 设置超短活动消耗额度
 * @method integer getMmsSendAmount() 获取超短短信额度
 * @method void setMmsSendAmount(integer $MmsSendAmount) 设置超短短信额度
 * @method integer getMmsSendConsume() 获取超短短信消耗额度
 * @method void setMmsSendConsume(integer $MmsSendConsume) 设置超短短信消耗额度
 */
class SmsAmountDataStruct extends AbstractModel
{
    /**
     * @var integer 短信活动配额
     */
    public $SmsCampaignAmount;

    /**
     * @var integer 短信活动消耗配额
     */
    public $SmsCampaignConsume;

    /**
     * @var integer 短信发送额度
     */
    public $SmsSendAmount;

    /**
     * @var integer 短信发送消耗额度
     */
    public $SmsSendConsume;

    /**
     * @var integer 超短活动额度
     */
    public $MmsCampaignAmount;

    /**
     * @var integer 超短活动消耗额度
     */
    public $MmsCampaignConsume;

    /**
     * @var integer 超短短信额度
     */
    public $MmsSendAmount;

    /**
     * @var integer 超短短信消耗额度
     */
    public $MmsSendConsume;

    /**
     * @param integer $SmsCampaignAmount 短信活动配额
     * @param integer $SmsCampaignConsume 短信活动消耗配额
     * @param integer $SmsSendAmount 短信发送额度
     * @param integer $SmsSendConsume 短信发送消耗额度
     * @param integer $MmsCampaignAmount 超短活动额度
     * @param integer $MmsCampaignConsume 超短活动消耗额度
     * @param integer $MmsSendAmount 超短短信额度
     * @param integer $MmsSendConsume 超短短信消耗额度
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
        if (array_key_exists("SmsCampaignAmount",$param) and $param["SmsCampaignAmount"] !== null) {
            $this->SmsCampaignAmount = $param["SmsCampaignAmount"];
        }

        if (array_key_exists("SmsCampaignConsume",$param) and $param["SmsCampaignConsume"] !== null) {
            $this->SmsCampaignConsume = $param["SmsCampaignConsume"];
        }

        if (array_key_exists("SmsSendAmount",$param) and $param["SmsSendAmount"] !== null) {
            $this->SmsSendAmount = $param["SmsSendAmount"];
        }

        if (array_key_exists("SmsSendConsume",$param) and $param["SmsSendConsume"] !== null) {
            $this->SmsSendConsume = $param["SmsSendConsume"];
        }

        if (array_key_exists("MmsCampaignAmount",$param) and $param["MmsCampaignAmount"] !== null) {
            $this->MmsCampaignAmount = $param["MmsCampaignAmount"];
        }

        if (array_key_exists("MmsCampaignConsume",$param) and $param["MmsCampaignConsume"] !== null) {
            $this->MmsCampaignConsume = $param["MmsCampaignConsume"];
        }

        if (array_key_exists("MmsSendAmount",$param) and $param["MmsSendAmount"] !== null) {
            $this->MmsSendAmount = $param["MmsSendAmount"];
        }

        if (array_key_exists("MmsSendConsume",$param) and $param["MmsSendConsume"] !== null) {
            $this->MmsSendConsume = $param["MmsSendConsume"];
        }
    }
}
