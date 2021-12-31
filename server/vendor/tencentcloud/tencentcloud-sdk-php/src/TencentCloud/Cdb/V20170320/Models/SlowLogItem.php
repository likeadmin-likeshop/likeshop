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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结构化的慢日志详情
 *
 * @method integer getTimestamp() 获取Sql的执行时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置Sql的执行时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getQueryTime() 获取Sql的执行时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryTime(float $QueryTime) 设置Sql的执行时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlText() 获取Sql语句。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlText(string $SqlText) 设置Sql语句。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserHost() 获取客户端地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserHost(string $UserHost) 设置客户端地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabase() 获取数据库名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabase(string $Database) 设置数据库名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLockTime() 获取锁时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockTime(float $LockTime) 设置锁时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRowsExamined() 获取扫描行数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowsExamined(integer $RowsExamined) 设置扫描行数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRowsSent() 获取结果集行数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowsSent(integer $RowsSent) 设置结果集行数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlTemplate() 获取Sql模板。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlTemplate(string $SqlTemplate) 设置Sql模板。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5() 获取Sql语句的md5。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5(string $Md5) 设置Sql语句的md5。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SlowLogItem extends AbstractModel
{
    /**
     * @var integer Sql的执行时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var float Sql的执行时长。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryTime;

    /**
     * @var string Sql语句。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlText;

    /**
     * @var string 客户端地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserHost;

    /**
     * @var string 用户名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 数据库名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Database;

    /**
     * @var float 锁时长。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockTime;

    /**
     * @var integer 扫描行数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowsExamined;

    /**
     * @var integer 结果集行数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowsSent;

    /**
     * @var string Sql模板。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlTemplate;

    /**
     * @var string Sql语句的md5。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5;

    /**
     * @param integer $Timestamp Sql的执行时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $QueryTime Sql的执行时长。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlText Sql语句。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserHost 客户端地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Database 数据库名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LockTime 锁时长。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RowsExamined 扫描行数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RowsSent 结果集行数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlTemplate Sql模板。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5 Sql语句的md5。
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("UserHost",$param) and $param["UserHost"] !== null) {
            $this->UserHost = $param["UserHost"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }

        if (array_key_exists("RowsExamined",$param) and $param["RowsExamined"] !== null) {
            $this->RowsExamined = $param["RowsExamined"];
        }

        if (array_key_exists("RowsSent",$param) and $param["RowsSent"] !== null) {
            $this->RowsSent = $param["RowsSent"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }
    }
}
