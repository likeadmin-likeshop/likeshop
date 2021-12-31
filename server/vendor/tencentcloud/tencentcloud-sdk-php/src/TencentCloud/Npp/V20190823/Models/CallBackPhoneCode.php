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
namespace TencentCloud\Npp\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回拨号码字段
 *
 * @method string getNation() 获取国家码，统一以 00 开头
 * @method void setNation(string $Nation) 设置国家码，统一以 00 开头
 * @method string getPhone() 获取号码（固话区号前加 0，如075586013388）
 * @method void setPhone(string $Phone) 设置号码（固话区号前加 0，如075586013388）
 */
class CallBackPhoneCode extends AbstractModel
{
    /**
     * @var string 国家码，统一以 00 开头
     */
    public $Nation;

    /**
     * @var string 号码（固话区号前加 0，如075586013388）
     */
    public $Phone;

    /**
     * @param string $Nation 国家码，统一以 00 开头
     * @param string $Phone 号码（固话区号前加 0，如075586013388）
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
        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }
    }
}
