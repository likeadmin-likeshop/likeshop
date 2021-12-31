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
 * DescribeEips请求参数结构体
 *
 * @method array getEipIds() 获取EIP实例ID列表
 * @method void setEipIds(array $EipIds) 设置EIP实例ID列表
 * @method array getEips() 获取EIP IP 列表
 * @method void setEips(array $Eips) 设置EIP IP 列表
 * @method array getInstanceIds() 获取主机实例ID 列表
 * @method void setInstanceIds(array $InstanceIds) 设置主机实例ID 列表
 * @method string getSearchKey() 获取EIP名称,模糊匹配
 * @method void setSearchKey(string $SearchKey) 设置EIP名称,模糊匹配
 * @method array getStatus() 获取状态列表, 默认所有
 * @method void setStatus(array $Status) 设置状态列表, 默认所有
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回EIP数量，默认 20, 最大值 100
 * @method void setLimit(integer $Limit) 设置返回EIP数量，默认 20, 最大值 100
 * @method string getOrderField() 获取排序字段，支持： EipId,Eip,Status, InstanceId,CreatedAt
 * @method void setOrderField(string $OrderField) 设置排序字段，支持： EipId,Eip,Status, InstanceId,CreatedAt
 * @method integer getOrder() 获取排序方式 0:递增 1:递减(默认)
 * @method void setOrder(integer $Order) 设置排序方式 0:递增 1:递减(默认)
 * @method string getPayMode() 获取计费模式,流量：flow，带宽：bandwidth
 * @method void setPayMode(string $PayMode) 设置计费模式,流量：flow，带宽：bandwidth
 * @method string getVpcId() 获取EIP归属VpcId，例如vpc-k7j1t2x1
 * @method void setVpcId(string $VpcId) 设置EIP归属VpcId，例如vpc-k7j1t2x1
 * @method array getBindTypes() 获取绑定类型，-1：未绑定，0：物理机，1：nat网关，2：虚拟IP, 3:托管机器
 * @method void setBindTypes(array $BindTypes) 设置绑定类型，-1：未绑定，0：物理机，1：nat网关，2：虚拟IP, 3:托管机器
 * @method integer getExclusiveTag() 获取独占标志，0：共享，1：独占
 * @method void setExclusiveTag(integer $ExclusiveTag) 设置独占标志，0：共享，1：独占
 * @method string getAclId() 获取EIP ACL实例ID
 * @method void setAclId(string $AclId) 设置EIP ACL实例ID
 * @method integer getBindAcl() 获取搜索条件，是否绑定了EIP ACL， 0：未绑定，1：绑定
 * @method void setBindAcl(integer $BindAcl) 设置搜索条件，是否绑定了EIP ACL， 0：未绑定，1：绑定
 */
class DescribeEipsRequest extends AbstractModel
{
    /**
     * @var array EIP实例ID列表
     */
    public $EipIds;

    /**
     * @var array EIP IP 列表
     */
    public $Eips;

    /**
     * @var array 主机实例ID 列表
     */
    public $InstanceIds;

    /**
     * @var string EIP名称,模糊匹配
     */
    public $SearchKey;

    /**
     * @var array 状态列表, 默认所有
     */
    public $Status;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回EIP数量，默认 20, 最大值 100
     */
    public $Limit;

    /**
     * @var string 排序字段，支持： EipId,Eip,Status, InstanceId,CreatedAt
     */
    public $OrderField;

    /**
     * @var integer 排序方式 0:递增 1:递减(默认)
     */
    public $Order;

    /**
     * @var string 计费模式,流量：flow，带宽：bandwidth
     */
    public $PayMode;

    /**
     * @var string EIP归属VpcId，例如vpc-k7j1t2x1
     */
    public $VpcId;

    /**
     * @var array 绑定类型，-1：未绑定，0：物理机，1：nat网关，2：虚拟IP, 3:托管机器
     */
    public $BindTypes;

    /**
     * @var integer 独占标志，0：共享，1：独占
     */
    public $ExclusiveTag;

    /**
     * @var string EIP ACL实例ID
     */
    public $AclId;

    /**
     * @var integer 搜索条件，是否绑定了EIP ACL， 0：未绑定，1：绑定
     */
    public $BindAcl;

    /**
     * @param array $EipIds EIP实例ID列表
     * @param array $Eips EIP IP 列表
     * @param array $InstanceIds 主机实例ID 列表
     * @param string $SearchKey EIP名称,模糊匹配
     * @param array $Status 状态列表, 默认所有
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回EIP数量，默认 20, 最大值 100
     * @param string $OrderField 排序字段，支持： EipId,Eip,Status, InstanceId,CreatedAt
     * @param integer $Order 排序方式 0:递增 1:递减(默认)
     * @param string $PayMode 计费模式,流量：flow，带宽：bandwidth
     * @param string $VpcId EIP归属VpcId，例如vpc-k7j1t2x1
     * @param array $BindTypes 绑定类型，-1：未绑定，0：物理机，1：nat网关，2：虚拟IP, 3:托管机器
     * @param integer $ExclusiveTag 独占标志，0：共享，1：独占
     * @param string $AclId EIP ACL实例ID
     * @param integer $BindAcl 搜索条件，是否绑定了EIP ACL， 0：未绑定，1：绑定
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
        if (array_key_exists("EipIds",$param) and $param["EipIds"] !== null) {
            $this->EipIds = $param["EipIds"];
        }

        if (array_key_exists("Eips",$param) and $param["Eips"] !== null) {
            $this->Eips = $param["Eips"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("BindTypes",$param) and $param["BindTypes"] !== null) {
            $this->BindTypes = $param["BindTypes"];
        }

        if (array_key_exists("ExclusiveTag",$param) and $param["ExclusiveTag"] !== null) {
            $this->ExclusiveTag = $param["ExclusiveTag"];
        }

        if (array_key_exists("AclId",$param) and $param["AclId"] !== null) {
            $this->AclId = $param["AclId"];
        }

        if (array_key_exists("BindAcl",$param) and $param["BindAcl"] !== null) {
            $this->BindAcl = $param["BindAcl"];
        }
    }
}
