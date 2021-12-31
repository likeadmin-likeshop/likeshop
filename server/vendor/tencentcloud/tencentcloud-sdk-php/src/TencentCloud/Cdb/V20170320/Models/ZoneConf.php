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
 * 多可用区信息
 *
 * @method array getDeployMode() 获取可用区部署方式，可能的值为：0-单可用区；1-多可用区
 * @method void setDeployMode(array $DeployMode) 设置可用区部署方式，可能的值为：0-单可用区；1-多可用区
 * @method array getMasterZone() 获取主实例所在的可用区
 * @method void setMasterZone(array $MasterZone) 设置主实例所在的可用区
 * @method array getSlaveZone() 获取实例为多可用区部署时，备库1所在的可用区
 * @method void setSlaveZone(array $SlaveZone) 设置实例为多可用区部署时，备库1所在的可用区
 * @method array getBackupZone() 获取实例为多可用区部署时，备库2所在的可用区
 * @method void setBackupZone(array $BackupZone) 设置实例为多可用区部署时，备库2所在的可用区
 */
class ZoneConf extends AbstractModel
{
    /**
     * @var array 可用区部署方式，可能的值为：0-单可用区；1-多可用区
     */
    public $DeployMode;

    /**
     * @var array 主实例所在的可用区
     */
    public $MasterZone;

    /**
     * @var array 实例为多可用区部署时，备库1所在的可用区
     */
    public $SlaveZone;

    /**
     * @var array 实例为多可用区部署时，备库2所在的可用区
     */
    public $BackupZone;

    /**
     * @param array $DeployMode 可用区部署方式，可能的值为：0-单可用区；1-多可用区
     * @param array $MasterZone 主实例所在的可用区
     * @param array $SlaveZone 实例为多可用区部署时，备库1所在的可用区
     * @param array $BackupZone 实例为多可用区部署时，备库2所在的可用区
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
        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }
    }
}
