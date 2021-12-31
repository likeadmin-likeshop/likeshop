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
 * ModifySnapshotAttribute请求参数结构体
 *
 * @method string getSnapshotId() 获取快照ID, 可通过[DescribeSnapshots](/document/product/362/15647)查询。
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID, 可通过[DescribeSnapshots](/document/product/362/15647)查询。
 * @method string getSnapshotName() 获取新的快照名称。最长为60个字符。
 * @method void setSnapshotName(string $SnapshotName) 设置新的快照名称。最长为60个字符。
 * @method boolean getIsPermanent() 获取快照的保留方式，FALSE表示非永久保留，TRUE表示永久保留。
 * @method void setIsPermanent(boolean $IsPermanent) 设置快照的保留方式，FALSE表示非永久保留，TRUE表示永久保留。
 * @method string getDeadline() 获取快照的到期时间；设置好快照将会被同时设置为非永久保留方式；超过到期时间后快照将会被自动删除。
 * @method void setDeadline(string $Deadline) 设置快照的到期时间；设置好快照将会被同时设置为非永久保留方式；超过到期时间后快照将会被自动删除。
 */
class ModifySnapshotAttributeRequest extends AbstractModel
{
    /**
     * @var string 快照ID, 可通过[DescribeSnapshots](/document/product/362/15647)查询。
     */
    public $SnapshotId;

    /**
     * @var string 新的快照名称。最长为60个字符。
     */
    public $SnapshotName;

    /**
     * @var boolean 快照的保留方式，FALSE表示非永久保留，TRUE表示永久保留。
     */
    public $IsPermanent;

    /**
     * @var string 快照的到期时间；设置好快照将会被同时设置为非永久保留方式；超过到期时间后快照将会被自动删除。
     */
    public $Deadline;

    /**
     * @param string $SnapshotId 快照ID, 可通过[DescribeSnapshots](/document/product/362/15647)查询。
     * @param string $SnapshotName 新的快照名称。最长为60个字符。
     * @param boolean $IsPermanent 快照的保留方式，FALSE表示非永久保留，TRUE表示永久保留。
     * @param string $Deadline 快照的到期时间；设置好快照将会被同时设置为非永久保留方式；超过到期时间后快照将会被自动删除。
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

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }
    }
}
