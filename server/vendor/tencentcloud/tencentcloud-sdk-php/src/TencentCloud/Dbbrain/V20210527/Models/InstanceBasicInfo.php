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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例基础信息。
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getVip() 获取实例内网IP。
 * @method void setVip(string $Vip) 设置实例内网IP。
 * @method integer getVport() 获取实例内网Port。
 * @method void setVport(integer $Vport) 设置实例内网Port。
 * @method string getProduct() 获取实例产品。
 * @method void setProduct(string $Product) 设置实例产品。
 * @method string getEngineVersion() 获取实例引擎版本。
 * @method void setEngineVersion(string $EngineVersion) 设置实例引擎版本。
 */
class InstanceBasicInfo extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例内网IP。
     */
    public $Vip;

    /**
     * @var integer 实例内网Port。
     */
    public $Vport;

    /**
     * @var string 实例产品。
     */
    public $Product;

    /**
     * @var string 实例引擎版本。
     */
    public $EngineVersion;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $InstanceName 实例名称。
     * @param string $Vip 实例内网IP。
     * @param integer $Vport 实例内网Port。
     * @param string $Product 实例产品。
     * @param string $EngineVersion 实例引擎版本。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }
    }
}
