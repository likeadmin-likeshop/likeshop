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
 * DescribeDBInstanceConfig返回参数结构体
 *
 * @method integer getProtectMode() 获取主实例数据保护方式，可能的返回值：0 - 异步复制方式，1 - 半同步复制方式，2 - 强同步复制方式。
 * @method void setProtectMode(integer $ProtectMode) 设置主实例数据保护方式，可能的返回值：0 - 异步复制方式，1 - 半同步复制方式，2 - 强同步复制方式。
 * @method integer getDeployMode() 获取主实例部署方式，可能的返回值：0 - 单可用部署，1 - 多可用区部署。
 * @method void setDeployMode(integer $DeployMode) 设置主实例部署方式，可能的返回值：0 - 单可用部署，1 - 多可用区部署。
 * @method string getZone() 获取实例可用区信息，格式如 "ap-shanghai-1"。
 * @method void setZone(string $Zone) 设置实例可用区信息，格式如 "ap-shanghai-1"。
 * @method SlaveConfig getSlaveConfig() 获取备库的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveConfig(SlaveConfig $SlaveConfig) 设置备库的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackupConfig getBackupConfig() 获取强同步实例第二备库的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupConfig(BackupConfig $BackupConfig) 设置强同步实例第二备库的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSwitched() 获取是否切换备库。
 * @method void setSwitched(boolean $Switched) 设置是否切换备库。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceConfigResponse extends AbstractModel
{
    /**
     * @var integer 主实例数据保护方式，可能的返回值：0 - 异步复制方式，1 - 半同步复制方式，2 - 强同步复制方式。
     */
    public $ProtectMode;

    /**
     * @var integer 主实例部署方式，可能的返回值：0 - 单可用部署，1 - 多可用区部署。
     */
    public $DeployMode;

    /**
     * @var string 实例可用区信息，格式如 "ap-shanghai-1"。
     */
    public $Zone;

    /**
     * @var SlaveConfig 备库的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveConfig;

    /**
     * @var BackupConfig 强同步实例第二备库的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupConfig;

    /**
     * @var boolean 是否切换备库。
     */
    public $Switched;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ProtectMode 主实例数据保护方式，可能的返回值：0 - 异步复制方式，1 - 半同步复制方式，2 - 强同步复制方式。
     * @param integer $DeployMode 主实例部署方式，可能的返回值：0 - 单可用部署，1 - 多可用区部署。
     * @param string $Zone 实例可用区信息，格式如 "ap-shanghai-1"。
     * @param SlaveConfig $SlaveConfig 备库的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackupConfig $BackupConfig 强同步实例第二备库的配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Switched 是否切换备库。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SlaveConfig",$param) and $param["SlaveConfig"] !== null) {
            $this->SlaveConfig = new SlaveConfig();
            $this->SlaveConfig->deserialize($param["SlaveConfig"]);
        }

        if (array_key_exists("BackupConfig",$param) and $param["BackupConfig"] !== null) {
            $this->BackupConfig = new BackupConfig();
            $this->BackupConfig->deserialize($param["BackupConfig"]);
        }

        if (array_key_exists("Switched",$param) and $param["Switched"] !== null) {
            $this->Switched = $param["Switched"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
