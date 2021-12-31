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
 * 描述一条sql日志的详细信息。
 *
 * @method integer getOffset() 获取本条日志在消息队列中的偏移量。
 * @method void setOffset(integer $Offset) 设置本条日志在消息队列中的偏移量。
 * @method string getUser() 获取执行本条sql的用户。
 * @method void setUser(string $User) 设置执行本条sql的用户。
 * @method string getClient() 获取执行本条sql的客户端IP+端口。
 * @method void setClient(string $Client) 设置执行本条sql的客户端IP+端口。
 * @method string getDbName() 获取数据库名称。
 * @method void setDbName(string $DbName) 设置数据库名称。
 * @method string getSql() 获取执行的sql语句。
 * @method void setSql(string $Sql) 设置执行的sql语句。
 * @method integer getSelectRowNum() 获取返回的数据行数。
 * @method void setSelectRowNum(integer $SelectRowNum) 设置返回的数据行数。
 * @method integer getAffectRowNum() 获取影响行数。
 * @method void setAffectRowNum(integer $AffectRowNum) 设置影响行数。
 * @method integer getTimestamp() 获取Sql执行时间戳。
 * @method void setTimestamp(integer $Timestamp) 设置Sql执行时间戳。
 * @method integer getTimeCostMs() 获取Sql耗时，单位为毫秒。
 * @method void setTimeCostMs(integer $TimeCostMs) 设置Sql耗时，单位为毫秒。
 * @method integer getResultCode() 获取Sql返回码，0为成功。
 * @method void setResultCode(integer $ResultCode) 设置Sql返回码，0为成功。
 */
class SqlLogItem extends AbstractModel
{
    /**
     * @var integer 本条日志在消息队列中的偏移量。
     */
    public $Offset;

    /**
     * @var string 执行本条sql的用户。
     */
    public $User;

    /**
     * @var string 执行本条sql的客户端IP+端口。
     */
    public $Client;

    /**
     * @var string 数据库名称。
     */
    public $DbName;

    /**
     * @var string 执行的sql语句。
     */
    public $Sql;

    /**
     * @var integer 返回的数据行数。
     */
    public $SelectRowNum;

    /**
     * @var integer 影响行数。
     */
    public $AffectRowNum;

    /**
     * @var integer Sql执行时间戳。
     */
    public $Timestamp;

    /**
     * @var integer Sql耗时，单位为毫秒。
     */
    public $TimeCostMs;

    /**
     * @var integer Sql返回码，0为成功。
     */
    public $ResultCode;

    /**
     * @param integer $Offset 本条日志在消息队列中的偏移量。
     * @param string $User 执行本条sql的用户。
     * @param string $Client 执行本条sql的客户端IP+端口。
     * @param string $DbName 数据库名称。
     * @param string $Sql 执行的sql语句。
     * @param integer $SelectRowNum 返回的数据行数。
     * @param integer $AffectRowNum 影响行数。
     * @param integer $Timestamp Sql执行时间戳。
     * @param integer $TimeCostMs Sql耗时，单位为毫秒。
     * @param integer $ResultCode Sql返回码，0为成功。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Client",$param) and $param["Client"] !== null) {
            $this->Client = $param["Client"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SelectRowNum",$param) and $param["SelectRowNum"] !== null) {
            $this->SelectRowNum = $param["SelectRowNum"];
        }

        if (array_key_exists("AffectRowNum",$param) and $param["AffectRowNum"] !== null) {
            $this->AffectRowNum = $param["AffectRowNum"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("TimeCostMs",$param) and $param["TimeCostMs"] !== null) {
            $this->TimeCostMs = $param["TimeCostMs"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }
    }
}
