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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method string getNick() 获取用户昵称
 * @method void setNick(string $Nick) 设置用户昵称
 * @method integer getId() 获取用户ID
 * @method void setId(integer $Id) 设置用户ID
 * @method string getEmail() 获取用户账号, 邮箱格式
 * @method void setEmail(string $Email) 设置用户账号, 邮箱格式
 * @method string getStatus() 获取账号状态：”enabled”: 正常；”disabled”: 被封禁
 * @method void setStatus(string $Status) 设置账号状态：”enabled”: 正常；”disabled”: 被封禁
 * @method string getTelephone() 获取电话号码
 * @method void setTelephone(string $Telephone) 设置电话号码
 * @method string getEmailVerified() 获取邮箱是否通过验证：”yes”: 通过；”no”: 未通过
 * @method void setEmailVerified(string $EmailVerified) 设置邮箱是否通过验证：”yes”: 通过；”no”: 未通过
 * @method string getTelephoneVerified() 获取手机是否通过验证：”yes”: 通过；”no”: 未通过
 * @method void setTelephoneVerified(string $TelephoneVerified) 设置手机是否通过验证：”yes”: 通过；”no”: 未通过
 * @method string getUserGrade() 获取账号等级, 按照用户账号下域名等级排序, 选取一个最高等级为账号等级, 具体对应情况参见域名等级。
 * @method void setUserGrade(string $UserGrade) 设置账号等级, 按照用户账号下域名等级排序, 选取一个最高等级为账号等级, 具体对应情况参见域名等级。
 * @method string getRealName() 获取用户名称, 企业用户对应为公司名称
 * @method void setRealName(string $RealName) 设置用户名称, 企业用户对应为公司名称
 * @method string getWechatBinded() 获取是否绑定微信：”yes”: 通过；”no”: 未通过
 * @method void setWechatBinded(string $WechatBinded) 设置是否绑定微信：”yes”: 通过；”no”: 未通过
 * @method integer getUin() 获取用户UIN
 * @method void setUin(integer $Uin) 设置用户UIN
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 用户昵称
     */
    public $Nick;

    /**
     * @var integer 用户ID
     */
    public $Id;

    /**
     * @var string 用户账号, 邮箱格式
     */
    public $Email;

    /**
     * @var string 账号状态：”enabled”: 正常；”disabled”: 被封禁
     */
    public $Status;

    /**
     * @var string 电话号码
     */
    public $Telephone;

    /**
     * @var string 邮箱是否通过验证：”yes”: 通过；”no”: 未通过
     */
    public $EmailVerified;

    /**
     * @var string 手机是否通过验证：”yes”: 通过；”no”: 未通过
     */
    public $TelephoneVerified;

    /**
     * @var string 账号等级, 按照用户账号下域名等级排序, 选取一个最高等级为账号等级, 具体对应情况参见域名等级。
     */
    public $UserGrade;

    /**
     * @var string 用户名称, 企业用户对应为公司名称
     */
    public $RealName;

    /**
     * @var string 是否绑定微信：”yes”: 通过；”no”: 未通过
     */
    public $WechatBinded;

    /**
     * @var integer 用户UIN
     */
    public $Uin;

    /**
     * @param string $Nick 用户昵称
     * @param integer $Id 用户ID
     * @param string $Email 用户账号, 邮箱格式
     * @param string $Status 账号状态：”enabled”: 正常；”disabled”: 被封禁
     * @param string $Telephone 电话号码
     * @param string $EmailVerified 邮箱是否通过验证：”yes”: 通过；”no”: 未通过
     * @param string $TelephoneVerified 手机是否通过验证：”yes”: 通过；”no”: 未通过
     * @param string $UserGrade 账号等级, 按照用户账号下域名等级排序, 选取一个最高等级为账号等级, 具体对应情况参见域名等级。
     * @param string $RealName 用户名称, 企业用户对应为公司名称
     * @param string $WechatBinded 是否绑定微信：”yes”: 通过；”no”: 未通过
     * @param integer $Uin 用户UIN
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
        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("EmailVerified",$param) and $param["EmailVerified"] !== null) {
            $this->EmailVerified = $param["EmailVerified"];
        }

        if (array_key_exists("TelephoneVerified",$param) and $param["TelephoneVerified"] !== null) {
            $this->TelephoneVerified = $param["TelephoneVerified"];
        }

        if (array_key_exists("UserGrade",$param) and $param["UserGrade"] !== null) {
            $this->UserGrade = $param["UserGrade"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("WechatBinded",$param) and $param["WechatBinded"] !== null) {
            $this->WechatBinded = $param["WechatBinded"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
