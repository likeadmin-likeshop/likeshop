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
 * 冷备迁移导入
 *
 * @method string getMigrationId() 获取备份导入任务ID 或 增量导入任务ID
 * @method void setMigrationId(string $MigrationId) 设置备份导入任务ID 或 增量导入任务ID
 * @method string getMigrationName() 获取备份导入名称，增量导入任务该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrationName(string $MigrationName) 设置备份导入名称，增量导入任务该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取应用ID
 * @method void setAppId(integer $AppId) 设置应用ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getInstanceId() 获取迁移目标实例ID
 * @method void setInstanceId(string $InstanceId) 设置迁移目标实例ID
 * @method string getRecoveryType() 获取迁移任务恢复类型
 * @method void setRecoveryType(string $RecoveryType) 设置迁移任务恢复类型
 * @method string getUploadType() 获取备份用户上传类型，COS_URL-备份放在用户的对象存储上，提供URL。COS_UPLOAD-备份放在业务的对象存储上，用户上传
 * @method void setUploadType(string $UploadType) 设置备份用户上传类型，COS_URL-备份放在用户的对象存储上，提供URL。COS_UPLOAD-备份放在业务的对象存储上，用户上传
 * @method array getBackupFiles() 获取备份文件列表，UploadType确定，COS_URL则保存URL，COS_UPLOAD则保存备份名称
 * @method void setBackupFiles(array $BackupFiles) 设置备份文件列表，UploadType确定，COS_URL则保存URL，COS_UPLOAD则保存备份名称
 * @method integer getStatus() 获取迁移任务状态，2-创建完成，7-全量导入中，8-等待增量，9-导入成功，10-导入失败，12-增量导入中
 * @method void setStatus(integer $Status) 设置迁移任务状态，2-创建完成，7-全量导入中，8-等待增量，9-导入成功，10-导入失败，12-增量导入中
 * @method string getCreateTime() 获取迁移任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置迁移任务创建时间
 * @method string getStartTime() 获取迁移任务开始时间
 * @method void setStartTime(string $StartTime) 设置迁移任务开始时间
 * @method string getEndTime() 获取迁移任务结束时间
 * @method void setEndTime(string $EndTime) 设置迁移任务结束时间
 * @method string getMessage() 获取说明信息
 * @method void setMessage(string $Message) 设置说明信息
 * @method MigrationDetail getDetail() 获取迁移细节
 * @method void setDetail(MigrationDetail $Detail) 设置迁移细节
 * @method MigrationAction getAction() 获取当前状态允许的操作
 * @method void setAction(MigrationAction $Action) 设置当前状态允许的操作
 * @method string getIsRecovery() 获取是否是最终恢复，全量导入任务该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRecovery(string $IsRecovery) 设置是否是最终恢复，全量导入任务该字段为空
注意：此字段可能返回 null，表示取不到有效值。
 */
class Migration extends AbstractModel
{
    /**
     * @var string 备份导入任务ID 或 增量导入任务ID
     */
    public $MigrationId;

    /**
     * @var string 备份导入名称，增量导入任务该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigrationName;

    /**
     * @var integer 应用ID
     */
    public $AppId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 迁移目标实例ID
     */
    public $InstanceId;

    /**
     * @var string 迁移任务恢复类型
     */
    public $RecoveryType;

    /**
     * @var string 备份用户上传类型，COS_URL-备份放在用户的对象存储上，提供URL。COS_UPLOAD-备份放在业务的对象存储上，用户上传
     */
    public $UploadType;

    /**
     * @var array 备份文件列表，UploadType确定，COS_URL则保存URL，COS_UPLOAD则保存备份名称
     */
    public $BackupFiles;

    /**
     * @var integer 迁移任务状态，2-创建完成，7-全量导入中，8-等待增量，9-导入成功，10-导入失败，12-增量导入中
     */
    public $Status;

    /**
     * @var string 迁移任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 迁移任务开始时间
     */
    public $StartTime;

    /**
     * @var string 迁移任务结束时间
     */
    public $EndTime;

    /**
     * @var string 说明信息
     */
    public $Message;

    /**
     * @var MigrationDetail 迁移细节
     */
    public $Detail;

    /**
     * @var MigrationAction 当前状态允许的操作
     */
    public $Action;

    /**
     * @var string 是否是最终恢复，全量导入任务该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRecovery;

    /**
     * @param string $MigrationId 备份导入任务ID 或 增量导入任务ID
     * @param string $MigrationName 备份导入名称，增量导入任务该字段为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 应用ID
     * @param string $Region 地域
     * @param string $InstanceId 迁移目标实例ID
     * @param string $RecoveryType 迁移任务恢复类型
     * @param string $UploadType 备份用户上传类型，COS_URL-备份放在用户的对象存储上，提供URL。COS_UPLOAD-备份放在业务的对象存储上，用户上传
     * @param array $BackupFiles 备份文件列表，UploadType确定，COS_URL则保存URL，COS_UPLOAD则保存备份名称
     * @param integer $Status 迁移任务状态，2-创建完成，7-全量导入中，8-等待增量，9-导入成功，10-导入失败，12-增量导入中
     * @param string $CreateTime 迁移任务创建时间
     * @param string $StartTime 迁移任务开始时间
     * @param string $EndTime 迁移任务结束时间
     * @param string $Message 说明信息
     * @param MigrationDetail $Detail 迁移细节
     * @param MigrationAction $Action 当前状态允许的操作
     * @param string $IsRecovery 是否是最终恢复，全量导入任务该字段为空
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
        if (array_key_exists("MigrationId",$param) and $param["MigrationId"] !== null) {
            $this->MigrationId = $param["MigrationId"];
        }

        if (array_key_exists("MigrationName",$param) and $param["MigrationName"] !== null) {
            $this->MigrationName = $param["MigrationName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RecoveryType",$param) and $param["RecoveryType"] !== null) {
            $this->RecoveryType = $param["RecoveryType"];
        }

        if (array_key_exists("UploadType",$param) and $param["UploadType"] !== null) {
            $this->UploadType = $param["UploadType"];
        }

        if (array_key_exists("BackupFiles",$param) and $param["BackupFiles"] !== null) {
            $this->BackupFiles = $param["BackupFiles"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new MigrationDetail();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new MigrationAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("IsRecovery",$param) and $param["IsRecovery"] !== null) {
            $this->IsRecovery = $param["IsRecovery"];
        }
    }
}
