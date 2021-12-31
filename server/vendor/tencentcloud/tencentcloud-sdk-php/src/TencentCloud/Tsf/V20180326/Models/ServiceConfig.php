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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务配置
 *
 * @method string getName() 获取服务名
 * @method void setName(string $Name) 设置服务名
 * @method array getPorts() 获取端口信息列表
 * @method void setPorts(array $Ports) 设置端口信息列表
 * @method HealthCheckConfig getHealthCheck() 获取健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheck(HealthCheckConfig $HealthCheck) 设置健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceConfig extends AbstractModel
{
    /**
     * @var string 服务名
     */
    public $Name;

    /**
     * @var array 端口信息列表
     */
    public $Ports;

    /**
     * @var HealthCheckConfig 健康检查配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheck;

    /**
     * @param string $Name 服务名
     * @param array $Ports 端口信息列表
     * @param HealthCheckConfig $HealthCheck 健康检查配置
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new Ports();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheckConfig();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }
    }
}
