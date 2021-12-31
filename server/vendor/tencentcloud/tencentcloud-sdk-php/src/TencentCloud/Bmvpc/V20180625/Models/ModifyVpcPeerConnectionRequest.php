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
 * ModifyVpcPeerConnection请求参数结构体
 *
 * @method string getVpcPeerConnectionId() 获取黑石对等连接唯一ID
 * @method void setVpcPeerConnectionId(string $VpcPeerConnectionId) 设置黑石对等连接唯一ID
 * @method integer getBandwidth() 获取对等连接带宽
 * @method void setBandwidth(integer $Bandwidth) 设置对等连接带宽
 * @method string getVpcPeerConnectionName() 获取对等连接名称
 * @method void setVpcPeerConnectionName(string $VpcPeerConnectionName) 设置对等连接名称
 */
class ModifyVpcPeerConnectionRequest extends AbstractModel
{
    /**
     * @var string 黑石对等连接唯一ID
     */
    public $VpcPeerConnectionId;

    /**
     * @var integer 对等连接带宽
     */
    public $Bandwidth;

    /**
     * @var string 对等连接名称
     */
    public $VpcPeerConnectionName;

    /**
     * @param string $VpcPeerConnectionId 黑石对等连接唯一ID
     * @param integer $Bandwidth 对等连接带宽
     * @param string $VpcPeerConnectionName 对等连接名称
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
        if (array_key_exists("VpcPeerConnectionId",$param) and $param["VpcPeerConnectionId"] !== null) {
            $this->VpcPeerConnectionId = $param["VpcPeerConnectionId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("VpcPeerConnectionName",$param) and $param["VpcPeerConnectionName"] !== null) {
            $this->VpcPeerConnectionName = $param["VpcPeerConnectionName"];
        }
    }
}
