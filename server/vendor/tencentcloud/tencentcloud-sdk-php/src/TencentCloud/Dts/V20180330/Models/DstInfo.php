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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目的实例信息，具体内容跟迁移任务类型相关
 *
 * @method string getInstanceId() 获取目标实例ID，如cdb-jd92ijd8
 * @method void setInstanceId(string $InstanceId) 设置目标实例ID，如cdb-jd92ijd8
 * @method string getRegion() 获取目标实例地域，如ap-guangzhou
 * @method void setRegion(string $Region) 设置目标实例地域，如ap-guangzhou
 * @method string getIp() 获取目标实例vip。已废弃，无需填写
 * @method void setIp(string $Ip) 设置目标实例vip。已废弃，无需填写
 * @method integer getPort() 获取目标实例vport。已废弃，无需填写
 * @method void setPort(integer $Port) 设置目标实例vport。已废弃，无需填写
 * @method integer getReadOnly() 获取目前只对MySQL有效。当为整实例迁移时，1-只读，0-可读写。
 * @method void setReadOnly(integer $ReadOnly) 设置目前只对MySQL有效。当为整实例迁移时，1-只读，0-可读写。
 * @method string getUser() 获取目标数据库账号
 * @method void setUser(string $User) 设置目标数据库账号
 * @method string getPassword() 获取目标数据库密码
 * @method void setPassword(string $Password) 设置目标数据库密码
 */
class DstInfo extends AbstractModel
{
    /**
     * @var string 目标实例ID，如cdb-jd92ijd8
     */
    public $InstanceId;

    /**
     * @var string 目标实例地域，如ap-guangzhou
     */
    public $Region;

    /**
     * @var string 目标实例vip。已废弃，无需填写
     */
    public $Ip;

    /**
     * @var integer 目标实例vport。已废弃，无需填写
     */
    public $Port;

    /**
     * @var integer 目前只对MySQL有效。当为整实例迁移时，1-只读，0-可读写。
     */
    public $ReadOnly;

    /**
     * @var string 目标数据库账号
     */
    public $User;

    /**
     * @var string 目标数据库密码
     */
    public $Password;

    /**
     * @param string $InstanceId 目标实例ID，如cdb-jd92ijd8
     * @param string $Region 目标实例地域，如ap-guangzhou
     * @param string $Ip 目标实例vip。已废弃，无需填写
     * @param integer $Port 目标实例vport。已废弃，无需填写
     * @param integer $ReadOnly 目前只对MySQL有效。当为整实例迁移时，1-只读，0-可读写。
     * @param string $User 目标数据库账号
     * @param string $Password 目标数据库密码
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
