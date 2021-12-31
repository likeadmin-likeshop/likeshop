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
namespace TencentCloud\Mvj\V20190926\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MarketingValueJudgement请求参数结构体
 *
 * @method integer getAccountType() 获取手机账号类型填写4
 * @method void setAccountType(integer $AccountType) 设置手机账号类型填写4
 * @method string getUid() 获取填写手机号码，如15317537488
 * @method void setUid(string $Uid) 设置填写手机号码，如15317537488
 * @method string getUserIp() 获取用户请求时的客户端外网IP
 * @method void setUserIp(string $UserIp) 设置用户请求时的客户端外网IP
 * @method integer getPostTime() 获取用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）
 * @method void setPostTime(integer $PostTime) 设置用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）
 * @method string getImei() 获取用户设备号imei/idfa(建议填写)
 * @method void setImei(string $Imei) 设置用户设备号imei/idfa(建议填写)
 * @method string getReferer() 获取活动链接(建议填写)
 * @method void setReferer(string $Referer) 设置活动链接(建议填写)
 */
class MarketingValueJudgementRequest extends AbstractModel
{
    /**
     * @var integer 手机账号类型填写4
     */
    public $AccountType;

    /**
     * @var string 填写手机号码，如15317537488
     */
    public $Uid;

    /**
     * @var string 用户请求时的客户端外网IP
     */
    public $UserIp;

    /**
     * @var integer 用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）
     */
    public $PostTime;

    /**
     * @var string 用户设备号imei/idfa(建议填写)
     */
    public $Imei;

    /**
     * @var string 活动链接(建议填写)
     */
    public $Referer;

    /**
     * @param integer $AccountType 手机账号类型填写4
     * @param string $Uid 填写手机号码，如15317537488
     * @param string $UserIp 用户请求时的客户端外网IP
     * @param integer $PostTime 用户操作时间戳，单位秒（格林威治时间精确到秒，如1501590972）
     * @param string $Imei 用户设备号imei/idfa(建议填写)
     * @param string $Referer 活动链接(建议填写)
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
        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = $param["Referer"];
        }
    }
}
