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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCatLogs请求参数结构体
 *
 * @method integer getTaskId() 获取拨测任务Id
 * @method void setTaskId(integer $TaskId) 设置拨测任务Id
 * @method integer getOffset() 获取从第Offset 条开始查询。缺省值为0
 * @method void setOffset(integer $Offset) 设置从第Offset 条开始查询。缺省值为0
 * @method integer getLimit() 获取本批次查询Limit 条记录。缺省值为20
 * @method void setLimit(integer $Limit) 设置本批次查询Limit 条记录。缺省值为20
 * @method string getBeginTime() 获取格式如：2017-05-09 00:00:00  缺省为当天0点，最多拉取1天的数据
 * @method void setBeginTime(string $BeginTime) 设置格式如：2017-05-09 00:00:00  缺省为当天0点，最多拉取1天的数据
 * @method string getEndTime() 获取格式如：2017-05-10 00:00:00  缺省为当前时间
 * @method void setEndTime(string $EndTime) 设置格式如：2017-05-10 00:00:00  缺省为当前时间
 * @method string getSortType() 获取按时间升序或降序。默认降序。可选值： Desc, Asc
 * @method void setSortType(string $SortType) 设置按时间升序或降序。默认降序。可选值： Desc, Asc
 */
class DescribeCatLogsRequest extends AbstractModel
{
    /**
     * @var integer 拨测任务Id
     */
    public $TaskId;

    /**
     * @var integer 从第Offset 条开始查询。缺省值为0
     */
    public $Offset;

    /**
     * @var integer 本批次查询Limit 条记录。缺省值为20
     */
    public $Limit;

    /**
     * @var string 格式如：2017-05-09 00:00:00  缺省为当天0点，最多拉取1天的数据
     */
    public $BeginTime;

    /**
     * @var string 格式如：2017-05-10 00:00:00  缺省为当前时间
     */
    public $EndTime;

    /**
     * @var string 按时间升序或降序。默认降序。可选值： Desc, Asc
     */
    public $SortType;

    /**
     * @param integer $TaskId 拨测任务Id
     * @param integer $Offset 从第Offset 条开始查询。缺省值为0
     * @param integer $Limit 本批次查询Limit 条记录。缺省值为20
     * @param string $BeginTime 格式如：2017-05-09 00:00:00  缺省为当天0点，最多拉取1天的数据
     * @param string $EndTime 格式如：2017-05-10 00:00:00  缺省为当前时间
     * @param string $SortType 按时间升序或降序。默认降序。可选值： Desc, Asc
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }
    }
}
