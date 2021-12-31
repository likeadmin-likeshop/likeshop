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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ECDB第二个从库的配置信息，只有ECDB实例才有这个字段
 *
 * @method string getReplicationMode() 获取第二个从库复制方式，可能的返回值：async-异步，semisync-半同步
 * @method void setReplicationMode(string $ReplicationMode) 设置第二个从库复制方式，可能的返回值：async-异步，semisync-半同步
 * @method string getZone() 获取第二个从库可用区的正式名称，如ap-shanghai-1
 * @method void setZone(string $Zone) 设置第二个从库可用区的正式名称，如ap-shanghai-1
 * @method string getVip() 获取第二个从库内网IP地址
 * @method void setVip(string $Vip) 设置第二个从库内网IP地址
 * @method integer getVport() 获取第二个从库访问端口
 * @method void setVport(integer $Vport) 设置第二个从库访问端口
 */
class BackupConfig extends AbstractModel
{
    /**
     * @var string 第二个从库复制方式，可能的返回值：async-异步，semisync-半同步
     */
    public $ReplicationMode;

    /**
     * @var string 第二个从库可用区的正式名称，如ap-shanghai-1
     */
    public $Zone;

    /**
     * @var string 第二个从库内网IP地址
     */
    public $Vip;

    /**
     * @var integer 第二个从库访问端口
     */
    public $Vport;

    /**
     * @param string $ReplicationMode 第二个从库复制方式，可能的返回值：async-异步，semisync-半同步
     * @param string $Zone 第二个从库可用区的正式名称，如ap-shanghai-1
     * @param string $Vip 第二个从库内网IP地址
     * @param integer $Vport 第二个从库访问端口
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
        if (array_key_exists("ReplicationMode",$param) and $param["ReplicationMode"] !== null) {
            $this->ReplicationMode = $param["ReplicationMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
