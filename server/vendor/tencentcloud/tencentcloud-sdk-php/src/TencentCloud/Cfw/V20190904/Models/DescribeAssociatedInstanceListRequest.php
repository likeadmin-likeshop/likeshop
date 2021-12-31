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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssociatedInstanceList请求参数结构体
 *
 * @method integer getOffset() 获取列表偏移量
 * @method void setOffset(integer $Offset) 设置列表偏移量
 * @method integer getLimit() 获取每页记录条数
 * @method void setLimit(integer $Limit) 设置每页记录条数
 * @method string getArea() 获取地域代码（例：ap-guangzhou）,支持腾讯云全地域
 * @method void setArea(string $Area) 设置地域代码（例：ap-guangzhou）,支持腾讯云全地域
 * @method string getSearchValue() 获取额外检索条件（JSON字符串）
 * @method void setSearchValue(string $SearchValue) 设置额外检索条件（JSON字符串）
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method string getOrder() 获取排序方式（asc:升序,desc:降序）
 * @method void setOrder(string $Order) 设置排序方式（asc:升序,desc:降序）
 * @method string getSecurityGroupId() 获取安全组ID
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组ID
 * @method string getType() 获取实例类型,'3'是cvm实例,'4'是clb实例,'5'是eni实例,'6'是云数据库
 * @method void setType(string $Type) 设置实例类型,'3'是cvm实例,'4'是clb实例,'5'是eni实例,'6'是云数据库
 */
class DescribeAssociatedInstanceListRequest extends AbstractModel
{
    /**
     * @var integer 列表偏移量
     */
    public $Offset;

    /**
     * @var integer 每页记录条数
     */
    public $Limit;

    /**
     * @var string 地域代码（例：ap-guangzhou）,支持腾讯云全地域
     */
    public $Area;

    /**
     * @var string 额外检索条件（JSON字符串）
     */
    public $SearchValue;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var string 排序方式（asc:升序,desc:降序）
     */
    public $Order;

    /**
     * @var string 安全组ID
     */
    public $SecurityGroupId;

    /**
     * @var string 实例类型,'3'是cvm实例,'4'是clb实例,'5'是eni实例,'6'是云数据库
     */
    public $Type;

    /**
     * @param integer $Offset 列表偏移量
     * @param integer $Limit 每页记录条数
     * @param string $Area 地域代码（例：ap-guangzhou）,支持腾讯云全地域
     * @param string $SearchValue 额外检索条件（JSON字符串）
     * @param string $By 排序字段
     * @param string $Order 排序方式（asc:升序,desc:降序）
     * @param string $SecurityGroupId 安全组ID
     * @param string $Type 实例类型,'3'是cvm实例,'4'是clb实例,'5'是eni实例,'6'是云数据库
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
