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
 * CreateCloudBaseRunResource请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getVpcId() 获取vpc的ID
 * @method void setVpcId(string $VpcId) 设置vpc的ID
 * @method array getSubnetIds() 获取子网ID列表，当VpcId不为空，SubnetIds也不能为空
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID列表，当VpcId不为空，SubnetIds也不能为空
 */
class CreateCloudBaseRunResourceRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string vpc的ID
     */
    public $VpcId;

    /**
     * @var array 子网ID列表，当VpcId不为空，SubnetIds也不能为空
     */
    public $SubnetIds;

    /**
     * @param string $EnvId 环境ID
     * @param string $VpcId vpc的ID
     * @param array $SubnetIds 子网ID列表，当VpcId不为空，SubnetIds也不能为空
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
