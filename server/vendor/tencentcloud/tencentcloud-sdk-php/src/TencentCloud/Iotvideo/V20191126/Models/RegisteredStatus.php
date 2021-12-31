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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端用户注册状态
 *
 * @method string getCunionId() 获取终端用户的唯一ID
 * @method void setCunionId(string $CunionId) 设置终端用户的唯一ID
 * @method boolean getIsRegisted() 获取注册状态
 * @method void setIsRegisted(boolean $IsRegisted) 设置注册状态
 */
class RegisteredStatus extends AbstractModel
{
    /**
     * @var string 终端用户的唯一ID
     */
    public $CunionId;

    /**
     * @var boolean 注册状态
     */
    public $IsRegisted;

    /**
     * @param string $CunionId 终端用户的唯一ID
     * @param boolean $IsRegisted 注册状态
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
        if (array_key_exists("CunionId",$param) and $param["CunionId"] !== null) {
            $this->CunionId = $param["CunionId"];
        }

        if (array_key_exists("IsRegisted",$param) and $param["IsRegisted"] !== null) {
            $this->IsRegisted = $param["IsRegisted"];
        }
    }
}
