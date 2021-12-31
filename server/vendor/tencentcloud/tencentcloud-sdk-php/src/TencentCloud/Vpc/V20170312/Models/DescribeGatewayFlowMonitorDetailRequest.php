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
 * DescribeGatewayFlowMonitorDetail请求参数结构体
 *
 * @method string getTimePoint() 获取时间点。表示要查询这分钟内的明细。如：`2019-02-28 18:15:20`，将查询 `18:15` 这一分钟内的明细。
 * @method void setTimePoint(string $TimePoint) 设置时间点。表示要查询这分钟内的明细。如：`2019-02-28 18:15:20`，将查询 `18:15` 这一分钟内的明细。
 * @method string getVpnId() 获取VPN网关实例ID，形如：`vpn-ltjahce6`。
 * @method void setVpnId(string $VpnId) 设置VPN网关实例ID，形如：`vpn-ltjahce6`。
 * @method string getDirectConnectGatewayId() 获取专线网关实例ID，形如：`dcg-ltjahce6`。
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关实例ID，形如：`dcg-ltjahce6`。
 * @method string getPeeringConnectionId() 获取对等连接实例ID，形如：`pcx-ltjahce6`。
 * @method void setPeeringConnectionId(string $PeeringConnectionId) 设置对等连接实例ID，形如：`pcx-ltjahce6`。
 * @method string getNatId() 获取NAT网关实例ID，形如：`nat-ltjahce6`。
 * @method void setNatId(string $NatId) 设置NAT网关实例ID，形如：`nat-ltjahce6`。
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取返回数量。
 * @method void setLimit(integer $Limit) 设置返回数量。
 * @method string getOrderField() 获取排序字段。支持 `InPkg` `OutPkg` `InTraffic` `OutTraffic`。
 * @method void setOrderField(string $OrderField) 设置排序字段。支持 `InPkg` `OutPkg` `InTraffic` `OutTraffic`。
 * @method string getOrderDirection() 获取排序方法。顺序：`ASC`，倒序：`DESC`。
 * @method void setOrderDirection(string $OrderDirection) 设置排序方法。顺序：`ASC`，倒序：`DESC`。
 */
class DescribeGatewayFlowMonitorDetailRequest extends AbstractModel
{
    /**
     * @var string 时间点。表示要查询这分钟内的明细。如：`2019-02-28 18:15:20`，将查询 `18:15` 这一分钟内的明细。
     */
    public $TimePoint;

    /**
     * @var string VPN网关实例ID，形如：`vpn-ltjahce6`。
     */
    public $VpnId;

    /**
     * @var string 专线网关实例ID，形如：`dcg-ltjahce6`。
     */
    public $DirectConnectGatewayId;

    /**
     * @var string 对等连接实例ID，形如：`pcx-ltjahce6`。
     */
    public $PeeringConnectionId;

    /**
     * @var string NAT网关实例ID，形如：`nat-ltjahce6`。
     */
    public $NatId;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 返回数量。
     */
    public $Limit;

    /**
     * @var string 排序字段。支持 `InPkg` `OutPkg` `InTraffic` `OutTraffic`。
     */
    public $OrderField;

    /**
     * @var string 排序方法。顺序：`ASC`，倒序：`DESC`。
     */
    public $OrderDirection;

    /**
     * @param string $TimePoint 时间点。表示要查询这分钟内的明细。如：`2019-02-28 18:15:20`，将查询 `18:15` 这一分钟内的明细。
     * @param string $VpnId VPN网关实例ID，形如：`vpn-ltjahce6`。
     * @param string $DirectConnectGatewayId 专线网关实例ID，形如：`dcg-ltjahce6`。
     * @param string $PeeringConnectionId 对等连接实例ID，形如：`pcx-ltjahce6`。
     * @param string $NatId NAT网关实例ID，形如：`nat-ltjahce6`。
     * @param integer $Offset 偏移量。
     * @param integer $Limit 返回数量。
     * @param string $OrderField 排序字段。支持 `InPkg` `OutPkg` `InTraffic` `OutTraffic`。
     * @param string $OrderDirection 排序方法。顺序：`ASC`，倒序：`DESC`。
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
        if (array_key_exists("TimePoint",$param) and $param["TimePoint"] !== null) {
            $this->TimePoint = $param["TimePoint"];
        }

        if (array_key_exists("VpnId",$param) and $param["VpnId"] !== null) {
            $this->VpnId = $param["VpnId"];
        }

        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("PeeringConnectionId",$param) and $param["PeeringConnectionId"] !== null) {
            $this->PeeringConnectionId = $param["PeeringConnectionId"];
        }

        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
