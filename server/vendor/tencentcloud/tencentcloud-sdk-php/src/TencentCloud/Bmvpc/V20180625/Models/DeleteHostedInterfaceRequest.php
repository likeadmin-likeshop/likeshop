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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteHostedInterface请求参数结构体
 *
 * @method array getInstanceIds() 获取托管机器唯一ID 数组
 * @method void setInstanceIds(array $InstanceIds) 设置托管机器唯一ID 数组
 * @method string getVpcId() 获取私有网络ID或者私有网络统一ID，建议使用统一ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID或者私有网络统一ID，建议使用统一ID
 * @method string getSubnetId() 获取子网ID或者子网统一ID，建议使用统一ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID或者子网统一ID，建议使用统一ID
 */
class DeleteHostedInterfaceRequest extends AbstractModel
{
    /**
     * @var array 托管机器唯一ID 数组
     */
    public $InstanceIds;

    /**
     * @var string 私有网络ID或者私有网络统一ID，建议使用统一ID
     */
    public $VpcId;

    /**
     * @var string 子网ID或者子网统一ID，建议使用统一ID
     */
    public $SubnetId;

    /**
     * @param array $InstanceIds 托管机器唯一ID 数组
     * @param string $VpcId 私有网络ID或者私有网络统一ID，建议使用统一ID
     * @param string $SubnetId 子网ID或者子网统一ID，建议使用统一ID
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
