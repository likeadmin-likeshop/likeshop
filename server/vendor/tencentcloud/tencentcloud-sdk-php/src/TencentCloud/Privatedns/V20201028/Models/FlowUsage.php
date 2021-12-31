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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量包用量
 *
 * @method string getFlowType() 获取流量包类型：ZONE 私有域；TRAFFIC 解析流量包
 * @method void setFlowType(string $FlowType) 设置流量包类型：ZONE 私有域；TRAFFIC 解析流量包
 * @method integer getTotalQuantity() 获取流量包总额度
 * @method void setTotalQuantity(integer $TotalQuantity) 设置流量包总额度
 * @method integer getAvailableQuantity() 获取流量包可用额度
 * @method void setAvailableQuantity(integer $AvailableQuantity) 设置流量包可用额度
 */
class FlowUsage extends AbstractModel
{
    /**
     * @var string 流量包类型：ZONE 私有域；TRAFFIC 解析流量包
     */
    public $FlowType;

    /**
     * @var integer 流量包总额度
     */
    public $TotalQuantity;

    /**
     * @var integer 流量包可用额度
     */
    public $AvailableQuantity;

    /**
     * @param string $FlowType 流量包类型：ZONE 私有域；TRAFFIC 解析流量包
     * @param integer $TotalQuantity 流量包总额度
     * @param integer $AvailableQuantity 流量包可用额度
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
        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("TotalQuantity",$param) and $param["TotalQuantity"] !== null) {
            $this->TotalQuantity = $param["TotalQuantity"];
        }

        if (array_key_exists("AvailableQuantity",$param) and $param["AvailableQuantity"] !== null) {
            $this->AvailableQuantity = $param["AvailableQuantity"];
        }
    }
}
