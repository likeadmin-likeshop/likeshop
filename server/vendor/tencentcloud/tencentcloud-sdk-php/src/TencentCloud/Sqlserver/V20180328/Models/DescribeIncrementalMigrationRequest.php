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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIncrementalMigration请求参数结构体
 *
 * @method string getBackupMigrationId() 获取备份导入任务ID，由CreateBackupMigration接口返回
 * @method void setBackupMigrationId(string $BackupMigrationId) 设置备份导入任务ID，由CreateBackupMigration接口返回
 * @method string getInstanceId() 获取导入目标实例ID
 * @method void setInstanceId(string $InstanceId) 设置导入目标实例ID
 * @method string getBackupFileName() 获取备份文件名称
 * @method void setBackupFileName(string $BackupFileName) 设置备份文件名称
 * @method array getStatusSet() 获取导入任务状态集合
 * @method void setStatusSet(array $StatusSet) 设置导入任务状态集合
 * @method integer getLimit() 获取分页，页大小
 * @method void setLimit(integer $Limit) 设置分页，页大小
 * @method integer getOffset() 获取分页，页数
 * @method void setOffset(integer $Offset) 设置分页，页数
 * @method string getOrderBy() 获取排序字段，name,createTime,startTime,endTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段，name,createTime,startTime,endTime
 * @method string getOrderByType() 获取排序方式，desc,asc
 * @method void setOrderByType(string $OrderByType) 设置排序方式，desc,asc
 * @method string getIncrementalMigrationId() 获取增量备份导入任务ID
 * @method void setIncrementalMigrationId(string $IncrementalMigrationId) 设置增量备份导入任务ID
 */
class DescribeIncrementalMigrationRequest extends AbstractModel
{
    /**
     * @var string 备份导入任务ID，由CreateBackupMigration接口返回
     */
    public $BackupMigrationId;

    /**
     * @var string 导入目标实例ID
     */
    public $InstanceId;

    /**
     * @var string 备份文件名称
     */
    public $BackupFileName;

    /**
     * @var array 导入任务状态集合
     */
    public $StatusSet;

    /**
     * @var integer 分页，页大小
     */
    public $Limit;

    /**
     * @var integer 分页，页数
     */
    public $Offset;

    /**
     * @var string 排序字段，name,createTime,startTime,endTime
     */
    public $OrderBy;

    /**
     * @var string 排序方式，desc,asc
     */
    public $OrderByType;

    /**
     * @var string 增量备份导入任务ID
     */
    public $IncrementalMigrationId;

    /**
     * @param string $BackupMigrationId 备份导入任务ID，由CreateBackupMigration接口返回
     * @param string $InstanceId 导入目标实例ID
     * @param string $BackupFileName 备份文件名称
     * @param array $StatusSet 导入任务状态集合
     * @param integer $Limit 分页，页大小
     * @param integer $Offset 分页，页数
     * @param string $OrderBy 排序字段，name,createTime,startTime,endTime
     * @param string $OrderByType 排序方式，desc,asc
     * @param string $IncrementalMigrationId 增量备份导入任务ID
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
        if (array_key_exists("BackupMigrationId",$param) and $param["BackupMigrationId"] !== null) {
            $this->BackupMigrationId = $param["BackupMigrationId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupFileName",$param) and $param["BackupFileName"] !== null) {
            $this->BackupFileName = $param["BackupFileName"];
        }

        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("IncrementalMigrationId",$param) and $param["IncrementalMigrationId"] !== null) {
            $this->IncrementalMigrationId = $param["IncrementalMigrationId"];
        }
    }
}
