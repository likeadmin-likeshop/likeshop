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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEip请求参数结构体
 *
 * @method integer getGoodsNum() 获取申请数量，默认为1, 最大 20
 * @method void setGoodsNum(integer $GoodsNum) 设置申请数量，默认为1, 最大 20
 * @method string getPayMode() 获取EIP计费方式，flow-流量计费；bandwidth-带宽计费
 * @method void setPayMode(string $PayMode) 设置EIP计费方式，flow-流量计费；bandwidth-带宽计费
 * @method integer getBandwidth() 获取带宽设定值（只在带宽计费时生效）
 * @method void setBandwidth(integer $Bandwidth) 设置带宽设定值（只在带宽计费时生效）
 * @method string getSetType() 获取EIP模式，目前支持tunnel和fullnat
 * @method void setSetType(string $SetType) 设置EIP模式，目前支持tunnel和fullnat
 * @method integer getExclusive() 获取是否使用独占集群，0：不使用，1：使用。默认为0
 * @method void setExclusive(integer $Exclusive) 设置是否使用独占集群，0：不使用，1：使用。默认为0
 * @method string getVpcId() 获取EIP归属私有网络ID，例如vpc-k7j1t2x1
 * @method void setVpcId(string $VpcId) 设置EIP归属私有网络ID，例如vpc-k7j1t2x1
 * @method array getIpList() 获取指定申请的IP列表
 * @method void setIpList(array $IpList) 设置指定申请的IP列表
 */
class CreateEipRequest extends AbstractModel
{
    /**
     * @var integer 申请数量，默认为1, 最大 20
     */
    public $GoodsNum;

    /**
     * @var string EIP计费方式，flow-流量计费；bandwidth-带宽计费
     */
    public $PayMode;

    /**
     * @var integer 带宽设定值（只在带宽计费时生效）
     */
    public $Bandwidth;

    /**
     * @var string EIP模式，目前支持tunnel和fullnat
     */
    public $SetType;

    /**
     * @var integer 是否使用独占集群，0：不使用，1：使用。默认为0
     */
    public $Exclusive;

    /**
     * @var string EIP归属私有网络ID，例如vpc-k7j1t2x1
     */
    public $VpcId;

    /**
     * @var array 指定申请的IP列表
     */
    public $IpList;

    /**
     * @param integer $GoodsNum 申请数量，默认为1, 最大 20
     * @param string $PayMode EIP计费方式，flow-流量计费；bandwidth-带宽计费
     * @param integer $Bandwidth 带宽设定值（只在带宽计费时生效）
     * @param string $SetType EIP模式，目前支持tunnel和fullnat
     * @param integer $Exclusive 是否使用独占集群，0：不使用，1：使用。默认为0
     * @param string $VpcId EIP归属私有网络ID，例如vpc-k7j1t2x1
     * @param array $IpList 指定申请的IP列表
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
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("SetType",$param) and $param["SetType"] !== null) {
            $this->SetType = $param["SetType"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
