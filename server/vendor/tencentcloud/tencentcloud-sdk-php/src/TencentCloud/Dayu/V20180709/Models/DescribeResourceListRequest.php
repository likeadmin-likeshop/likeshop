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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceList请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgp表示独享包；bgp-multip表示共享包；bgpip表示高防IP；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgp表示独享包；bgp-multip表示共享包；bgpip表示高防IP；net表示高防IP专业版）
 * @method array getRegionList() 获取地域码搜索，可选，当不指定地域时空数组，当指定地域时，填地域码。例如：["gz", "sh"]
 * @method void setRegionList(array $RegionList) 设置地域码搜索，可选，当不指定地域时空数组，当指定地域时，填地域码。例如：["gz", "sh"]
 * @method array getLine() 获取线路搜索，可选，只有当获取高防IP资源列表是可以选填，取值为[1（BGP线路），2（南京电信），3（南京联通），99（第三方合作线路）]，当获取其他产品时请填空数组；
 * @method void setLine(array $Line) 设置线路搜索，可选，只有当获取高防IP资源列表是可以选填，取值为[1（BGP线路），2（南京电信），3（南京联通），99（第三方合作线路）]，当获取其他产品时请填空数组；
 * @method array getIdList() 获取资源ID搜索，可选，当不为空数组时表示获取指定资源的资源列表；
 * @method void setIdList(array $IdList) 设置资源ID搜索，可选，当不为空数组时表示获取指定资源的资源列表；
 * @method string getName() 获取资源名称搜索，可选，当不为空字符串时表示按名称搜索资源；
 * @method void setName(string $Name) 设置资源名称搜索，可选，当不为空字符串时表示按名称搜索资源；
 * @method array getIpList() 获取IP搜索列表，可选，当不为空时表示按照IP搜索资源；
 * @method void setIpList(array $IpList) 设置IP搜索列表，可选，当不为空时表示按照IP搜索资源；
 * @method array getStatus() 获取资源状态搜索列表，可选，取值为[0（运行中）, 1（清洗中）, 2（封堵中）]，当填空数组时不进行状态搜索；
 * @method void setStatus(array $Status) 设置资源状态搜索列表，可选，取值为[0（运行中）, 1（清洗中）, 2（封堵中）]，当填空数组时不进行状态搜索；
 * @method integer getExpire() 获取即将到期搜索；可选，取值为[0（不搜索），1（搜索即将到期的资源）]
 * @method void setExpire(integer $Expire) 设置即将到期搜索；可选，取值为[0（不搜索），1（搜索即将到期的资源）]
 * @method array getOderBy() 获取排序字段，可选
 * @method void setOderBy(array $OderBy) 设置排序字段，可选
 * @method integer getLimit() 获取一页条数，填0表示不分页
 * @method void setLimit(integer $Limit) 设置一页条数，填0表示不分页
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 * @method string getCName() 获取高防IP专业版资源的CNAME，可选，只对高防IP专业版资源列表有效；
 * @method void setCName(string $CName) 设置高防IP专业版资源的CNAME，可选，只对高防IP专业版资源列表有效；
 * @method string getDomain() 获取高防IP专业版资源的域名，可选，只对高防IP专业版资源列表有效；
 * @method void setDomain(string $Domain) 设置高防IP专业版资源的域名，可选，只对高防IP专业版资源列表有效；
 */
class DescribeResourceListRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgp表示独享包；bgp-multip表示共享包；bgpip表示高防IP；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var array 地域码搜索，可选，当不指定地域时空数组，当指定地域时，填地域码。例如：["gz", "sh"]
     */
    public $RegionList;

    /**
     * @var array 线路搜索，可选，只有当获取高防IP资源列表是可以选填，取值为[1（BGP线路），2（南京电信），3（南京联通），99（第三方合作线路）]，当获取其他产品时请填空数组；
     */
    public $Line;

    /**
     * @var array 资源ID搜索，可选，当不为空数组时表示获取指定资源的资源列表；
     */
    public $IdList;

    /**
     * @var string 资源名称搜索，可选，当不为空字符串时表示按名称搜索资源；
     */
    public $Name;

    /**
     * @var array IP搜索列表，可选，当不为空时表示按照IP搜索资源；
     */
    public $IpList;

    /**
     * @var array 资源状态搜索列表，可选，取值为[0（运行中）, 1（清洗中）, 2（封堵中）]，当填空数组时不进行状态搜索；
     */
    public $Status;

    /**
     * @var integer 即将到期搜索；可选，取值为[0（不搜索），1（搜索即将到期的资源）]
     */
    public $Expire;

    /**
     * @var array 排序字段，可选
     */
    public $OderBy;

    /**
     * @var integer 一页条数，填0表示不分页
     */
    public $Limit;

    /**
     * @var integer 页起始偏移，取值为(页码-1)*一页条数
     */
    public $Offset;

    /**
     * @var string 高防IP专业版资源的CNAME，可选，只对高防IP专业版资源列表有效；
     */
    public $CName;

    /**
     * @var string 高防IP专业版资源的域名，可选，只对高防IP专业版资源列表有效；
     */
    public $Domain;

    /**
     * @param string $Business 大禹子产品代号（bgp表示独享包；bgp-multip表示共享包；bgpip表示高防IP；net表示高防IP专业版）
     * @param array $RegionList 地域码搜索，可选，当不指定地域时空数组，当指定地域时，填地域码。例如：["gz", "sh"]
     * @param array $Line 线路搜索，可选，只有当获取高防IP资源列表是可以选填，取值为[1（BGP线路），2（南京电信），3（南京联通），99（第三方合作线路）]，当获取其他产品时请填空数组；
     * @param array $IdList 资源ID搜索，可选，当不为空数组时表示获取指定资源的资源列表；
     * @param string $Name 资源名称搜索，可选，当不为空字符串时表示按名称搜索资源；
     * @param array $IpList IP搜索列表，可选，当不为空时表示按照IP搜索资源；
     * @param array $Status 资源状态搜索列表，可选，取值为[0（运行中）, 1（清洗中）, 2（封堵中）]，当填空数组时不进行状态搜索；
     * @param integer $Expire 即将到期搜索；可选，取值为[0（不搜索），1（搜索即将到期的资源）]
     * @param array $OderBy 排序字段，可选
     * @param integer $Limit 一页条数，填0表示不分页
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
     * @param string $CName 高防IP专业版资源的CNAME，可选，只对高防IP专业版资源列表有效；
     * @param string $Domain 高防IP专业版资源的域名，可选，只对高防IP专业版资源列表有效；
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = $param["RegionList"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("OderBy",$param) and $param["OderBy"] !== null) {
            $this->OderBy = [];
            foreach ($param["OderBy"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OderBy, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CName",$param) and $param["CName"] !== null) {
            $this->CName = $param["CName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
