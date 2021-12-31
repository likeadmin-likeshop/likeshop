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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单条SlowQuery信息
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method integer getCalls() 获取调用次数
 * @method void setCalls(integer $Calls) 设置调用次数
 * @method array getCallsGrids() 获取粒度点
 * @method void setCallsGrids(array $CallsGrids) 设置粒度点
 * @method float getCostTime() 获取花费总时间
 * @method void setCostTime(float $CostTime) 设置花费总时间
 * @method integer getRows() 获取影响的行数
 * @method void setRows(integer $Rows) 设置影响的行数
 * @method float getMinCostTime() 获取花费最小时间
 * @method void setMinCostTime(float $MinCostTime) 设置花费最小时间
 * @method float getMaxCostTime() 获取花费最大时间
 * @method void setMaxCostTime(float $MaxCostTime) 设置花费最大时间
 * @method string getFirstTime() 获取最早一条慢SQL时间
 * @method void setFirstTime(string $FirstTime) 设置最早一条慢SQL时间
 * @method string getLastTime() 获取最晚一条慢SQL时间
 * @method void setLastTime(string $LastTime) 设置最晚一条慢SQL时间
 * @method integer getSharedReadBlks() 获取读共享内存块数
 * @method void setSharedReadBlks(integer $SharedReadBlks) 设置读共享内存块数
 * @method integer getSharedWriteBlks() 获取写共享内存块数
 * @method void setSharedWriteBlks(integer $SharedWriteBlks) 设置写共享内存块数
 * @method integer getReadCostTime() 获取读io总耗时
 * @method void setReadCostTime(integer $ReadCostTime) 设置读io总耗时
 * @method integer getWriteCostTime() 获取写io总耗时
 * @method void setWriteCostTime(integer $WriteCostTime) 设置写io总耗时
 * @method string getDatabaseName() 获取数据库名字
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名字
 * @method string getNormalQuery() 获取脱敏后的慢SQL
 * @method void setNormalQuery(string $NormalQuery) 设置脱敏后的慢SQL
 */
class NormalQueryItem extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var integer 调用次数
     */
    public $Calls;

    /**
     * @var array 粒度点
     */
    public $CallsGrids;

    /**
     * @var float 花费总时间
     */
    public $CostTime;

    /**
     * @var integer 影响的行数
     */
    public $Rows;

    /**
     * @var float 花费最小时间
     */
    public $MinCostTime;

    /**
     * @var float 花费最大时间
     */
    public $MaxCostTime;

    /**
     * @var string 最早一条慢SQL时间
     */
    public $FirstTime;

    /**
     * @var string 最晚一条慢SQL时间
     */
    public $LastTime;

    /**
     * @var integer 读共享内存块数
     */
    public $SharedReadBlks;

    /**
     * @var integer 写共享内存块数
     */
    public $SharedWriteBlks;

    /**
     * @var integer 读io总耗时
     */
    public $ReadCostTime;

    /**
     * @var integer 写io总耗时
     */
    public $WriteCostTime;

    /**
     * @var string 数据库名字
     */
    public $DatabaseName;

    /**
     * @var string 脱敏后的慢SQL
     */
    public $NormalQuery;

    /**
     * @param string $UserName 用户名
     * @param integer $Calls 调用次数
     * @param array $CallsGrids 粒度点
     * @param float $CostTime 花费总时间
     * @param integer $Rows 影响的行数
     * @param float $MinCostTime 花费最小时间
     * @param float $MaxCostTime 花费最大时间
     * @param string $FirstTime 最早一条慢SQL时间
     * @param string $LastTime 最晚一条慢SQL时间
     * @param integer $SharedReadBlks 读共享内存块数
     * @param integer $SharedWriteBlks 写共享内存块数
     * @param integer $ReadCostTime 读io总耗时
     * @param integer $WriteCostTime 写io总耗时
     * @param string $DatabaseName 数据库名字
     * @param string $NormalQuery 脱敏后的慢SQL
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Calls",$param) and $param["Calls"] !== null) {
            $this->Calls = $param["Calls"];
        }

        if (array_key_exists("CallsGrids",$param) and $param["CallsGrids"] !== null) {
            $this->CallsGrids = $param["CallsGrids"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = $param["Rows"];
        }

        if (array_key_exists("MinCostTime",$param) and $param["MinCostTime"] !== null) {
            $this->MinCostTime = $param["MinCostTime"];
        }

        if (array_key_exists("MaxCostTime",$param) and $param["MaxCostTime"] !== null) {
            $this->MaxCostTime = $param["MaxCostTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("SharedReadBlks",$param) and $param["SharedReadBlks"] !== null) {
            $this->SharedReadBlks = $param["SharedReadBlks"];
        }

        if (array_key_exists("SharedWriteBlks",$param) and $param["SharedWriteBlks"] !== null) {
            $this->SharedWriteBlks = $param["SharedWriteBlks"];
        }

        if (array_key_exists("ReadCostTime",$param) and $param["ReadCostTime"] !== null) {
            $this->ReadCostTime = $param["ReadCostTime"];
        }

        if (array_key_exists("WriteCostTime",$param) and $param["WriteCostTime"] !== null) {
            $this->WriteCostTime = $param["WriteCostTime"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("NormalQuery",$param) and $param["NormalQuery"] !== null) {
            $this->NormalQuery = $param["NormalQuery"];
        }
    }
}
