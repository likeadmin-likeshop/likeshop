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
namespace TencentCloud\Aa\V20200224\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网赚防刷相关参数
 *
 * @method string getSponsorOpenId() 获取助力场景建议填写：活动发起人微信OpenID。
 * @method void setSponsorOpenId(string $SponsorOpenId) 设置助力场景建议填写：活动发起人微信OpenID。
 * @method string getSponsorDeviceNumber() 获取助力场景建议填写：发起人设备号。
 * @method void setSponsorDeviceNumber(string $SponsorDeviceNumber) 设置助力场景建议填写：发起人设备号。
 * @method string getSponsorPhone() 获取助力场景建议填写：发起人手机号。
 * @method void setSponsorPhone(string $SponsorPhone) 设置助力场景建议填写：发起人手机号。
 * @method string getSponsorIp() 获取助力场景建议填写：发起人IP。
 * @method void setSponsorIp(string $SponsorIp) 设置助力场景建议填写：发起人IP。
 * @method string getCampaignUrl() 获取助力场景建议填写：活动链接。
 * @method void setCampaignUrl(string $CampaignUrl) 设置助力场景建议填写：活动链接。
 */
class CrowdAntiRushInfo extends AbstractModel
{
    /**
     * @var string 助力场景建议填写：活动发起人微信OpenID。
     */
    public $SponsorOpenId;

    /**
     * @var string 助力场景建议填写：发起人设备号。
     */
    public $SponsorDeviceNumber;

    /**
     * @var string 助力场景建议填写：发起人手机号。
     */
    public $SponsorPhone;

    /**
     * @var string 助力场景建议填写：发起人IP。
     */
    public $SponsorIp;

    /**
     * @var string 助力场景建议填写：活动链接。
     */
    public $CampaignUrl;

    /**
     * @param string $SponsorOpenId 助力场景建议填写：活动发起人微信OpenID。
     * @param string $SponsorDeviceNumber 助力场景建议填写：发起人设备号。
     * @param string $SponsorPhone 助力场景建议填写：发起人手机号。
     * @param string $SponsorIp 助力场景建议填写：发起人IP。
     * @param string $CampaignUrl 助力场景建议填写：活动链接。
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
        if (array_key_exists("SponsorOpenId",$param) and $param["SponsorOpenId"] !== null) {
            $this->SponsorOpenId = $param["SponsorOpenId"];
        }

        if (array_key_exists("SponsorDeviceNumber",$param) and $param["SponsorDeviceNumber"] !== null) {
            $this->SponsorDeviceNumber = $param["SponsorDeviceNumber"];
        }

        if (array_key_exists("SponsorPhone",$param) and $param["SponsorPhone"] !== null) {
            $this->SponsorPhone = $param["SponsorPhone"];
        }

        if (array_key_exists("SponsorIp",$param) and $param["SponsorIp"] !== null) {
            $this->SponsorIp = $param["SponsorIp"];
        }

        if (array_key_exists("CampaignUrl",$param) and $param["CampaignUrl"] !== null) {
            $this->CampaignUrl = $param["CampaignUrl"];
        }
    }
}
