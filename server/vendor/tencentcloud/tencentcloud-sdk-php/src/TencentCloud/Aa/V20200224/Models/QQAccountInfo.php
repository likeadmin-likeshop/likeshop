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
 * QQ账号信息。
 *
 * @method string getQQOpenId() 获取QQ的OpenID。
 * @method void setQQOpenId(string $QQOpenId) 设置QQ的OpenID。
 * @method string getAppIdUser() 获取QQ分配给网站或应用的AppId，用来唯一标识网站或应用。
 * @method void setAppIdUser(string $AppIdUser) 设置QQ分配给网站或应用的AppId，用来唯一标识网站或应用。
 * @method string getAssociateAccount() 获取用于标识QQ用户登录后所关联业务自身的账号ID。
 * @method void setAssociateAccount(string $AssociateAccount) 设置用于标识QQ用户登录后所关联业务自身的账号ID。
 * @method string getMobilePhone() 获取账号绑定的手机号。
 * @method void setMobilePhone(string $MobilePhone) 设置账号绑定的手机号。
 * @method string getDeviceId() 获取用户设备号。
 * @method void setDeviceId(string $DeviceId) 设置用户设备号。
 */
class QQAccountInfo extends AbstractModel
{
    /**
     * @var string QQ的OpenID。
     */
    public $QQOpenId;

    /**
     * @var string QQ分配给网站或应用的AppId，用来唯一标识网站或应用。
     */
    public $AppIdUser;

    /**
     * @var string 用于标识QQ用户登录后所关联业务自身的账号ID。
     */
    public $AssociateAccount;

    /**
     * @var string 账号绑定的手机号。
     */
    public $MobilePhone;

    /**
     * @var string 用户设备号。
     */
    public $DeviceId;

    /**
     * @param string $QQOpenId QQ的OpenID。
     * @param string $AppIdUser QQ分配给网站或应用的AppId，用来唯一标识网站或应用。
     * @param string $AssociateAccount 用于标识QQ用户登录后所关联业务自身的账号ID。
     * @param string $MobilePhone 账号绑定的手机号。
     * @param string $DeviceId 用户设备号。
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
        if (array_key_exists("QQOpenId",$param) and $param["QQOpenId"] !== null) {
            $this->QQOpenId = $param["QQOpenId"];
        }

        if (array_key_exists("AppIdUser",$param) and $param["AppIdUser"] !== null) {
            $this->AppIdUser = $param["AppIdUser"];
        }

        if (array_key_exists("AssociateAccount",$param) and $param["AssociateAccount"] !== null) {
            $this->AssociateAccount = $param["AssociateAccount"];
        }

        if (array_key_exists("MobilePhone",$param) and $param["MobilePhone"] !== null) {
            $this->MobilePhone = $param["MobilePhone"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}
