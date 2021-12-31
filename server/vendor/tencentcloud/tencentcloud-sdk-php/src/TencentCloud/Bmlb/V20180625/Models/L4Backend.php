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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询四层监听器返回的与监听器绑定关系的主机信息。
 *
 * @method integer getBindType() 获取绑定类别（0代表黑石物理机，1代表虚拟机IP）。
 * @method void setBindType(integer $BindType) 设置绑定类别（0代表黑石物理机，1代表虚拟机IP）。
 * @method integer getPort() 获取主机端口。
 * @method void setPort(integer $Port) 设置主机端口。
 * @method integer getWeight() 获取权重。
 * @method void setWeight(integer $Weight) 设置权重。
 * @method string getStatus() 获取当前绑定关系的健康检查状态（Dead代表不健康，Alive代表健康）。
 * @method void setStatus(string $Status) 设置当前绑定关系的健康检查状态（Dead代表不健康，Alive代表健康）。
 * @method string getInstanceId() 获取黑石物理机的主机ID。
 * @method void setInstanceId(string $InstanceId) 设置黑石物理机的主机ID。
 * @method string getAlias() 获取黑石物理机的别名。
 * @method void setAlias(string $Alias) 设置黑石物理机的别名。
 * @method string getLanIp() 获取主机IP。
 * @method void setLanIp(string $LanIp) 设置主机IP。
 * @method array getOperates() 获取黑石物理机当前可以执行的操作。
 * @method void setOperates(array $Operates) 设置黑石物理机当前可以执行的操作。
 * @method integer getProbePort() 获取主机探测端口。
 * @method void setProbePort(integer $ProbePort) 设置主机探测端口。
 */
class L4Backend extends AbstractModel
{
    /**
     * @var integer 绑定类别（0代表黑石物理机，1代表虚拟机IP）。
     */
    public $BindType;

    /**
     * @var integer 主机端口。
     */
    public $Port;

    /**
     * @var integer 权重。
     */
    public $Weight;

    /**
     * @var string 当前绑定关系的健康检查状态（Dead代表不健康，Alive代表健康）。
     */
    public $Status;

    /**
     * @var string 黑石物理机的主机ID。
     */
    public $InstanceId;

    /**
     * @var string 黑石物理机的别名。
     */
    public $Alias;

    /**
     * @var string 主机IP。
     */
    public $LanIp;

    /**
     * @var array 黑石物理机当前可以执行的操作。
     */
    public $Operates;

    /**
     * @var integer 主机探测端口。
     */
    public $ProbePort;

    /**
     * @param integer $BindType 绑定类别（0代表黑石物理机，1代表虚拟机IP）。
     * @param integer $Port 主机端口。
     * @param integer $Weight 权重。
     * @param string $Status 当前绑定关系的健康检查状态（Dead代表不健康，Alive代表健康）。
     * @param string $InstanceId 黑石物理机的主机ID。
     * @param string $Alias 黑石物理机的别名。
     * @param string $LanIp 主机IP。
     * @param array $Operates 黑石物理机当前可以执行的操作。
     * @param integer $ProbePort 主机探测端口。
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
        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("Operates",$param) and $param["Operates"] !== null) {
            $this->Operates = $param["Operates"];
        }

        if (array_key_exists("ProbePort",$param) and $param["ProbePort"] !== null) {
            $this->ProbePort = $param["ProbePort"];
        }
    }
}
