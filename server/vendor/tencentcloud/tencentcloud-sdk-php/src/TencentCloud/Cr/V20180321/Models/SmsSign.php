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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信签名信息
 *
 * @method string getSignId() 获取短信签名ID
 * @method void setSignId(string $SignId) 设置短信签名ID
 * @method string getSignName() 获取短信签名名称
 * @method void setSignName(string $SignName) 设置短信签名名称
 */
class SmsSign extends AbstractModel
{
    /**
     * @var string 短信签名ID
     */
    public $SignId;

    /**
     * @var string 短信签名名称
     */
    public $SignName;

    /**
     * @param string $SignId 短信签名ID
     * @param string $SignName 短信签名名称
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
        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }
    }
}
