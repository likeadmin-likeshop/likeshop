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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeErrorLogData请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID 。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID 。
 * @method integer getStartTime() 获取开始时间戳。
 * @method void setStartTime(integer $StartTime) 设置开始时间戳。
 * @method integer getEndTime() 获取结束时间戳。
 * @method void setEndTime(integer $EndTime) 设置结束时间戳。
 * @method array getKeyWords() 获取要匹配的关键字列表，最多支持15个关键字。
 * @method void setKeyWords(array $KeyWords) 设置要匹配的关键字列表，最多支持15个关键字。
 * @method integer getLimit() 获取分页的返回数量，默认为100，最大为400。
 * @method void setLimit(integer $Limit) 设置分页的返回数量，默认为100，最大为400。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getInstType() 获取仅在实例为主实例或者灾备实例时生效，可选值：slave，代表拉取从机的日志。
 * @method void setInstType(string $InstType) 设置仅在实例为主实例或者灾备实例时生效，可选值：slave，代表拉取从机的日志。
 */
class DescribeErrorLogDataRequest extends AbstractModel
{
    /**
     * @var string 实例 ID 。
     */
    public $InstanceId;

    /**
     * @var integer 开始时间戳。
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳。
     */
    public $EndTime;

    /**
     * @var array 要匹配的关键字列表，最多支持15个关键字。
     */
    public $KeyWords;

    /**
     * @var integer 分页的返回数量，默认为100，最大为400。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 仅在实例为主实例或者灾备实例时生效，可选值：slave，代表拉取从机的日志。
     */
    public $InstType;

    /**
     * @param string $InstanceId 实例 ID 。
     * @param integer $StartTime 开始时间戳。
     * @param integer $EndTime 结束时间戳。
     * @param array $KeyWords 要匹配的关键字列表，最多支持15个关键字。
     * @param integer $Limit 分页的返回数量，默认为100，最大为400。
     * @param integer $Offset 偏移量，默认为0。
     * @param string $InstType 仅在实例为主实例或者灾备实例时生效，可选值：slave，代表拉取从机的日志。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstType",$param) and $param["InstType"] !== null) {
            $this->InstType = $param["InstType"];
        }
    }
}
