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
namespace TencentCloud\Ape\V20200513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDownloadInfos请求参数结构体
 *
 * @method integer getLimit() 获取默认10
 * @method void setLimit(integer $Limit) 设置默认10
 * @method integer getOffset() 获取默认0
 * @method void setOffset(integer $Offset) 设置默认0
 * @method string getBeginTime() 获取开始时间晚于指定时间
 * @method void setBeginTime(string $BeginTime) 设置开始时间晚于指定时间
 * @method string getEndTime() 获取结束时间早于指定时间
 * @method void setEndTime(string $EndTime) 设置结束时间早于指定时间
 * @method array getImageIds() 获取无效值，过滤结果为空
 * @method void setImageIds(array $ImageIds) 设置无效值，过滤结果为空
 */
class DescribeDownloadInfosRequest extends AbstractModel
{
    /**
     * @var integer 默认10
     */
    public $Limit;

    /**
     * @var integer 默认0
     */
    public $Offset;

    /**
     * @var string 开始时间晚于指定时间
     */
    public $BeginTime;

    /**
     * @var string 结束时间早于指定时间
     */
    public $EndTime;

    /**
     * @var array 无效值，过滤结果为空
     */
    public $ImageIds;

    /**
     * @param integer $Limit 默认10
     * @param integer $Offset 默认0
     * @param string $BeginTime 开始时间晚于指定时间
     * @param string $EndTime 结束时间早于指定时间
     * @param array $ImageIds 无效值，过滤结果为空
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }
    }
}
