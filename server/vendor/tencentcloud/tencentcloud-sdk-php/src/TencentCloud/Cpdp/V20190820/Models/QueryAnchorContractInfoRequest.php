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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryAnchorContractInfo请求参数结构体
 *
 * @method string getBeginTime() 获取起始时间，格式为yyyy-MM-dd
 * @method void setBeginTime(string $BeginTime) 设置起始时间，格式为yyyy-MM-dd
 * @method string getEndTime() 获取起始时间，格式为yyyy-MM-dd
 * @method void setEndTime(string $EndTime) 设置起始时间，格式为yyyy-MM-dd
 */
class QueryAnchorContractInfoRequest extends AbstractModel
{
    /**
     * @var string 起始时间，格式为yyyy-MM-dd
     */
    public $BeginTime;

    /**
     * @var string 起始时间，格式为yyyy-MM-dd
     */
    public $EndTime;

    /**
     * @param string $BeginTime 起始时间，格式为yyyy-MM-dd
     * @param string $EndTime 起始时间，格式为yyyy-MM-dd
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
