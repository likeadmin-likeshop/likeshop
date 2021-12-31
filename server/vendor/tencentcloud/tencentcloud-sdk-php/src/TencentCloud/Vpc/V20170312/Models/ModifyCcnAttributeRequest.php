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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCcnAttribute请求参数结构体
 *
 * @method string getCcnId() 获取CCN实例ID。形如：ccn-f49l6u0z。
 * @method void setCcnId(string $CcnId) 设置CCN实例ID。形如：ccn-f49l6u0z。
 * @method string getCcnName() 获取CCN名称，最大长度不能超过60个字节。
 * @method void setCcnName(string $CcnName) 设置CCN名称，最大长度不能超过60个字节。
 * @method string getCcnDescription() 获取CCN描述信息，最大长度不能超过100个字节。
 * @method void setCcnDescription(string $CcnDescription) 设置CCN描述信息，最大长度不能超过100个字节。
 */
class ModifyCcnAttributeRequest extends AbstractModel
{
    /**
     * @var string CCN实例ID。形如：ccn-f49l6u0z。
     */
    public $CcnId;

    /**
     * @var string CCN名称，最大长度不能超过60个字节。
     */
    public $CcnName;

    /**
     * @var string CCN描述信息，最大长度不能超过100个字节。
     */
    public $CcnDescription;

    /**
     * @param string $CcnId CCN实例ID。形如：ccn-f49l6u0z。
     * @param string $CcnName CCN名称，最大长度不能超过60个字节。
     * @param string $CcnDescription CCN描述信息，最大长度不能超过100个字节。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnName",$param) and $param["CcnName"] !== null) {
            $this->CcnName = $param["CcnName"];
        }

        if (array_key_exists("CcnDescription",$param) and $param["CcnDescription"] !== null) {
            $this->CcnDescription = $param["CcnDescription"];
        }
    }
}
