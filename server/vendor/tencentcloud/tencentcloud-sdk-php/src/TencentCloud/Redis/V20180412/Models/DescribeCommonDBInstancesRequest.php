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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCommonDBInstances请求参数结构体
 *
 * @method array getVpcIds() 获取实例Vip信息列表
 * @method void setVpcIds(array $VpcIds) 设置实例Vip信息列表
 * @method array getSubnetIds() 获取子网id信息列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网id信息列表
 * @method integer getPayMode() 获取计费类型过滤列表；0表示包年包月，1表示按量计费
 * @method void setPayMode(integer $PayMode) 设置计费类型过滤列表；0表示包年包月，1表示按量计费
 * @method array getInstanceIds() 获取实例id过滤信息列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例id过滤信息列表
 * @method array getInstanceNames() 获取实例名称过滤信息列表
 * @method void setInstanceNames(array $InstanceNames) 设置实例名称过滤信息列表
 * @method array getStatus() 获取实例状态信息过滤列表
 * @method void setStatus(array $Status) 设置实例状态信息过滤列表
 * @method string getOrderBy() 获取排序字段
 * @method void setOrderBy(string $OrderBy) 设置排序字段
 * @method string getOrderByType() 获取排序方式
 * @method void setOrderByType(string $OrderByType) 设置排序方式
 * @method array getVips() 获取实例vip信息列表
 * @method void setVips(array $Vips) 设置实例vip信息列表
 * @method array getUniqVpcIds() 获取vpc网络统一Id列表
 * @method void setUniqVpcIds(array $UniqVpcIds) 设置vpc网络统一Id列表
 * @method array getUniqSubnetIds() 获取子网统一id列表
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置子网统一id列表
 * @method integer getLimit() 获取数量限制，默认推荐100
 * @method void setLimit(integer $Limit) 设置数量限制，默认推荐100
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 */
class DescribeCommonDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例Vip信息列表
     */
    public $VpcIds;

    /**
     * @var array 子网id信息列表
     */
    public $SubnetIds;

    /**
     * @var integer 计费类型过滤列表；0表示包年包月，1表示按量计费
     */
    public $PayMode;

    /**
     * @var array 实例id过滤信息列表
     */
    public $InstanceIds;

    /**
     * @var array 实例名称过滤信息列表
     */
    public $InstanceNames;

    /**
     * @var array 实例状态信息过滤列表
     */
    public $Status;

    /**
     * @var string 排序字段
     */
    public $OrderBy;

    /**
     * @var string 排序方式
     */
    public $OrderByType;

    /**
     * @var array 实例vip信息列表
     */
    public $Vips;

    /**
     * @var array vpc网络统一Id列表
     */
    public $UniqVpcIds;

    /**
     * @var array 子网统一id列表
     */
    public $UniqSubnetIds;

    /**
     * @var integer 数量限制，默认推荐100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @param array $VpcIds 实例Vip信息列表
     * @param array $SubnetIds 子网id信息列表
     * @param integer $PayMode 计费类型过滤列表；0表示包年包月，1表示按量计费
     * @param array $InstanceIds 实例id过滤信息列表
     * @param array $InstanceNames 实例名称过滤信息列表
     * @param array $Status 实例状态信息过滤列表
     * @param string $OrderBy 排序字段
     * @param string $OrderByType 排序方式
     * @param array $Vips 实例vip信息列表
     * @param array $UniqVpcIds vpc网络统一Id列表
     * @param array $UniqSubnetIds 子网统一id列表
     * @param integer $Limit 数量限制，默认推荐100
     * @param integer $Offset 偏移量，默认0
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
        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("UniqVpcIds",$param) and $param["UniqVpcIds"] !== null) {
            $this->UniqVpcIds = $param["UniqVpcIds"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
