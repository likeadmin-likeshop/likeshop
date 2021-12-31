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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢查询条目信息
 *
 * @method string getCheckSum() 获取语句校验和，用于查询详情
 * @method void setCheckSum(string $CheckSum) 设置语句校验和，用于查询详情
 * @method string getDb() 获取数据库名称
 * @method void setDb(string $Db) 设置数据库名称
 * @method string getFingerPrint() 获取抽象的SQL语句
 * @method void setFingerPrint(string $FingerPrint) 设置抽象的SQL语句
 * @method string getLockTimeAvg() 获取平均的锁时间
 * @method void setLockTimeAvg(string $LockTimeAvg) 设置平均的锁时间
 * @method string getLockTimeMax() 获取最大锁时间
 * @method void setLockTimeMax(string $LockTimeMax) 设置最大锁时间
 * @method string getLockTimeMin() 获取最小锁时间
 * @method void setLockTimeMin(string $LockTimeMin) 设置最小锁时间
 * @method string getLockTimeSum() 获取锁时间总和
 * @method void setLockTimeSum(string $LockTimeSum) 设置锁时间总和
 * @method string getQueryCount() 获取查询次数
 * @method void setQueryCount(string $QueryCount) 设置查询次数
 * @method string getQueryTimeAvg() 获取平均查询时间
 * @method void setQueryTimeAvg(string $QueryTimeAvg) 设置平均查询时间
 * @method string getQueryTimeMax() 获取最大查询时间
 * @method void setQueryTimeMax(string $QueryTimeMax) 设置最大查询时间
 * @method string getQueryTimeMin() 获取最小查询时间
 * @method void setQueryTimeMin(string $QueryTimeMin) 设置最小查询时间
 * @method string getQueryTimeSum() 获取查询时间总和
 * @method void setQueryTimeSum(string $QueryTimeSum) 设置查询时间总和
 * @method string getRowsExaminedSum() 获取扫描行数
 * @method void setRowsExaminedSum(string $RowsExaminedSum) 设置扫描行数
 * @method string getRowsSentSum() 获取发送行数
 * @method void setRowsSentSum(string $RowsSentSum) 设置发送行数
 * @method string getTsMax() 获取最后执行时间
 * @method void setTsMax(string $TsMax) 设置最后执行时间
 * @method string getTsMin() 获取首次执行时间
 * @method void setTsMin(string $TsMin) 设置首次执行时间
 * @method string getUser() 获取帐号
 * @method void setUser(string $User) 设置帐号
 * @method string getExampleSql() 获取样例Sql
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExampleSql(string $ExampleSql) 设置样例Sql
注意：此字段可能返回 null，表示取不到有效值。
 */
class SlowLogData extends AbstractModel
{
    /**
     * @var string 语句校验和，用于查询详情
     */
    public $CheckSum;

    /**
     * @var string 数据库名称
     */
    public $Db;

    /**
     * @var string 抽象的SQL语句
     */
    public $FingerPrint;

    /**
     * @var string 平均的锁时间
     */
    public $LockTimeAvg;

    /**
     * @var string 最大锁时间
     */
    public $LockTimeMax;

    /**
     * @var string 最小锁时间
     */
    public $LockTimeMin;

    /**
     * @var string 锁时间总和
     */
    public $LockTimeSum;

    /**
     * @var string 查询次数
     */
    public $QueryCount;

    /**
     * @var string 平均查询时间
     */
    public $QueryTimeAvg;

    /**
     * @var string 最大查询时间
     */
    public $QueryTimeMax;

    /**
     * @var string 最小查询时间
     */
    public $QueryTimeMin;

    /**
     * @var string 查询时间总和
     */
    public $QueryTimeSum;

    /**
     * @var string 扫描行数
     */
    public $RowsExaminedSum;

    /**
     * @var string 发送行数
     */
    public $RowsSentSum;

    /**
     * @var string 最后执行时间
     */
    public $TsMax;

    /**
     * @var string 首次执行时间
     */
    public $TsMin;

    /**
     * @var string 帐号
     */
    public $User;

    /**
     * @var string 样例Sql
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExampleSql;

    /**
     * @param string $CheckSum 语句校验和，用于查询详情
     * @param string $Db 数据库名称
     * @param string $FingerPrint 抽象的SQL语句
     * @param string $LockTimeAvg 平均的锁时间
     * @param string $LockTimeMax 最大锁时间
     * @param string $LockTimeMin 最小锁时间
     * @param string $LockTimeSum 锁时间总和
     * @param string $QueryCount 查询次数
     * @param string $QueryTimeAvg 平均查询时间
     * @param string $QueryTimeMax 最大查询时间
     * @param string $QueryTimeMin 最小查询时间
     * @param string $QueryTimeSum 查询时间总和
     * @param string $RowsExaminedSum 扫描行数
     * @param string $RowsSentSum 发送行数
     * @param string $TsMax 最后执行时间
     * @param string $TsMin 首次执行时间
     * @param string $User 帐号
     * @param string $ExampleSql 样例Sql
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
        if (array_key_exists("CheckSum",$param) and $param["CheckSum"] !== null) {
            $this->CheckSum = $param["CheckSum"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("FingerPrint",$param) and $param["FingerPrint"] !== null) {
            $this->FingerPrint = $param["FingerPrint"];
        }

        if (array_key_exists("LockTimeAvg",$param) and $param["LockTimeAvg"] !== null) {
            $this->LockTimeAvg = $param["LockTimeAvg"];
        }

        if (array_key_exists("LockTimeMax",$param) and $param["LockTimeMax"] !== null) {
            $this->LockTimeMax = $param["LockTimeMax"];
        }

        if (array_key_exists("LockTimeMin",$param) and $param["LockTimeMin"] !== null) {
            $this->LockTimeMin = $param["LockTimeMin"];
        }

        if (array_key_exists("LockTimeSum",$param) and $param["LockTimeSum"] !== null) {
            $this->LockTimeSum = $param["LockTimeSum"];
        }

        if (array_key_exists("QueryCount",$param) and $param["QueryCount"] !== null) {
            $this->QueryCount = $param["QueryCount"];
        }

        if (array_key_exists("QueryTimeAvg",$param) and $param["QueryTimeAvg"] !== null) {
            $this->QueryTimeAvg = $param["QueryTimeAvg"];
        }

        if (array_key_exists("QueryTimeMax",$param) and $param["QueryTimeMax"] !== null) {
            $this->QueryTimeMax = $param["QueryTimeMax"];
        }

        if (array_key_exists("QueryTimeMin",$param) and $param["QueryTimeMin"] !== null) {
            $this->QueryTimeMin = $param["QueryTimeMin"];
        }

        if (array_key_exists("QueryTimeSum",$param) and $param["QueryTimeSum"] !== null) {
            $this->QueryTimeSum = $param["QueryTimeSum"];
        }

        if (array_key_exists("RowsExaminedSum",$param) and $param["RowsExaminedSum"] !== null) {
            $this->RowsExaminedSum = $param["RowsExaminedSum"];
        }

        if (array_key_exists("RowsSentSum",$param) and $param["RowsSentSum"] !== null) {
            $this->RowsSentSum = $param["RowsSentSum"];
        }

        if (array_key_exists("TsMax",$param) and $param["TsMax"] !== null) {
            $this->TsMax = $param["TsMax"];
        }

        if (array_key_exists("TsMin",$param) and $param["TsMin"] !== null) {
            $this->TsMin = $param["TsMin"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ExampleSql",$param) and $param["ExampleSql"] !== null) {
            $this->ExampleSql = $param["ExampleSql"];
        }
    }
}
