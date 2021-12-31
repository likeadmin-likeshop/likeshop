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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行配置
 *
 * @method integer getGameServerSessionActivationTimeoutSeconds() 获取游戏会话进程超时，最小值1，最大值600，单位秒
 * @method void setGameServerSessionActivationTimeoutSeconds(integer $GameServerSessionActivationTimeoutSeconds) 设置游戏会话进程超时，最小值1，最大值600，单位秒
 * @method integer getMaxConcurrentGameServerSessionActivations() 获取最大游戏会话数，最小值1，最大值2147483647
 * @method void setMaxConcurrentGameServerSessionActivations(integer $MaxConcurrentGameServerSessionActivations) 设置最大游戏会话数，最小值1，最大值2147483647
 * @method array getServerProcesses() 获取服务进程配置，至少有一个进程配置
 * @method void setServerProcesses(array $ServerProcesses) 设置服务进程配置，至少有一个进程配置
 */
class RuntimeConfiguration extends AbstractModel
{
    /**
     * @var integer 游戏会话进程超时，最小值1，最大值600，单位秒
     */
    public $GameServerSessionActivationTimeoutSeconds;

    /**
     * @var integer 最大游戏会话数，最小值1，最大值2147483647
     */
    public $MaxConcurrentGameServerSessionActivations;

    /**
     * @var array 服务进程配置，至少有一个进程配置
     */
    public $ServerProcesses;

    /**
     * @param integer $GameServerSessionActivationTimeoutSeconds 游戏会话进程超时，最小值1，最大值600，单位秒
     * @param integer $MaxConcurrentGameServerSessionActivations 最大游戏会话数，最小值1，最大值2147483647
     * @param array $ServerProcesses 服务进程配置，至少有一个进程配置
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
        if (array_key_exists("GameServerSessionActivationTimeoutSeconds",$param) and $param["GameServerSessionActivationTimeoutSeconds"] !== null) {
            $this->GameServerSessionActivationTimeoutSeconds = $param["GameServerSessionActivationTimeoutSeconds"];
        }

        if (array_key_exists("MaxConcurrentGameServerSessionActivations",$param) and $param["MaxConcurrentGameServerSessionActivations"] !== null) {
            $this->MaxConcurrentGameServerSessionActivations = $param["MaxConcurrentGameServerSessionActivations"];
        }

        if (array_key_exists("ServerProcesses",$param) and $param["ServerProcesses"] !== null) {
            $this->ServerProcesses = [];
            foreach ($param["ServerProcesses"] as $key => $value){
                $obj = new ServerProcesse();
                $obj->deserialize($value);
                array_push($this->ServerProcesses, $obj);
            }
        }
    }
}
