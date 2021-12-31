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
 * 授权者
 *
 * @method string getType() 获取授权者类型，取值有：
<li>PERSON：个人。</li>
<li>TEAM：团队。</li>
 * @method void setType(string $Type) 设置授权者类型，取值有：
<li>PERSON：个人。</li>
<li>TEAM：团队。</li>
 * @method string getId() 获取Id，当 Type=PERSON，取值为用户 Id。当Type=TEAM，取值为团队 ID。
 * @method void setId(string $Id) 设置Id，当 Type=PERSON，取值为用户 Id。当Type=TEAM，取值为团队 ID。
 */
class Authorizer extends AbstractModel
{
    /**
     * @var string 授权者类型，取值有：
<li>PERSON：个人。</li>
<li>TEAM：团队。</li>
     */
    public $Type;

    /**
     * @var string Id，当 Type=PERSON，取值为用户 Id。当Type=TEAM，取值为团队 ID。
     */
    public $Id;

    /**
     * @param string $Type 授权者类型，取值有：
<li>PERSON：个人。</li>
<li>TEAM：团队。</li>
     * @param string $Id Id，当 Type=PERSON，取值为用户 Id。当Type=TEAM，取值为团队 ID。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
