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
 * CreateDBImportJob请求参数结构体
 *
 * @method string getInstanceId() 获取实例的 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例的 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getFileName() 获取文件名称。该文件是指用户已上传到腾讯云的文件。
 * @method void setFileName(string $FileName) 设置文件名称。该文件是指用户已上传到腾讯云的文件。
 * @method string getUser() 获取云数据库的用户名。
 * @method void setUser(string $User) 设置云数据库的用户名。
 * @method string getPassword() 获取云数据库实例 User 账号的密码。
 * @method void setPassword(string $Password) 设置云数据库实例 User 账号的密码。
 * @method string getDbName() 获取导入的目标数据库名，不传表示不指定数据库。
 * @method void setDbName(string $DbName) 设置导入的目标数据库名，不传表示不指定数据库。
 */
class CreateDBImportJobRequest extends AbstractModel
{
    /**
     * @var string 实例的 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 文件名称。该文件是指用户已上传到腾讯云的文件。
     */
    public $FileName;

    /**
     * @var string 云数据库的用户名。
     */
    public $User;

    /**
     * @var string 云数据库实例 User 账号的密码。
     */
    public $Password;

    /**
     * @var string 导入的目标数据库名，不传表示不指定数据库。
     */
    public $DbName;

    /**
     * @param string $InstanceId 实例的 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $FileName 文件名称。该文件是指用户已上传到腾讯云的文件。
     * @param string $User 云数据库的用户名。
     * @param string $Password 云数据库实例 User 账号的密码。
     * @param string $DbName 导入的目标数据库名，不传表示不指定数据库。
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }
    }
}
