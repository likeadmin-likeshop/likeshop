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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移任务类别
 *
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getMigrationType() 获取迁移类型
 * @method void setMigrationType(string $MigrationType) 设置迁移类型
 * @method string getStatus() 获取迁移状态
 * @method void setStatus(string $Status) 设置迁移状态
 * @method integer getProjectId() 获取项目Id
 * @method void setProjectId(integer $ProjectId) 设置项目Id
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method SrcInfo getSrcInfo() 获取迁移源信息
 * @method void setSrcInfo(SrcInfo $SrcInfo) 设置迁移源信息
 * @method TimeObj getMigrationTimeLine() 获取迁移时间信息
 * @method void setMigrationTimeLine(TimeObj $MigrationTimeLine) 设置迁移时间信息
 * @method string getUpdated() 获取状态更新时间
 * @method void setUpdated(string $Updated) 设置状态更新时间
 * @method DstInfo getDstInfo() 获取迁移目的信息
 * @method void setDstInfo(DstInfo $DstInfo) 设置迁移目的信息
 */
class Task extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 迁移类型
     */
    public $MigrationType;

    /**
     * @var string 迁移状态
     */
    public $Status;

    /**
     * @var integer 项目Id
     */
    public $ProjectId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var SrcInfo 迁移源信息
     */
    public $SrcInfo;

    /**
     * @var TimeObj 迁移时间信息
     */
    public $MigrationTimeLine;

    /**
     * @var string 状态更新时间
     */
    public $Updated;

    /**
     * @var DstInfo 迁移目的信息
     */
    public $DstInfo;

    /**
     * @param string $TaskId 任务Id
     * @param string $TaskName 任务名称
     * @param string $MigrationType 迁移类型
     * @param string $Status 迁移状态
     * @param integer $ProjectId 项目Id
     * @param string $ProjectName 项目名称
     * @param SrcInfo $SrcInfo 迁移源信息
     * @param TimeObj $MigrationTimeLine 迁移时间信息
     * @param string $Updated 状态更新时间
     * @param DstInfo $DstInfo 迁移目的信息
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("MigrationType",$param) and $param["MigrationType"] !== null) {
            $this->MigrationType = $param["MigrationType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SrcInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("MigrationTimeLine",$param) and $param["MigrationTimeLine"] !== null) {
            $this->MigrationTimeLine = new TimeObj();
            $this->MigrationTimeLine->deserialize($param["MigrationTimeLine"]);
        }

        if (array_key_exists("Updated",$param) and $param["Updated"] !== null) {
            $this->Updated = $param["Updated"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DstInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }
    }
}
