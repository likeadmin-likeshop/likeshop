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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubAccounts请求参数结构体
 *
 * @method array getFilterSubAccountUin() 获取子用户UIN列表，最多支持50个UIN
 * @method void setFilterSubAccountUin(array $FilterSubAccountUin) 设置子用户UIN列表，最多支持50个UIN
 */
class DescribeSubAccountsRequest extends AbstractModel
{
    /**
     * @var array 子用户UIN列表，最多支持50个UIN
     */
    public $FilterSubAccountUin;

    /**
     * @param array $FilterSubAccountUin 子用户UIN列表，最多支持50个UIN
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
        if (array_key_exists("FilterSubAccountUin",$param) and $param["FilterSubAccountUin"] !== null) {
            $this->FilterSubAccountUin = $param["FilterSubAccountUin"];
        }
    }
}
