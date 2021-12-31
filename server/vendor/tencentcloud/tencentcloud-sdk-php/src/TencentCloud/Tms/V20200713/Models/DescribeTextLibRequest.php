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
namespace TencentCloud\Tms\V20200713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTextLib请求参数结构体
 *
 * @method integer getStrategyType() 获取内容类型 text: 1; image: 2; audio: 3; video: 4
 * @method void setStrategyType(integer $StrategyType) 设置内容类型 text: 1; image: 2; audio: 3; video: 4
 */
class DescribeTextLibRequest extends AbstractModel
{
    /**
     * @var integer 内容类型 text: 1; image: 2; audio: 3; video: 4
     */
    public $StrategyType;

    /**
     * @param integer $StrategyType 内容类型 text: 1; image: 2; audio: 3; video: 4
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }
    }
}
