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
 * 账户信息详情
 *
 * @method string getName() 获取账户名
 * @method void setName(string $Name) 设置账户名
 * @method string getRemark() 获取账户备注
 * @method void setRemark(string $Remark) 设置账户备注
 * @method string getCreateTime() 获取账户创建时间
 * @method void setCreateTime(string $CreateTime) 设置账户创建时间
 * @method integer getStatus() 获取账户状态，1-创建中，2-正常，3-修改中，4-密码重置中，-1-删除中
 * @method void setStatus(integer $Status) 设置账户状态，1-创建中，2-正常，3-修改中，4-密码重置中，-1-删除中
 * @method string getUpdateTime() 获取账户更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置账户更新时间
 * @method string getPassTime() 获取密码更新时间
 * @method void setPassTime(string $PassTime) 设置密码更新时间
 * @method string getInternalStatus() 获取账户内部状态，正常为enable
 * @method void setInternalStatus(string $InternalStatus) 设置账户内部状态，正常为enable
 * @method array getDbs() 获取该账户对相关db的读写权限信息
 * @method void setDbs(array $Dbs) 设置该账户对相关db的读写权限信息
 * @method boolean getIsAdmin() 获取是否为管理员账户
 * @method void setIsAdmin(boolean $IsAdmin) 设置是否为管理员账户
 */
class AccountDetail extends AbstractModel
{
    /**
     * @var string 账户名
     */
    public $Name;

    /**
     * @var string 账户备注
     */
    public $Remark;

    /**
     * @var string 账户创建时间
     */
    public $CreateTime;

    /**
     * @var integer 账户状态，1-创建中，2-正常，3-修改中，4-密码重置中，-1-删除中
     */
    public $Status;

    /**
     * @var string 账户更新时间
     */
    public $UpdateTime;

    /**
     * @var string 密码更新时间
     */
    public $PassTime;

    /**
     * @var string 账户内部状态，正常为enable
     */
    public $InternalStatus;

    /**
     * @var array 该账户对相关db的读写权限信息
     */
    public $Dbs;

    /**
     * @var boolean 是否为管理员账户
     */
    public $IsAdmin;

    /**
     * @param string $Name 账户名
     * @param string $Remark 账户备注
     * @param string $CreateTime 账户创建时间
     * @param integer $Status 账户状态，1-创建中，2-正常，3-修改中，4-密码重置中，-1-删除中
     * @param string $UpdateTime 账户更新时间
     * @param string $PassTime 密码更新时间
     * @param string $InternalStatus 账户内部状态，正常为enable
     * @param array $Dbs 该账户对相关db的读写权限信息
     * @param boolean $IsAdmin 是否为管理员账户
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PassTime",$param) and $param["PassTime"] !== null) {
            $this->PassTime = $param["PassTime"];
        }

        if (array_key_exists("InternalStatus",$param) and $param["InternalStatus"] !== null) {
            $this->InternalStatus = $param["InternalStatus"];
        }

        if (array_key_exists("Dbs",$param) and $param["Dbs"] !== null) {
            $this->Dbs = [];
            foreach ($param["Dbs"] as $key => $value){
                $obj = new DBPrivilege();
                $obj->deserialize($value);
                array_push($this->Dbs, $obj);
            }
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }
    }
}
