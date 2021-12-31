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
 * 实例登录令牌
 *
 * @method string getId() 获取令牌ID
 * @method void setId(string $Id) 设置令牌ID
 * @method string getDesc() 获取令牌描述
 * @method void setDesc(string $Desc) 设置令牌描述
 * @method string getRegistryId() 获取令牌所属实例ID
 * @method void setRegistryId(string $RegistryId) 设置令牌所属实例ID
 * @method boolean getEnabled() 获取令牌启用状态
 * @method void setEnabled(boolean $Enabled) 设置令牌启用状态
 * @method string getCreatedAt() 获取令牌创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置令牌创建时间
 * @method integer getExpiredAt() 获取令牌过期时间戳
 * @method void setExpiredAt(integer $ExpiredAt) 设置令牌过期时间戳
 */
class TcrInstanceToken extends AbstractModel
{
    /**
     * @var string 令牌ID
     */
    public $Id;

    /**
     * @var string 令牌描述
     */
    public $Desc;

    /**
     * @var string 令牌所属实例ID
     */
    public $RegistryId;

    /**
     * @var boolean 令牌启用状态
     */
    public $Enabled;

    /**
     * @var string 令牌创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 令牌过期时间戳
     */
    public $ExpiredAt;

    /**
     * @param string $Id 令牌ID
     * @param string $Desc 令牌描述
     * @param string $RegistryId 令牌所属实例ID
     * @param boolean $Enabled 令牌启用状态
     * @param string $CreatedAt 令牌创建时间
     * @param integer $ExpiredAt 令牌过期时间戳
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ExpiredAt",$param) and $param["ExpiredAt"] !== null) {
            $this->ExpiredAt = $param["ExpiredAt"];
        }
    }
}
