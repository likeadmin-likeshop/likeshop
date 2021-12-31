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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了快照相关信息。
 *
 * @method string getSnapshotId() 获取快照 ID。
 * @method void setSnapshotId(string $SnapshotId) 设置快照 ID。
 * @method string getDiskUsage() 获取创建此快照的磁盘类型。取值：<li>SYSTEM_DISK：系统盘</li>
 * @method void setDiskUsage(string $DiskUsage) 设置创建此快照的磁盘类型。取值：<li>SYSTEM_DISK：系统盘</li>
 * @method string getDiskId() 获取创建此快照的磁盘 ID。
 * @method void setDiskId(string $DiskId) 设置创建此快照的磁盘 ID。
 * @method integer getDiskSize() 获取创建此快照的磁盘大小，单位 GB。
 * @method void setDiskSize(integer $DiskSize) 设置创建此快照的磁盘大小，单位 GB。
 * @method string getSnapshotName() 获取快照名称，用户自定义的快照别名。
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称，用户自定义的快照别名。
 * @method string getSnapshotState() 获取快照的状态。取值范围：
<li>NORMAL：正常 </li>
<li>CREATING：创建中</li>
<li>ROLLBACKING：回滚中。</li>
 * @method void setSnapshotState(string $SnapshotState) 设置快照的状态。取值范围：
<li>NORMAL：正常 </li>
<li>CREATING：创建中</li>
<li>ROLLBACKING：回滚中。</li>
 * @method integer getPercent() 获取创建或回滚快照进度百分比，成功后此字段取值为 100。
 * @method void setPercent(integer $Percent) 设置创建或回滚快照进度百分比，成功后此字段取值为 100。
 * @method string getLatestOperation() 获取快照的最新操作，只有创建、回滚快照时记录。
取值如 CreateInstanceSnapshot，RollbackInstanceSnapshot。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperation(string $LatestOperation) 设置快照的最新操作，只有创建、回滚快照时记录。
取值如 CreateInstanceSnapshot，RollbackInstanceSnapshot。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationState() 获取快照的最新操作状态，只有创建、回滚快照时记录。
取值范围：
<li>SUCCESS：表示操作成功</li>
<li>OPERATING：表示操作执行中</li>
<li>FAILED：表示操作失败</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置快照的最新操作状态，只有创建、回滚快照时记录。
取值范围：
<li>SUCCESS：表示操作成功</li>
<li>OPERATING：表示操作执行中</li>
<li>FAILED：表示操作失败</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationRequestId() 获取快照最新操作的唯一请求 ID，只有创建、回滚快照时记录。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) 设置快照最新操作的唯一请求 ID，只有创建、回滚快照时记录。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取快照的创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置快照的创建时间。
 */
class Snapshot extends AbstractModel
{
    /**
     * @var string 快照 ID。
     */
    public $SnapshotId;

    /**
     * @var string 创建此快照的磁盘类型。取值：<li>SYSTEM_DISK：系统盘</li>
     */
    public $DiskUsage;

    /**
     * @var string 创建此快照的磁盘 ID。
     */
    public $DiskId;

    /**
     * @var integer 创建此快照的磁盘大小，单位 GB。
     */
    public $DiskSize;

    /**
     * @var string 快照名称，用户自定义的快照别名。
     */
    public $SnapshotName;

    /**
     * @var string 快照的状态。取值范围：
<li>NORMAL：正常 </li>
<li>CREATING：创建中</li>
<li>ROLLBACKING：回滚中。</li>
     */
    public $SnapshotState;

    /**
     * @var integer 创建或回滚快照进度百分比，成功后此字段取值为 100。
     */
    public $Percent;

    /**
     * @var string 快照的最新操作，只有创建、回滚快照时记录。
取值如 CreateInstanceSnapshot，RollbackInstanceSnapshot。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperation;

    /**
     * @var string 快照的最新操作状态，只有创建、回滚快照时记录。
取值范围：
<li>SUCCESS：表示操作成功</li>
<li>OPERATING：表示操作执行中</li>
<li>FAILED：表示操作失败</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @var string 快照最新操作的唯一请求 ID，只有创建、回滚快照时记录。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationRequestId;

    /**
     * @var string 快照的创建时间。
     */
    public $CreatedTime;

    /**
     * @param string $SnapshotId 快照 ID。
     * @param string $DiskUsage 创建此快照的磁盘类型。取值：<li>SYSTEM_DISK：系统盘</li>
     * @param string $DiskId 创建此快照的磁盘 ID。
     * @param integer $DiskSize 创建此快照的磁盘大小，单位 GB。
     * @param string $SnapshotName 快照名称，用户自定义的快照别名。
     * @param string $SnapshotState 快照的状态。取值范围：
<li>NORMAL：正常 </li>
<li>CREATING：创建中</li>
<li>ROLLBACKING：回滚中。</li>
     * @param integer $Percent 创建或回滚快照进度百分比，成功后此字段取值为 100。
     * @param string $LatestOperation 快照的最新操作，只有创建、回滚快照时记录。
取值如 CreateInstanceSnapshot，RollbackInstanceSnapshot。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationState 快照的最新操作状态，只有创建、回滚快照时记录。
取值范围：
<li>SUCCESS：表示操作成功</li>
<li>OPERATING：表示操作执行中</li>
<li>FAILED：表示操作失败</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationRequestId 快照最新操作的唯一请求 ID，只有创建、回滚快照时记录。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 快照的创建时间。
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

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SnapshotState",$param) and $param["SnapshotState"] !== null) {
            $this->SnapshotState = $param["SnapshotState"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestId",$param) and $param["LatestOperationRequestId"] !== null) {
            $this->LatestOperationRequestId = $param["LatestOperationRequestId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
