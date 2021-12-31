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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmailAddress请求参数结构体
 *
 * @method string getEmailAddress() 获取您的发信地址（发信地址总数上限为10个）
 * @method void setEmailAddress(string $EmailAddress) 设置您的发信地址（发信地址总数上限为10个）
 * @method string getEmailSenderName() 获取发件人别名
 * @method void setEmailSenderName(string $EmailSenderName) 设置发件人别名
 */
class CreateEmailAddressRequest extends AbstractModel
{
    /**
     * @var string 您的发信地址（发信地址总数上限为10个）
     */
    public $EmailAddress;

    /**
     * @var string 发件人别名
     */
    public $EmailSenderName;

    /**
     * @param string $EmailAddress 您的发信地址（发信地址总数上限为10个）
     * @param string $EmailSenderName 发件人别名
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
        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("EmailSenderName",$param) and $param["EmailSenderName"] !== null) {
            $this->EmailSenderName = $param["EmailSenderName"];
        }
    }
}
