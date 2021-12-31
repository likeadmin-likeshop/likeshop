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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独占的proxy详细信息
 *
 * @method string getProxyUid() 获取proxy的唯一id
 * @method void setProxyUid(string $ProxyUid) 设置proxy的唯一id
 * @method string getMachineType() 获取机器类型
 * @method void setMachineType(string $MachineType) 设置机器类型
 * @method integer getProcessSpeed() 获取请求包速度
 * @method void setProcessSpeed(integer $ProcessSpeed) 设置请求包速度
 * @method integer getAverageProcessDelay() 获取请求包时延
 * @method void setAverageProcessDelay(integer $AverageProcessDelay) 设置请求包时延
 * @method integer getSlowProcessSpeed() 获取慢处理包速度
 * @method void setSlowProcessSpeed(integer $SlowProcessSpeed) 设置慢处理包速度
 */
class ProxyDetailInfo extends AbstractModel
{
    /**
     * @var string proxy的唯一id
     */
    public $ProxyUid;

    /**
     * @var string 机器类型
     */
    public $MachineType;

    /**
     * @var integer 请求包速度
     */
    public $ProcessSpeed;

    /**
     * @var integer 请求包时延
     */
    public $AverageProcessDelay;

    /**
     * @var integer 慢处理包速度
     */
    public $SlowProcessSpeed;

    /**
     * @param string $ProxyUid proxy的唯一id
     * @param string $MachineType 机器类型
     * @param integer $ProcessSpeed 请求包速度
     * @param integer $AverageProcessDelay 请求包时延
     * @param integer $SlowProcessSpeed 慢处理包速度
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
        if (array_key_exists("ProxyUid",$param) and $param["ProxyUid"] !== null) {
            $this->ProxyUid = $param["ProxyUid"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("ProcessSpeed",$param) and $param["ProcessSpeed"] !== null) {
            $this->ProcessSpeed = $param["ProcessSpeed"];
        }

        if (array_key_exists("AverageProcessDelay",$param) and $param["AverageProcessDelay"] !== null) {
            $this->AverageProcessDelay = $param["AverageProcessDelay"];
        }

        if (array_key_exists("SlowProcessSpeed",$param) and $param["SlowProcessSpeed"] !== null) {
            $this->SlowProcessSpeed = $param["SlowProcessSpeed"];
        }
    }
}
