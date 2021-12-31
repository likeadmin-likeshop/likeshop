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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EstimateCheckSimilarPersonCostTime请求参数结构体
 *
 * @method array getGroupIds() 获取待整理的人员库列表。 
人员库总人数不可超过200万，人员库个数不可超过10个。
 * @method void setGroupIds(array $GroupIds) 设置待整理的人员库列表。 
人员库总人数不可超过200万，人员库个数不可超过10个。
 */
class EstimateCheckSimilarPersonCostTimeRequest extends AbstractModel
{
    /**
     * @var array 待整理的人员库列表。 
人员库总人数不可超过200万，人员库个数不可超过10个。
     */
    public $GroupIds;

    /**
     * @param array $GroupIds 待整理的人员库列表。 
人员库总人数不可超过200万，人员库个数不可超过10个。
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
        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
