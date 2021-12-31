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
 * RenewAddresses请求参数结构体
 *
 * @method array getAddressIds() 获取EIP唯一标识ID列表，形如'eip-xxxx'
 * @method void setAddressIds(array $AddressIds) 设置EIP唯一标识ID列表，形如'eip-xxxx'
 * @method AddressChargePrepaid getAddressChargePrepaid() 获取续费参数
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) 设置续费参数
 */
class RenewAddressesRequest extends AbstractModel
{
    /**
     * @var array EIP唯一标识ID列表，形如'eip-xxxx'
     */
    public $AddressIds;

    /**
     * @var AddressChargePrepaid 续费参数
     */
    public $AddressChargePrepaid;

    /**
     * @param array $AddressIds EIP唯一标识ID列表，形如'eip-xxxx'
     * @param AddressChargePrepaid $AddressChargePrepaid 续费参数
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
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }

        if (array_key_exists("AddressChargePrepaid",$param) and $param["AddressChargePrepaid"] !== null) {
            $this->AddressChargePrepaid = new AddressChargePrepaid();
            $this->AddressChargePrepaid->deserialize($param["AddressChargePrepaid"]);
        }
    }
}
