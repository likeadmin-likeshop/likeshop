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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ManageInternalEndpoint请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method string getOperation() 获取Create/Delete
 * @method void setOperation(string $Operation) 设置Create/Delete
 * @method string getVpcId() 获取需要接入的用户vpcid
 * @method void setVpcId(string $VpcId) 设置需要接入的用户vpcid
 * @method string getSubnetId() 获取需要接入的用户子网id
 * @method void setSubnetId(string $SubnetId) 设置需要接入的用户子网id
 * @method integer getRegionId() 获取请求的地域ID
 * @method void setRegionId(integer $RegionId) 设置请求的地域ID
 */
class ManageInternalEndpointRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var string Create/Delete
     */
    public $Operation;

    /**
     * @var string 需要接入的用户vpcid
     */
    public $VpcId;

    /**
     * @var string 需要接入的用户子网id
     */
    public $SubnetId;

    /**
     * @var integer 请求的地域ID
     */
    public $RegionId;

    /**
     * @param string $RegistryId 实例Id
     * @param string $Operation Create/Delete
     * @param string $VpcId 需要接入的用户vpcid
     * @param string $SubnetId 需要接入的用户子网id
     * @param integer $RegionId 请求的地域ID
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
