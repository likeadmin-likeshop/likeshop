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
 * IP地址模版
 *
 * @method string getAddressId() 获取IP地址ID，例如：ipm-2uw6ujo6。
 * @method void setAddressId(string $AddressId) 设置IP地址ID，例如：ipm-2uw6ujo6。
 * @method string getAddressGroupId() 获取IP地址组ID，例如：ipmg-2uw6ujo6。
 * @method void setAddressGroupId(string $AddressGroupId) 设置IP地址组ID，例如：ipmg-2uw6ujo6。
 */
class AddressTemplateSpecification extends AbstractModel
{
    /**
     * @var string IP地址ID，例如：ipm-2uw6ujo6。
     */
    public $AddressId;

    /**
     * @var string IP地址组ID，例如：ipmg-2uw6ujo6。
     */
    public $AddressGroupId;

    /**
     * @param string $AddressId IP地址ID，例如：ipm-2uw6ujo6。
     * @param string $AddressGroupId IP地址组ID，例如：ipmg-2uw6ujo6。
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("AddressGroupId",$param) and $param["AddressGroupId"] !== null) {
            $this->AddressGroupId = $param["AddressGroupId"];
        }
    }
}
