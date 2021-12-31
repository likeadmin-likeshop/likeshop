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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSnapshot请求参数结构体
 *
 * @method string getDiskId() 获取需要创建快照的云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method void setDiskId(string $DiskId) 设置需要创建快照的云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。
 * @method string getSnapshotName() 获取快照名称，不传则新快照名称默认为“未命名”。
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称，不传则新快照名称默认为“未命名”。
 * @method string getDeadline() 获取快照的到期时间，到期后该快照将会自动删除
 * @method void setDeadline(string $Deadline) 设置快照的到期时间，到期后该快照将会自动删除
 */
class CreateSnapshotRequest extends AbstractModel
{
    /**
     * @var string 需要创建快照的云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。
     */
    public $DiskId;

    /**
     * @var string 快照名称，不传则新快照名称默认为“未命名”。
     */
    public $SnapshotName;

    /**
     * @var string 快照的到期时间，到期后该快照将会自动删除
     */
    public $Deadline;

    /**
     * @param string $DiskId 需要创建快照的云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。
     * @param string $SnapshotName 快照名称，不传则新快照名称默认为“未命名”。
     * @param string $Deadline 快照的到期时间，到期后该快照将会自动删除
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }
    }
}
