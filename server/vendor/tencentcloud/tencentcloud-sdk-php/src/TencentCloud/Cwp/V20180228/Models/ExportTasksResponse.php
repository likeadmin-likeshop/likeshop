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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportTasks返回参数结构体
 *
 * @method string getStatus() 获取PENDING：正在生成下载链接，FINISHED：下载链接已生成，ERROR：网络异常等异常情况
 * @method void setStatus(string $Status) 设置PENDING：正在生成下载链接，FINISHED：下载链接已生成，ERROR：网络异常等异常情况
 * @method string getDownloadUrl() 获取下载链接
 * @method void setDownloadUrl(string $DownloadUrl) 设置下载链接
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ExportTasksResponse extends AbstractModel
{
    /**
     * @var string PENDING：正在生成下载链接，FINISHED：下载链接已生成，ERROR：网络异常等异常情况
     */
    public $Status;

    /**
     * @var string 下载链接
     */
    public $DownloadUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status PENDING：正在生成下载链接，FINISHED：下载链接已生成，ERROR：网络异常等异常情况
     * @param string $DownloadUrl 下载链接
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
