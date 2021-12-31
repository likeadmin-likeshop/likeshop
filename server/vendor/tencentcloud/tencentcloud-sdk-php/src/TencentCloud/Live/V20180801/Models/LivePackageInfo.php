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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播包信息。
 *
 * @method string getId() 获取包 ID。
 * @method void setId(string $Id) 设置包 ID。
 * @method integer getTotal() 获取总量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
 * @method void setTotal(integer $Total) 设置总量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
 * @method integer getUsed() 获取使用量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
当为连麦包时单位为小时。
 * @method void setUsed(integer $Used) 设置使用量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
当为连麦包时单位为小时。
 * @method integer getLeft() 获取剩余量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
当为连麦包时单位为小时。
 * @method void setLeft(integer $Left) 设置剩余量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
当为连麦包时单位为小时。
 * @method string getBuyTime() 获取购买时间。
 * @method void setBuyTime(string $BuyTime) 设置购买时间。
 * @method string getExpireTime() 获取过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间。
 * @method integer getType() 获取包类型，可选值:
0: 流量包。
1: 普通转码包。
2: 极速高清包。
3: 连麦包。
 * @method void setType(integer $Type) 设置包类型，可选值:
0: 流量包。
1: 普通转码包。
2: 极速高清包。
3: 连麦包。
 * @method integer getStatus() 获取包状态，可选值:
0: 未使用。
1: 使用中。
2: 已过期。
3: 已冻结。
4: 已耗尽。
5: 已退款
 * @method void setStatus(integer $Status) 设置包状态，可选值:
0: 未使用。
1: 使用中。
2: 已过期。
3: 已冻结。
4: 已耗尽。
5: 已退款
 */
class LivePackageInfo extends AbstractModel
{
    /**
     * @var string 包 ID。
     */
    public $Id;

    /**
     * @var integer 总量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
     */
    public $Total;

    /**
     * @var integer 使用量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
当为连麦包时单位为小时。
     */
    public $Used;

    /**
     * @var integer 剩余量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
当为连麦包时单位为小时。
     */
    public $Left;

    /**
     * @var string 购买时间。
     */
    public $BuyTime;

    /**
     * @var string 过期时间。
     */
    public $ExpireTime;

    /**
     * @var integer 包类型，可选值:
0: 流量包。
1: 普通转码包。
2: 极速高清包。
3: 连麦包。
     */
    public $Type;

    /**
     * @var integer 包状态，可选值:
0: 未使用。
1: 使用中。
2: 已过期。
3: 已冻结。
4: 已耗尽。
5: 已退款
     */
    public $Status;

    /**
     * @param string $Id 包 ID。
     * @param integer $Total 总量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
     * @param integer $Used 使用量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
当为连麦包时单位为小时。
     * @param integer $Left 剩余量。
注意：当为流量包时单位为字节。
当为转码包时单位为分钟。
当为连麦包时单位为小时。
     * @param string $BuyTime 购买时间。
     * @param string $ExpireTime 过期时间。
     * @param integer $Type 包类型，可选值:
0: 流量包。
1: 普通转码包。
2: 极速高清包。
3: 连麦包。
     * @param integer $Status 包状态，可选值:
0: 未使用。
1: 使用中。
2: 已过期。
3: 已冻结。
4: 已耗尽。
5: 已退款
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
