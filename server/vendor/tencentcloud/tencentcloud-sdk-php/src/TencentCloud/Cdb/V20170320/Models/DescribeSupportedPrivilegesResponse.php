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
 * DescribeSupportedPrivileges返回参数结构体
 *
 * @method array getGlobalSupportedPrivileges() 获取实例支持的全局权限。
 * @method void setGlobalSupportedPrivileges(array $GlobalSupportedPrivileges) 设置实例支持的全局权限。
 * @method array getDatabaseSupportedPrivileges() 获取实例支持的数据库权限。
 * @method void setDatabaseSupportedPrivileges(array $DatabaseSupportedPrivileges) 设置实例支持的数据库权限。
 * @method array getTableSupportedPrivileges() 获取实例支持的数据库表权限。
 * @method void setTableSupportedPrivileges(array $TableSupportedPrivileges) 设置实例支持的数据库表权限。
 * @method array getColumnSupportedPrivileges() 获取实例支持的数据库列权限。
 * @method void setColumnSupportedPrivileges(array $ColumnSupportedPrivileges) 设置实例支持的数据库列权限。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSupportedPrivilegesResponse extends AbstractModel
{
    /**
     * @var array 实例支持的全局权限。
     */
    public $GlobalSupportedPrivileges;

    /**
     * @var array 实例支持的数据库权限。
     */
    public $DatabaseSupportedPrivileges;

    /**
     * @var array 实例支持的数据库表权限。
     */
    public $TableSupportedPrivileges;

    /**
     * @var array 实例支持的数据库列权限。
     */
    public $ColumnSupportedPrivileges;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $GlobalSupportedPrivileges 实例支持的全局权限。
     * @param array $DatabaseSupportedPrivileges 实例支持的数据库权限。
     * @param array $TableSupportedPrivileges 实例支持的数据库表权限。
     * @param array $ColumnSupportedPrivileges 实例支持的数据库列权限。
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
        if (array_key_exists("GlobalSupportedPrivileges",$param) and $param["GlobalSupportedPrivileges"] !== null) {
            $this->GlobalSupportedPrivileges = $param["GlobalSupportedPrivileges"];
        }

        if (array_key_exists("DatabaseSupportedPrivileges",$param) and $param["DatabaseSupportedPrivileges"] !== null) {
            $this->DatabaseSupportedPrivileges = $param["DatabaseSupportedPrivileges"];
        }

        if (array_key_exists("TableSupportedPrivileges",$param) and $param["TableSupportedPrivileges"] !== null) {
            $this->TableSupportedPrivileges = $param["TableSupportedPrivileges"];
        }

        if (array_key_exists("ColumnSupportedPrivileges",$param) and $param["ColumnSupportedPrivileges"] !== null) {
            $this->ColumnSupportedPrivileges = $param["ColumnSupportedPrivileges"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
