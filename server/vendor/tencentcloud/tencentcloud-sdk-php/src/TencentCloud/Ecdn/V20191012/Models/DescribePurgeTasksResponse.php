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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurgeTasks返回参数结构体
 *
 * @method array getPurgeLogs() 获取刷新历史记录。
 * @method void setPurgeLogs(array $PurgeLogs) 设置刷新历史记录。
 * @method integer getTotalCount() 获取任务总数，用于分页。
 * @method void setTotalCount(integer $TotalCount) 设置任务总数，用于分页。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePurgeTasksResponse extends AbstractModel
{
    /**
     * @var array 刷新历史记录。
     */
    public $PurgeLogs;

    /**
     * @var integer 任务总数，用于分页。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PurgeLogs 刷新历史记录。
     * @param integer $TotalCount 任务总数，用于分页。
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
        if (array_key_exists("PurgeLogs",$param) and $param["PurgeLogs"] !== null) {
            $this->PurgeLogs = [];
            foreach ($param["PurgeLogs"] as $key => $value){
                $obj = new PurgeTask();
                $obj->deserialize($value);
                array_push($this->PurgeLogs, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
