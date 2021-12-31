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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述镜像关联的快照信息
 *
 * @method string getSnapshotId() 获取快照Id。
 * @method void setSnapshotId(string $SnapshotId) 设置快照Id。
 * @method string getDiskUsage() 获取创建此快照的云硬盘类型。取值范围：
SYSTEM_DISK：系统盘
DATA_DISK：数据盘。
 * @method void setDiskUsage(string $DiskUsage) 设置创建此快照的云硬盘类型。取值范围：
SYSTEM_DISK：系统盘
DATA_DISK：数据盘。
 * @method integer getDiskSize() 获取创建此快照的云硬盘大小，单位GB。
 * @method void setDiskSize(integer $DiskSize) 设置创建此快照的云硬盘大小，单位GB。
 */
class Snapshot extends AbstractModel
{
    /**
     * @var string 快照Id。
     */
    public $SnapshotId;

    /**
     * @var string 创建此快照的云硬盘类型。取值范围：
SYSTEM_DISK：系统盘
DATA_DISK：数据盘。
     */
    public $DiskUsage;

    /**
     * @var integer 创建此快照的云硬盘大小，单位GB。
     */
    public $DiskSize;

    /**
     * @param string $SnapshotId 快照Id。
     * @param string $DiskUsage 创建此快照的云硬盘类型。取值范围：
SYSTEM_DISK：系统盘
DATA_DISK：数据盘。
     * @param integer $DiskSize 创建此快照的云硬盘大小，单位GB。
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
