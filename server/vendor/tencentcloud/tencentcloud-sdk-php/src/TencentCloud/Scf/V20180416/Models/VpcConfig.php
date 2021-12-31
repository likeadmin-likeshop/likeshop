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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有网络参数配置
 *
 * @method string getVpcId() 获取私有网络 的 Id
 * @method void setVpcId(string $VpcId) 设置私有网络 的 Id
 * @method string getSubnetId() 获取子网的 Id
 * @method void setSubnetId(string $SubnetId) 设置子网的 Id
 */
class VpcConfig extends AbstractModel
{
    /**
     * @var string 私有网络 的 Id
     */
    public $VpcId;

    /**
     * @var string 子网的 Id
     */
    public $SubnetId;

    /**
     * @param string $VpcId 私有网络 的 Id
     * @param string $SubnetId 子网的 Id
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
