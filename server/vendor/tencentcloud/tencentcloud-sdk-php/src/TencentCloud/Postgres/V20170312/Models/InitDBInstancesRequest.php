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
 * InitDBInstances请求参数结构体
 *
 * @method array getDBInstanceIdSet() 获取实例ID集合。
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) 设置实例ID集合。
 * @method string getAdminName() 获取实例根账号用户名。
 * @method void setAdminName(string $AdminName) 设置实例根账号用户名。
 * @method string getAdminPassword() 获取实例根账号用户名对应的密码。
 * @method void setAdminPassword(string $AdminPassword) 设置实例根账号用户名对应的密码。
 * @method string getCharset() 获取实例字符集，目前只支持：UTF8、LATIN1。
 * @method void setCharset(string $Charset) 设置实例字符集，目前只支持：UTF8、LATIN1。
 */
class InitDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例ID集合。
     */
    public $DBInstanceIdSet;

    /**
     * @var string 实例根账号用户名。
     */
    public $AdminName;

    /**
     * @var string 实例根账号用户名对应的密码。
     */
    public $AdminPassword;

    /**
     * @var string 实例字符集，目前只支持：UTF8、LATIN1。
     */
    public $Charset;

    /**
     * @param array $DBInstanceIdSet 实例ID集合。
     * @param string $AdminName 实例根账号用户名。
     * @param string $AdminPassword 实例根账号用户名对应的密码。
     * @param string $Charset 实例字符集，目前只支持：UTF8、LATIN1。
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }
    }
}
