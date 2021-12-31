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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEipCharge请求参数结构体
 *
 * @method string getPayMode() 获取EIP计费方式，flow-流量计费；bandwidth-带宽计费
 * @method void setPayMode(string $PayMode) 设置EIP计费方式，flow-流量计费；bandwidth-带宽计费
 * @method array getEipIds() 获取Eip实例ID列表
 * @method void setEipIds(array $EipIds) 设置Eip实例ID列表
 * @method integer getBandwidth() 获取带宽设定值（只在带宽计费时生效）
 * @method void setBandwidth(integer $Bandwidth) 设置带宽设定值（只在带宽计费时生效）
 */
class ModifyEipChargeRequest extends AbstractModel
{
    /**
     * @var string EIP计费方式，flow-流量计费；bandwidth-带宽计费
     */
    public $PayMode;

    /**
     * @var array Eip实例ID列表
     */
    public $EipIds;

    /**
     * @var integer 带宽设定值（只在带宽计费时生效）
     */
    public $Bandwidth;

    /**
     * @param string $PayMode EIP计费方式，flow-流量计费；bandwidth-带宽计费
     * @param array $EipIds Eip实例ID列表
     * @param integer $Bandwidth 带宽设定值（只在带宽计费时生效）
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("EipIds",$param) and $param["EipIds"] !== null) {
            $this->EipIds = $param["EipIds"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
