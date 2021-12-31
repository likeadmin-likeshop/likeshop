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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulsNumber返回参数结构体
 *
 * @method integer getImpactSiteNumber() 获取受影响的网站总数。
 * @method void setImpactSiteNumber(integer $ImpactSiteNumber) 设置受影响的网站总数。
 * @method integer getSiteNumber() 获取已验证的网站总数。
 * @method void setSiteNumber(integer $SiteNumber) 设置已验证的网站总数。
 * @method integer getVulsHighNumber() 获取高风险漏洞总数。
 * @method void setVulsHighNumber(integer $VulsHighNumber) 设置高风险漏洞总数。
 * @method integer getVulsMiddleNumber() 获取中风险漏洞总数。
 * @method void setVulsMiddleNumber(integer $VulsMiddleNumber) 设置中风险漏洞总数。
 * @method integer getVulsLowNumber() 获取低高风险漏洞总数。
 * @method void setVulsLowNumber(integer $VulsLowNumber) 设置低高风险漏洞总数。
 * @method integer getVulsNoticeNumber() 获取风险提示总数。
 * @method void setVulsNoticeNumber(integer $VulsNoticeNumber) 设置风险提示总数。
 * @method integer getPageCount() 获取扫描页面总数。
 * @method void setPageCount(integer $PageCount) 设置扫描页面总数。
 * @method array getSites() 获取已验证的网站列表。
 * @method void setSites(array $Sites) 设置已验证的网站列表。
 * @method array getImpactSites() 获取受影响的网站列表。
 * @method void setImpactSites(array $ImpactSites) 设置受影响的网站列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulsNumberResponse extends AbstractModel
{
    /**
     * @var integer 受影响的网站总数。
     */
    public $ImpactSiteNumber;

    /**
     * @var integer 已验证的网站总数。
     */
    public $SiteNumber;

    /**
     * @var integer 高风险漏洞总数。
     */
    public $VulsHighNumber;

    /**
     * @var integer 中风险漏洞总数。
     */
    public $VulsMiddleNumber;

    /**
     * @var integer 低高风险漏洞总数。
     */
    public $VulsLowNumber;

    /**
     * @var integer 风险提示总数。
     */
    public $VulsNoticeNumber;

    /**
     * @var integer 扫描页面总数。
     */
    public $PageCount;

    /**
     * @var array 已验证的网站列表。
     */
    public $Sites;

    /**
     * @var array 受影响的网站列表。
     */
    public $ImpactSites;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ImpactSiteNumber 受影响的网站总数。
     * @param integer $SiteNumber 已验证的网站总数。
     * @param integer $VulsHighNumber 高风险漏洞总数。
     * @param integer $VulsMiddleNumber 中风险漏洞总数。
     * @param integer $VulsLowNumber 低高风险漏洞总数。
     * @param integer $VulsNoticeNumber 风险提示总数。
     * @param integer $PageCount 扫描页面总数。
     * @param array $Sites 已验证的网站列表。
     * @param array $ImpactSites 受影响的网站列表。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ImpactSiteNumber",$param) and $param["ImpactSiteNumber"] !== null) {
            $this->ImpactSiteNumber = $param["ImpactSiteNumber"];
        }

        if (array_key_exists("SiteNumber",$param) and $param["SiteNumber"] !== null) {
            $this->SiteNumber = $param["SiteNumber"];
        }

        if (array_key_exists("VulsHighNumber",$param) and $param["VulsHighNumber"] !== null) {
            $this->VulsHighNumber = $param["VulsHighNumber"];
        }

        if (array_key_exists("VulsMiddleNumber",$param) and $param["VulsMiddleNumber"] !== null) {
            $this->VulsMiddleNumber = $param["VulsMiddleNumber"];
        }

        if (array_key_exists("VulsLowNumber",$param) and $param["VulsLowNumber"] !== null) {
            $this->VulsLowNumber = $param["VulsLowNumber"];
        }

        if (array_key_exists("VulsNoticeNumber",$param) and $param["VulsNoticeNumber"] !== null) {
            $this->VulsNoticeNumber = $param["VulsNoticeNumber"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("Sites",$param) and $param["Sites"] !== null) {
            $this->Sites = [];
            foreach ($param["Sites"] as $key => $value){
                $obj = new MonitorMiniSite();
                $obj->deserialize($value);
                array_push($this->Sites, $obj);
            }
        }

        if (array_key_exists("ImpactSites",$param) and $param["ImpactSites"] !== null) {
            $this->ImpactSites = [];
            foreach ($param["ImpactSites"] as $key => $value){
                $obj = new MonitorMiniSite();
                $obj->deserialize($value);
                array_push($this->ImpactSites, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
