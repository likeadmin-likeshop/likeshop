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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建快照结果
 *
 * @method string getTableGroupId() 获取表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGroupId(string $TableGroupId) 设置表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID，对于创建单任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID，对于创建单任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorInfo getError() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(ErrorInfo $Error) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotName() 获取快照名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotTime() 获取快照的时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotTime(string $SnapshotTime) 设置快照的时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotDeadTime() 获取快照的过期时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotDeadTime(string $SnapshotDeadTime) 设置快照的过期时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotCreateTime() 获取快照创建时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotCreateTime(string $SnapshotCreateTime) 设置快照创建时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSnapshotSize() 获取快照大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotSize(integer $SnapshotSize) 设置快照大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSnapshotStatus() 获取快照状态，0 生成中 1 正常 2 删除中 3 已失效 4 回档使用中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotStatus(integer $SnapshotStatus) 设置快照状态，0 生成中 1 正常 2 删除中 3 已失效 4 回档使用中
注意：此字段可能返回 null，表示取不到有效值。
 */
class SnapshotResult extends AbstractModel
{
    /**
     * @var string 表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGroupId;

    /**
     * @var string 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 任务ID，对于创建单任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var ErrorInfo 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @var string 快照名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotName;

    /**
     * @var string 快照的时间点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotTime;

    /**
     * @var string 快照的过期时间点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotDeadTime;

    /**
     * @var string 快照创建时间点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotCreateTime;

    /**
     * @var integer 快照大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotSize;

    /**
     * @var integer 快照状态，0 生成中 1 正常 2 删除中 3 已失效 4 回档使用中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotStatus;

    /**
     * @param string $TableGroupId 表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID，对于创建单任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorInfo $Error 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotName 快照名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotTime 快照的时间点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotDeadTime 快照的过期时间点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotCreateTime 快照创建时间点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SnapshotSize 快照大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SnapshotStatus 快照状态，0 生成中 1 正常 2 删除中 3 已失效 4 回档使用中
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("SnapshotDeadTime",$param) and $param["SnapshotDeadTime"] !== null) {
            $this->SnapshotDeadTime = $param["SnapshotDeadTime"];
        }

        if (array_key_exists("SnapshotCreateTime",$param) and $param["SnapshotCreateTime"] !== null) {
            $this->SnapshotCreateTime = $param["SnapshotCreateTime"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }

        if (array_key_exists("SnapshotStatus",$param) and $param["SnapshotStatus"] !== null) {
            $this->SnapshotStatus = $param["SnapshotStatus"];
        }
    }
}
