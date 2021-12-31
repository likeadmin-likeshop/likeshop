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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SIIP服务器相关配置项
 *
 * @method string getHost() 获取SIP服务器地址
 * @method void setHost(string $Host) 设置SIP服务器地址
 * @method integer getPort() 获取SIP服务器端口
 * @method void setPort(integer $Port) 设置SIP服务器端口
 * @method string getSerial() 获取SIP服务器编码
 * @method void setSerial(string $Serial) 设置SIP服务器编码
 * @method string getRealm() 获取SIP服务器域
 * @method void setRealm(string $Realm) 设置SIP服务器域
 */
class ServerConfiguration extends AbstractModel
{
    /**
     * @var string SIP服务器地址
     */
    public $Host;

    /**
     * @var integer SIP服务器端口
     */
    public $Port;

    /**
     * @var string SIP服务器编码
     */
    public $Serial;

    /**
     * @var string SIP服务器域
     */
    public $Realm;

    /**
     * @param string $Host SIP服务器地址
     * @param integer $Port SIP服务器端口
     * @param string $Serial SIP服务器编码
     * @param string $Realm SIP服务器域
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Serial",$param) and $param["Serial"] !== null) {
            $this->Serial = $param["Serial"];
        }

        if (array_key_exists("Realm",$param) and $param["Realm"] !== null) {
            $this->Realm = $param["Realm"];
        }
    }
}
