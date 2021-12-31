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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢日志TopSql
 *
 * @method float getLockTime() 获取sql总锁等待时间
 * @method void setLockTime(float $LockTime) 设置sql总锁等待时间
 * @method float getLockTimeMax() 获取最大锁等待时间
 * @method void setLockTimeMax(float $LockTimeMax) 设置最大锁等待时间
 * @method float getLockTimeMin() 获取最小锁等待时间
 * @method void setLockTimeMin(float $LockTimeMin) 设置最小锁等待时间
 * @method integer getRowsExamined() 获取总扫描行数
 * @method void setRowsExamined(integer $RowsExamined) 设置总扫描行数
 * @method integer getRowsExaminedMax() 获取最大扫描行数
 * @method void setRowsExaminedMax(integer $RowsExaminedMax) 设置最大扫描行数
 * @method integer getRowsExaminedMin() 获取最小扫描行数
 * @method void setRowsExaminedMin(integer $RowsExaminedMin) 设置最小扫描行数
 * @method float getQueryTime() 获取总耗时
 * @method void setQueryTime(float $QueryTime) 设置总耗时
 * @method float getQueryTimeMax() 获取最大执行时间
 * @method void setQueryTimeMax(float $QueryTimeMax) 设置最大执行时间
 * @method float getQueryTimeMin() 获取最小执行时间
 * @method void setQueryTimeMin(float $QueryTimeMin) 设置最小执行时间
 * @method integer getRowsSent() 获取总返回行数
 * @method void setRowsSent(integer $RowsSent) 设置总返回行数
 * @method integer getRowsSentMax() 获取最大返回行数
 * @method void setRowsSentMax(integer $RowsSentMax) 设置最大返回行数
 * @method integer getRowsSentMin() 获取最小返回行数
 * @method void setRowsSentMin(integer $RowsSentMin) 设置最小返回行数
 * @method integer getExecTimes() 获取执行次数
 * @method void setExecTimes(integer $ExecTimes) 设置执行次数
 * @method string getSqlTemplate() 获取sql模板
 * @method void setSqlTemplate(string $SqlTemplate) 设置sql模板
 * @method string getSqlText() 获取带参数SQL（随机）
 * @method void setSqlText(string $SqlText) 设置带参数SQL（随机）
 * @method string getSchema() 获取数据库名
 * @method void setSchema(string $Schema) 设置数据库名
 * @method float getQueryTimeRatio() 获取总耗时占比
 * @method void setQueryTimeRatio(float $QueryTimeRatio) 设置总耗时占比
 * @method float getLockTimeRatio() 获取sql总锁等待时间占比
 * @method void setLockTimeRatio(float $LockTimeRatio) 设置sql总锁等待时间占比
 * @method float getRowsExaminedRatio() 获取总扫描行数占比
 * @method void setRowsExaminedRatio(float $RowsExaminedRatio) 设置总扫描行数占比
 * @method float getRowsSentRatio() 获取总返回行数占比
 * @method void setRowsSentRatio(float $RowsSentRatio) 设置总返回行数占比
 * @method float getQueryTimeAvg() 获取平均执行时间
 * @method void setQueryTimeAvg(float $QueryTimeAvg) 设置平均执行时间
 * @method float getRowsSentAvg() 获取平均返回行数
 * @method void setRowsSentAvg(float $RowsSentAvg) 设置平均返回行数
 * @method float getLockTimeAvg() 获取平均锁等待时间
 * @method void setLockTimeAvg(float $LockTimeAvg) 设置平均锁等待时间
 * @method float getRowsExaminedAvg() 获取平均扫描行数
 * @method void setRowsExaminedAvg(float $RowsExaminedAvg) 设置平均扫描行数
 */
class SlowLogTopSqlItem extends AbstractModel
{
    /**
     * @var float sql总锁等待时间
     */
    public $LockTime;

    /**
     * @var float 最大锁等待时间
     */
    public $LockTimeMax;

    /**
     * @var float 最小锁等待时间
     */
    public $LockTimeMin;

    /**
     * @var integer 总扫描行数
     */
    public $RowsExamined;

    /**
     * @var integer 最大扫描行数
     */
    public $RowsExaminedMax;

    /**
     * @var integer 最小扫描行数
     */
    public $RowsExaminedMin;

    /**
     * @var float 总耗时
     */
    public $QueryTime;

    /**
     * @var float 最大执行时间
     */
    public $QueryTimeMax;

    /**
     * @var float 最小执行时间
     */
    public $QueryTimeMin;

    /**
     * @var integer 总返回行数
     */
    public $RowsSent;

    /**
     * @var integer 最大返回行数
     */
    public $RowsSentMax;

    /**
     * @var integer 最小返回行数
     */
    public $RowsSentMin;

    /**
     * @var integer 执行次数
     */
    public $ExecTimes;

    /**
     * @var string sql模板
     */
    public $SqlTemplate;

    /**
     * @var string 带参数SQL（随机）
     */
    public $SqlText;

    /**
     * @var string 数据库名
     */
    public $Schema;

    /**
     * @var float 总耗时占比
     */
    public $QueryTimeRatio;

    /**
     * @var float sql总锁等待时间占比
     */
    public $LockTimeRatio;

    /**
     * @var float 总扫描行数占比
     */
    public $RowsExaminedRatio;

    /**
     * @var float 总返回行数占比
     */
    public $RowsSentRatio;

    /**
     * @var float 平均执行时间
     */
    public $QueryTimeAvg;

    /**
     * @var float 平均返回行数
     */
    public $RowsSentAvg;

    /**
     * @var float 平均锁等待时间
     */
    public $LockTimeAvg;

    /**
     * @var float 平均扫描行数
     */
    public $RowsExaminedAvg;

    /**
     * @param float $LockTime sql总锁等待时间
     * @param float $LockTimeMax 最大锁等待时间
     * @param float $LockTimeMin 最小锁等待时间
     * @param integer $RowsExamined 总扫描行数
     * @param integer $RowsExaminedMax 最大扫描行数
     * @param integer $RowsExaminedMin 最小扫描行数
     * @param float $QueryTime 总耗时
     * @param float $QueryTimeMax 最大执行时间
     * @param float $QueryTimeMin 最小执行时间
     * @param integer $RowsSent 总返回行数
     * @param integer $RowsSentMax 最大返回行数
     * @param integer $RowsSentMin 最小返回行数
     * @param integer $ExecTimes 执行次数
     * @param string $SqlTemplate sql模板
     * @param string $SqlText 带参数SQL（随机）
     * @param string $Schema 数据库名
     * @param float $QueryTimeRatio 总耗时占比
     * @param float $LockTimeRatio sql总锁等待时间占比
     * @param float $RowsExaminedRatio 总扫描行数占比
     * @param float $RowsSentRatio 总返回行数占比
     * @param float $QueryTimeAvg 平均执行时间
     * @param float $RowsSentAvg 平均返回行数
     * @param float $LockTimeAvg 平均锁等待时间
     * @param float $RowsExaminedAvg 平均扫描行数
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
        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }

        if (array_key_exists("LockTimeMax",$param) and $param["LockTimeMax"] !== null) {
            $this->LockTimeMax = $param["LockTimeMax"];
        }

        if (array_key_exists("LockTimeMin",$param) and $param["LockTimeMin"] !== null) {
            $this->LockTimeMin = $param["LockTimeMin"];
        }

        if (array_key_exists("RowsExamined",$param) and $param["RowsExamined"] !== null) {
            $this->RowsExamined = $param["RowsExamined"];
        }

        if (array_key_exists("RowsExaminedMax",$param) and $param["RowsExaminedMax"] !== null) {
            $this->RowsExaminedMax = $param["RowsExaminedMax"];
        }

        if (array_key_exists("RowsExaminedMin",$param) and $param["RowsExaminedMin"] !== null) {
            $this->RowsExaminedMin = $param["RowsExaminedMin"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("QueryTimeMax",$param) and $param["QueryTimeMax"] !== null) {
            $this->QueryTimeMax = $param["QueryTimeMax"];
        }

        if (array_key_exists("QueryTimeMin",$param) and $param["QueryTimeMin"] !== null) {
            $this->QueryTimeMin = $param["QueryTimeMin"];
        }

        if (array_key_exists("RowsSent",$param) and $param["RowsSent"] !== null) {
            $this->RowsSent = $param["RowsSent"];
        }

        if (array_key_exists("RowsSentMax",$param) and $param["RowsSentMax"] !== null) {
            $this->RowsSentMax = $param["RowsSentMax"];
        }

        if (array_key_exists("RowsSentMin",$param) and $param["RowsSentMin"] !== null) {
            $this->RowsSentMin = $param["RowsSentMin"];
        }

        if (array_key_exists("ExecTimes",$param) and $param["ExecTimes"] !== null) {
            $this->ExecTimes = $param["ExecTimes"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("QueryTimeRatio",$param) and $param["QueryTimeRatio"] !== null) {
            $this->QueryTimeRatio = $param["QueryTimeRatio"];
        }

        if (array_key_exists("LockTimeRatio",$param) and $param["LockTimeRatio"] !== null) {
            $this->LockTimeRatio = $param["LockTimeRatio"];
        }

        if (array_key_exists("RowsExaminedRatio",$param) and $param["RowsExaminedRatio"] !== null) {
            $this->RowsExaminedRatio = $param["RowsExaminedRatio"];
        }

        if (array_key_exists("RowsSentRatio",$param) and $param["RowsSentRatio"] !== null) {
            $this->RowsSentRatio = $param["RowsSentRatio"];
        }

        if (array_key_exists("QueryTimeAvg",$param) and $param["QueryTimeAvg"] !== null) {
            $this->QueryTimeAvg = $param["QueryTimeAvg"];
        }

        if (array_key_exists("RowsSentAvg",$param) and $param["RowsSentAvg"] !== null) {
            $this->RowsSentAvg = $param["RowsSentAvg"];
        }

        if (array_key_exists("LockTimeAvg",$param) and $param["LockTimeAvg"] !== null) {
            $this->LockTimeAvg = $param["LockTimeAvg"];
        }

        if (array_key_exists("RowsExaminedAvg",$param) and $param["RowsExaminedAvg"] !== null) {
            $this->RowsExaminedAvg = $param["RowsExaminedAvg"];
        }
    }
}
