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
 * 网络ACL
 *
 * @method string getVpcId() 获取`VPC`实例`ID`。
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`。
 * @method string getNetworkAclId() 获取网络ACL实例`ID`。
 * @method void setNetworkAclId(string $NetworkAclId) 设置网络ACL实例`ID`。
 * @method string getNetworkAclName() 获取网络ACL名称，最大长度为60。
 * @method void setNetworkAclName(string $NetworkAclName) 设置网络ACL名称，最大长度为60。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method array getSubnetSet() 获取网络ACL关联的子网数组。
 * @method void setSubnetSet(array $SubnetSet) 设置网络ACL关联的子网数组。
 * @method array getIngressEntries() 获取网络ACl入站规则。
 * @method void setIngressEntries(array $IngressEntries) 设置网络ACl入站规则。
 * @method array getEgressEntries() 获取网络ACL出站规则。
 * @method void setEgressEntries(array $EgressEntries) 设置网络ACL出站规则。
 */
class NetworkAcl extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`。
     */
    public $VpcId;

    /**
     * @var string 网络ACL实例`ID`。
     */
    public $NetworkAclId;

    /**
     * @var string 网络ACL名称，最大长度为60。
     */
    public $NetworkAclName;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var array 网络ACL关联的子网数组。
     */
    public $SubnetSet;

    /**
     * @var array 网络ACl入站规则。
     */
    public $IngressEntries;

    /**
     * @var array 网络ACL出站规则。
     */
    public $EgressEntries;

    /**
     * @param string $VpcId `VPC`实例`ID`。
     * @param string $NetworkAclId 网络ACL实例`ID`。
     * @param string $NetworkAclName 网络ACL名称，最大长度为60。
     * @param string $CreatedTime 创建时间。
     * @param array $SubnetSet 网络ACL关联的子网数组。
     * @param array $IngressEntries 网络ACl入站规则。
     * @param array $EgressEntries 网络ACL出站规则。
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

        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("NetworkAclName",$param) and $param["NetworkAclName"] !== null) {
            $this->NetworkAclName = $param["NetworkAclName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
            $this->SubnetSet = [];
            foreach ($param["SubnetSet"] as $key => $value){
                $obj = new Subnet();
                $obj->deserialize($value);
                array_push($this->SubnetSet, $obj);
            }
        }

        if (array_key_exists("IngressEntries",$param) and $param["IngressEntries"] !== null) {
            $this->IngressEntries = [];
            foreach ($param["IngressEntries"] as $key => $value){
                $obj = new NetworkAclEntry();
                $obj->deserialize($value);
                array_push($this->IngressEntries, $obj);
            }
        }

        if (array_key_exists("EgressEntries",$param) and $param["EgressEntries"] !== null) {
            $this->EgressEntries = [];
            foreach ($param["EgressEntries"] as $key => $value){
                $obj = new NetworkAclEntry();
                $obj->deserialize($value);
                array_push($this->EgressEntries, $obj);
            }
        }
    }
}
