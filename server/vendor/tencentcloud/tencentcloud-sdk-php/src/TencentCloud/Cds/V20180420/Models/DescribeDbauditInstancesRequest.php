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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDbauditInstances请求参数结构体
 *
 * @method string getSearchRegion() 获取查询条件地域
 * @method void setSearchRegion(string $SearchRegion) 设置查询条件地域
 * @method integer getLimit() 获取限制数目，默认10， 最大50
 * @method void setLimit(integer $Limit) 设置限制数目，默认10， 最大50
 * @method integer getOffset() 获取偏移量，默认1
 * @method void setOffset(integer $Offset) 设置偏移量，默认1
 */
class DescribeDbauditInstancesRequest extends AbstractModel
{
    /**
     * @var string 查询条件地域
     */
    public $SearchRegion;

    /**
     * @var integer 限制数目，默认10， 最大50
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认1
     */
    public $Offset;

    /**
     * @param string $SearchRegion 查询条件地域
     * @param integer $Limit 限制数目，默认10， 最大50
     * @param integer $Offset 偏移量，默认1
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
        if (array_key_exists("SearchRegion",$param) and $param["SearchRegion"] !== null) {
            $this->SearchRegion = $param["SearchRegion"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
