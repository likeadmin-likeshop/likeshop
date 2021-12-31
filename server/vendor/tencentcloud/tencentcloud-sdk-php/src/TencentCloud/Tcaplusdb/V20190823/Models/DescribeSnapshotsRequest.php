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
 * DescribeSnapshots请求参数结构体
 *
 * @method string getClusterId() 获取表格所属集群id
 * @method void setClusterId(string $ClusterId) 设置表格所属集群id
 * @method string getTableGroupId() 获取所属表格组ID
 * @method void setTableGroupId(string $TableGroupId) 设置所属表格组ID
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 * @method string getSnapshotName() 获取快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
 */
class DescribeSnapshotsRequest extends AbstractModel
{
    /**
     * @var string 表格所属集群id
     */
    public $ClusterId;

    /**
     * @var string 所属表格组ID
     */
    public $TableGroupId;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @var string 快照名称
     */
    public $SnapshotName;

    /**
     * @param string $ClusterId 表格所属集群id
     * @param string $TableGroupId 所属表格组ID
     * @param string $TableName 表名称
     * @param string $SnapshotName 快照名称
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }
    }
}
