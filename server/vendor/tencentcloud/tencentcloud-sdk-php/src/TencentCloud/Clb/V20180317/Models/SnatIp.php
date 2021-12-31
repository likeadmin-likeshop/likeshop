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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SnatIp的信息结构
 *
 * @method string getSubnetId() 获取私有网络子网的唯一性id，如subnet-12345678
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网的唯一性id，如subnet-12345678
 * @method string getIp() 获取IP地址，如192.168.0.1
 * @method void setIp(string $Ip) 设置IP地址，如192.168.0.1
 */
class SnatIp extends AbstractModel
{
    /**
     * @var string 私有网络子网的唯一性id，如subnet-12345678
     */
    public $SubnetId;

    /**
     * @var string IP地址，如192.168.0.1
     */
    public $Ip;

    /**
     * @param string $SubnetId 私有网络子网的唯一性id，如subnet-12345678
     * @param string $Ip IP地址，如192.168.0.1
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}
