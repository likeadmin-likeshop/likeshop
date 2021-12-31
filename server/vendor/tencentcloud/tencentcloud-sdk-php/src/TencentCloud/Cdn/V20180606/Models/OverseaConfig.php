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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名海外地区特殊配置。UpdateDomainConfig接口只支持修改部分分地区配置，为了兼容旧版本配置，本类型会列出旧版本所有可能存在差异的配置列表，支持修改的配置列表如下：
+ Authentication
+ BandwidthAlert
+ ErrorPage
+ IpFilter
+ Origin
+ Referer
 *
 * @method Authentication getAuthentication() 获取时间戳防盗链配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthentication(Authentication $Authentication) 设置时间戳防盗链配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method BandwidthAlert getBandwidthAlert() 获取带宽封顶配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthAlert(BandwidthAlert $BandwidthAlert) 设置带宽封顶配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Cache getCache() 获取缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCache(Cache $Cache) 设置缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheKey getCacheKey() 获取缓存相关配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheKey(CacheKey $CacheKey) 设置缓存相关配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Compression getCompression() 获取智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompression(Compression $Compression) 设置智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DownstreamCapping getDownstreamCapping() 获取下载限速配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownstreamCapping(DownstreamCapping $DownstreamCapping) 设置下载限速配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorPage getErrorPage() 获取错误码重定向配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorPage(ErrorPage $ErrorPage) 设置错误码重定向配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FollowRedirect getFollowRedirect() 获取301和302自动回源跟随配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) 设置301和302自动回源跟随配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ForceRedirect getForceRedirect() 获取访问协议强制跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) 设置访问协议强制跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Https getHttps() 获取Https配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttps(Https $Https) 设置Https配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpFilter getIpFilter() 获取IP黑白名单配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpFilter(IpFilter $IpFilter) 设置IP黑白名单配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpFreqLimit getIpFreqLimit() 获取IP限频配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) 设置IP限频配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaxAge getMaxAge() 获取浏览器缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAge(MaxAge $MaxAge) 设置浏览器缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Origin getOrigin() 获取源站配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrigin(Origin $Origin) 设置源站配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginPullOptimization getOriginPullOptimization() 获取跨国优化配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginPullOptimization(OriginPullOptimization $OriginPullOptimization) 设置跨国优化配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RangeOriginPull getRangeOriginPull() 获取Range回源配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeOriginPull(RangeOriginPull $RangeOriginPull) 设置Range回源配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Referer getReferer() 获取防盗链配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferer(Referer $Referer) 设置防盗链配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RequestHeader getRequestHeader() 获取回源请求头部配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestHeader(RequestHeader $RequestHeader) 设置回源请求头部配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseHeader getResponseHeader() 获取源站响应头部配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) 设置源站响应头部配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseHeaderCache getResponseHeaderCache() 获取遵循源站缓存头部配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseHeaderCache(ResponseHeaderCache $ResponseHeaderCache) 设置遵循源站缓存头部配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Seo getSeo() 获取seo优化配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeo(Seo $Seo) 设置seo优化配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceType() 获取域名业务类型，web，download，media分别表示静态加速，下载加速和流媒体加速。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置域名业务类型，web，download，media分别表示静态加速，下载加速和流媒体加速。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatusCodeCache getStatusCodeCache() 获取状态码缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCodeCache(StatusCodeCache $StatusCodeCache) 设置状态码缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoSeek getVideoSeek() 获取视频拖拽配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoSeek(VideoSeek $VideoSeek) 设置视频拖拽配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class OverseaConfig extends AbstractModel
{
    /**
     * @var Authentication 时间戳防盗链配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Authentication;

    /**
     * @var BandwidthAlert 带宽封顶配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthAlert;

    /**
     * @var Cache 缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cache;

    /**
     * @var CacheKey 缓存相关配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheKey;

    /**
     * @var Compression 智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compression;

    /**
     * @var DownstreamCapping 下载限速配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownstreamCapping;

    /**
     * @var ErrorPage 错误码重定向配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorPage;

    /**
     * @var FollowRedirect 301和302自动回源跟随配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowRedirect;

    /**
     * @var ForceRedirect 访问协议强制跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceRedirect;

    /**
     * @var Https Https配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Https;

    /**
     * @var IpFilter IP黑白名单配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP限频配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpFreqLimit;

    /**
     * @var MaxAge 浏览器缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAge;

    /**
     * @var Origin 源站配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Origin;

    /**
     * @var OriginPullOptimization 跨国优化配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginPullOptimization;

    /**
     * @var RangeOriginPull Range回源配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeOriginPull;

    /**
     * @var Referer 防盗链配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Referer;

    /**
     * @var RequestHeader 回源请求头部配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader 源站响应头部配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseHeader;

    /**
     * @var ResponseHeaderCache 遵循源站缓存头部配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseHeaderCache;

    /**
     * @var Seo seo优化配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seo;

    /**
     * @var string 域名业务类型，web，download，media分别表示静态加速，下载加速和流媒体加速。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var StatusCodeCache 状态码缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCodeCache;

    /**
     * @var VideoSeek 视频拖拽配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoSeek;

    /**
     * @param Authentication $Authentication 时间戳防盗链配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param BandwidthAlert $BandwidthAlert 带宽封顶配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Cache $Cache 缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheKey $CacheKey 缓存相关配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Compression $Compression 智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DownstreamCapping $DownstreamCapping 下载限速配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorPage $ErrorPage 错误码重定向配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FollowRedirect $FollowRedirect 301和302自动回源跟随配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ForceRedirect $ForceRedirect 访问协议强制跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Https $Https Https配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpFilter $IpFilter IP黑白名单配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpFreqLimit $IpFreqLimit IP限频配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaxAge $MaxAge 浏览器缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Origin $Origin 源站配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginPullOptimization $OriginPullOptimization 跨国优化配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RangeOriginPull $RangeOriginPull Range回源配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Referer $Referer 防盗链配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RequestHeader $RequestHeader 回源请求头部配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseHeader $ResponseHeader 源站响应头部配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseHeaderCache $ResponseHeaderCache 遵循源站缓存头部配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Seo $Seo seo优化配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceType 域名业务类型，web，download，media分别表示静态加速，下载加速和流媒体加速。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatusCodeCache $StatusCodeCache 状态码缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoSeek $VideoSeek 视频拖拽配置。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = new Authentication();
            $this->Authentication->deserialize($param["Authentication"]);
        }

        if (array_key_exists("BandwidthAlert",$param) and $param["BandwidthAlert"] !== null) {
            $this->BandwidthAlert = new BandwidthAlert();
            $this->BandwidthAlert->deserialize($param["BandwidthAlert"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new Compression();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("DownstreamCapping",$param) and $param["DownstreamCapping"] !== null) {
            $this->DownstreamCapping = new DownstreamCapping();
            $this->DownstreamCapping->deserialize($param["DownstreamCapping"]);
        }

        if (array_key_exists("ErrorPage",$param) and $param["ErrorPage"] !== null) {
            $this->ErrorPage = new ErrorPage();
            $this->ErrorPage->deserialize($param["ErrorPage"]);
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = new FollowRedirect();
            $this->FollowRedirect->deserialize($param["FollowRedirect"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("IpFilter",$param) and $param["IpFilter"] !== null) {
            $this->IpFilter = new IpFilter();
            $this->IpFilter->deserialize($param["IpFilter"]);
        }

        if (array_key_exists("IpFreqLimit",$param) and $param["IpFreqLimit"] !== null) {
            $this->IpFreqLimit = new IpFreqLimit();
            $this->IpFreqLimit->deserialize($param["IpFreqLimit"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("OriginPullOptimization",$param) and $param["OriginPullOptimization"] !== null) {
            $this->OriginPullOptimization = new OriginPullOptimization();
            $this->OriginPullOptimization->deserialize($param["OriginPullOptimization"]);
        }

        if (array_key_exists("RangeOriginPull",$param) and $param["RangeOriginPull"] !== null) {
            $this->RangeOriginPull = new RangeOriginPull();
            $this->RangeOriginPull->deserialize($param["RangeOriginPull"]);
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = new Referer();
            $this->Referer->deserialize($param["Referer"]);
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = new RequestHeader();
            $this->RequestHeader->deserialize($param["RequestHeader"]);
        }

        if (array_key_exists("ResponseHeader",$param) and $param["ResponseHeader"] !== null) {
            $this->ResponseHeader = new ResponseHeader();
            $this->ResponseHeader->deserialize($param["ResponseHeader"]);
        }

        if (array_key_exists("ResponseHeaderCache",$param) and $param["ResponseHeaderCache"] !== null) {
            $this->ResponseHeaderCache = new ResponseHeaderCache();
            $this->ResponseHeaderCache->deserialize($param["ResponseHeaderCache"]);
        }

        if (array_key_exists("Seo",$param) and $param["Seo"] !== null) {
            $this->Seo = new Seo();
            $this->Seo->deserialize($param["Seo"]);
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("StatusCodeCache",$param) and $param["StatusCodeCache"] !== null) {
            $this->StatusCodeCache = new StatusCodeCache();
            $this->StatusCodeCache->deserialize($param["StatusCodeCache"]);
        }

        if (array_key_exists("VideoSeek",$param) and $param["VideoSeek"] !== null) {
            $this->VideoSeek = new VideoSeek();
            $this->VideoSeek->deserialize($param["VideoSeek"]);
        }
    }
}
