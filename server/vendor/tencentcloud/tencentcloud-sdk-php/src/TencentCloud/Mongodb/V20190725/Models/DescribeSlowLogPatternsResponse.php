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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogPatterns返回参数结构体
 *
 * @method integer getCount() 获取慢日志统计信息总数
 * @method void setCount(integer $Count) 设置慢日志统计信息总数
 * @method array getSlowLogPatterns() 获取慢日志统计信息
 * @method void setSlowLogPatterns(array $SlowLogPatterns) 设置慢日志统计信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSlowLogPatternsResponse extends AbstractModel
{
    /**
     * @var integer 慢日志统计信息总数
     */
    public $Count;

    /**
     * @var array 慢日志统计信息
     */
    public $SlowLogPatterns;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 慢日志统计信息总数
     * @param array $SlowLogPatterns 慢日志统计信息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("SlowLogPatterns",$param) and $param["SlowLogPatterns"] !== null) {
            $this->SlowLogPatterns = [];
            foreach ($param["SlowLogPatterns"] as $key => $value){
                $obj = new SlowLogPattern();
                $obj->deserialize($value);
                array_push($this->SlowLogPatterns, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
