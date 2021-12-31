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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 黑石私有网络
 *
 * @method string getVpcId() 获取黑石私有网络ID
 * @method void setVpcId(string $VpcId) 设置黑石私有网络ID
 * @method string getSubnetId() 获取黑石子网ID
 * @method void setSubnetId(string $SubnetId) 设置黑石子网ID
 */
class CpmVirtualPrivateCloud extends AbstractModel
{
    /**
     * @var string 黑石私有网络ID
     */
    public $VpcId;

    /**
     * @var string 黑石子网ID
     */
    public $SubnetId;

    /**
     * @param string $VpcId 黑石私有网络ID
     * @param string $SubnetId 黑石子网ID
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
