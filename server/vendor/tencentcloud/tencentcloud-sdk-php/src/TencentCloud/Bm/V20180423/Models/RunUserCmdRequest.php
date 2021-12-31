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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunUserCmd请求参数结构体
 *
 * @method string getCmdId() 获取自定义脚本ID
 * @method void setCmdId(string $CmdId) 设置自定义脚本ID
 * @method string getUserName() 获取执行脚本机器的用户名
 * @method void setUserName(string $UserName) 设置执行脚本机器的用户名
 * @method string getPassword() 获取执行脚本机器的用户名的密码
 * @method void setPassword(string $Password) 设置执行脚本机器的用户名的密码
 * @method array getInstanceIds() 获取执行脚本的服务器实例
 * @method void setInstanceIds(array $InstanceIds) 设置执行脚本的服务器实例
 * @method string getCmdParam() 获取执行脚本的参数，必须经过base64编码
 * @method void setCmdParam(string $CmdParam) 设置执行脚本的参数，必须经过base64编码
 */
class RunUserCmdRequest extends AbstractModel
{
    /**
     * @var string 自定义脚本ID
     */
    public $CmdId;

    /**
     * @var string 执行脚本机器的用户名
     */
    public $UserName;

    /**
     * @var string 执行脚本机器的用户名的密码
     */
    public $Password;

    /**
     * @var array 执行脚本的服务器实例
     */
    public $InstanceIds;

    /**
     * @var string 执行脚本的参数，必须经过base64编码
     */
    public $CmdParam;

    /**
     * @param string $CmdId 自定义脚本ID
     * @param string $UserName 执行脚本机器的用户名
     * @param string $Password 执行脚本机器的用户名的密码
     * @param array $InstanceIds 执行脚本的服务器实例
     * @param string $CmdParam 执行脚本的参数，必须经过base64编码
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
        if (array_key_exists("CmdId",$param) and $param["CmdId"] !== null) {
            $this->CmdId = $param["CmdId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("CmdParam",$param) and $param["CmdParam"] !== null) {
            $this->CmdParam = $param["CmdParam"];
        }
    }
}
