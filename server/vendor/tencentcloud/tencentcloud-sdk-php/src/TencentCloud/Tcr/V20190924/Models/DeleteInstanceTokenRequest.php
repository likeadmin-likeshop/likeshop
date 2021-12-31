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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteInstanceToken请求参数结构体
 *
 * @method string getRegistryId() 获取实例 ID
 * @method void setRegistryId(string $RegistryId) 设置实例 ID
 * @method string getTokenId() 获取访问凭证 ID
 * @method void setTokenId(string $TokenId) 设置访问凭证 ID
 */
class DeleteInstanceTokenRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $RegistryId;

    /**
     * @var string 访问凭证 ID
     */
    public $TokenId;

    /**
     * @param string $RegistryId 实例 ID
     * @param string $TokenId 访问凭证 ID
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }
    }
}
