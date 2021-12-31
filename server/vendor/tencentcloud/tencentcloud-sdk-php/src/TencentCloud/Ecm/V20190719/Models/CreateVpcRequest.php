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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVpc请求参数结构体
 *
 * @method string getVpcName() 获取vpc名称，最大长度不能超过60个字节。
 * @method void setVpcName(string $VpcName) 设置vpc名称，最大长度不能超过60个字节。
 * @method string getCidrBlock() 获取vpc的cidr，只能为10.*.0.0/16，172.[16-31].0.0/16，192.168.0.0/16这三个内网网段内。
 * @method void setCidrBlock(string $CidrBlock) 设置vpc的cidr，只能为10.*.0.0/16，172.[16-31].0.0/16，192.168.0.0/16这三个内网网段内。
 * @method string getEcmRegion() 获取ECM 地域
 * @method void setEcmRegion(string $EcmRegion) 设置ECM 地域
 * @method string getEnableMulticast() 获取是否开启组播。true: 开启, false: 不开启。暂不支持
 * @method void setEnableMulticast(string $EnableMulticast) 设置是否开启组播。true: 开启, false: 不开启。暂不支持
 * @method array getDnsServers() 获取DNS地址，最多支持4个，暂不支持
 * @method void setDnsServers(array $DnsServers) 设置DNS地址，最多支持4个，暂不支持
 * @method string getDomainName() 获取域名，暂不支持
 * @method void setDomainName(string $DomainName) 设置域名，暂不支持
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 */
class CreateVpcRequest extends AbstractModel
{
    /**
     * @var string vpc名称，最大长度不能超过60个字节。
     */
    public $VpcName;

    /**
     * @var string vpc的cidr，只能为10.*.0.0/16，172.[16-31].0.0/16，192.168.0.0/16这三个内网网段内。
     */
    public $CidrBlock;

    /**
     * @var string ECM 地域
     */
    public $EcmRegion;

    /**
     * @var string 是否开启组播。true: 开启, false: 不开启。暂不支持
     */
    public $EnableMulticast;

    /**
     * @var array DNS地址，最多支持4个，暂不支持
     */
    public $DnsServers;

    /**
     * @var string 域名，暂不支持
     */
    public $DomainName;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @param string $VpcName vpc名称，最大长度不能超过60个字节。
     * @param string $CidrBlock vpc的cidr，只能为10.*.0.0/16，172.[16-31].0.0/16，192.168.0.0/16这三个内网网段内。
     * @param string $EcmRegion ECM 地域
     * @param string $EnableMulticast 是否开启组播。true: 开启, false: 不开启。暂不支持
     * @param array $DnsServers DNS地址，最多支持4个，暂不支持
     * @param string $DomainName 域名，暂不支持
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     * @param string $Description 描述信息
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
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("EnableMulticast",$param) and $param["EnableMulticast"] !== null) {
            $this->EnableMulticast = $param["EnableMulticast"];
        }

        if (array_key_exists("DnsServers",$param) and $param["DnsServers"] !== null) {
            $this->DnsServers = $param["DnsServers"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
