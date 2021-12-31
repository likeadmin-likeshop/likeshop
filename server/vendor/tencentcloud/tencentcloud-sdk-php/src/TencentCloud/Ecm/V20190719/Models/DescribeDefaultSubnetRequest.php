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
 * DescribeDefaultSubnet请求参数结构体
 *
 * @method string getEcmRegion() 获取ECM地域
 * @method void setEcmRegion(string $EcmRegion) 设置ECM地域
 * @method string getZone() 获取ECM可用区
 * @method void setZone(string $Zone) 设置ECM可用区
 */
class DescribeDefaultSubnetRequest extends AbstractModel
{
    /**
     * @var string ECM地域
     */
    public $EcmRegion;

    /**
     * @var string ECM可用区
     */
    public $Zone;

    /**
     * @param string $EcmRegion ECM地域
     * @param string $Zone ECM可用区
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
