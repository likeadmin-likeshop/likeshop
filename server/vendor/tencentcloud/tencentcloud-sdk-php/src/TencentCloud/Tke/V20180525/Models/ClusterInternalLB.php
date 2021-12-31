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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性容器集群内网访问LB信息
 *
 * @method boolean getEnabled() 获取是否开启内网访问LB
 * @method void setEnabled(boolean $Enabled) 设置是否开启内网访问LB
 * @method string getSubnetId() 获取内网访问LB关联的子网Id
 * @method void setSubnetId(string $SubnetId) 设置内网访问LB关联的子网Id
 */
class ClusterInternalLB extends AbstractModel
{
    /**
     * @var boolean 是否开启内网访问LB
     */
    public $Enabled;

    /**
     * @var string 内网访问LB关联的子网Id
     */
    public $SubnetId;

    /**
     * @param boolean $Enabled 是否开启内网访问LB
     * @param string $SubnetId 内网访问LB关联的子网Id
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
