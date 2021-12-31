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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method string getUserType() 获取USER_ID: 用户ID
ANONYMOUS: 匿名类型用户ID
 * @method void setUserType(string $UserType) 设置USER_ID: 用户ID
ANONYMOUS: 匿名类型用户ID
 * @method string getUserId() 获取用户类型
 * @method void setUserId(string $UserId) 设置用户类型
 */
class ContractUserInfo extends AbstractModel
{
    /**
     * @var string USER_ID: 用户ID
ANONYMOUS: 匿名类型用户ID
     */
    public $UserType;

    /**
     * @var string 用户类型
     */
    public $UserId;

    /**
     * @param string $UserType USER_ID: 用户ID
ANONYMOUS: 匿名类型用户ID
     * @param string $UserId 用户类型
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
        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
