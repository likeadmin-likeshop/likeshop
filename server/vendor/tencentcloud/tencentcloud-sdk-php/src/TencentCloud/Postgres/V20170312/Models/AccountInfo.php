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
 * 账户信息
 *
 * @method string getDBInstanceId() 获取实例ID，形如postgres-lnp6j617
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-lnp6j617
 * @method string getUserName() 获取帐号
 * @method void setUserName(string $UserName) 设置帐号
 * @method string getRemark() 获取帐号备注
 * @method void setRemark(string $Remark) 设置帐号备注
 * @method integer getStatus() 获取帐号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，-1-删除中
 * @method void setStatus(integer $Status) 设置帐号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，-1-删除中
 * @method string getCreateTime() 获取帐号创建时间
 * @method void setCreateTime(string $CreateTime) 设置帐号创建时间
 * @method string getUpdateTime() 获取帐号最后一次更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置帐号最后一次更新时间
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string 实例ID，形如postgres-lnp6j617
     */
    public $DBInstanceId;

    /**
     * @var string 帐号
     */
    public $UserName;

    /**
     * @var string 帐号备注
     */
    public $Remark;

    /**
     * @var integer 帐号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，-1-删除中
     */
    public $Status;

    /**
     * @var string 帐号创建时间
     */
    public $CreateTime;

    /**
     * @var string 帐号最后一次更新时间
     */
    public $UpdateTime;

    /**
     * @param string $DBInstanceId 实例ID，形如postgres-lnp6j617
     * @param string $UserName 帐号
     * @param string $Remark 帐号备注
     * @param integer $Status 帐号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，-1-删除中
     * @param string $CreateTime 帐号创建时间
     * @param string $UpdateTime 帐号最后一次更新时间
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
