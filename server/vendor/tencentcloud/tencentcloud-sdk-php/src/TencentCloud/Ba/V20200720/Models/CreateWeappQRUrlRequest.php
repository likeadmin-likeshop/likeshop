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
namespace TencentCloud\Ba\V20200720\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWeappQRUrl请求参数结构体
 *
 * @method string getSessionKey() 获取代理角色临时密钥的Token
 * @method void setSessionKey(string $SessionKey) 设置代理角色临时密钥的Token
 */
class CreateWeappQRUrlRequest extends AbstractModel
{
    /**
     * @var string 代理角色临时密钥的Token
     */
    public $SessionKey;

    /**
     * @param string $SessionKey 代理角色临时密钥的Token
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
        if (array_key_exists("SessionKey",$param) and $param["SessionKey"] !== null) {
            $this->SessionKey = $param["SessionKey"];
        }
    }
}
