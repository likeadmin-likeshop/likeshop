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
 * 异地登录设置
 *
 * @method integer getVerifyFlag() 获取验证标识
 * @method void setVerifyFlag(integer $VerifyFlag) 设置验证标识
 * @method integer getNotifyPhone() 获取手机通知
 * @method void setNotifyPhone(integer $NotifyPhone) 设置手机通知
 * @method integer getNotifyEmail() 获取邮箱通知
 * @method void setNotifyEmail(integer $NotifyEmail) 设置邮箱通知
 * @method integer getNotifyWechat() 获取微信通知
 * @method void setNotifyWechat(integer $NotifyWechat) 设置微信通知
 * @method integer getTips() 获取提示
 * @method void setTips(integer $Tips) 设置提示
 */
class OffsiteFlag extends AbstractModel
{
    /**
     * @var integer 验证标识
     */
    public $VerifyFlag;

    /**
     * @var integer 手机通知
     */
    public $NotifyPhone;

    /**
     * @var integer 邮箱通知
     */
    public $NotifyEmail;

    /**
     * @var integer 微信通知
     */
    public $NotifyWechat;

    /**
     * @var integer 提示
     */
    public $Tips;

    /**
     * @param integer $VerifyFlag 验证标识
     * @param integer $NotifyPhone 手机通知
     * @param integer $NotifyEmail 邮箱通知
     * @param integer $NotifyWechat 微信通知
     * @param integer $Tips 提示
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
        if (array_key_exists("VerifyFlag",$param) and $param["VerifyFlag"] !== null) {
            $this->VerifyFlag = $param["VerifyFlag"];
        }

        if (array_key_exists("NotifyPhone",$param) and $param["NotifyPhone"] !== null) {
            $this->NotifyPhone = $param["NotifyPhone"];
        }

        if (array_key_exists("NotifyEmail",$param) and $param["NotifyEmail"] !== null) {
            $this->NotifyEmail = $param["NotifyEmail"];
        }

        if (array_key_exists("NotifyWechat",$param) and $param["NotifyWechat"] !== null) {
            $this->NotifyWechat = $param["NotifyWechat"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }
    }
}
