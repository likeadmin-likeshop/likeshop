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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditReverseShellRule请求参数结构体
 *
 * @method integer getId() 获取规则ID(新增时请留空)
 * @method void setId(integer $Id) 设置规则ID(新增时请留空)
 * @method string getUuid() 获取客户端ID(IsGlobal为1时，Uuid或Hostip必填一个)
 * @method void setUuid(string $Uuid) 设置客户端ID(IsGlobal为1时，Uuid或Hostip必填一个)
 * @method string getHostip() 获取主机IP(IsGlobal为1时，Uuid或Hostip必填一个)
 * @method void setHostip(string $Hostip) 设置主机IP(IsGlobal为1时，Uuid或Hostip必填一个)
 * @method string getDestIp() 获取目标IP
 * @method void setDestIp(string $DestIp) 设置目标IP
 * @method string getDestPort() 获取目标端口
 * @method void setDestPort(string $DestPort) 设置目标端口
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method integer getIsGlobal() 获取是否全局规则(默认否)
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则(默认否)
 */
class EditReverseShellRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则ID(新增时请留空)
     */
    public $Id;

    /**
     * @var string 客户端ID(IsGlobal为1时，Uuid或Hostip必填一个)
     */
    public $Uuid;

    /**
     * @var string 主机IP(IsGlobal为1时，Uuid或Hostip必填一个)
     */
    public $Hostip;

    /**
     * @var string 目标IP
     */
    public $DestIp;

    /**
     * @var string 目标端口
     */
    public $DestPort;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var integer 是否全局规则(默认否)
     */
    public $IsGlobal;

    /**
     * @param integer $Id 规则ID(新增时请留空)
     * @param string $Uuid 客户端ID(IsGlobal为1时，Uuid或Hostip必填一个)
     * @param string $Hostip 主机IP(IsGlobal为1时，Uuid或Hostip必填一个)
     * @param string $DestIp 目标IP
     * @param string $DestPort 目标端口
     * @param string $ProcessName 进程名
     * @param integer $IsGlobal 是否全局规则(默认否)
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }

        if (array_key_exists("DestIp",$param) and $param["DestIp"] !== null) {
            $this->DestIp = $param["DestIp"];
        }

        if (array_key_exists("DestPort",$param) and $param["DestPort"] !== null) {
            $this->DestPort = $param["DestPort"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }
    }
}
