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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询策略输出的用户回调信息
 *
 * @method string getCallbackUrl() 获取用户回调接口地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置用户回调接口地址
 * @method integer getValidFlag() 获取用户回调接口状态，0表示未验证，1表示已验证，2表示存在url但没有通过验证
 * @method void setValidFlag(integer $ValidFlag) 设置用户回调接口状态，0表示未验证，1表示已验证，2表示存在url但没有通过验证
 * @method string getVerifyCode() 获取用户回调接口验证码
 * @method void setVerifyCode(string $VerifyCode) 设置用户回调接口验证码
 */
class DescribePolicyGroupInfoCallback extends AbstractModel
{
    /**
     * @var string 用户回调接口地址
     */
    public $CallbackUrl;

    /**
     * @var integer 用户回调接口状态，0表示未验证，1表示已验证，2表示存在url但没有通过验证
     */
    public $ValidFlag;

    /**
     * @var string 用户回调接口验证码
     */
    public $VerifyCode;

    /**
     * @param string $CallbackUrl 用户回调接口地址
     * @param integer $ValidFlag 用户回调接口状态，0表示未验证，1表示已验证，2表示存在url但没有通过验证
     * @param string $VerifyCode 用户回调接口验证码
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
        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ValidFlag",$param) and $param["ValidFlag"] !== null) {
            $this->ValidFlag = $param["ValidFlag"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }
    }
}
