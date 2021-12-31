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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建备份下载任务结果
 *
 * @method string getReplicaSetId() 获取分片名
 * @method void setReplicaSetId(string $ReplicaSetId) 设置分片名
 * @method integer getStatus() 获取任务当前状态。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试
 * @method void setStatus(integer $Status) 设置任务当前状态。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试
 */
class BackupDownloadTaskStatus extends AbstractModel
{
    /**
     * @var string 分片名
     */
    public $ReplicaSetId;

    /**
     * @var integer 任务当前状态。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试
     */
    public $Status;

    /**
     * @param string $ReplicaSetId 分片名
     * @param integer $Status 任务当前状态。0-等待执行，1-正在下载，2-下载完成，3-下载失败，4-等待重试
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
        if (array_key_exists("ReplicaSetId",$param) and $param["ReplicaSetId"] !== null) {
            $this->ReplicaSetId = $param["ReplicaSetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
