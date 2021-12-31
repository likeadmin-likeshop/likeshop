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
 * 数据库可回档时间范围信息
 *
 * @method string getDBName() 获取数据库名称
 * @method void setDBName(string $DBName) 设置数据库名称
 * @method string getStartTime() 获取可回档开始时间
 * @method void setStartTime(string $StartTime) 设置可回档开始时间
 * @method string getEndTime() 获取可回档结束时间
 * @method void setEndTime(string $EndTime) 设置可回档结束时间
 */
class DbRollbackTimeInfo extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DBName;

    /**
     * @var string 可回档开始时间
     */
    public $StartTime;

    /**
     * @var string 可回档结束时间
     */
    public $EndTime;

    /**
     * @param string $DBName 数据库名称
     * @param string $StartTime 可回档开始时间
     * @param string $EndTime 可回档结束时间
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
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
