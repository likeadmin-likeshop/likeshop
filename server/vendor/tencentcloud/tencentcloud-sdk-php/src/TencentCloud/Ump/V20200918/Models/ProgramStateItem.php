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
 * 进程状态监控项
 *
 * @method string getServerIp() 获取服务器IP
 * @method void setServerIp(string $ServerIp) 设置服务器IP
 * @method string getProgramName() 获取进程名字
 * @method void setProgramName(string $ProgramName) 设置进程名字
 * @method integer getOnlineCount() 获取在线个数
 * @method void setOnlineCount(integer $OnlineCount) 设置在线个数
 * @method integer getOfflineCount() 获取离线个数
 * @method void setOfflineCount(integer $OfflineCount) 设置离线个数
 * @method integer getState() 获取上报状态:
1: 正常上报
2: 异常上报
注：此处异常上报是指本次上报由于场内服务内部原因导致上报数据不可信等。此时离线个数重置为1，在线个数重置为0
 * @method void setState(integer $State) 设置上报状态:
1: 正常上报
2: 异常上报
注：此处异常上报是指本次上报由于场内服务内部原因导致上报数据不可信等。此时离线个数重置为1，在线个数重置为0
 */
class ProgramStateItem extends AbstractModel
{
    /**
     * @var string 服务器IP
     */
    public $ServerIp;

    /**
     * @var string 进程名字
     */
    public $ProgramName;

    /**
     * @var integer 在线个数
     */
    public $OnlineCount;

    /**
     * @var integer 离线个数
     */
    public $OfflineCount;

    /**
     * @var integer 上报状态:
1: 正常上报
2: 异常上报
注：此处异常上报是指本次上报由于场内服务内部原因导致上报数据不可信等。此时离线个数重置为1，在线个数重置为0
     */
    public $State;

    /**
     * @param string $ServerIp 服务器IP
     * @param string $ProgramName 进程名字
     * @param integer $OnlineCount 在线个数
     * @param integer $OfflineCount 离线个数
     * @param integer $State 上报状态:
1: 正常上报
2: 异常上报
注：此处异常上报是指本次上报由于场内服务内部原因导致上报数据不可信等。此时离线个数重置为1，在线个数重置为0
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
        if (array_key_exists("ServerIp",$param) and $param["ServerIp"] !== null) {
            $this->ServerIp = $param["ServerIp"];
        }

        if (array_key_exists("ProgramName",$param) and $param["ProgramName"] !== null) {
            $this->ProgramName = $param["ProgramName"];
        }

        if (array_key_exists("OnlineCount",$param) and $param["OnlineCount"] !== null) {
            $this->OnlineCount = $param["OnlineCount"];
        }

        if (array_key_exists("OfflineCount",$param) and $param["OfflineCount"] !== null) {
            $this->OfflineCount = $param["OfflineCount"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
