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
 * ImportSnapshots请求参数结构体
 *
 * @method string getClusterId() 获取表格所属的集群id
 * @method void setClusterId(string $ClusterId) 设置表格所属的集群id
 * @method SnapshotInfo getSnapshots() 获取用于导入的快照信息
 * @method void setSnapshots(SnapshotInfo $Snapshots) 设置用于导入的快照信息
 * @method string getImportSpecialKey() 获取是否导入部分记录，TRUE表示导入部分记录，FALSE表示全表导入
 * @method void setImportSpecialKey(string $ImportSpecialKey) 设置是否导入部分记录，TRUE表示导入部分记录，FALSE表示全表导入
 * @method string getImportOriginTable() 获取是否导入到当前表，TRUE表示导入到当前表，FALSE表示导入到新表
 * @method void setImportOriginTable(string $ImportOriginTable) 设置是否导入到当前表，TRUE表示导入到当前表，FALSE表示导入到新表
 * @method KeyFile getKeyFile() 获取部分记录的key文件
 * @method void setKeyFile(KeyFile $KeyFile) 设置部分记录的key文件
 * @method string getNewTableGroupId() 获取如果导入到新表，此为新表所属的表格组id
 * @method void setNewTableGroupId(string $NewTableGroupId) 设置如果导入到新表，此为新表所属的表格组id
 * @method string getNewTableName() 获取如果导入到新表，此为新表的表名，系统会以该名称自动创建一张结构相同的空表
 * @method void setNewTableName(string $NewTableName) 设置如果导入到新表，此为新表的表名，系统会以该名称自动创建一张结构相同的空表
 */
class ImportSnapshotsRequest extends AbstractModel
{
    /**
     * @var string 表格所属的集群id
     */
    public $ClusterId;

    /**
     * @var SnapshotInfo 用于导入的快照信息
     */
    public $Snapshots;

    /**
     * @var string 是否导入部分记录，TRUE表示导入部分记录，FALSE表示全表导入
     */
    public $ImportSpecialKey;

    /**
     * @var string 是否导入到当前表，TRUE表示导入到当前表，FALSE表示导入到新表
     */
    public $ImportOriginTable;

    /**
     * @var KeyFile 部分记录的key文件
     */
    public $KeyFile;

    /**
     * @var string 如果导入到新表，此为新表所属的表格组id
     */
    public $NewTableGroupId;

    /**
     * @var string 如果导入到新表，此为新表的表名，系统会以该名称自动创建一张结构相同的空表
     */
    public $NewTableName;

    /**
     * @param string $ClusterId 表格所属的集群id
     * @param SnapshotInfo $Snapshots 用于导入的快照信息
     * @param string $ImportSpecialKey 是否导入部分记录，TRUE表示导入部分记录，FALSE表示全表导入
     * @param string $ImportOriginTable 是否导入到当前表，TRUE表示导入到当前表，FALSE表示导入到新表
     * @param KeyFile $KeyFile 部分记录的key文件
     * @param string $NewTableGroupId 如果导入到新表，此为新表所属的表格组id
     * @param string $NewTableName 如果导入到新表，此为新表的表名，系统会以该名称自动创建一张结构相同的空表
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

        if (array_key_exists("Snapshots",$param) and $param["Snapshots"] !== null) {
            $this->Snapshots = new SnapshotInfo();
            $this->Snapshots->deserialize($param["Snapshots"]);
        }

        if (array_key_exists("ImportSpecialKey",$param) and $param["ImportSpecialKey"] !== null) {
            $this->ImportSpecialKey = $param["ImportSpecialKey"];
        }

        if (array_key_exists("ImportOriginTable",$param) and $param["ImportOriginTable"] !== null) {
            $this->ImportOriginTable = $param["ImportOriginTable"];
        }

        if (array_key_exists("KeyFile",$param) and $param["KeyFile"] !== null) {
            $this->KeyFile = new KeyFile();
            $this->KeyFile->deserialize($param["KeyFile"]);
        }

        if (array_key_exists("NewTableGroupId",$param) and $param["NewTableGroupId"] !== null) {
            $this->NewTableGroupId = $param["NewTableGroupId"];
        }

        if (array_key_exists("NewTableName",$param) and $param["NewTableName"] !== null) {
            $this->NewTableName = $param["NewTableName"];
        }
    }
}
