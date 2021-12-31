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
 * 账号详细信息
 *
 * @method string getNotes() 获取账号备注信息
 * @method void setNotes(string $Notes) 设置账号备注信息
 * @method string getHost() 获取账号的域名
 * @method void setHost(string $Host) 设置账号的域名
 * @method string getUser() 获取账号的名称
 * @method void setUser(string $User) 设置账号的名称
 * @method string getModifyTime() 获取账号信息修改时间
 * @method void setModifyTime(string $ModifyTime) 设置账号信息修改时间
 * @method string getModifyPasswordTime() 获取修改密码的时间
 * @method void setModifyPasswordTime(string $ModifyPasswordTime) 设置修改密码的时间
 * @method string getCreateTime() 获取该值已废弃
 * @method void setCreateTime(string $CreateTime) 设置该值已废弃
 * @method integer getMaxUserConnections() 获取用户最大可用实例连接数
 * @method void setMaxUserConnections(integer $MaxUserConnections) 设置用户最大可用实例连接数
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string 账号备注信息
     */
    public $Notes;

    /**
     * @var string 账号的域名
     */
    public $Host;

    /**
     * @var string 账号的名称
     */
    public $User;

    /**
     * @var string 账号信息修改时间
     */
    public $ModifyTime;

    /**
     * @var string 修改密码的时间
     */
    public $ModifyPasswordTime;

    /**
     * @var string 该值已废弃
     */
    public $CreateTime;

    /**
     * @var integer 用户最大可用实例连接数
     */
    public $MaxUserConnections;

    /**
     * @param string $Notes 账号备注信息
     * @param string $Host 账号的域名
     * @param string $User 账号的名称
     * @param string $ModifyTime 账号信息修改时间
     * @param string $ModifyPasswordTime 修改密码的时间
     * @param string $CreateTime 该值已废弃
     * @param integer $MaxUserConnections 用户最大可用实例连接数
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
        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ModifyPasswordTime",$param) and $param["ModifyPasswordTime"] !== null) {
            $this->ModifyPasswordTime = $param["ModifyPasswordTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }
    }
}
