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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 邮件发送配置
 *
 * @method integer getSendMail() 获取是否开启邮件发送: 0, 否; 1, 是。
 * @method void setSendMail(integer $SendMail) 设置是否开启邮件发送: 0, 否; 1, 是。
 * @method array getRegion() 获取地域配置, 如["ap-guangzhou", "ap-shanghai"]。巡检的邮件发送模版，配置需要发送巡检邮件的地域；订阅的邮件发送模版，配置当前订阅实例的所属地域。
 * @method void setRegion(array $Region) 设置地域配置, 如["ap-guangzhou", "ap-shanghai"]。巡检的邮件发送模版，配置需要发送巡检邮件的地域；订阅的邮件发送模版，配置当前订阅实例的所属地域。
 * @method array getHealthStatus() 获取发送指定的健康等级的报告, 如["HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK"]。
 * @method void setHealthStatus(array $HealthStatus) 设置发送指定的健康等级的报告, 如["HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK"]。
 * @method array getContactPerson() 获取联系人id, 联系人/联系组不能都为空。
 * @method void setContactPerson(array $ContactPerson) 设置联系人id, 联系人/联系组不能都为空。
 * @method array getContactGroup() 获取联系组id, 联系人/联系组不能都为空。
 * @method void setContactGroup(array $ContactGroup) 设置联系组id, 联系人/联系组不能都为空。
 */
class MailConfiguration extends AbstractModel
{
    /**
     * @var integer 是否开启邮件发送: 0, 否; 1, 是。
     */
    public $SendMail;

    /**
     * @var array 地域配置, 如["ap-guangzhou", "ap-shanghai"]。巡检的邮件发送模版，配置需要发送巡检邮件的地域；订阅的邮件发送模版，配置当前订阅实例的所属地域。
     */
    public $Region;

    /**
     * @var array 发送指定的健康等级的报告, 如["HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK"]。
     */
    public $HealthStatus;

    /**
     * @var array 联系人id, 联系人/联系组不能都为空。
     */
    public $ContactPerson;

    /**
     * @var array 联系组id, 联系人/联系组不能都为空。
     */
    public $ContactGroup;

    /**
     * @param integer $SendMail 是否开启邮件发送: 0, 否; 1, 是。
     * @param array $Region 地域配置, 如["ap-guangzhou", "ap-shanghai"]。巡检的邮件发送模版，配置需要发送巡检邮件的地域；订阅的邮件发送模版，配置当前订阅实例的所属地域。
     * @param array $HealthStatus 发送指定的健康等级的报告, 如["HEALTH", "SUB_HEALTH", "RISK", "HIGH_RISK"]。
     * @param array $ContactPerson 联系人id, 联系人/联系组不能都为空。
     * @param array $ContactGroup 联系组id, 联系人/联系组不能都为空。
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
        if (array_key_exists("SendMail",$param) and $param["SendMail"] !== null) {
            $this->SendMail = $param["SendMail"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("ContactPerson",$param) and $param["ContactPerson"] !== null) {
            $this->ContactPerson = $param["ContactPerson"];
        }

        if (array_key_exists("ContactGroup",$param) and $param["ContactGroup"] !== null) {
            $this->ContactGroup = $param["ContactGroup"];
        }
    }
}
