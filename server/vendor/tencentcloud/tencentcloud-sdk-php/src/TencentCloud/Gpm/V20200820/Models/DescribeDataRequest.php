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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeData请求参数结构体
 *
 * @method integer getStartTime() 获取起始时间，单位：秒
 * @method void setStartTime(integer $StartTime) 设置起始时间，单位：秒
 * @method integer getEndTime() 获取截止时间，单位：秒
 * @method void setEndTime(integer $EndTime) 设置截止时间，单位：秒
 * @method integer getTimeType() 获取时间粒度，1表示1天；2表示1小时；3表示1分钟；4表示10分钟；5表示30分钟
 * @method void setTimeType(integer $TimeType) 设置时间粒度，1表示1天；2表示1小时；3表示1分钟；4表示10分钟；5表示30分钟
 * @method string getMatchCode() 获取匹配code
 * @method void setMatchCode(string $MatchCode) 设置匹配code
 */
class DescribeDataRequest extends AbstractModel
{
    /**
     * @var integer 起始时间，单位：秒
     */
    public $StartTime;

    /**
     * @var integer 截止时间，单位：秒
     */
    public $EndTime;

    /**
     * @var integer 时间粒度，1表示1天；2表示1小时；3表示1分钟；4表示10分钟；5表示30分钟
     */
    public $TimeType;

    /**
     * @var string 匹配code
     */
    public $MatchCode;

    /**
     * @param integer $StartTime 起始时间，单位：秒
     * @param integer $EndTime 截止时间，单位：秒
     * @param integer $TimeType 时间粒度，1表示1天；2表示1小时；3表示1分钟；4表示10分钟；5表示30分钟
     * @param string $MatchCode 匹配code
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }
    }
}
