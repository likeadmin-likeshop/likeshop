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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vcp绑定记录
 *
 * @method string getUniqueVpcId() 获取租户Vpc Id
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置租户Vpc Id
 * @method string getUniqueSubnetId() 获取租户Vpc子网Id
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置租户Vpc子网Id
 * @method string getRouterId() 获取路由Id
 * @method void setRouterId(string $RouterId) 设置路由Id
 * @method string getIp() 获取Vpc的Id
 * @method void setIp(string $Ip) 设置Vpc的Id
 * @method integer getPort() 获取Vpc的Port
 * @method void setPort(integer $Port) 设置Vpc的Port
 * @method string getRemark() 获取说明，128个字符以内
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置说明，128个字符以内
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpcBindRecord extends AbstractModel
{
    /**
     * @var string 租户Vpc Id
     */
    public $UniqueVpcId;

    /**
     * @var string 租户Vpc子网Id
     */
    public $UniqueSubnetId;

    /**
     * @var string 路由Id
     */
    public $RouterId;

    /**
     * @var string Vpc的Id
     */
    public $Ip;

    /**
     * @var integer Vpc的Port
     */
    public $Port;

    /**
     * @var string 说明，128个字符以内
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $UniqueVpcId 租户Vpc Id
     * @param string $UniqueSubnetId 租户Vpc子网Id
     * @param string $RouterId 路由Id
     * @param string $Ip Vpc的Id
     * @param integer $Port Vpc的Port
     * @param string $Remark 说明，128个字符以内
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
        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("RouterId",$param) and $param["RouterId"] !== null) {
            $this->RouterId = $param["RouterId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
