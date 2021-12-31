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
namespace TencentCloud\Tics\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpInfo请求参数结构体
 *
 * @method string getKey() 获取要查询的IP
 * @method void setKey(string $Key) 设置要查询的IP
 * @method integer getOption() 获取附加字段，是否返回上下文。当为0时不返回上下文，当为1时返回上下文。
 * @method void setOption(integer $Option) 设置附加字段，是否返回上下文。当为0时不返回上下文，当为1时返回上下文。
 */
class DescribeIpInfoRequest extends AbstractModel
{
    /**
     * @var string 要查询的IP
     */
    public $Key;

    /**
     * @var integer 附加字段，是否返回上下文。当为0时不返回上下文，当为1时返回上下文。
     */
    public $Option;

    /**
     * @param string $Key 要查询的IP
     * @param integer $Option 附加字段，是否返回上下文。当为0时不返回上下文，当为1时返回上下文。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = $param["Option"];
        }
    }
}
