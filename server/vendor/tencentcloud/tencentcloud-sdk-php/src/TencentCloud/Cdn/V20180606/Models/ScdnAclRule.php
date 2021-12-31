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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 精准访问控制匹配规则
 *
 * @method string getMatchKey() 获取匹配关键字, params | url | ip | referer | user-agent
 * @method void setMatchKey(string $MatchKey) 设置匹配关键字, params | url | ip | referer | user-agent
 * @method string getLogiOperator() 获取逻辑操作符，取值 exclude, include, notequal, equal, len-less, len-equal, len-more
 * @method void setLogiOperator(string $LogiOperator) 设置逻辑操作符，取值 exclude, include, notequal, equal, len-less, len-equal, len-more
 * @method string getMatchValue() 获取匹配值
 * @method void setMatchValue(string $MatchValue) 设置匹配值
 */
class ScdnAclRule extends AbstractModel
{
    /**
     * @var string 匹配关键字, params | url | ip | referer | user-agent
     */
    public $MatchKey;

    /**
     * @var string 逻辑操作符，取值 exclude, include, notequal, equal, len-less, len-equal, len-more
     */
    public $LogiOperator;

    /**
     * @var string 匹配值
     */
    public $MatchValue;

    /**
     * @param string $MatchKey 匹配关键字, params | url | ip | referer | user-agent
     * @param string $LogiOperator 逻辑操作符，取值 exclude, include, notequal, equal, len-less, len-equal, len-more
     * @param string $MatchValue 匹配值
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
        if (array_key_exists("MatchKey",$param) and $param["MatchKey"] !== null) {
            $this->MatchKey = $param["MatchKey"];
        }

        if (array_key_exists("LogiOperator",$param) and $param["LogiOperator"] !== null) {
            $this->LogiOperator = $param["LogiOperator"];
        }

        if (array_key_exists("MatchValue",$param) and $param["MatchValue"] !== null) {
            $this->MatchValue = $param["MatchValue"];
        }
    }
}
