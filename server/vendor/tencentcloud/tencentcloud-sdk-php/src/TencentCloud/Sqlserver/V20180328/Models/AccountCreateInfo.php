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
 * 账号创建信息
 *
 * @method string getUserName() 获取实例用户名
 * @method void setUserName(string $UserName) 设置实例用户名
 * @method string getPassword() 获取实例密码
 * @method void setPassword(string $Password) 设置实例密码
 * @method array getDBPrivileges() 获取DB权限列表
 * @method void setDBPrivileges(array $DBPrivileges) 设置DB权限列表
 * @method string getRemark() 获取账号备注信息
 * @method void setRemark(string $Remark) 设置账号备注信息
 * @method boolean getIsAdmin() 获取是否为管理员账户，默认为否
 * @method void setIsAdmin(boolean $IsAdmin) 设置是否为管理员账户，默认为否
 */
class AccountCreateInfo extends AbstractModel
{
    /**
     * @var string 实例用户名
     */
    public $UserName;

    /**
     * @var string 实例密码
     */
    public $Password;

    /**
     * @var array DB权限列表
     */
    public $DBPrivileges;

    /**
     * @var string 账号备注信息
     */
    public $Remark;

    /**
     * @var boolean 是否为管理员账户，默认为否
     */
    public $IsAdmin;

    /**
     * @param string $UserName 实例用户名
     * @param string $Password 实例密码
     * @param array $DBPrivileges DB权限列表
     * @param string $Remark 账号备注信息
     * @param boolean $IsAdmin 是否为管理员账户，默认为否
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("DBPrivileges",$param) and $param["DBPrivileges"] !== null) {
            $this->DBPrivileges = [];
            foreach ($param["DBPrivileges"] as $key => $value){
                $obj = new DBPrivilege();
                $obj->deserialize($value);
                array_push($this->DBPrivileges, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }
    }
}
