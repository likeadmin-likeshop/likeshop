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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AgentPayDeals请求参数结构体
 *
 * @method string getOwnerUin() 获取订单所有者uin
 * @method void setOwnerUin(string $OwnerUin) 设置订单所有者uin
 * @method integer getAgentPay() 获取代付标志，1：代付；0：自付
 * @method void setAgentPay(integer $AgentPay) 设置代付标志，1：代付；0：自付
 * @method array getDealNames() 获取订单号数组
 * @method void setDealNames(array $DealNames) 设置订单号数组
 */
class AgentPayDealsRequest extends AbstractModel
{
    /**
     * @var string 订单所有者uin
     */
    public $OwnerUin;

    /**
     * @var integer 代付标志，1：代付；0：自付
     */
    public $AgentPay;

    /**
     * @var array 订单号数组
     */
    public $DealNames;

    /**
     * @param string $OwnerUin 订单所有者uin
     * @param integer $AgentPay 代付标志，1：代付；0：自付
     * @param array $DealNames 订单号数组
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AgentPay",$param) and $param["AgentPay"] !== null) {
            $this->AgentPay = $param["AgentPay"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }
    }
}
