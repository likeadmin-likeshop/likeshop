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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrafficMirrors请求参数结构体
 *
 * @method array getTrafficMirrorIds() 获取流量镜像实例ID的数组，支持批量查询
 * @method void setTrafficMirrorIds(array $TrafficMirrorIds) 设置流量镜像实例ID的数组，支持批量查询
 * @method array getAliases() 获取流量镜像实例别名数组。
 * @method void setAliases(array $Aliases) 设置流量镜像实例别名数组。
 * @method array getVpcIds() 获取流量镜像实例所属的私有网络ID数组，形如：vpc-xxx。
 * @method void setVpcIds(array $VpcIds) 设置流量镜像实例所属的私有网络ID数组，形如：vpc-xxx。
 * @method integer getOffset() 获取分页的偏移量，也即从第几条记录开始查询
 * @method void setOffset(integer $Offset) 设置分页的偏移量，也即从第几条记录开始查询
 * @method integer getLimit() 获取单次查询返回的条目数，默认值：500。
 * @method void setLimit(integer $Limit) 设置单次查询返回的条目数，默认值：500。
 * @method string getOrderField() 获取排序字段。trafficMirrorId或者createTime。
 * @method void setOrderField(string $OrderField) 设置排序字段。trafficMirrorId或者createTime。
 * @method integer getOrder() 获取排序方式，取值：0:增序(默认)，1:降序
 * @method void setOrder(integer $Order) 设置排序方式，取值：0:增序(默认)，1:降序
 * @method string getSearchKey() 获取模糊匹配trafficMirrorId或者alias字段。
 * @method void setSearchKey(string $SearchKey) 设置模糊匹配trafficMirrorId或者alias字段。
 */
class DescribeTrafficMirrorsRequest extends AbstractModel
{
    /**
     * @var array 流量镜像实例ID的数组，支持批量查询
     */
    public $TrafficMirrorIds;

    /**
     * @var array 流量镜像实例别名数组。
     */
    public $Aliases;

    /**
     * @var array 流量镜像实例所属的私有网络ID数组，形如：vpc-xxx。
     */
    public $VpcIds;

    /**
     * @var integer 分页的偏移量，也即从第几条记录开始查询
     */
    public $Offset;

    /**
     * @var integer 单次查询返回的条目数，默认值：500。
     */
    public $Limit;

    /**
     * @var string 排序字段。trafficMirrorId或者createTime。
     */
    public $OrderField;

    /**
     * @var integer 排序方式，取值：0:增序(默认)，1:降序
     */
    public $Order;

    /**
     * @var string 模糊匹配trafficMirrorId或者alias字段。
     */
    public $SearchKey;

    /**
     * @param array $TrafficMirrorIds 流量镜像实例ID的数组，支持批量查询
     * @param array $Aliases 流量镜像实例别名数组。
     * @param array $VpcIds 流量镜像实例所属的私有网络ID数组，形如：vpc-xxx。
     * @param integer $Offset 分页的偏移量，也即从第几条记录开始查询
     * @param integer $Limit 单次查询返回的条目数，默认值：500。
     * @param string $OrderField 排序字段。trafficMirrorId或者createTime。
     * @param integer $Order 排序方式，取值：0:增序(默认)，1:降序
     * @param string $SearchKey 模糊匹配trafficMirrorId或者alias字段。
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
        if (array_key_exists("TrafficMirrorIds",$param) and $param["TrafficMirrorIds"] !== null) {
            $this->TrafficMirrorIds = $param["TrafficMirrorIds"];
        }

        if (array_key_exists("Aliases",$param) and $param["Aliases"] !== null) {
            $this->Aliases = $param["Aliases"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
