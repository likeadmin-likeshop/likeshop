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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问来源信息
 *
 * @method string getIp() 获取来源IP
 * @method void setIp(string $Ip) 设置来源IP
 * @method integer getConn() 获取连接数
 * @method void setConn(integer $Conn) 设置连接数
 * @method integer getCmd() 获取命令
 * @method void setCmd(integer $Cmd) 设置命令
 */
class SourceInfo extends AbstractModel
{
    /**
     * @var string 来源IP
     */
    public $Ip;

    /**
     * @var integer 连接数
     */
    public $Conn;

    /**
     * @var integer 命令
     */
    public $Cmd;

    /**
     * @param string $Ip 来源IP
     * @param integer $Conn 连接数
     * @param integer $Cmd 命令
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Conn",$param) and $param["Conn"] !== null) {
            $this->Conn = $param["Conn"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }
    }
}
