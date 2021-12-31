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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEipAcls请求参数结构体
 *
 * @method string getAclName() 获取ACL 名称，支持模糊查找
 * @method void setAclName(string $AclName) 设置ACL 名称，支持模糊查找
 * @method array getAclIds() 获取ACL 实例 ID 列表，数组下标从 0 开始
 * @method void setAclIds(array $AclIds) 设置ACL 实例 ID 列表，数组下标从 0 开始
 * @method integer getOffset() 获取分页参数。偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置分页参数。偏移量，默认为 0
 * @method integer getLimit() 获取分页参数。每一页的 EIPACL 列表数目
 * @method void setLimit(integer $Limit) 设置分页参数。每一页的 EIPACL 列表数目
 * @method array getEipIds() 获取EIP实例ID列表
 * @method void setEipIds(array $EipIds) 设置EIP实例ID列表
 * @method array getEipIps() 获取EIP IP地址列表
 * @method void setEipIps(array $EipIps) 设置EIP IP地址列表
 * @method array getEipNames() 获取EIP名称列表
 * @method void setEipNames(array $EipNames) 设置EIP名称列表
 * @method string getOrderField() 获取排序字段
 * @method void setOrderField(string $OrderField) 设置排序字段
 * @method integer getOrder() 获取排序方式，取值：0:增序(默认)，1:降序
 * @method void setOrder(integer $Order) 设置排序方式，取值：0:增序(默认)，1:降序
 * @method array getAclNames() 获取ACL名称列表，支持模糊查找
 * @method void setAclNames(array $AclNames) 设置ACL名称列表，支持模糊查找
 */
class DescribeEipAclsRequest extends AbstractModel
{
    /**
     * @var string ACL 名称，支持模糊查找
     */
    public $AclName;

    /**
     * @var array ACL 实例 ID 列表，数组下标从 0 开始
     */
    public $AclIds;

    /**
     * @var integer 分页参数。偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 分页参数。每一页的 EIPACL 列表数目
     */
    public $Limit;

    /**
     * @var array EIP实例ID列表
     */
    public $EipIds;

    /**
     * @var array EIP IP地址列表
     */
    public $EipIps;

    /**
     * @var array EIP名称列表
     */
    public $EipNames;

    /**
     * @var string 排序字段
     */
    public $OrderField;

    /**
     * @var integer 排序方式，取值：0:增序(默认)，1:降序
     */
    public $Order;

    /**
     * @var array ACL名称列表，支持模糊查找
     */
    public $AclNames;

    /**
     * @param string $AclName ACL 名称，支持模糊查找
     * @param array $AclIds ACL 实例 ID 列表，数组下标从 0 开始
     * @param integer $Offset 分页参数。偏移量，默认为 0
     * @param integer $Limit 分页参数。每一页的 EIPACL 列表数目
     * @param array $EipIds EIP实例ID列表
     * @param array $EipIps EIP IP地址列表
     * @param array $EipNames EIP名称列表
     * @param string $OrderField 排序字段
     * @param integer $Order 排序方式，取值：0:增序(默认)，1:降序
     * @param array $AclNames ACL名称列表，支持模糊查找
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
        if (array_key_exists("AclName",$param) and $param["AclName"] !== null) {
            $this->AclName = $param["AclName"];
        }

        if (array_key_exists("AclIds",$param) and $param["AclIds"] !== null) {
            $this->AclIds = $param["AclIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("EipIds",$param) and $param["EipIds"] !== null) {
            $this->EipIds = $param["EipIds"];
        }

        if (array_key_exists("EipIps",$param) and $param["EipIps"] !== null) {
            $this->EipIps = $param["EipIps"];
        }

        if (array_key_exists("EipNames",$param) and $param["EipNames"] !== null) {
            $this->EipNames = $param["EipNames"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("AclNames",$param) and $param["AclNames"] !== null) {
            $this->AclNames = $param["AclNames"];
        }
    }
}
