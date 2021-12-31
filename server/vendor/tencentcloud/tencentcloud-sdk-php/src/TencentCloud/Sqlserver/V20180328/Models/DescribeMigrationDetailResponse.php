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
 * DescribeMigrationDetail返回参数结构体
 *
 * @method integer getMigrateId() 获取迁移任务ID
 * @method void setMigrateId(integer $MigrateId) 设置迁移任务ID
 * @method string getMigrateName() 获取迁移任务名称
 * @method void setMigrateName(string $MigrateName) 设置迁移任务名称
 * @method integer getAppId() 获取迁移任务所属的用户ID
 * @method void setAppId(integer $AppId) 设置迁移任务所属的用户ID
 * @method string getRegion() 获取迁移任务所属的地域
 * @method void setRegion(string $Region) 设置迁移任务所属的地域
 * @method integer getSourceType() 获取迁移源的类型 1:TencentDB for SQLServer 2:云服务器自建SQLServer数据库 4:SQLServer备份还原 5:SQLServer备份还原（COS方式）
 * @method void setSourceType(integer $SourceType) 设置迁移源的类型 1:TencentDB for SQLServer 2:云服务器自建SQLServer数据库 4:SQLServer备份还原 5:SQLServer备份还原（COS方式）
 * @method string getCreateTime() 获取迁移任务的创建时间
 * @method void setCreateTime(string $CreateTime) 设置迁移任务的创建时间
 * @method string getStartTime() 获取迁移任务的开始时间
 * @method void setStartTime(string $StartTime) 设置迁移任务的开始时间
 * @method string getEndTime() 获取迁移任务的结束时间
 * @method void setEndTime(string $EndTime) 设置迁移任务的结束时间
 * @method integer getStatus() 获取迁移任务的状态（1:初始化,4:迁移中,5.迁移失败,6.迁移成功）
 * @method void setStatus(integer $Status) 设置迁移任务的状态（1:初始化,4:迁移中,5.迁移失败,6.迁移成功）
 * @method integer getProgress() 获取迁移任务当前进度
 * @method void setProgress(integer $Progress) 设置迁移任务当前进度
 * @method integer getMigrateType() 获取迁移类型（1:结构迁移 2:数据迁移 3:增量同步）
 * @method void setMigrateType(integer $MigrateType) 设置迁移类型（1:结构迁移 2:数据迁移 3:增量同步）
 * @method MigrateSource getSource() 获取迁移源
 * @method void setSource(MigrateSource $Source) 设置迁移源
 * @method MigrateTarget getTarget() 获取迁移目标
 * @method void setTarget(MigrateTarget $Target) 设置迁移目标
 * @method array getMigrateDBSet() 获取迁移DB对象 ，离线迁移（SourceType=4或SourceType=5）不使用。
 * @method void setMigrateDBSet(array $MigrateDBSet) 设置迁移DB对象 ，离线迁移（SourceType=4或SourceType=5）不使用。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMigrationDetailResponse extends AbstractModel
{
    /**
     * @var integer 迁移任务ID
     */
    public $MigrateId;

    /**
     * @var string 迁移任务名称
     */
    public $MigrateName;

    /**
     * @var integer 迁移任务所属的用户ID
     */
    public $AppId;

    /**
     * @var string 迁移任务所属的地域
     */
    public $Region;

    /**
     * @var integer 迁移源的类型 1:TencentDB for SQLServer 2:云服务器自建SQLServer数据库 4:SQLServer备份还原 5:SQLServer备份还原（COS方式）
     */
    public $SourceType;

    /**
     * @var string 迁移任务的创建时间
     */
    public $CreateTime;

    /**
     * @var string 迁移任务的开始时间
     */
    public $StartTime;

    /**
     * @var string 迁移任务的结束时间
     */
    public $EndTime;

    /**
     * @var integer 迁移任务的状态（1:初始化,4:迁移中,5.迁移失败,6.迁移成功）
     */
    public $Status;

    /**
     * @var integer 迁移任务当前进度
     */
    public $Progress;

    /**
     * @var integer 迁移类型（1:结构迁移 2:数据迁移 3:增量同步）
     */
    public $MigrateType;

    /**
     * @var MigrateSource 迁移源
     */
    public $Source;

    /**
     * @var MigrateTarget 迁移目标
     */
    public $Target;

    /**
     * @var array 迁移DB对象 ，离线迁移（SourceType=4或SourceType=5）不使用。
     */
    public $MigrateDBSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MigrateId 迁移任务ID
     * @param string $MigrateName 迁移任务名称
     * @param integer $AppId 迁移任务所属的用户ID
     * @param string $Region 迁移任务所属的地域
     * @param integer $SourceType 迁移源的类型 1:TencentDB for SQLServer 2:云服务器自建SQLServer数据库 4:SQLServer备份还原 5:SQLServer备份还原（COS方式）
     * @param string $CreateTime 迁移任务的创建时间
     * @param string $StartTime 迁移任务的开始时间
     * @param string $EndTime 迁移任务的结束时间
     * @param integer $Status 迁移任务的状态（1:初始化,4:迁移中,5.迁移失败,6.迁移成功）
     * @param integer $Progress 迁移任务当前进度
     * @param integer $MigrateType 迁移类型（1:结构迁移 2:数据迁移 3:增量同步）
     * @param MigrateSource $Source 迁移源
     * @param MigrateTarget $Target 迁移目标
     * @param array $MigrateDBSet 迁移DB对象 ，离线迁移（SourceType=4或SourceType=5）不使用。
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
        if (array_key_exists("MigrateId",$param) and $param["MigrateId"] !== null) {
            $this->MigrateId = $param["MigrateId"];
        }

        if (array_key_exists("MigrateName",$param) and $param["MigrateName"] !== null) {
            $this->MigrateName = $param["MigrateName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("MigrateType",$param) and $param["MigrateType"] !== null) {
            $this->MigrateType = $param["MigrateType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new MigrateSource();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new MigrateTarget();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("MigrateDBSet",$param) and $param["MigrateDBSet"] !== null) {
            $this->MigrateDBSet = [];
            foreach ($param["MigrateDBSet"] as $key => $value){
                $obj = new MigrateDB();
                $obj->deserialize($value);
                array_push($this->MigrateDBSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
