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
 * VPN网关配额对象
 *
 * @method integer getBandwidth() 获取带宽配额
 * @method void setBandwidth(integer $Bandwidth) 设置带宽配额
 * @method string getCname() 获取配额中文名称
 * @method void setCname(string $Cname) 设置配额中文名称
 * @method string getName() 获取配额英文名称
 * @method void setName(string $Name) 设置配额英文名称
 */
class VpnGatewayQuota extends AbstractModel
{
    /**
     * @var integer 带宽配额
     */
    public $Bandwidth;

    /**
     * @var string 配额中文名称
     */
    public $Cname;

    /**
     * @var string 配额英文名称
     */
    public $Name;

    /**
     * @param integer $Bandwidth 带宽配额
     * @param string $Cname 配额中文名称
     * @param string $Name 配额英文名称
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
        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
