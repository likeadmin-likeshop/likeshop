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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 移动网络加速源地址结构体
 *
 * @method string getSrcIpv4() 获取用户私网 ipv4 地址
 * @method void setSrcIpv4(string $SrcIpv4) 设置用户私网 ipv4 地址
 * @method string getSrcPublicIpv4() 获取用户公网 ipv4 地址
 * @method void setSrcPublicIpv4(string $SrcPublicIpv4) 设置用户公网 ipv4 地址
 * @method string getSrcIpv6() 获取用户 ipv6 地址
 * @method void setSrcIpv6(string $SrcIpv6) 设置用户 ipv6 地址
 */
class SrcAddressInfo extends AbstractModel
{
    /**
     * @var string 用户私网 ipv4 地址
     */
    public $SrcIpv4;

    /**
     * @var string 用户公网 ipv4 地址
     */
    public $SrcPublicIpv4;

    /**
     * @var string 用户 ipv6 地址
     */
    public $SrcIpv6;

    /**
     * @param string $SrcIpv4 用户私网 ipv4 地址
     * @param string $SrcPublicIpv4 用户公网 ipv4 地址
     * @param string $SrcIpv6 用户 ipv6 地址
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
        if (array_key_exists("SrcIpv4",$param) and $param["SrcIpv4"] !== null) {
            $this->SrcIpv4 = $param["SrcIpv4"];
        }

        if (array_key_exists("SrcPublicIpv4",$param) and $param["SrcPublicIpv4"] !== null) {
            $this->SrcPublicIpv4 = $param["SrcPublicIpv4"];
        }

        if (array_key_exists("SrcIpv6",$param) and $param["SrcIpv6"] !== null) {
            $this->SrcIpv6 = $param["SrcIpv6"];
        }
    }
}
