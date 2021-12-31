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
 * CreateNatGateway请求参数结构体
 *
 * @method string getNatGatewayName() 获取NAT网关名称
 * @method void setNatGatewayName(string $NatGatewayName) 设置NAT网关名称
 * @method string getVpcId() 获取VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method integer getInternetMaxBandwidthOut() 获取NAT网关最大外网出带宽(单位:Mbps)，支持的参数值：`20, 50, 100, 200, 500, 1000, 2000, 5000`，默认: `100Mbps`。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置NAT网关最大外网出带宽(单位:Mbps)，支持的参数值：`20, 50, 100, 200, 500, 1000, 2000, 5000`，默认: `100Mbps`。
 * @method integer getMaxConcurrentConnection() 获取NAT网关并发连接上限，支持参数值：`1000000、3000000、10000000`，默认值为`100000`。
 * @method void setMaxConcurrentConnection(integer $MaxConcurrentConnection) 设置NAT网关并发连接上限，支持参数值：`1000000、3000000、10000000`，默认值为`100000`。
 * @method integer getAddressCount() 获取需要申请的弹性IP个数，系统会按您的要求生产N个弹性IP，其中AddressCount和PublicAddresses至少传递一个。
 * @method void setAddressCount(integer $AddressCount) 设置需要申请的弹性IP个数，系统会按您的要求生产N个弹性IP，其中AddressCount和PublicAddresses至少传递一个。
 * @method array getPublicIpAddresses() 获取绑定NAT网关的弹性IP数组，其中AddressCount和PublicAddresses至少传递一个。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置绑定NAT网关的弹性IP数组，其中AddressCount和PublicAddresses至少传递一个。
 * @method string getZone() 获取可用区，形如：`ap-guangzhou-1`。
 * @method void setZone(string $Zone) 设置可用区，形如：`ap-guangzhou-1`。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method string getSubnetId() 获取NAT网关所属子网
 * @method void setSubnetId(string $SubnetId) 设置NAT网关所属子网
 */
class CreateNatGatewayRequest extends AbstractModel
{
    /**
     * @var string NAT网关名称
     */
    public $NatGatewayName;

    /**
     * @var string VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     */
    public $VpcId;

    /**
     * @var integer NAT网关最大外网出带宽(单位:Mbps)，支持的参数值：`20, 50, 100, 200, 500, 1000, 2000, 5000`，默认: `100Mbps`。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var integer NAT网关并发连接上限，支持参数值：`1000000、3000000、10000000`，默认值为`100000`。
     */
    public $MaxConcurrentConnection;

    /**
     * @var integer 需要申请的弹性IP个数，系统会按您的要求生产N个弹性IP，其中AddressCount和PublicAddresses至少传递一个。
     */
    public $AddressCount;

    /**
     * @var array 绑定NAT网关的弹性IP数组，其中AddressCount和PublicAddresses至少传递一个。
     */
    public $PublicIpAddresses;

    /**
     * @var string 可用区，形如：`ap-guangzhou-1`。
     */
    public $Zone;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @var string NAT网关所属子网
     */
    public $SubnetId;

    /**
     * @param string $NatGatewayName NAT网关名称
     * @param string $VpcId VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     * @param integer $InternetMaxBandwidthOut NAT网关最大外网出带宽(单位:Mbps)，支持的参数值：`20, 50, 100, 200, 500, 1000, 2000, 5000`，默认: `100Mbps`。
     * @param integer $MaxConcurrentConnection NAT网关并发连接上限，支持参数值：`1000000、3000000、10000000`，默认值为`100000`。
     * @param integer $AddressCount 需要申请的弹性IP个数，系统会按您的要求生产N个弹性IP，其中AddressCount和PublicAddresses至少传递一个。
     * @param array $PublicIpAddresses 绑定NAT网关的弹性IP数组，其中AddressCount和PublicAddresses至少传递一个。
     * @param string $Zone 可用区，形如：`ap-guangzhou-1`。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     * @param string $SubnetId NAT网关所属子网
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
        if (array_key_exists("NatGatewayName",$param) and $param["NatGatewayName"] !== null) {
            $this->NatGatewayName = $param["NatGatewayName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("MaxConcurrentConnection",$param) and $param["MaxConcurrentConnection"] !== null) {
            $this->MaxConcurrentConnection = $param["MaxConcurrentConnection"];
        }

        if (array_key_exists("AddressCount",$param) and $param["AddressCount"] !== null) {
            $this->AddressCount = $param["AddressCount"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
