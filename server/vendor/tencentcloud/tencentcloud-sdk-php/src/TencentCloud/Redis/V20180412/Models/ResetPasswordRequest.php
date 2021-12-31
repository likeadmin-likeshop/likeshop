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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetPassword请求参数结构体
 *
 * @method string getInstanceId() 获取Redis实例ID
 * @method void setInstanceId(string $InstanceId) 设置Redis实例ID
 * @method string getPassword() 获取重置的密码（切换为免密实例时，可不传；其他情况必传）
 * @method void setPassword(string $Password) 设置重置的密码（切换为免密实例时，可不传；其他情况必传）
 * @method boolean getNoAuth() 获取是否切换免密实例，false-切换为非免密码实例，true-切换为免密码实例；默认false
 * @method void setNoAuth(boolean $NoAuth) 设置是否切换免密实例，false-切换为非免密码实例，true-切换为免密码实例；默认false
 */
class ResetPasswordRequest extends AbstractModel
{
    /**
     * @var string Redis实例ID
     */
    public $InstanceId;

    /**
     * @var string 重置的密码（切换为免密实例时，可不传；其他情况必传）
     */
    public $Password;

    /**
     * @var boolean 是否切换免密实例，false-切换为非免密码实例，true-切换为免密码实例；默认false
     */
    public $NoAuth;

    /**
     * @param string $InstanceId Redis实例ID
     * @param string $Password 重置的密码（切换为免密实例时，可不传；其他情况必传）
     * @param boolean $NoAuth 是否切换免密实例，false-切换为非免密码实例，true-切换为免密码实例；默认false
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }
    }
}
