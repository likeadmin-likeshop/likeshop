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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 联系人contact描述。
 *
 * @method integer getId() 获取联系人id。
 * @method void setId(integer $Id) 设置联系人id。
 * @method string getName() 获取联系人姓名。
 * @method void setName(string $Name) 设置联系人姓名。
 * @method string getMail() 获取联系人绑定的邮箱。
 * @method void setMail(string $Mail) 设置联系人绑定的邮箱。
 */
class ContactItem extends AbstractModel
{
    /**
     * @var integer 联系人id。
     */
    public $Id;

    /**
     * @var string 联系人姓名。
     */
    public $Name;

    /**
     * @var string 联系人绑定的邮箱。
     */
    public $Mail;

    /**
     * @param integer $Id 联系人id。
     * @param string $Name 联系人姓名。
     * @param string $Mail 联系人绑定的邮箱。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }
    }
}
