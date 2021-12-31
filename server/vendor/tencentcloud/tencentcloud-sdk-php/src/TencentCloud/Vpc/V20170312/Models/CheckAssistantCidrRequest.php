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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckAssistantCidr请求参数结构体
 *
 * @method string getVpcId() 获取`VPC`实例`ID`。形如：`vpc-6v2ht8q5`
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`。形如：`vpc-6v2ht8q5`
 * @method array getNewCidrBlocks() 获取待添加的负载CIDR。CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]。入参NewCidrBlocks和OldCidrBlocks至少需要其一。
 * @method void setNewCidrBlocks(array $NewCidrBlocks) 设置待添加的负载CIDR。CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]。入参NewCidrBlocks和OldCidrBlocks至少需要其一。
 * @method array getOldCidrBlocks() 获取待删除的负载CIDR。CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]。入参NewCidrBlocks和OldCidrBlocks至少需要其一。
 * @method void setOldCidrBlocks(array $OldCidrBlocks) 设置待删除的负载CIDR。CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]。入参NewCidrBlocks和OldCidrBlocks至少需要其一。
 */
class CheckAssistantCidrRequest extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`。形如：`vpc-6v2ht8q5`
     */
    public $VpcId;

    /**
     * @var array 待添加的负载CIDR。CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]。入参NewCidrBlocks和OldCidrBlocks至少需要其一。
     */
    public $NewCidrBlocks;

    /**
     * @var array 待删除的负载CIDR。CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]。入参NewCidrBlocks和OldCidrBlocks至少需要其一。
     */
    public $OldCidrBlocks;

    /**
     * @param string $VpcId `VPC`实例`ID`。形如：`vpc-6v2ht8q5`
     * @param array $NewCidrBlocks 待添加的负载CIDR。CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]。入参NewCidrBlocks和OldCidrBlocks至少需要其一。
     * @param array $OldCidrBlocks 待删除的负载CIDR。CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]。入参NewCidrBlocks和OldCidrBlocks至少需要其一。
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

        if (array_key_exists("NewCidrBlocks",$param) and $param["NewCidrBlocks"] !== null) {
            $this->NewCidrBlocks = $param["NewCidrBlocks"];
        }

        if (array_key_exists("OldCidrBlocks",$param) and $param["OldCidrBlocks"] !== null) {
            $this->OldCidrBlocks = $param["OldCidrBlocks"];
        }
    }
}
