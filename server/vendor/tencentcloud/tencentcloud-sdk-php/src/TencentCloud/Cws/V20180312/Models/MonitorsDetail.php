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
 * 监控任务详细数据
 *
 * @method Monitor getBasic() 获取监控任务基础信息。
 * @method void setBasic(Monitor $Basic) 设置监控任务基础信息。
 * @method array getSites() 获取监控任务包含的站点列表。
 * @method void setSites(array $Sites) 设置监控任务包含的站点列表。
 * @method integer getSiteNumber() 获取监控任务包含的站点列表数量。
 * @method void setSiteNumber(integer $SiteNumber) 设置监控任务包含的站点列表数量。
 * @method array getImpactSites() 获取监控任务包含的受漏洞威胁的站点列表。
 * @method void setImpactSites(array $ImpactSites) 设置监控任务包含的受漏洞威胁的站点列表。
 * @method integer getImpactSiteNumber() 获取监控任务包含的受漏洞威胁的站点列表数量。
 * @method void setImpactSiteNumber(integer $ImpactSiteNumber) 设置监控任务包含的受漏洞威胁的站点列表数量。
 * @method integer getVulsHighNumber() 获取高风险漏洞数量。
 * @method void setVulsHighNumber(integer $VulsHighNumber) 设置高风险漏洞数量。
 * @method integer getVulsMiddleNumber() 获取中风险漏洞数量。
 * @method void setVulsMiddleNumber(integer $VulsMiddleNumber) 设置中风险漏洞数量。
 * @method integer getVulsLowNumber() 获取低风险漏洞数量。
 * @method void setVulsLowNumber(integer $VulsLowNumber) 设置低风险漏洞数量。
 * @method integer getVulsNoticeNumber() 获取提示数量。
 * @method void setVulsNoticeNumber(integer $VulsNoticeNumber) 设置提示数量。
 * @method integer getProgress() 获取监控任务包含的站点列表的平均扫描进度。
 * @method void setProgress(integer $Progress) 设置监控任务包含的站点列表的平均扫描进度。
 * @method integer getPageCount() 获取扫描页面总数。
 * @method void setPageCount(integer $PageCount) 设置扫描页面总数。
 * @method integer getContentNumber() 获取内容检测数量。
 * @method void setContentNumber(integer $ContentNumber) 设置内容检测数量。
 */
class MonitorsDetail extends AbstractModel
{
    /**
     * @var Monitor 监控任务基础信息。
     */
    public $Basic;

    /**
     * @var array 监控任务包含的站点列表。
     */
    public $Sites;

    /**
     * @var integer 监控任务包含的站点列表数量。
     */
    public $SiteNumber;

    /**
     * @var array 监控任务包含的受漏洞威胁的站点列表。
     */
    public $ImpactSites;

    /**
     * @var integer 监控任务包含的受漏洞威胁的站点列表数量。
     */
    public $ImpactSiteNumber;

    /**
     * @var integer 高风险漏洞数量。
     */
    public $VulsHighNumber;

    /**
     * @var integer 中风险漏洞数量。
     */
    public $VulsMiddleNumber;

    /**
     * @var integer 低风险漏洞数量。
     */
    public $VulsLowNumber;

    /**
     * @var integer 提示数量。
     */
    public $VulsNoticeNumber;

    /**
     * @var integer 监控任务包含的站点列表的平均扫描进度。
     */
    public $Progress;

    /**
     * @var integer 扫描页面总数。
     */
    public $PageCount;

    /**
     * @var integer 内容检测数量。
     */
    public $ContentNumber;

    /**
     * @param Monitor $Basic 监控任务基础信息。
     * @param array $Sites 监控任务包含的站点列表。
     * @param integer $SiteNumber 监控任务包含的站点列表数量。
     * @param array $ImpactSites 监控任务包含的受漏洞威胁的站点列表。
     * @param integer $ImpactSiteNumber 监控任务包含的受漏洞威胁的站点列表数量。
     * @param integer $VulsHighNumber 高风险漏洞数量。
     * @param integer $VulsMiddleNumber 中风险漏洞数量。
     * @param integer $VulsLowNumber 低风险漏洞数量。
     * @param integer $VulsNoticeNumber 提示数量。
     * @param integer $Progress 监控任务包含的站点列表的平均扫描进度。
     * @param integer $PageCount 扫描页面总数。
     * @param integer $ContentNumber 内容检测数量。
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
        if (array_key_exists("Basic",$param) and $param["Basic"] !== null) {
            $this->Basic = new Monitor();
            $this->Basic->deserialize($param["Basic"]);
        }

        if (array_key_exists("Sites",$param) and $param["Sites"] !== null) {
            $this->Sites = [];
            foreach ($param["Sites"] as $key => $value){
                $obj = new MonitorMiniSite();
                $obj->deserialize($value);
                array_push($this->Sites, $obj);
            }
        }

        if (array_key_exists("SiteNumber",$param) and $param["SiteNumber"] !== null) {
            $this->SiteNumber = $param["SiteNumber"];
        }

        if (array_key_exists("ImpactSites",$param) and $param["ImpactSites"] !== null) {
            $this->ImpactSites = [];
            foreach ($param["ImpactSites"] as $key => $value){
                $obj = new MonitorMiniSite();
                $obj->deserialize($value);
                array_push($this->ImpactSites, $obj);
            }
        }

        if (array_key_exists("ImpactSiteNumber",$param) and $param["ImpactSiteNumber"] !== null) {
            $this->ImpactSiteNumber = $param["ImpactSiteNumber"];
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

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("ContentNumber",$param) and $param["ContentNumber"] !== null) {
            $this->ContentNumber = $param["ContentNumber"];
        }
    }
}
