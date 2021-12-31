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
 * CreateVpcPeerConnection请求参数结构体
 *
 * @method string getVpcId() 获取本端VPC唯一ID
 * @method void setVpcId(string $VpcId) 设置本端VPC唯一ID
 * @method string getPeerVpcId() 获取对端VPC唯一ID
 * @method void setPeerVpcId(string $PeerVpcId) 设置对端VPC唯一ID
 * @method string getPeerRegion() 获取对端地域，取值范围为gz,sh,bj,hk,cd,de,sh_bm,gz_bm,bj_bm,cq_bm等
 * @method void setPeerRegion(string $PeerRegion) 设置对端地域，取值范围为gz,sh,bj,hk,cd,de,sh_bm,gz_bm,bj_bm,cq_bm等
 * @method string getVpcPeerConnectionName() 获取对等连接名称
 * @method void setVpcPeerConnectionName(string $VpcPeerConnectionName) 设置对等连接名称
 * @method string getPeerUin() 获取对端账户OwnerUin（默认值为本端账户）
 * @method void setPeerUin(string $PeerUin) 设置对端账户OwnerUin（默认值为本端账户）
 * @method integer getBandwidth() 获取跨地域必传，带宽上限值
 * @method void setBandwidth(integer $Bandwidth) 设置跨地域必传，带宽上限值
 */
class CreateVpcPeerConnectionRequest extends AbstractModel
{
    /**
     * @var string 本端VPC唯一ID
     */
    public $VpcId;

    /**
     * @var string 对端VPC唯一ID
     */
    public $PeerVpcId;

    /**
     * @var string 对端地域，取值范围为gz,sh,bj,hk,cd,de,sh_bm,gz_bm,bj_bm,cq_bm等
     */
    public $PeerRegion;

    /**
     * @var string 对等连接名称
     */
    public $VpcPeerConnectionName;

    /**
     * @var string 对端账户OwnerUin（默认值为本端账户）
     */
    public $PeerUin;

    /**
     * @var integer 跨地域必传，带宽上限值
     */
    public $Bandwidth;

    /**
     * @param string $VpcId 本端VPC唯一ID
     * @param string $PeerVpcId 对端VPC唯一ID
     * @param string $PeerRegion 对端地域，取值范围为gz,sh,bj,hk,cd,de,sh_bm,gz_bm,bj_bm,cq_bm等
     * @param string $VpcPeerConnectionName 对等连接名称
     * @param string $PeerUin 对端账户OwnerUin（默认值为本端账户）
     * @param integer $Bandwidth 跨地域必传，带宽上限值
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

        if (array_key_exists("PeerVpcId",$param) and $param["PeerVpcId"] !== null) {
            $this->PeerVpcId = $param["PeerVpcId"];
        }

        if (array_key_exists("PeerRegion",$param) and $param["PeerRegion"] !== null) {
            $this->PeerRegion = $param["PeerRegion"];
        }

        if (array_key_exists("VpcPeerConnectionName",$param) and $param["VpcPeerConnectionName"] !== null) {
            $this->VpcPeerConnectionName = $param["VpcPeerConnectionName"];
        }

        if (array_key_exists("PeerUin",$param) and $param["PeerUin"] !== null) {
            $this->PeerUin = $param["PeerUin"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
