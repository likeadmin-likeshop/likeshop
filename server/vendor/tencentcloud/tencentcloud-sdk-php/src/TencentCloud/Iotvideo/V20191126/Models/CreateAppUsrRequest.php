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
 * CreateAppUsr请求参数结构体
 *
 * @method string getCunionId() 获取标识用户的唯一ID，防止同一个用户多次注册
 * @method void setCunionId(string $CunionId) 设置标识用户的唯一ID，防止同一个用户多次注册
 * @method string getMobile() 获取用于小程序关联手机号
 * @method void setMobile(string $Mobile) 设置用于小程序关联手机号
 */
class CreateAppUsrRequest extends AbstractModel
{
    /**
     * @var string 标识用户的唯一ID，防止同一个用户多次注册
     */
    public $CunionId;

    /**
     * @var string 用于小程序关联手机号
     */
    public $Mobile;

    /**
     * @param string $CunionId 标识用户的唯一ID，防止同一个用户多次注册
     * @param string $Mobile 用于小程序关联手机号
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

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }
    }
}
