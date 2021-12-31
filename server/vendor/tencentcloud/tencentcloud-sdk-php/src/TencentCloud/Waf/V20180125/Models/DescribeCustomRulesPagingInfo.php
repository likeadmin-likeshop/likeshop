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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomRules接口的翻页参数
 *
 * @method integer getOffset() 获取当前页码
 * @method void setOffset(integer $Offset) 设置当前页码
 * @method integer getLimit() 获取当前页的最大数据条数
 * @method void setLimit(integer $Limit) 设置当前页的最大数据条数
 */
class DescribeCustomRulesPagingInfo extends AbstractModel
{
    /**
     * @var integer 当前页码
     */
    public $Offset;

    /**
     * @var integer 当前页的最大数据条数
     */
    public $Limit;

    /**
     * @param integer $Offset 当前页码
     * @param integer $Limit 当前页的最大数据条数
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
    }
}
