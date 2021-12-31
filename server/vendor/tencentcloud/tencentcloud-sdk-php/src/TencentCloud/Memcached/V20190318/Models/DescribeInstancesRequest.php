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
namespace TencentCloud\Memcached\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例ID组成的数组，数组下标从0开始
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID组成的数组，数组下标从0开始
 * @method array getInstanceNames() 获取实例名称组成的数组，数组下标从0开始
 * @method void setInstanceNames(array $InstanceNames) 设置实例名称组成的数组，数组下标从0开始
 * @method integer getLimit() 获取实例列表的大小，参数默认值100
 * @method void setLimit(integer $Limit) 设置实例列表的大小，参数默认值100
 * @method integer getOffset() 获取偏移量，取Limit整数倍
 * @method void setOffset(integer $Offset) 设置偏移量，取Limit整数倍
 * @method string getOrderBy() 获取枚举范围： AddTimeStamp, InstanceName, ProjectId
 * @method void setOrderBy(string $OrderBy) 设置枚举范围： AddTimeStamp, InstanceName, ProjectId
 * @method integer getOrderType() 获取0倒序，1正序，默认倒序
 * @method void setOrderType(integer $OrderType) 设置0倒序，1正序，默认倒序
 * @method array getProjectIds() 获取项目ID组成的数组，数组下标从0开始
 * @method void setProjectIds(array $ProjectIds) 设置项目ID组成的数组，数组下标从0开始
 * @method array getSearchKeys() 获取搜索关键词：支持实例ID、实例名称、完整IP
 * @method void setSearchKeys(array $SearchKeys) 设置搜索关键词：支持实例ID、实例名称、完整IP
 * @method array getUniqSubnetIds() 获取子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
 * @method void setUniqSubnetIds(array $UniqSubnetIds) 设置子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
 * @method array getUniqVpcIds() 获取私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
 * @method void setUniqVpcIds(array $UniqVpcIds) 设置私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
 * @method array getVips() 获取实例服务IP组成的数组，数组下标从0开始
 * @method void setVips(array $Vips) 设置实例服务IP组成的数组，数组下标从0开始
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例ID组成的数组，数组下标从0开始
     */
    public $InstanceIds;

    /**
     * @var array 实例名称组成的数组，数组下标从0开始
     */
    public $InstanceNames;

    /**
     * @var integer 实例列表的大小，参数默认值100
     */
    public $Limit;

    /**
     * @var integer 偏移量，取Limit整数倍
     */
    public $Offset;

    /**
     * @var string 枚举范围： AddTimeStamp, InstanceName, ProjectId
     */
    public $OrderBy;

    /**
     * @var integer 0倒序，1正序，默认倒序
     */
    public $OrderType;

    /**
     * @var array 项目ID组成的数组，数组下标从0开始
     */
    public $ProjectIds;

    /**
     * @var array 搜索关键词：支持实例ID、实例名称、完整IP
     */
    public $SearchKeys;

    /**
     * @var array 子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
     */
    public $UniqSubnetIds;

    /**
     * @var array 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
     */
    public $UniqVpcIds;

    /**
     * @var array 实例服务IP组成的数组，数组下标从0开始
     */
    public $Vips;

    /**
     * @param array $InstanceIds 实例ID组成的数组，数组下标从0开始
     * @param array $InstanceNames 实例名称组成的数组，数组下标从0开始
     * @param integer $Limit 实例列表的大小，参数默认值100
     * @param integer $Offset 偏移量，取Limit整数倍
     * @param string $OrderBy 枚举范围： AddTimeStamp, InstanceName, ProjectId
     * @param integer $OrderType 0倒序，1正序，默认倒序
     * @param array $ProjectIds 项目ID组成的数组，数组下标从0开始
     * @param array $SearchKeys 搜索关键词：支持实例ID、实例名称、完整IP
     * @param array $UniqSubnetIds 子网ID数组，数组下标从0开始，如：subnet-fdj24n34j2
     * @param array $UniqVpcIds 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络，如：vpc-sad23jfdfk
     * @param array $Vips 实例服务IP组成的数组，数组下标从0开始
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("SearchKeys",$param) and $param["SearchKeys"] !== null) {
            $this->SearchKeys = $param["SearchKeys"];
        }

        if (array_key_exists("UniqSubnetIds",$param) and $param["UniqSubnetIds"] !== null) {
            $this->UniqSubnetIds = $param["UniqSubnetIds"];
        }

        if (array_key_exists("UniqVpcIds",$param) and $param["UniqVpcIds"] !== null) {
            $this->UniqVpcIds = $param["UniqVpcIds"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }
    }
}
