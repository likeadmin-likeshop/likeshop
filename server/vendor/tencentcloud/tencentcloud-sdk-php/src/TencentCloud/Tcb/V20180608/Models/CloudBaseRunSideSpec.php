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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloudBaseRun 的 Side 描述定义
 *
 * @method string getContainerImage() 获取容器镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerImage(string $ContainerImage) 设置容器镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContainerPort() 获取容器端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerPort(integer $ContainerPort) 设置容器端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取容器的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置容器的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvVar() 获取kv的json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvVar(string $EnvVar) 设置kv的json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInitialDelaySeconds() 获取InitialDelaySeconds 延迟多长时间启动健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置InitialDelaySeconds 延迟多长时间启动健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取CPU大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置CPU大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMem() 获取内存大小（单位：M）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMem(integer $Mem) 设置内存大小（单位：M）
注意：此字段可能返回 null，表示取不到有效值。
 * @method CloudBaseSecurityContext getSecurity() 获取安全特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurity(CloudBaseSecurityContext $Security) 设置安全特性
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVolumeMountInfos() 获取挂载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeMountInfos(array $VolumeMountInfos) 设置挂载信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudBaseRunSideSpec extends AbstractModel
{
    /**
     * @var string 容器镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerImage;

    /**
     * @var integer 容器端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerPort;

    /**
     * @var string 容器的名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @var string kv的json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvVar;

    /**
     * @var integer InitialDelaySeconds 延迟多长时间启动健康检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitialDelaySeconds;

    /**
     * @var integer CPU大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer 内存大小（单位：M）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mem;

    /**
     * @var CloudBaseSecurityContext 安全特性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Security;

    /**
     * @var array 挂载信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeMountInfos;

    /**
     * @param string $ContainerImage 容器镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContainerPort 容器端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName 容器的名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvVar kv的json字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InitialDelaySeconds InitialDelaySeconds 延迟多长时间启动健康检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu CPU大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Mem 内存大小（单位：M）
注意：此字段可能返回 null，表示取不到有效值。
     * @param CloudBaseSecurityContext $Security 安全特性
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VolumeMountInfos 挂载信息
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
        if (array_key_exists("ContainerImage",$param) and $param["ContainerImage"] !== null) {
            $this->ContainerImage = $param["ContainerImage"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("EnvVar",$param) and $param["EnvVar"] !== null) {
            $this->EnvVar = $param["EnvVar"];
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Security",$param) and $param["Security"] !== null) {
            $this->Security = new CloudBaseSecurityContext();
            $this->Security->deserialize($param["Security"]);
        }

        if (array_key_exists("VolumeMountInfos",$param) and $param["VolumeMountInfos"] !== null) {
            $this->VolumeMountInfos = [];
            foreach ($param["VolumeMountInfos"] as $key => $value){
                $obj = new CloudBaseRunVolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMountInfos, $obj);
            }
        }
    }
}
