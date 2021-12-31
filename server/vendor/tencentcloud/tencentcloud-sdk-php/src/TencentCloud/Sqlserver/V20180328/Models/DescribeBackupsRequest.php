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
 * DescribeBackups请求参数结构体
 *
 * @method string getStartTime() 获取开始时间(yyyy-MM-dd HH:mm:ss)
 * @method void setStartTime(string $StartTime) 设置开始时间(yyyy-MM-dd HH:mm:ss)
 * @method string getEndTime() 获取结束时间(yyyy-MM-dd HH:mm:ss)
 * @method void setEndTime(string $EndTime) 设置结束时间(yyyy-MM-dd HH:mm:ss)
 * @method string getInstanceId() 获取实例ID，形如mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-njj2mtpl
 * @method integer getLimit() 获取分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method void setLimit(integer $Limit) 设置分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method integer getOffset() 获取分页返回，页编号，默认值为第0页
 * @method void setOffset(integer $Offset) 设置分页返回，页编号，默认值为第0页
 * @method string getBackupName() 获取按照备份名称筛选，不填则不筛选此项
 * @method void setBackupName(string $BackupName) 设置按照备份名称筛选，不填则不筛选此项
 * @method integer getStrategy() 获取按照备份策略筛选，0-实例备份，1-多库备份，不填则不筛选此项
 * @method void setStrategy(integer $Strategy) 设置按照备份策略筛选，0-实例备份，1-多库备份，不填则不筛选此项
 * @method integer getBackupWay() 获取按照备份方式筛选，0-后台自动定时备份，1-用户手动临时备份，不填则不筛选此项
 * @method void setBackupWay(integer $BackupWay) 设置按照备份方式筛选，0-后台自动定时备份，1-用户手动临时备份，不填则不筛选此项
 * @method integer getBackupId() 获取按照备份ID筛选，不填则不筛选此项
 * @method void setBackupId(integer $BackupId) 设置按照备份ID筛选，不填则不筛选此项
 * @method string getDatabaseName() 获取按照备份的库名称筛选，不填则不筛选此项
 * @method void setDatabaseName(string $DatabaseName) 设置按照备份的库名称筛选，不填则不筛选此项
 */
class DescribeBackupsRequest extends AbstractModel
{
    /**
     * @var string 开始时间(yyyy-MM-dd HH:mm:ss)
     */
    public $StartTime;

    /**
     * @var string 结束时间(yyyy-MM-dd HH:mm:ss)
     */
    public $EndTime;

    /**
     * @var string 实例ID，形如mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var integer 分页返回，每页返回的数目，取值为1-100，默认值为20
     */
    public $Limit;

    /**
     * @var integer 分页返回，页编号，默认值为第0页
     */
    public $Offset;

    /**
     * @var string 按照备份名称筛选，不填则不筛选此项
     */
    public $BackupName;

    /**
     * @var integer 按照备份策略筛选，0-实例备份，1-多库备份，不填则不筛选此项
     */
    public $Strategy;

    /**
     * @var integer 按照备份方式筛选，0-后台自动定时备份，1-用户手动临时备份，不填则不筛选此项
     */
    public $BackupWay;

    /**
     * @var integer 按照备份ID筛选，不填则不筛选此项
     */
    public $BackupId;

    /**
     * @var string 按照备份的库名称筛选，不填则不筛选此项
     */
    public $DatabaseName;

    /**
     * @param string $StartTime 开始时间(yyyy-MM-dd HH:mm:ss)
     * @param string $EndTime 结束时间(yyyy-MM-dd HH:mm:ss)
     * @param string $InstanceId 实例ID，形如mssql-njj2mtpl
     * @param integer $Limit 分页返回，每页返回的数目，取值为1-100，默认值为20
     * @param integer $Offset 分页返回，页编号，默认值为第0页
     * @param string $BackupName 按照备份名称筛选，不填则不筛选此项
     * @param integer $Strategy 按照备份策略筛选，0-实例备份，1-多库备份，不填则不筛选此项
     * @param integer $BackupWay 按照备份方式筛选，0-后台自动定时备份，1-用户手动临时备份，不填则不筛选此项
     * @param integer $BackupId 按照备份ID筛选，不填则不筛选此项
     * @param string $DatabaseName 按照备份的库名称筛选，不填则不筛选此项
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("BackupWay",$param) and $param["BackupWay"] !== null) {
            $this->BackupWay = $param["BackupWay"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }
    }
}
