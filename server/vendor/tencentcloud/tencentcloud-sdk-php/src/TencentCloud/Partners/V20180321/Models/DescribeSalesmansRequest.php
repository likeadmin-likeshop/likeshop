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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSalesmans请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method string getSalesName() 获取业务员姓名(模糊查询)
 * @method void setSalesName(string $SalesName) 设置业务员姓名(模糊查询)
 * @method string getSalesUin() 获取业务员ID
 * @method void setSalesUin(string $SalesUin) 设置业务员ID
 * @method string getOrderDirection() 获取ASC/DESC， 不区分大小写，按创建通过时间排序
 * @method void setOrderDirection(string $OrderDirection) 设置ASC/DESC， 不区分大小写，按创建通过时间排序
 */
class DescribeSalesmansRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var string 业务员姓名(模糊查询)
     */
    public $SalesName;

    /**
     * @var string 业务员ID
     */
    public $SalesUin;

    /**
     * @var string ASC/DESC， 不区分大小写，按创建通过时间排序
     */
    public $OrderDirection;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制数目
     * @param string $SalesName 业务员姓名(模糊查询)
     * @param string $SalesUin 业务员ID
     * @param string $OrderDirection ASC/DESC， 不区分大小写，按创建通过时间排序
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

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }

        if (array_key_exists("SalesUin",$param) and $param["SalesUin"] !== null) {
            $this->SalesUin = $param["SalesUin"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
