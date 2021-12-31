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
 * ModifyMigration请求参数结构体
 *
 * @method integer getMigrateId() 获取迁移任务ID
 * @method void setMigrateId(integer $MigrateId) 设置迁移任务ID
 * @method string getMigrateName() 获取新的迁移任务的名称，若不填则不修改
 * @method void setMigrateName(string $MigrateName) 设置新的迁移任务的名称，若不填则不修改
 * @method integer getMigrateType() 获取新的迁移类型（1:结构迁移 2:数据迁移 3:增量同步），若不填则不修改
 * @method void setMigrateType(integer $MigrateType) 设置新的迁移类型（1:结构迁移 2:数据迁移 3:增量同步），若不填则不修改
 * @method integer getSourceType() 获取迁移源的类型 1:TencentDB for SQLServer 2:云服务器自建SQLServer数据库 4:SQLServer备份还原 5:SQLServer备份还原（COS方式），若不填则不修改
 * @method void setSourceType(integer $SourceType) 设置迁移源的类型 1:TencentDB for SQLServer 2:云服务器自建SQLServer数据库 4:SQLServer备份还原 5:SQLServer备份还原（COS方式），若不填则不修改
 * @method MigrateSource getSource() 获取迁移源，若不填则不修改
 * @method void setSource(MigrateSource $Source) 设置迁移源，若不填则不修改
 * @method MigrateTarget getTarget() 获取迁移目标，若不填则不修改
 * @method void setTarget(MigrateTarget $Target) 设置迁移目标，若不填则不修改
 * @method array getMigrateDBSet() 获取迁移DB对象 ，离线迁移（SourceType=4或SourceType=5）不使用，若不填则不修改
 * @method void setMigrateDBSet(array $MigrateDBSet) 设置迁移DB对象 ，离线迁移（SourceType=4或SourceType=5）不使用，若不填则不修改
 */
class ModifyMigrationRequest extends AbstractModel
{
    /**
     * @var integer 迁移任务ID
     */
    public $MigrateId;

    /**
     * @var string 新的迁移任务的名称，若不填则不修改
     */
    public $MigrateName;

    /**
     * @var integer 新的迁移类型（1:结构迁移 2:数据迁移 3:增量同步），若不填则不修改
     */
    public $MigrateType;

    /**
     * @var integer 迁移源的类型 1:TencentDB for SQLServer 2:云服务器自建SQLServer数据库 4:SQLServer备份还原 5:SQLServer备份还原（COS方式），若不填则不修改
     */
    public $SourceType;

    /**
     * @var MigrateSource 迁移源，若不填则不修改
     */
    public $Source;

    /**
     * @var MigrateTarget 迁移目标，若不填则不修改
     */
    public $Target;

    /**
     * @var array 迁移DB对象 ，离线迁移（SourceType=4或SourceType=5）不使用，若不填则不修改
     */
    public $MigrateDBSet;

    /**
     * @param integer $MigrateId 迁移任务ID
     * @param string $MigrateName 新的迁移任务的名称，若不填则不修改
     * @param integer $MigrateType 新的迁移类型（1:结构迁移 2:数据迁移 3:增量同步），若不填则不修改
     * @param integer $SourceType 迁移源的类型 1:TencentDB for SQLServer 2:云服务器自建SQLServer数据库 4:SQLServer备份还原 5:SQLServer备份还原（COS方式），若不填则不修改
     * @param MigrateSource $Source 迁移源，若不填则不修改
     * @param MigrateTarget $Target 迁移目标，若不填则不修改
     * @param array $MigrateDBSet 迁移DB对象 ，离线迁移（SourceType=4或SourceType=5）不使用，若不填则不修改
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

        if (array_key_exists("MigrateType",$param) and $param["MigrateType"] !== null) {
            $this->MigrateType = $param["MigrateType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
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
    }
}
