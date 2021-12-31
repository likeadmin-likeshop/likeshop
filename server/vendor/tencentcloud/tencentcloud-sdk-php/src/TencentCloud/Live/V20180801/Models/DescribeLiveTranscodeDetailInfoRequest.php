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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveTranscodeDetailInfo请求参数结构体
 *
 * @method string getPushDomain() 获取推流域名。
 * @method void setPushDomain(string $PushDomain) 设置推流域名。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getDayTime() 获取查询时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内某天的详细数据。
 * @method void setDayTime(string $DayTime) 设置查询时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内某天的详细数据。
 * @method integer getPageNum() 获取页数，默认1，
不超过100页。
 * @method void setPageNum(integer $PageNum) 设置页数，默认1，
不超过100页。
 * @method integer getPageSize() 获取每页个数，默认20，
范围：[10,1000]。
 * @method void setPageSize(integer $PageSize) 设置每页个数，默认20，
范围：[10,1000]。
 * @method string getStartDayTime() 获取起始天时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内的详细数据。
 * @method void setStartDayTime(string $StartDayTime) 设置起始天时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内的详细数据。
 * @method string getEndDayTime() 获取结束天时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内的详细数据，注意DayTime 与（StartDayTime，EndDayTime）必须要传一个，如果都传，会以DayTime为准 。
 * @method void setEndDayTime(string $EndDayTime) 设置结束天时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内的详细数据，注意DayTime 与（StartDayTime，EndDayTime）必须要传一个，如果都传，会以DayTime为准 。
 */
class DescribeLiveTranscodeDetailInfoRequest extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $PushDomain;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 查询时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内某天的详细数据。
     */
    public $DayTime;

    /**
     * @var integer 页数，默认1，
不超过100页。
     */
    public $PageNum;

    /**
     * @var integer 每页个数，默认20，
范围：[10,1000]。
     */
    public $PageSize;

    /**
     * @var string 起始天时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内的详细数据。
     */
    public $StartDayTime;

    /**
     * @var string 结束天时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内的详细数据，注意DayTime 与（StartDayTime，EndDayTime）必须要传一个，如果都传，会以DayTime为准 。
     */
    public $EndDayTime;

    /**
     * @param string $PushDomain 推流域名。
     * @param string $StreamName 流名称。
     * @param string $DayTime 查询时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内某天的详细数据。
     * @param integer $PageNum 页数，默认1，
不超过100页。
     * @param integer $PageSize 每页个数，默认20，
范围：[10,1000]。
     * @param string $StartDayTime 起始天时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内的详细数据。
     * @param string $EndDayTime 结束天时间，北京时间，
格式：yyyymmdd。
注意：支持查询近1个月内的详细数据，注意DayTime 与（StartDayTime，EndDayTime）必须要传一个，如果都传，会以DayTime为准 。
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
        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StartDayTime",$param) and $param["StartDayTime"] !== null) {
            $this->StartDayTime = $param["StartDayTime"];
        }

        if (array_key_exists("EndDayTime",$param) and $param["EndDayTime"] !== null) {
            $this->EndDayTime = $param["EndDayTime"];
        }
    }
}
