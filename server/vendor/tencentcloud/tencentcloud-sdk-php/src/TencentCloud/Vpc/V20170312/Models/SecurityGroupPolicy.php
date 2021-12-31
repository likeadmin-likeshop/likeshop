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
 * 安全组规则对象
 *
 * @method integer getPolicyIndex() 获取安全组规则索引号，值会随着安全组规则的变更动态变化。使用PolicyIndex时，请先调用`DescribeSecurityGroupPolicies`获取到规则的PolicyIndex，并且结合返回值中的Version一起使用处理规则。
 * @method void setPolicyIndex(integer $PolicyIndex) 设置安全组规则索引号，值会随着安全组规则的变更动态变化。使用PolicyIndex时，请先调用`DescribeSecurityGroupPolicies`获取到规则的PolicyIndex，并且结合返回值中的Version一起使用处理规则。
 * @method string getProtocol() 获取协议, 取值: TCP,UDP,ICMP,ICMPv6,ALL。
 * @method void setProtocol(string $Protocol) 设置协议, 取值: TCP,UDP,ICMP,ICMPv6,ALL。
 * @method string getPort() 获取端口(all, 离散port,  range)。
 * @method void setPort(string $Port) 设置端口(all, 离散port,  range)。
 * @method ServiceTemplateSpecification getServiceTemplate() 获取协议端口ID或者协议端口组ID。ServiceTemplate和Protocol+Port互斥。
 * @method void setServiceTemplate(ServiceTemplateSpecification $ServiceTemplate) 设置协议端口ID或者协议端口组ID。ServiceTemplate和Protocol+Port互斥。
 * @method string getCidrBlock() 获取网段或IP(互斥)。
 * @method void setCidrBlock(string $CidrBlock) 设置网段或IP(互斥)。
 * @method string getIpv6CidrBlock() 获取网段或IPv6(互斥)。
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置网段或IPv6(互斥)。
 * @method string getSecurityGroupId() 获取安全组实例ID，例如：sg-ohuuioma。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组实例ID，例如：sg-ohuuioma。
 * @method AddressTemplateSpecification getAddressTemplate() 获取IP地址ID或者ID地址组ID。
 * @method void setAddressTemplate(AddressTemplateSpecification $AddressTemplate) 设置IP地址ID或者ID地址组ID。
 * @method string getAction() 获取ACCEPT 或 DROP。
 * @method void setAction(string $Action) 设置ACCEPT 或 DROP。
 * @method string getPolicyDescription() 获取安全组规则描述。
 * @method void setPolicyDescription(string $PolicyDescription) 设置安全组规则描述。
 * @method string getModifyTime() 获取安全组最近修改时间。
 * @method void setModifyTime(string $ModifyTime) 设置安全组最近修改时间。
 */
class SecurityGroupPolicy extends AbstractModel
{
    /**
     * @var integer 安全组规则索引号，值会随着安全组规则的变更动态变化。使用PolicyIndex时，请先调用`DescribeSecurityGroupPolicies`获取到规则的PolicyIndex，并且结合返回值中的Version一起使用处理规则。
     */
    public $PolicyIndex;

    /**
     * @var string 协议, 取值: TCP,UDP,ICMP,ICMPv6,ALL。
     */
    public $Protocol;

    /**
     * @var string 端口(all, 离散port,  range)。
     */
    public $Port;

    /**
     * @var ServiceTemplateSpecification 协议端口ID或者协议端口组ID。ServiceTemplate和Protocol+Port互斥。
     */
    public $ServiceTemplate;

    /**
     * @var string 网段或IP(互斥)。
     */
    public $CidrBlock;

    /**
     * @var string 网段或IPv6(互斥)。
     */
    public $Ipv6CidrBlock;

    /**
     * @var string 安全组实例ID，例如：sg-ohuuioma。
     */
    public $SecurityGroupId;

    /**
     * @var AddressTemplateSpecification IP地址ID或者ID地址组ID。
     */
    public $AddressTemplate;

    /**
     * @var string ACCEPT 或 DROP。
     */
    public $Action;

    /**
     * @var string 安全组规则描述。
     */
    public $PolicyDescription;

    /**
     * @var string 安全组最近修改时间。
     */
    public $ModifyTime;

    /**
     * @param integer $PolicyIndex 安全组规则索引号，值会随着安全组规则的变更动态变化。使用PolicyIndex时，请先调用`DescribeSecurityGroupPolicies`获取到规则的PolicyIndex，并且结合返回值中的Version一起使用处理规则。
     * @param string $Protocol 协议, 取值: TCP,UDP,ICMP,ICMPv6,ALL。
     * @param string $Port 端口(all, 离散port,  range)。
     * @param ServiceTemplateSpecification $ServiceTemplate 协议端口ID或者协议端口组ID。ServiceTemplate和Protocol+Port互斥。
     * @param string $CidrBlock 网段或IP(互斥)。
     * @param string $Ipv6CidrBlock 网段或IPv6(互斥)。
     * @param string $SecurityGroupId 安全组实例ID，例如：sg-ohuuioma。
     * @param AddressTemplateSpecification $AddressTemplate IP地址ID或者ID地址组ID。
     * @param string $Action ACCEPT 或 DROP。
     * @param string $PolicyDescription 安全组规则描述。
     * @param string $ModifyTime 安全组最近修改时间。
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
        if (array_key_exists("PolicyIndex",$param) and $param["PolicyIndex"] !== null) {
            $this->PolicyIndex = $param["PolicyIndex"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceTemplate",$param) and $param["ServiceTemplate"] !== null) {
            $this->ServiceTemplate = new ServiceTemplateSpecification();
            $this->ServiceTemplate->deserialize($param["ServiceTemplate"]);
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("AddressTemplate",$param) and $param["AddressTemplate"] !== null) {
            $this->AddressTemplate = new AddressTemplateSpecification();
            $this->AddressTemplate->deserialize($param["AddressTemplate"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PolicyDescription",$param) and $param["PolicyDescription"] !== null) {
            $this->PolicyDescription = $param["PolicyDescription"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
