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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务器监控状态上报项
 *
 * @method integer getServerState() 获取服务器状态
1: 在线
2: 离线
3: 重启
 * @method void setServerState(integer $ServerState) 设置服务器状态
1: 在线
2: 离线
3: 重启
 * @method string getServerIp() 获取服务器IP
 * @method void setServerIp(string $ServerIp) 设置服务器IP
 * @method array getDiskInfos() 获取硬盘监控信息列表
 * @method void setDiskInfos(array $DiskInfos) 设置硬盘监控信息列表
 */
class ServerStateItem extends AbstractModel
{
    /**
     * @var integer 服务器状态
1: 在线
2: 离线
3: 重启
     */
    public $ServerState;

    /**
     * @var string 服务器IP
     */
    public $ServerIp;

    /**
     * @var array 硬盘监控信息列表
     */
    public $DiskInfos;

    /**
     * @param integer $ServerState 服务器状态
1: 在线
2: 离线
3: 重启
     * @param string $ServerIp 服务器IP
     * @param array $DiskInfos 硬盘监控信息列表
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
        if (array_key_exists("ServerState",$param) and $param["ServerState"] !== null) {
            $this->ServerState = $param["ServerState"];
        }

        if (array_key_exists("ServerIp",$param) and $param["ServerIp"] !== null) {
            $this->ServerIp = $param["ServerIp"];
        }

        if (array_key_exists("DiskInfos",$param) and $param["DiskInfos"] !== null) {
            $this->DiskInfos = [];
            foreach ($param["DiskInfos"] as $key => $value){
                $obj = new DiskInfo();
                $obj->deserialize($value);
                array_push($this->DiskInfos, $obj);
            }
        }
    }
}
