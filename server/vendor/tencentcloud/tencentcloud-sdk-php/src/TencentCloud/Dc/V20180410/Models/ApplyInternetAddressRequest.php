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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyInternetAddress请求参数结构体
 *
 * @method integer getMaskLen() 获取CIDR地址掩码长度
 * @method void setMaskLen(integer $MaskLen) 设置CIDR地址掩码长度
 * @method integer getAddrType() 获取0:BGP类型地址
1：中国电信
2：中国移动
3：中国联通
 * @method void setAddrType(integer $AddrType) 设置0:BGP类型地址
1：中国电信
2：中国移动
3：中国联通
 * @method integer getAddrProto() 获取0：IPv4
1:IPv6
 * @method void setAddrProto(integer $AddrProto) 设置0：IPv4
1:IPv6
 */
class ApplyInternetAddressRequest extends AbstractModel
{
    /**
     * @var integer CIDR地址掩码长度
     */
    public $MaskLen;

    /**
     * @var integer 0:BGP类型地址
1：中国电信
2：中国移动
3：中国联通
     */
    public $AddrType;

    /**
     * @var integer 0：IPv4
1:IPv6
     */
    public $AddrProto;

    /**
     * @param integer $MaskLen CIDR地址掩码长度
     * @param integer $AddrType 0:BGP类型地址
1：中国电信
2：中国移动
3：中国联通
     * @param integer $AddrProto 0：IPv4
1:IPv6
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
        if (array_key_exists("MaskLen",$param) and $param["MaskLen"] !== null) {
            $this->MaskLen = $param["MaskLen"];
        }

        if (array_key_exists("AddrType",$param) and $param["AddrType"] !== null) {
            $this->AddrType = $param["AddrType"];
        }

        if (array_key_exists("AddrProto",$param) and $param["AddrProto"] !== null) {
            $this->AddrProto = $param["AddrProto"];
        }
    }
}
