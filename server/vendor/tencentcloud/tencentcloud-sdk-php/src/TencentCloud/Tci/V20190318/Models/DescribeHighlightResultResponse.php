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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHighlightResult返回参数结构体
 *
 * @method array getHighlightsInfo() 获取精彩集锦详细信息。
 * @method void setHighlightsInfo(array $HighlightsInfo) 设置精彩集锦详细信息。
 * @method integer getJobId() 获取精彩集锦任务唯一id。在URL方式时提交请求后会返回一个JobId，后续查询该url的结果时使用这个JobId进行查询。
 * @method void setJobId(integer $JobId) 设置精彩集锦任务唯一id。在URL方式时提交请求后会返回一个JobId，后续查询该url的结果时使用这个JobId进行查询。
 * @method float getProgress() 获取任务的进度百分比，100表示任务已完成。
 * @method void setProgress(float $Progress) 设置任务的进度百分比，100表示任务已完成。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHighlightResultResponse extends AbstractModel
{
    /**
     * @var array 精彩集锦详细信息。
     */
    public $HighlightsInfo;

    /**
     * @var integer 精彩集锦任务唯一id。在URL方式时提交请求后会返回一个JobId，后续查询该url的结果时使用这个JobId进行查询。
     */
    public $JobId;

    /**
     * @var float 任务的进度百分比，100表示任务已完成。
     */
    public $Progress;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $HighlightsInfo 精彩集锦详细信息。
     * @param integer $JobId 精彩集锦任务唯一id。在URL方式时提交请求后会返回一个JobId，后续查询该url的结果时使用这个JobId进行查询。
     * @param float $Progress 任务的进度百分比，100表示任务已完成。
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
        if (array_key_exists("HighlightsInfo",$param) and $param["HighlightsInfo"] !== null) {
            $this->HighlightsInfo = [];
            foreach ($param["HighlightsInfo"] as $key => $value){
                $obj = new HighlightsInfomation();
                $obj->deserialize($value);
                array_push($this->HighlightsInfo, $obj);
            }
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
