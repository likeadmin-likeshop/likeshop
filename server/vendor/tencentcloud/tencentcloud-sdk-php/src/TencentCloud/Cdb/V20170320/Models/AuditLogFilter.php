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
 * 审计日志过滤条件。查询审计日志时，用户过滤返回的审计日志。
 *
 * @method array getHost() 获取客户端地址。
 * @method void setHost(array $Host) 设置客户端地址。
 * @method array getUser() 获取用户名。
 * @method void setUser(array $User) 设置用户名。
 * @method array getDBName() 获取数据库名称。
 * @method void setDBName(array $DBName) 设置数据库名称。
 * @method array getTableName() 获取表名称。
 * @method void setTableName(array $TableName) 设置表名称。
 * @method array getPolicyName() 获取审计策略名称。
 * @method void setPolicyName(array $PolicyName) 设置审计策略名称。
 * @method string getSql() 获取SQL 语句。支持模糊匹配。
 * @method void setSql(string $Sql) 设置SQL 语句。支持模糊匹配。
 * @method string getSqlType() 获取SQL 类型。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
 * @method void setSqlType(string $SqlType) 设置SQL 类型。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
 * @method integer getExecTime() 获取执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
 * @method void setExecTime(integer $ExecTime) 设置执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
 * @method integer getAffectRows() 获取影响行数。表示筛选影响行数大于该值的审计日志。
 * @method void setAffectRows(integer $AffectRows) 设置影响行数。表示筛选影响行数大于该值的审计日志。
 */
class AuditLogFilter extends AbstractModel
{
    /**
     * @var array 客户端地址。
     */
    public $Host;

    /**
     * @var array 用户名。
     */
    public $User;

    /**
     * @var array 数据库名称。
     */
    public $DBName;

    /**
     * @var array 表名称。
     */
    public $TableName;

    /**
     * @var array 审计策略名称。
     */
    public $PolicyName;

    /**
     * @var string SQL 语句。支持模糊匹配。
     */
    public $Sql;

    /**
     * @var string SQL 类型。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
     */
    public $SqlType;

    /**
     * @var integer 执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
     */
    public $ExecTime;

    /**
     * @var integer 影响行数。表示筛选影响行数大于该值的审计日志。
     */
    public $AffectRows;

    /**
     * @param array $Host 客户端地址。
     * @param array $User 用户名。
     * @param array $DBName 数据库名称。
     * @param array $TableName 表名称。
     * @param array $PolicyName 审计策略名称。
     * @param string $Sql SQL 语句。支持模糊匹配。
     * @param string $SqlType SQL 类型。目前支持："SELECT", "INSERT", "UPDATE", "DELETE", "CREATE", "DROP", "ALTER", "SET", "REPLACE", "EXECUTE"。
     * @param integer $ExecTime 执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
     * @param integer $AffectRows 影响行数。表示筛选影响行数大于该值的审计日志。
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }
    }
}
