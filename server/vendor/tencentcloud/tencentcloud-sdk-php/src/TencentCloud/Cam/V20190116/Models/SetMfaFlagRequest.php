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
 * SetMfaFlag请求参数结构体
 *
 * @method integer getOpUin() 获取设置用户的uin
 * @method void setOpUin(integer $OpUin) 设置设置用户的uin
 * @method LoginActionMfaFlag getLoginFlag() 获取登录保护设置
 * @method void setLoginFlag(LoginActionMfaFlag $LoginFlag) 设置登录保护设置
 * @method LoginActionMfaFlag getActionFlag() 获取操作保护设置
 * @method void setActionFlag(LoginActionMfaFlag $ActionFlag) 设置操作保护设置
 */
class SetMfaFlagRequest extends AbstractModel
{
    /**
     * @var integer 设置用户的uin
     */
    public $OpUin;

    /**
     * @var LoginActionMfaFlag 登录保护设置
     */
    public $LoginFlag;

    /**
     * @var LoginActionMfaFlag 操作保护设置
     */
    public $ActionFlag;

    /**
     * @param integer $OpUin 设置用户的uin
     * @param LoginActionMfaFlag $LoginFlag 登录保护设置
     * @param LoginActionMfaFlag $ActionFlag 操作保护设置
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
        if (array_key_exists("OpUin",$param) and $param["OpUin"] !== null) {
            $this->OpUin = $param["OpUin"];
        }

        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = new LoginActionMfaFlag();
            $this->LoginFlag->deserialize($param["LoginFlag"]);
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = new LoginActionMfaFlag();
            $this->ActionFlag->deserialize($param["ActionFlag"]);
        }
    }
}
