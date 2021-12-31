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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取设备绑定信息时返回的设备被绑定所在的负载均衡信息。
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID。
 * @method integer getAppId() 获取开发商AppId。
 * @method void setAppId(integer $AppId) 设置开发商AppId。
 * @method integer getProjectId() 获取负载均衡所属的项目ID。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡所属的项目ID。
 * @method string getVpcId() 获取黑石私有网络唯一ID。
 * @method void setVpcId(string $VpcId) 设置黑石私有网络唯一ID。
 * @method string getVip() 获取负载均衡的IP地址。
 * @method void setVip(string $Vip) 设置负载均衡的IP地址。
 * @method string getTgwSetType() 获取负载均衡对应的TGW集群类别，取值为tunnel或fullnat。tunnel表示隧道集群，fullnat表示FULLNAT集群。
 * @method void setTgwSetType(string $TgwSetType) 设置负载均衡对应的TGW集群类别，取值为tunnel或fullnat。tunnel表示隧道集群，fullnat表示FULLNAT集群。
 * @method integer getExclusive() 获取是否独占TGW集群。
 * @method void setExclusive(integer $Exclusive) 设置是否独占TGW集群。
 * @method array getL4ListenerSet() 获取具有该绑定关系的四层监听器列表。
 * @method void setL4ListenerSet(array $L4ListenerSet) 设置具有该绑定关系的四层监听器列表。
 * @method array getL7ListenerSet() 获取具有该绑定关系的七层监听器列表。
 * @method void setL7ListenerSet(array $L7ListenerSet) 设置具有该绑定关系的七层监听器列表。
 */
class DevicesBindInfoLoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID。
     */
    public $LoadBalancerId;

    /**
     * @var integer 开发商AppId。
     */
    public $AppId;

    /**
     * @var integer 负载均衡所属的项目ID。
     */
    public $ProjectId;

    /**
     * @var string 黑石私有网络唯一ID。
     */
    public $VpcId;

    /**
     * @var string 负载均衡的IP地址。
     */
    public $Vip;

    /**
     * @var string 负载均衡对应的TGW集群类别，取值为tunnel或fullnat。tunnel表示隧道集群，fullnat表示FULLNAT集群。
     */
    public $TgwSetType;

    /**
     * @var integer 是否独占TGW集群。
     */
    public $Exclusive;

    /**
     * @var array 具有该绑定关系的四层监听器列表。
     */
    public $L4ListenerSet;

    /**
     * @var array 具有该绑定关系的七层监听器列表。
     */
    public $L7ListenerSet;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID。
     * @param integer $AppId 开发商AppId。
     * @param integer $ProjectId 负载均衡所属的项目ID。
     * @param string $VpcId 黑石私有网络唯一ID。
     * @param string $Vip 负载均衡的IP地址。
     * @param string $TgwSetType 负载均衡对应的TGW集群类别，取值为tunnel或fullnat。tunnel表示隧道集群，fullnat表示FULLNAT集群。
     * @param integer $Exclusive 是否独占TGW集群。
     * @param array $L4ListenerSet 具有该绑定关系的四层监听器列表。
     * @param array $L7ListenerSet 具有该绑定关系的七层监听器列表。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("TgwSetType",$param) and $param["TgwSetType"] !== null) {
            $this->TgwSetType = $param["TgwSetType"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("L4ListenerSet",$param) and $param["L4ListenerSet"] !== null) {
            $this->L4ListenerSet = [];
            foreach ($param["L4ListenerSet"] as $key => $value){
                $obj = new DevicesBindInfoL4Listener();
                $obj->deserialize($value);
                array_push($this->L4ListenerSet, $obj);
            }
        }

        if (array_key_exists("L7ListenerSet",$param) and $param["L7ListenerSet"] !== null) {
            $this->L7ListenerSet = [];
            foreach ($param["L7ListenerSet"] as $key => $value){
                $obj = new DevicesBindInfoL7Listener();
                $obj->deserialize($value);
                array_push($this->L7ListenerSet, $obj);
            }
        }
    }
}
