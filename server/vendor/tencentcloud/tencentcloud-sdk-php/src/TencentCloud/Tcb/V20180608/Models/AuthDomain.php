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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合法域名
 *
 * @method string getId() 获取域名ID
 * @method void setId(string $Id) 设置域名ID
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getType() 获取域名类型。包含以下取值：
<li>SYSTEM</li>
<li>USER</li>
 * @method void setType(string $Type) 设置域名类型。包含以下取值：
<li>SYSTEM</li>
<li>USER</li>
 * @method string getStatus() 获取状态。包含以下取值：
<li>ENABLE</li>
<li>DISABLE</li>
 * @method void setStatus(string $Status) 设置状态。包含以下取值：
<li>ENABLE</li>
<li>DISABLE</li>
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class AuthDomain extends AbstractModel
{
    /**
     * @var string 域名ID
     */
    public $Id;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名类型。包含以下取值：
<li>SYSTEM</li>
<li>USER</li>
     */
    public $Type;

    /**
     * @var string 状态。包含以下取值：
<li>ENABLE</li>
<li>DISABLE</li>
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $Id 域名ID
     * @param string $Domain 域名
     * @param string $Type 域名类型。包含以下取值：
<li>SYSTEM</li>
<li>USER</li>
     * @param string $Status 状态。包含以下取值：
<li>ENABLE</li>
<li>DISABLE</li>
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
