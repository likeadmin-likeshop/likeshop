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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrders请求参数结构体
 *
 * @method array getDealNames() 获取待查询的长订单号列表，创建实例、续费实例、扩容实例接口返回。
 * @method void setDealNames(array $DealNames) 设置待查询的长订单号列表，创建实例、续费实例、扩容实例接口返回。
 */
class DescribeOrdersRequest extends AbstractModel
{
    /**
     * @var array 待查询的长订单号列表，创建实例、续费实例、扩容实例接口返回。
     */
    public $DealNames;

    /**
     * @param array $DealNames 待查询的长订单号列表，创建实例、续费实例、扩容实例接口返回。
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
        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }
    }
}
