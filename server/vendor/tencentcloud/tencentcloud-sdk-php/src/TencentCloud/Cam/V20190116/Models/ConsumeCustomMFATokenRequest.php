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
 * ConsumeCustomMFAToken请求参数结构体
 *
 * @method string getMFAToken() 获取自定义多因子验证Token
 * @method void setMFAToken(string $MFAToken) 设置自定义多因子验证Token
 */
class ConsumeCustomMFATokenRequest extends AbstractModel
{
    /**
     * @var string 自定义多因子验证Token
     */
    public $MFAToken;

    /**
     * @param string $MFAToken 自定义多因子验证Token
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
        if (array_key_exists("MFAToken",$param) and $param["MFAToken"] !== null) {
            $this->MFAToken = $param["MFAToken"];
        }
    }
}
