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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiGroups请求参数结构体
 *
 * @method string getSearchWord() 获取搜索关键字
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取每页条数，默认为20
 * @method void setLimit(integer $Limit) 设置每页条数，默认为20
 * @method string getGroupType() 获取分组类型。 ms： 微服务分组； external:外部Api分组
 * @method void setGroupType(string $GroupType) 设置分组类型。 ms： 微服务分组； external:外部Api分组
 * @method string getAuthType() 获取鉴权类型。 secret： 秘钥鉴权； none:无鉴权
 * @method void setAuthType(string $AuthType) 设置鉴权类型。 secret： 秘钥鉴权； none:无鉴权
 * @method string getStatus() 获取发布状态, drafted: 未发布。 released: 发布
 * @method void setStatus(string $Status) 设置发布状态, drafted: 未发布。 released: 发布
 * @method string getOrderBy() 获取排序字段："created_time"或"group_context"
 * @method void setOrderBy(string $OrderBy) 设置排序字段："created_time"或"group_context"
 * @method integer getOrderType() 获取排序类型：0(ASC)或1(DESC)
 * @method void setOrderType(integer $OrderType) 设置排序类型：0(ASC)或1(DESC)
 * @method string getGatewayInstanceId() 获取网关实体ID
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实体ID
 */
class DescribeApiGroupsRequest extends AbstractModel
{
    /**
     * @var string 搜索关键字
     */
    public $SearchWord;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 每页条数，默认为20
     */
    public $Limit;

    /**
     * @var string 分组类型。 ms： 微服务分组； external:外部Api分组
     */
    public $GroupType;

    /**
     * @var string 鉴权类型。 secret： 秘钥鉴权； none:无鉴权
     */
    public $AuthType;

    /**
     * @var string 发布状态, drafted: 未发布。 released: 发布
     */
    public $Status;

    /**
     * @var string 排序字段："created_time"或"group_context"
     */
    public $OrderBy;

    /**
     * @var integer 排序类型：0(ASC)或1(DESC)
     */
    public $OrderType;

    /**
     * @var string 网关实体ID
     */
    public $GatewayInstanceId;

    /**
     * @param string $SearchWord 搜索关键字
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 每页条数，默认为20
     * @param string $GroupType 分组类型。 ms： 微服务分组； external:外部Api分组
     * @param string $AuthType 鉴权类型。 secret： 秘钥鉴权； none:无鉴权
     * @param string $Status 发布状态, drafted: 未发布。 released: 发布
     * @param string $OrderBy 排序字段："created_time"或"group_context"
     * @param integer $OrderType 排序类型：0(ASC)或1(DESC)
     * @param string $GatewayInstanceId 网关实体ID
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }
    }
}
