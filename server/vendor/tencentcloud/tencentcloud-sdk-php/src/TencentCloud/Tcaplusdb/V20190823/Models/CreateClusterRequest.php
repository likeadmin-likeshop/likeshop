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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster请求参数结构体
 *
 * @method string getIdlType() 获取集群数据描述语言类型，如：`PROTO`，`TDR`或`MIX`
 * @method void setIdlType(string $IdlType) 设置集群数据描述语言类型，如：`PROTO`，`TDR`或`MIX`
 * @method string getClusterName() 获取集群名称，可使用中文或英文字符，最大长度32个字符
 * @method void setClusterName(string $ClusterName) 设置集群名称，可使用中文或英文字符，最大长度32个字符
 * @method string getVpcId() 获取集群所绑定的私有网络实例ID，形如：vpc-f49l6u0z
 * @method void setVpcId(string $VpcId) 设置集群所绑定的私有网络实例ID，形如：vpc-f49l6u0z
 * @method string getSubnetId() 获取集群所绑定的子网实例ID，形如：subnet-pxir56ns
 * @method void setSubnetId(string $SubnetId) 设置集群所绑定的子网实例ID，形如：subnet-pxir56ns
 * @method string getPassword() 获取集群访问密码，必须是a-zA-Z0-9的字符,且必须包含数字和大小写字母
 * @method void setPassword(string $Password) 设置集群访问密码，必须是a-zA-Z0-9的字符,且必须包含数字和大小写字母
 * @method array getResourceTags() 获取集群标签列表
 * @method void setResourceTags(array $ResourceTags) 设置集群标签列表
 * @method integer getIpv6Enable() 获取集群是否开启IPv6功能
 * @method void setIpv6Enable(integer $Ipv6Enable) 设置集群是否开启IPv6功能
 * @method array getServerList() 获取独占集群占用的svr机器
 * @method void setServerList(array $ServerList) 设置独占集群占用的svr机器
 * @method array getProxyList() 获取独占集群占用的proxy机器
 * @method void setProxyList(array $ProxyList) 设置独占集群占用的proxy机器
 * @method integer getClusterType() 获取集群类型1共享2独占
 * @method void setClusterType(integer $ClusterType) 设置集群类型1共享2独占
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string 集群数据描述语言类型，如：`PROTO`，`TDR`或`MIX`
     */
    public $IdlType;

    /**
     * @var string 集群名称，可使用中文或英文字符，最大长度32个字符
     */
    public $ClusterName;

    /**
     * @var string 集群所绑定的私有网络实例ID，形如：vpc-f49l6u0z
     */
    public $VpcId;

    /**
     * @var string 集群所绑定的子网实例ID，形如：subnet-pxir56ns
     */
    public $SubnetId;

    /**
     * @var string 集群访问密码，必须是a-zA-Z0-9的字符,且必须包含数字和大小写字母
     */
    public $Password;

    /**
     * @var array 集群标签列表
     */
    public $ResourceTags;

    /**
     * @var integer 集群是否开启IPv6功能
     */
    public $Ipv6Enable;

    /**
     * @var array 独占集群占用的svr机器
     */
    public $ServerList;

    /**
     * @var array 独占集群占用的proxy机器
     */
    public $ProxyList;

    /**
     * @var integer 集群类型1共享2独占
     */
    public $ClusterType;

    /**
     * @param string $IdlType 集群数据描述语言类型，如：`PROTO`，`TDR`或`MIX`
     * @param string $ClusterName 集群名称，可使用中文或英文字符，最大长度32个字符
     * @param string $VpcId 集群所绑定的私有网络实例ID，形如：vpc-f49l6u0z
     * @param string $SubnetId 集群所绑定的子网实例ID，形如：subnet-pxir56ns
     * @param string $Password 集群访问密码，必须是a-zA-Z0-9的字符,且必须包含数字和大小写字母
     * @param array $ResourceTags 集群标签列表
     * @param integer $Ipv6Enable 集群是否开启IPv6功能
     * @param array $ServerList 独占集群占用的svr机器
     * @param array $ProxyList 独占集群占用的proxy机器
     * @param integer $ClusterType 集群类型1共享2独占
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
        if (array_key_exists("IdlType",$param) and $param["IdlType"] !== null) {
            $this->IdlType = $param["IdlType"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }

        if (array_key_exists("ServerList",$param) and $param["ServerList"] !== null) {
            $this->ServerList = [];
            foreach ($param["ServerList"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->ServerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
