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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMediaProcessUsageData返回参数结构体
 *
 * @method array getMediaProcessDataSet() 获取视频处理统计数据概览，展示所查询任务的概览以及详细数据。
 * @method void setMediaProcessDataSet(array $MediaProcessDataSet) 设置视频处理统计数据概览，展示所查询任务的概览以及详细数据。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMediaProcessUsageDataResponse extends AbstractModel
{
    /**
     * @var array 视频处理统计数据概览，展示所查询任务的概览以及详细数据。
     */
    public $MediaProcessDataSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MediaProcessDataSet 视频处理统计数据概览，展示所查询任务的概览以及详细数据。
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
        if (array_key_exists("MediaProcessDataSet",$param) and $param["MediaProcessDataSet"] !== null) {
            $this->MediaProcessDataSet = [];
            foreach ($param["MediaProcessDataSet"] as $key => $value){
                $obj = new TaskStatData();
                $obj->deserialize($value);
                array_push($this->MediaProcessDataSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
