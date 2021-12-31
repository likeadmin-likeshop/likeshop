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
 * DescribeDirectConnectGatewayCcnRoutes请求参数结构体
 *
 * @method string getDirectConnectGatewayId() 获取专线网关ID，形如：`dcg-prpqlmg1`。
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关ID，形如：`dcg-prpqlmg1`。
 * @method string getCcnRouteType() 获取云联网路由学习类型，可选值：
<li>`BGP` - 自动学习。</li>
<li>`STATIC` - 静态，即用户配置，默认值。</li>
 * @method void setCcnRouteType(string $CcnRouteType) 设置云联网路由学习类型，可选值：
<li>`BGP` - 自动学习。</li>
<li>`STATIC` - 静态，即用户配置，默认值。</li>
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取返回数量。
 * @method void setLimit(integer $Limit) 设置返回数量。
 */
class DescribeDirectConnectGatewayCcnRoutesRequest extends AbstractModel
{
    /**
     * @var string 专线网关ID，形如：`dcg-prpqlmg1`。
     */
    public $DirectConnectGatewayId;

    /**
     * @var string 云联网路由学习类型，可选值：
<li>`BGP` - 自动学习。</li>
<li>`STATIC` - 静态，即用户配置，默认值。</li>
     */
    public $CcnRouteType;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 返回数量。
     */
    public $Limit;

    /**
     * @param string $DirectConnectGatewayId 专线网关ID，形如：`dcg-prpqlmg1`。
     * @param string $CcnRouteType 云联网路由学习类型，可选值：
<li>`BGP` - 自动学习。</li>
<li>`STATIC` - 静态，即用户配置，默认值。</li>
     * @param integer $Offset 偏移量。
     * @param integer $Limit 返回数量。
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

        if (array_key_exists("CcnRouteType",$param) and $param["CcnRouteType"] !== null) {
            $this->CcnRouteType = $param["CcnRouteType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
