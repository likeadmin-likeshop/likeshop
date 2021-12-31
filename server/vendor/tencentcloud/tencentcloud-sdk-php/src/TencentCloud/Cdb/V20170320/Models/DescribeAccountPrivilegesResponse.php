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
 * DescribeAccountPrivileges返回参数结构体
 *
 * @method array getGlobalPrivileges() 获取全局权限数组。
 * @method void setGlobalPrivileges(array $GlobalPrivileges) 设置全局权限数组。
 * @method array getDatabasePrivileges() 获取数据库权限数组。
 * @method void setDatabasePrivileges(array $DatabasePrivileges) 设置数据库权限数组。
 * @method array getTablePrivileges() 获取数据库中的表权限数组。
 * @method void setTablePrivileges(array $TablePrivileges) 设置数据库中的表权限数组。
 * @method array getColumnPrivileges() 获取数据库表中的列权限数组。
 * @method void setColumnPrivileges(array $ColumnPrivileges) 设置数据库表中的列权限数组。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccountPrivilegesResponse extends AbstractModel
{
    /**
     * @var array 全局权限数组。
     */
    public $GlobalPrivileges;

    /**
     * @var array 数据库权限数组。
     */
    public $DatabasePrivileges;

    /**
     * @var array 数据库中的表权限数组。
     */
    public $TablePrivileges;

    /**
     * @var array 数据库表中的列权限数组。
     */
    public $ColumnPrivileges;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $GlobalPrivileges 全局权限数组。
     * @param array $DatabasePrivileges 数据库权限数组。
     * @param array $TablePrivileges 数据库中的表权限数组。
     * @param array $ColumnPrivileges 数据库表中的列权限数组。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("GlobalPrivileges",$param) and $param["GlobalPrivileges"] !== null) {
            $this->GlobalPrivileges = $param["GlobalPrivileges"];
        }

        if (array_key_exists("DatabasePrivileges",$param) and $param["DatabasePrivileges"] !== null) {
            $this->DatabasePrivileges = [];
            foreach ($param["DatabasePrivileges"] as $key => $value){
                $obj = new DatabasePrivilege();
                $obj->deserialize($value);
                array_push($this->DatabasePrivileges, $obj);
            }
        }

        if (array_key_exists("TablePrivileges",$param) and $param["TablePrivileges"] !== null) {
            $this->TablePrivileges = [];
            foreach ($param["TablePrivileges"] as $key => $value){
                $obj = new TablePrivilege();
                $obj->deserialize($value);
                array_push($this->TablePrivileges, $obj);
            }
        }

        if (array_key_exists("ColumnPrivileges",$param) and $param["ColumnPrivileges"] !== null) {
            $this->ColumnPrivileges = [];
            foreach ($param["ColumnPrivileges"] as $key => $value){
                $obj = new ColumnPrivilege();
                $obj->deserialize($value);
                array_push($this->ColumnPrivileges, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
