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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateZone请求参数结构体
 *
 * @method string getDomain() 获取域名，格式必须是标准的TLD
 * @method void setDomain(string $Domain) 设置域名，格式必须是标准的TLD
 * @method array getTagSet() 获取创建私有域的同时，为其打上标签
 * @method void setTagSet(array $TagSet) 设置创建私有域的同时，为其打上标签
 * @method array getVpcSet() 获取创建私有域的同时，将其关联至VPC
 * @method void setVpcSet(array $VpcSet) 设置创建私有域的同时，将其关联至VPC
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getDnsForwardStatus() 获取是否开启子域名递归, ENABLED， DISABLED。默认值为DISABLED
 * @method void setDnsForwardStatus(string $DnsForwardStatus) 设置是否开启子域名递归, ENABLED， DISABLED。默认值为DISABLED
 * @method array getVpcs() 获取创建私有域的同时，将其关联至VPC
 * @method void setVpcs(array $Vpcs) 设置创建私有域的同时，将其关联至VPC
 */
class CreatePrivateZoneRequest extends AbstractModel
{
    /**
     * @var string 域名，格式必须是标准的TLD
     */
    public $Domain;

    /**
     * @var array 创建私有域的同时，为其打上标签
     */
    public $TagSet;

    /**
     * @var array 创建私有域的同时，将其关联至VPC
     */
    public $VpcSet;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 是否开启子域名递归, ENABLED， DISABLED。默认值为DISABLED
     */
    public $DnsForwardStatus;

    /**
     * @var array 创建私有域的同时，将其关联至VPC
     */
    public $Vpcs;

    /**
     * @param string $Domain 域名，格式必须是标准的TLD
     * @param array $TagSet 创建私有域的同时，为其打上标签
     * @param array $VpcSet 创建私有域的同时，将其关联至VPC
     * @param string $Remark 备注
     * @param string $DnsForwardStatus 是否开启子域名递归, ENABLED， DISABLED。默认值为DISABLED
     * @param array $Vpcs 创建私有域的同时，将其关联至VPC
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DnsForwardStatus",$param) and $param["DnsForwardStatus"] !== null) {
            $this->DnsForwardStatus = $param["DnsForwardStatus"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }
    }
}
