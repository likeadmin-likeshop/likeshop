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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRecord请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getRecordType() 获取记录类型，通过 API 记录类型获得，大写英文，比如：A 。
 * @method void setRecordType(string $RecordType) 设置记录类型，通过 API 记录类型获得，大写英文，比如：A 。
 * @method string getRecordLine() 获取记录线路，通过 API 记录线路获得，中文，比如：默认。
 * @method void setRecordLine(string $RecordLine) 设置记录线路，通过 API 记录线路获得，中文，比如：默认。
 * @method string getValue() 获取记录值，如 IP : 200.200.200.200， CNAME : cname.dnspod.com.， MX : mail.dnspod.com.。
 * @method void setValue(string $Value) 设置记录值，如 IP : 200.200.200.200， CNAME : cname.dnspod.com.， MX : mail.dnspod.com.。
 * @method integer getDomainId() 获取域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。
 * @method void setDomainId(integer $DomainId) 设置域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。
 * @method string getSubDomain() 获取主机记录，如 www，如果不传，默认为 @。
 * @method void setSubDomain(string $SubDomain) 设置主机记录，如 www，如果不传，默认为 @。
 * @method string getRecordLineId() 获取线路的 ID，通过 API 记录线路获得，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。
 * @method void setRecordLineId(string $RecordLineId) 设置线路的 ID，通过 API 记录线路获得，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。
 * @method integer getMX() 获取MX 优先级，当记录类型是 MX 时有效，范围1-20，MX 记录时必选。
 * @method void setMX(integer $MX) 设置MX 优先级，当记录类型是 MX 时有效，范围1-20，MX 记录时必选。
 * @method integer getTTL() 获取TTL，范围1-604800，不同等级域名最小值不同。
 * @method void setTTL(integer $TTL) 设置TTL，范围1-604800，不同等级域名最小值不同。
 * @method integer getWeight() 获取权重信息，0到100的整数。仅企业 VIP 域名可用，0 表示关闭，不传该参数，表示不设置权重信息。
 * @method void setWeight(integer $Weight) 设置权重信息，0到100的整数。仅企业 VIP 域名可用，0 表示关闭，不传该参数，表示不设置权重信息。
 * @method string getStatus() 获取记录初始状态，取值范围为 ENABLE 和 DISABLE 。默认为 ENABLE ，如果传入 DISABLE，解析不会生效，也不会验证负载均衡的限制。
 * @method void setStatus(string $Status) 设置记录初始状态，取值范围为 ENABLE 和 DISABLE 。默认为 ENABLE ，如果传入 DISABLE，解析不会生效，也不会验证负载均衡的限制。
 */
class CreateRecordRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 记录类型，通过 API 记录类型获得，大写英文，比如：A 。
     */
    public $RecordType;

    /**
     * @var string 记录线路，通过 API 记录线路获得，中文，比如：默认。
     */
    public $RecordLine;

    /**
     * @var string 记录值，如 IP : 200.200.200.200， CNAME : cname.dnspod.com.， MX : mail.dnspod.com.。
     */
    public $Value;

    /**
     * @var integer 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。
     */
    public $DomainId;

    /**
     * @var string 主机记录，如 www，如果不传，默认为 @。
     */
    public $SubDomain;

    /**
     * @var string 线路的 ID，通过 API 记录线路获得，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。
     */
    public $RecordLineId;

    /**
     * @var integer MX 优先级，当记录类型是 MX 时有效，范围1-20，MX 记录时必选。
     */
    public $MX;

    /**
     * @var integer TTL，范围1-604800，不同等级域名最小值不同。
     */
    public $TTL;

    /**
     * @var integer 权重信息，0到100的整数。仅企业 VIP 域名可用，0 表示关闭，不传该参数，表示不设置权重信息。
     */
    public $Weight;

    /**
     * @var string 记录初始状态，取值范围为 ENABLE 和 DISABLE 。默认为 ENABLE ，如果传入 DISABLE，解析不会生效，也不会验证负载均衡的限制。
     */
    public $Status;

    /**
     * @param string $Domain 域名
     * @param string $RecordType 记录类型，通过 API 记录类型获得，大写英文，比如：A 。
     * @param string $RecordLine 记录线路，通过 API 记录线路获得，中文，比如：默认。
     * @param string $Value 记录值，如 IP : 200.200.200.200， CNAME : cname.dnspod.com.， MX : mail.dnspod.com.。
     * @param integer $DomainId 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。
     * @param string $SubDomain 主机记录，如 www，如果不传，默认为 @。
     * @param string $RecordLineId 线路的 ID，通过 API 记录线路获得，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。
     * @param integer $MX MX 优先级，当记录类型是 MX 时有效，范围1-20，MX 记录时必选。
     * @param integer $TTL TTL，范围1-604800，不同等级域名最小值不同。
     * @param integer $Weight 权重信息，0到100的整数。仅企业 VIP 域名可用，0 表示关闭，不传该参数，表示不设置权重信息。
     * @param string $Status 记录初始状态，取值范围为 ENABLE 和 DISABLE 。默认为 ENABLE ，如果传入 DISABLE，解析不会生效，也不会验证负载均衡的限制。
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

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
