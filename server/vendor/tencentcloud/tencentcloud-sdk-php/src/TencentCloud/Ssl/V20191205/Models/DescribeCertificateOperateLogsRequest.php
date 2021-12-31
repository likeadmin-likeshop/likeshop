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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateOperateLogs请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取请求日志数量，默认为20。
 * @method void setLimit(integer $Limit) 设置请求日志数量，默认为20。
 * @method string getStartTime() 获取开始时间，默认15天前。
 * @method void setStartTime(string $StartTime) 设置开始时间，默认15天前。
 * @method string getEndTime() 获取结束时间，默认现在时间。
 * @method void setEndTime(string $EndTime) 设置结束时间，默认现在时间。
 */
class DescribeCertificateOperateLogsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 请求日志数量，默认为20。
     */
    public $Limit;

    /**
     * @var string 开始时间，默认15天前。
     */
    public $StartTime;

    /**
     * @var string 结束时间，默认现在时间。
     */
    public $EndTime;

    /**
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 请求日志数量，默认为20。
     * @param string $StartTime 开始时间，默认15天前。
     * @param string $EndTime 结束时间，默认现在时间。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
