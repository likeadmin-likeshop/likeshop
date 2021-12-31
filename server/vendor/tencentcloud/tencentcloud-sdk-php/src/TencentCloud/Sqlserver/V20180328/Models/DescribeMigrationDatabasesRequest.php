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
 * DescribeMigrationDatabases请求参数结构体
 *
 * @method string getInstanceId() 获取迁移源实例的ID，格式如：mssql-si2823jyl
 * @method void setInstanceId(string $InstanceId) 设置迁移源实例的ID，格式如：mssql-si2823jyl
 * @method string getUserName() 获取迁移源实例用户名
 * @method void setUserName(string $UserName) 设置迁移源实例用户名
 * @method string getPassword() 获取迁移源实例密码
 * @method void setPassword(string $Password) 设置迁移源实例密码
 */
class DescribeMigrationDatabasesRequest extends AbstractModel
{
    /**
     * @var string 迁移源实例的ID，格式如：mssql-si2823jyl
     */
    public $InstanceId;

    /**
     * @var string 迁移源实例用户名
     */
    public $UserName;

    /**
     * @var string 迁移源实例密码
     */
    public $Password;

    /**
     * @param string $InstanceId 迁移源实例的ID，格式如：mssql-si2823jyl
     * @param string $UserName 迁移源实例用户名
     * @param string $Password 迁移源实例密码
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
