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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceDirectConnectGatewayCcnRoutes请求参数结构体
 *
 * @method string getDirectConnectGatewayId() 获取专线网关ID，形如：dcg-prpqlmg1
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关ID，形如：dcg-prpqlmg1
 * @method array getRoutes() 获取需要连通的IDC网段列表
 * @method void setRoutes(array $Routes) 设置需要连通的IDC网段列表
 */
class ReplaceDirectConnectGatewayCcnRoutesRequest extends AbstractModel
{
    /**
     * @var string 专线网关ID，形如：dcg-prpqlmg1
     */
    public $DirectConnectGatewayId;

    /**
     * @var array 需要连通的IDC网段列表
     */
    public $Routes;

    /**
     * @param string $DirectConnectGatewayId 专线网关ID，形如：dcg-prpqlmg1
     * @param array $Routes 需要连通的IDC网段列表
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new DirectConnectGatewayCcnRoute();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}
