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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本pod
 *
 * @method string getWebshell() 获取shell地址
 * @method void setWebshell(string $Webshell) 设置shell地址
 * @method string getPodId() 获取pod的id
 * @method void setPodId(string $PodId) 设置pod的id
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getPodIp() 获取实例的ip
 * @method void setPodIp(string $PodIp) 设置实例的ip
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployVersion() 获取部署版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployVersion(string $DeployVersion) 设置部署版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class RunVersionPod extends AbstractModel
{
    /**
     * @var string shell地址
     */
    public $Webshell;

    /**
     * @var string pod的id
     */
    public $PodId;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例的ip
     */
    public $PodIp;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 部署版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployVersion;

    /**
     * @param string $Webshell shell地址
     * @param string $PodId pod的id
     * @param string $Status 状态
     * @param string $CreateTime 创建时间
     * @param string $PodIp 实例的ip
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployVersion 部署版本
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Webshell",$param) and $param["Webshell"] !== null) {
            $this->Webshell = $param["Webshell"];
        }

        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DeployVersion",$param) and $param["DeployVersion"] !== null) {
            $this->DeployVersion = $param["DeployVersion"];
        }
    }
}
