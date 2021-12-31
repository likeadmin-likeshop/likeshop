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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录和敏感操作flag
 *
 * @method integer getPhone() 获取手机
 * @method void setPhone(integer $Phone) 设置手机
 * @method integer getStoken() 获取软token
 * @method void setStoken(integer $Stoken) 设置软token
 * @method integer getWechat() 获取微信
 * @method void setWechat(integer $Wechat) 设置微信
 */
class LoginActionMfaFlag extends AbstractModel
{
    /**
     * @var integer 手机
     */
    public $Phone;

    /**
     * @var integer 软token
     */
    public $Stoken;

    /**
     * @var integer 微信
     */
    public $Wechat;

    /**
     * @param integer $Phone 手机
     * @param integer $Stoken 软token
     * @param integer $Wechat 微信
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
        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Stoken",$param) and $param["Stoken"] !== null) {
            $this->Stoken = $param["Stoken"];
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = $param["Wechat"];
        }
    }
}
