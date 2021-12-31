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
 * 内网接入信息
 *
 * @method string getVpcId() 获取Vpc的Id
 * @method void setVpcId(string $VpcId) 设置Vpc的Id
 * @method string getSubnetId() 获取子网Id
 * @method void setSubnetId(string $SubnetId) 设置子网Id
 * @method string getStatus() 获取内网接入状态
 * @method void setStatus(string $Status) 设置内网接入状态
 * @method string getAccessIp() 获取内网接入Ip
 * @method void setAccessIp(string $AccessIp) 设置内网接入Ip
 */
class AccessVpc extends AbstractModel
{
    /**
     * @var string Vpc的Id
     */
    public $VpcId;

    /**
     * @var string 子网Id
     */
    public $SubnetId;

    /**
     * @var string 内网接入状态
     */
    public $Status;

    /**
     * @var string 内网接入Ip
     */
    public $AccessIp;

    /**
     * @param string $VpcId Vpc的Id
     * @param string $SubnetId 子网Id
     * @param string $Status 内网接入状态
     * @param string $AccessIp 内网接入Ip
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AccessIp",$param) and $param["AccessIp"] !== null) {
            $this->AccessIp = $param["AccessIp"];
        }
    }
}
