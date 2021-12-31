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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAddressesBandwidth请求参数结构体
 *
 * @method string getEcmRegion() 获取ECM 地域
 * @method void setEcmRegion(string $EcmRegion) 设置ECM 地域
 * @method array getAddressIds() 获取EIP唯一标识ID，形如'eip-xxxxxxx'
 * @method void setAddressIds(array $AddressIds) 设置EIP唯一标识ID，形如'eip-xxxxxxx'
 * @method integer getInternetMaxBandwidthOut() 获取调整带宽目标值
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置调整带宽目标值
 */
class ModifyAddressesBandwidthRequest extends AbstractModel
{
    /**
     * @var string ECM 地域
     */
    public $EcmRegion;

    /**
     * @var array EIP唯一标识ID，形如'eip-xxxxxxx'
     */
    public $AddressIds;

    /**
     * @var integer 调整带宽目标值
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param string $EcmRegion ECM 地域
     * @param array $AddressIds EIP唯一标识ID，形如'eip-xxxxxxx'
     * @param integer $InternetMaxBandwidthOut 调整带宽目标值
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
        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
