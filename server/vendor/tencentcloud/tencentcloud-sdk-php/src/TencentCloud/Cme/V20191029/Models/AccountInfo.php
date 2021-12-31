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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 制作云用户账号信息。
 *
 * @method string getUserId() 获取用户 Id。
 * @method void setUserId(string $UserId) 设置用户 Id。
 * @method string getPhone() 获取用户手机号码。
 * @method void setPhone(string $Phone) 设置用户手机号码。
 * @method string getNick() 获取用户昵称。
 * @method void setNick(string $Nick) 设置用户昵称。
 * @method string getStatus() 获取账号状态，取值：
<li>Normal：有效；</li>
<li>Stopped：无效。</li>
 * @method void setStatus(string $Status) 设置账号状态，取值：
<li>Normal：有效；</li>
<li>Stopped：无效。</li>
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string 用户 Id。
     */
    public $UserId;

    /**
     * @var string 用户手机号码。
     */
    public $Phone;

    /**
     * @var string 用户昵称。
     */
    public $Nick;

    /**
     * @var string 账号状态，取值：
<li>Normal：有效；</li>
<li>Stopped：无效。</li>
     */
    public $Status;

    /**
     * @param string $UserId 用户 Id。
     * @param string $Phone 用户手机号码。
     * @param string $Nick 用户昵称。
     * @param string $Status 账号状态，取值：
<li>Normal：有效；</li>
<li>Stopped：无效。</li>
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
