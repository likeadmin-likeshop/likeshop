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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AllocateHosts请求参数结构体
 *
 * @method Placement getPlacement() 获取实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method void setPlacement(Placement $Placement) 设置实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。
 * @method ChargePrepaid getHostChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setHostChargePrepaid(ChargePrepaid $HostChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method string getHostChargeType() 获取实例计费类型。目前仅支持：PREPAID（预付费，即包年包月模式），默认为：'PREPAID'。
 * @method void setHostChargeType(string $HostChargeType) 设置实例计费类型。目前仅支持：PREPAID（预付费，即包年包月模式），默认为：'PREPAID'。
 * @method string getHostType() 获取CDH实例机型，默认为：'HS1'。
 * @method void setHostType(string $HostType) 设置CDH实例机型，默认为：'HS1'。
 * @method integer getHostCount() 获取购买CDH实例数量，默认为：1。
 * @method void setHostCount(integer $HostCount) 设置购买CDH实例数量，默认为：1。
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例。
 */
class AllocateHostsRequest extends AbstractModel
{
    /**
     * @var Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     */
    public $Placement;

    /**
     * @var string 用于保证请求幂等性的字符串。
     */
    public $ClientToken;

    /**
     * @var ChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $HostChargePrepaid;

    /**
     * @var string 实例计费类型。目前仅支持：PREPAID（预付费，即包年包月模式），默认为：'PREPAID'。
     */
    public $HostChargeType;

    /**
     * @var string CDH实例机型，默认为：'HS1'。
     */
    public $HostType;

    /**
     * @var integer 购买CDH实例数量，默认为：1。
     */
    public $HostCount;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例。
     */
    public $TagSpecification;

    /**
     * @param Placement $Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目等属性。
     * @param string $ClientToken 用于保证请求幂等性的字符串。
     * @param ChargePrepaid $HostChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param string $HostChargeType 实例计费类型。目前仅支持：PREPAID（预付费，即包年包月模式），默认为：'PREPAID'。
     * @param string $HostType CDH实例机型，默认为：'HS1'。
     * @param integer $HostCount 购买CDH实例数量，默认为：1。
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例。
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("HostChargePrepaid",$param) and $param["HostChargePrepaid"] !== null) {
            $this->HostChargePrepaid = new ChargePrepaid();
            $this->HostChargePrepaid->deserialize($param["HostChargePrepaid"]);
        }

        if (array_key_exists("HostChargeType",$param) and $param["HostChargeType"] !== null) {
            $this->HostChargeType = $param["HostChargeType"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
