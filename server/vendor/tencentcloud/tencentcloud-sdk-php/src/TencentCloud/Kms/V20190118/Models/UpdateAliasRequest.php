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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAlias请求参数结构体
 *
 * @method string getAlias() 获取新的别名，1-60个字符或数字的组合
 * @method void setAlias(string $Alias) 设置新的别名，1-60个字符或数字的组合
 * @method string getKeyId() 获取CMK的全局唯一标识符
 * @method void setKeyId(string $KeyId) 设置CMK的全局唯一标识符
 */
class UpdateAliasRequest extends AbstractModel
{
    /**
     * @var string 新的别名，1-60个字符或数字的组合
     */
    public $Alias;

    /**
     * @var string CMK的全局唯一标识符
     */
    public $KeyId;

    /**
     * @param string $Alias 新的别名，1-60个字符或数字的组合
     * @param string $KeyId CMK的全局唯一标识符
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }
    }
}
