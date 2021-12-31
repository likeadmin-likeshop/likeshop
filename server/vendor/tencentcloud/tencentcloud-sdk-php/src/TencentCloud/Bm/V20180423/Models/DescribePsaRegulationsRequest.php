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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePsaRegulations请求参数结构体
 *
 * @method integer getLimit() 获取数量限制
 * @method void setLimit(integer $Limit) 设置数量限制
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method array getPsaIds() 获取规则ID过滤，支持模糊查询
 * @method void setPsaIds(array $PsaIds) 设置规则ID过滤，支持模糊查询
 * @method array getPsaNames() 获取规则别名过滤，支持模糊查询
 * @method void setPsaNames(array $PsaNames) 设置规则别名过滤，支持模糊查询
 * @method array getTags() 获取标签过滤
 * @method void setTags(array $Tags) 设置标签过滤
 * @method string getOrderField() 获取排序字段，取值支持：CreateTime
 * @method void setOrderField(string $OrderField) 设置排序字段，取值支持：CreateTime
 * @method integer getOrder() 获取排序方式 0:递增(默认) 1:递减
 * @method void setOrder(integer $Order) 设置排序方式 0:递增(默认) 1:递减
 */
class DescribePsaRegulationsRequest extends AbstractModel
{
    /**
     * @var integer 数量限制
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var array 规则ID过滤，支持模糊查询
     */
    public $PsaIds;

    /**
     * @var array 规则别名过滤，支持模糊查询
     */
    public $PsaNames;

    /**
     * @var array 标签过滤
     */
    public $Tags;

    /**
     * @var string 排序字段，取值支持：CreateTime
     */
    public $OrderField;

    /**
     * @var integer 排序方式 0:递增(默认) 1:递减
     */
    public $Order;

    /**
     * @param integer $Limit 数量限制
     * @param integer $Offset 偏移量
     * @param array $PsaIds 规则ID过滤，支持模糊查询
     * @param array $PsaNames 规则别名过滤，支持模糊查询
     * @param array $Tags 标签过滤
     * @param string $OrderField 排序字段，取值支持：CreateTime
     * @param integer $Order 排序方式 0:递增(默认) 1:递减
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("PsaIds",$param) and $param["PsaIds"] !== null) {
            $this->PsaIds = $param["PsaIds"];
        }

        if (array_key_exists("PsaNames",$param) and $param["PsaNames"] !== null) {
            $this->PsaNames = $param["PsaNames"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
