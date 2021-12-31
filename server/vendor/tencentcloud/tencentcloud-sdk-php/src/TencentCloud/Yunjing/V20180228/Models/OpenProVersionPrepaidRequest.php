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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenProVersionPrepaid请求参数结构体
 *
 * @method ChargePrepaid getChargePrepaid() 获取购买相关参数。
 * @method void setChargePrepaid(ChargePrepaid $ChargePrepaid) 设置购买相关参数。
 * @method array getMachines() 获取需要开通专业版主机信息数组。
 * @method void setMachines(array $Machines) 设置需要开通专业版主机信息数组。
 */
class OpenProVersionPrepaidRequest extends AbstractModel
{
    /**
     * @var ChargePrepaid 购买相关参数。
     */
    public $ChargePrepaid;

    /**
     * @var array 需要开通专业版主机信息数组。
     */
    public $Machines;

    /**
     * @param ChargePrepaid $ChargePrepaid 购买相关参数。
     * @param array $Machines 需要开通专业版主机信息数组。
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
        if (array_key_exists("ChargePrepaid",$param) and $param["ChargePrepaid"] !== null) {
            $this->ChargePrepaid = new ChargePrepaid();
            $this->ChargePrepaid->deserialize($param["ChargePrepaid"]);
        }

        if (array_key_exists("Machines",$param) and $param["Machines"] !== null) {
            $this->Machines = [];
            foreach ($param["Machines"] as $key => $value){
                $obj = new ProVersionMachine();
                $obj->deserialize($value);
                array_push($this->Machines, $obj);
            }
        }
    }
}
