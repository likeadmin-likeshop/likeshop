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
 * 端口统计列表
 *
 * @method integer getPort() 获取端口号
 * @method void setPort(integer $Port) 设置端口号
 * @method integer getMachineNum() 获取主机数量
 * @method void setMachineNum(integer $MachineNum) 设置主机数量
 */
class OpenPortStatistics extends AbstractModel
{
    /**
     * @var integer 端口号
     */
    public $Port;

    /**
     * @var integer 主机数量
     */
    public $MachineNum;

    /**
     * @param integer $Port 端口号
     * @param integer $MachineNum 主机数量
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("MachineNum",$param) and $param["MachineNum"] !== null) {
            $this->MachineNum = $param["MachineNum"];
        }
    }
}
