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
 * 用户漏洞数随时间变化统计数据
 *
 * @method integer getId() 获取ID。
 * @method void setId(integer $Id) 设置ID。
 * @method integer getAppid() 获取云用户appid。
 * @method void setAppid(integer $Appid) 设置云用户appid。
 * @method string getDate() 获取日期。
 * @method void setDate(string $Date) 设置日期。
 * @method integer getPageCount() 获取扫描页面总数量。
 * @method void setPageCount(integer $PageCount) 设置扫描页面总数量。
 * @method integer getSiteNum() 获取已验证网站总数量。
 * @method void setSiteNum(integer $SiteNum) 设置已验证网站总数量。
 * @method integer getImpactSiteNum() 获取受影响的网站总数量。
 * @method void setImpactSiteNum(integer $ImpactSiteNum) 设置受影响的网站总数量。
 * @method integer getVulsHighNum() 获取高危漏洞总数量。
 * @method void setVulsHighNum(integer $VulsHighNum) 设置高危漏洞总数量。
 * @method integer getVulsMiddleNum() 获取中危漏洞总数量。
 * @method void setVulsMiddleNum(integer $VulsMiddleNum) 设置中危漏洞总数量。
 * @method integer getVulsLowNum() 获取低危漏洞总数量。
 * @method void setVulsLowNum(integer $VulsLowNum) 设置低危漏洞总数量。
 * @method integer getVulsNoticeNum() 获取风险提示总数量
 * @method void setVulsNoticeNum(integer $VulsNoticeNum) 设置风险提示总数量
 * @method string getCreatedAt() 获取记录添加时间。
 * @method void setCreatedAt(string $CreatedAt) 设置记录添加时间。
 * @method string getUpdatedAt() 获取记录最近修改时间。
 * @method void setUpdatedAt(string $UpdatedAt) 设置记录最近修改时间。
 */
class VulsTimeline extends AbstractModel
{
    /**
     * @var integer ID。
     */
    public $Id;

    /**
     * @var integer 云用户appid。
     */
    public $Appid;

    /**
     * @var string 日期。
     */
    public $Date;

    /**
     * @var integer 扫描页面总数量。
     */
    public $PageCount;

    /**
     * @var integer 已验证网站总数量。
     */
    public $SiteNum;

    /**
     * @var integer 受影响的网站总数量。
     */
    public $ImpactSiteNum;

    /**
     * @var integer 高危漏洞总数量。
     */
    public $VulsHighNum;

    /**
     * @var integer 中危漏洞总数量。
     */
    public $VulsMiddleNum;

    /**
     * @var integer 低危漏洞总数量。
     */
    public $VulsLowNum;

    /**
     * @var integer 风险提示总数量
     */
    public $VulsNoticeNum;

    /**
     * @var string 记录添加时间。
     */
    public $CreatedAt;

    /**
     * @var string 记录最近修改时间。
     */
    public $UpdatedAt;

    /**
     * @param integer $Id ID。
     * @param integer $Appid 云用户appid。
     * @param string $Date 日期。
     * @param integer $PageCount 扫描页面总数量。
     * @param integer $SiteNum 已验证网站总数量。
     * @param integer $ImpactSiteNum 受影响的网站总数量。
     * @param integer $VulsHighNum 高危漏洞总数量。
     * @param integer $VulsMiddleNum 中危漏洞总数量。
     * @param integer $VulsLowNum 低危漏洞总数量。
     * @param integer $VulsNoticeNum 风险提示总数量
     * @param string $CreatedAt 记录添加时间。
     * @param string $UpdatedAt 记录最近修改时间。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("SiteNum",$param) and $param["SiteNum"] !== null) {
            $this->SiteNum = $param["SiteNum"];
        }

        if (array_key_exists("ImpactSiteNum",$param) and $param["ImpactSiteNum"] !== null) {
            $this->ImpactSiteNum = $param["ImpactSiteNum"];
        }

        if (array_key_exists("VulsHighNum",$param) and $param["VulsHighNum"] !== null) {
            $this->VulsHighNum = $param["VulsHighNum"];
        }

        if (array_key_exists("VulsMiddleNum",$param) and $param["VulsMiddleNum"] !== null) {
            $this->VulsMiddleNum = $param["VulsMiddleNum"];
        }

        if (array_key_exists("VulsLowNum",$param) and $param["VulsLowNum"] !== null) {
            $this->VulsLowNum = $param["VulsLowNum"];
        }

        if (array_key_exists("VulsNoticeNum",$param) and $param["VulsNoticeNum"] !== null) {
            $this->VulsNoticeNum = $param["VulsNoticeNum"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
