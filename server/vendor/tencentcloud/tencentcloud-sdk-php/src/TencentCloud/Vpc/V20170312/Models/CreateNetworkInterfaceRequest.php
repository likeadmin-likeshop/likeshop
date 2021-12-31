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
 * CreateNetworkInterface请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method string getNetworkInterfaceName() 获取弹性网卡名称，最大长度不能超过60个字节。
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) 设置弹性网卡名称，最大长度不能超过60个字节。
 * @method string getSubnetId() 获取弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。
 * @method void setSubnetId(string $SubnetId) 设置弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。
 * @method string getNetworkInterfaceDescription() 获取弹性网卡描述，可任意命名，但不得超过60个字符。
 * @method void setNetworkInterfaceDescription(string $NetworkInterfaceDescription) 设置弹性网卡描述，可任意命名，但不得超过60个字符。
 * @method integer getSecondaryPrivateIpAddressCount() 获取新申请的内网IP地址个数，内网IP地址个数总和不能超过配数。
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) 设置新申请的内网IP地址个数，内网IP地址个数总和不能超过配数。
 * @method array getSecurityGroupIds() 获取指定绑定的安全组，例如：['sg-1dd51d']。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置指定绑定的安全组，例如：['sg-1dd51d']。
 * @method array getPrivateIpAddresses() 获取指定的内网IP信息，单次最多指定10个。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置指定的内网IP信息，单次最多指定10个。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 */
class CreateNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     */
    public $VpcId;

    /**
     * @var string 弹性网卡名称，最大长度不能超过60个字节。
     */
    public $NetworkInterfaceName;

    /**
     * @var string 弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。
     */
    public $SubnetId;

    /**
     * @var string 弹性网卡描述，可任意命名，但不得超过60个字符。
     */
    public $NetworkInterfaceDescription;

    /**
     * @var integer 新申请的内网IP地址个数，内网IP地址个数总和不能超过配数。
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @var array 指定绑定的安全组，例如：['sg-1dd51d']。
     */
    public $SecurityGroupIds;

    /**
     * @var array 指定的内网IP信息，单次最多指定10个。
     */
    public $PrivateIpAddresses;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @param string $VpcId VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     * @param string $NetworkInterfaceName 弹性网卡名称，最大长度不能超过60个字节。
     * @param string $SubnetId 弹性网卡所在的子网实例ID，例如：subnet-0ap8nwca。
     * @param string $NetworkInterfaceDescription 弹性网卡描述，可任意命名，但不得超过60个字符。
     * @param integer $SecondaryPrivateIpAddressCount 新申请的内网IP地址个数，内网IP地址个数总和不能超过配数。
     * @param array $SecurityGroupIds 指定绑定的安全组，例如：['sg-1dd51d']。
     * @param array $PrivateIpAddresses 指定的内网IP信息，单次最多指定10个。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
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

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetworkInterfaceDescription",$param) and $param["NetworkInterfaceDescription"] !== null) {
            $this->NetworkInterfaceDescription = $param["NetworkInterfaceDescription"];
        }

        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            $this->SecondaryPrivateIpAddressCount = $param["SecondaryPrivateIpAddressCount"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = [];
            foreach ($param["PrivateIpAddresses"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddresses, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
