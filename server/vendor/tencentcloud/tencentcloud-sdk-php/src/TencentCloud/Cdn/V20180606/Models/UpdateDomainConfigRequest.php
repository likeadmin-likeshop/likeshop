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
 * UpdateDomainConfig请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getProjectId() 获取项目 ID
 * @method void setProjectId(integer $ProjectId) 设置项目 ID
 * @method Origin getOrigin() 获取源站配置
 * @method void setOrigin(Origin $Origin) 设置源站配置
 * @method IpFilter getIpFilter() 获取IP 黑白名单配置
 * @method void setIpFilter(IpFilter $IpFilter) 设置IP 黑白名单配置
 * @method IpFreqLimit getIpFreqLimit() 获取IP 限频配置
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) 设置IP 限频配置
 * @method StatusCodeCache getStatusCodeCache() 获取状态码缓存配置
 * @method void setStatusCodeCache(StatusCodeCache $StatusCodeCache) 设置状态码缓存配置
 * @method Compression getCompression() 获取智能压缩配置
 * @method void setCompression(Compression $Compression) 设置智能压缩配置
 * @method BandwidthAlert getBandwidthAlert() 获取带宽封顶配置
 * @method void setBandwidthAlert(BandwidthAlert $BandwidthAlert) 设置带宽封顶配置
 * @method RangeOriginPull getRangeOriginPull() 获取Range 回源配置
 * @method void setRangeOriginPull(RangeOriginPull $RangeOriginPull) 设置Range 回源配置
 * @method FollowRedirect getFollowRedirect() 获取301/302 回源跟随配置
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) 设置301/302 回源跟随配置
 * @method ErrorPage getErrorPage() 获取错误码重定向配置（功能灰度中，尚未全量）
 * @method void setErrorPage(ErrorPage $ErrorPage) 设置错误码重定向配置（功能灰度中，尚未全量）
 * @method RequestHeader getRequestHeader() 获取请求头部配置
 * @method void setRequestHeader(RequestHeader $RequestHeader) 设置请求头部配置
 * @method ResponseHeader getResponseHeader() 获取响应头部配置
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) 设置响应头部配置
 * @method DownstreamCapping getDownstreamCapping() 获取下载速度配置
 * @method void setDownstreamCapping(DownstreamCapping $DownstreamCapping) 设置下载速度配置
 * @method CacheKey getCacheKey() 获取节点缓存键配置
 * @method void setCacheKey(CacheKey $CacheKey) 设置节点缓存键配置
 * @method ResponseHeaderCache getResponseHeaderCache() 获取头部缓存配置
 * @method void setResponseHeaderCache(ResponseHeaderCache $ResponseHeaderCache) 设置头部缓存配置
 * @method VideoSeek getVideoSeek() 获取视频拖拽配置
 * @method void setVideoSeek(VideoSeek $VideoSeek) 设置视频拖拽配置
 * @method Cache getCache() 获取缓存过期时间配置
 * @method void setCache(Cache $Cache) 设置缓存过期时间配置
 * @method OriginPullOptimization getOriginPullOptimization() 获取跨国链路优化配置
 * @method void setOriginPullOptimization(OriginPullOptimization $OriginPullOptimization) 设置跨国链路优化配置
 * @method Https getHttps() 获取Https 加速配置
 * @method void setHttps(Https $Https) 设置Https 加速配置
 * @method Authentication getAuthentication() 获取时间戳防盗链配置
 * @method void setAuthentication(Authentication $Authentication) 设置时间戳防盗链配置
 * @method Seo getSeo() 获取SEO 优化配置
 * @method void setSeo(Seo $Seo) 设置SEO 优化配置
 * @method ForceRedirect getForceRedirect() 获取访问协议强制跳转配置
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) 设置访问协议强制跳转配置
 * @method Referer getReferer() 获取Referer 防盗链配置
 * @method void setReferer(Referer $Referer) 设置Referer 防盗链配置
 * @method MaxAge getMaxAge() 获取浏览器缓存配置（功能灰度中，尚未全量）
 * @method void setMaxAge(MaxAge $MaxAge) 设置浏览器缓存配置（功能灰度中，尚未全量）
 * @method string getServiceType() 获取域名业务类型
web：静态加速
download：下载加速
media：流媒体点播加速
 * @method void setServiceType(string $ServiceType) 设置域名业务类型
web：静态加速
download：下载加速
media：流媒体点播加速
 * @method SpecificConfig getSpecificConfig() 获取地域属性特殊配置
适用于域名境内加速、境外加速配置不一致场景
 * @method void setSpecificConfig(SpecificConfig $SpecificConfig) 设置地域属性特殊配置
适用于域名境内加速、境外加速配置不一致场景
 * @method string getArea() 获取域名加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
 * @method void setArea(string $Area) 设置域名加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
 * @method OriginPullTimeout getOriginPullTimeout() 获取回源超时配置
 * @method void setOriginPullTimeout(OriginPullTimeout $OriginPullTimeout) 设置回源超时配置
 * @method AwsPrivateAccess getAwsPrivateAccess() 获取回源S3私有鉴权
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) 设置回源S3私有鉴权
 * @method UserAgentFilter getUserAgentFilter() 获取UA黑白名单配置
 * @method void setUserAgentFilter(UserAgentFilter $UserAgentFilter) 设置UA黑白名单配置
 * @method AccessControl getAccessControl() 获取访问控制
 * @method void setAccessControl(AccessControl $AccessControl) 设置访问控制
 * @method UrlRedirect getUrlRedirect() 获取URL重定向配置
 * @method void setUrlRedirect(UrlRedirect $UrlRedirect) 设置URL重定向配置
 * @method array getAccessPort() 获取访问端口配置
 * @method void setAccessPort(array $AccessPort) 设置访问端口配置
 * @method AdvancedAuthentication getAdvancedAuthentication() 获取时间戳防盗链高级版配置，白名单功能
 * @method void setAdvancedAuthentication(AdvancedAuthentication $AdvancedAuthentication) 设置时间戳防盗链高级版配置，白名单功能
 * @method OriginAuthentication getOriginAuthentication() 获取回源鉴权高级版配置，白名单功能
 * @method void setOriginAuthentication(OriginAuthentication $OriginAuthentication) 设置回源鉴权高级版配置，白名单功能
 * @method Ipv6Access getIpv6Access() 获取Ipv6 访问配置
 * @method void setIpv6Access(Ipv6Access $Ipv6Access) 设置Ipv6 访问配置
 * @method OfflineCache getOfflineCache() 获取离线缓存
 * @method void setOfflineCache(OfflineCache $OfflineCache) 设置离线缓存
 * @method OriginCombine getOriginCombine() 获取合并回源
 * @method void setOriginCombine(OriginCombine $OriginCombine) 设置合并回源
 * @method Quic getQuic() 获取QUIC正在内测中，请先提交内测申请，详情请前往QUIC产品文档。
 * @method void setQuic(Quic $Quic) 设置QUIC正在内测中，请先提交内测申请，详情请前往QUIC产品文档。
 */
class UpdateDomainConfigRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 项目 ID
     */
    public $ProjectId;

    /**
     * @var Origin 源站配置
     */
    public $Origin;

    /**
     * @var IpFilter IP 黑白名单配置
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP 限频配置
     */
    public $IpFreqLimit;

    /**
     * @var StatusCodeCache 状态码缓存配置
     */
    public $StatusCodeCache;

    /**
     * @var Compression 智能压缩配置
     */
    public $Compression;

    /**
     * @var BandwidthAlert 带宽封顶配置
     */
    public $BandwidthAlert;

    /**
     * @var RangeOriginPull Range 回源配置
     */
    public $RangeOriginPull;

    /**
     * @var FollowRedirect 301/302 回源跟随配置
     */
    public $FollowRedirect;

    /**
     * @var ErrorPage 错误码重定向配置（功能灰度中，尚未全量）
     */
    public $ErrorPage;

    /**
     * @var RequestHeader 请求头部配置
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader 响应头部配置
     */
    public $ResponseHeader;

    /**
     * @var DownstreamCapping 下载速度配置
     */
    public $DownstreamCapping;

    /**
     * @var CacheKey 节点缓存键配置
     */
    public $CacheKey;

    /**
     * @var ResponseHeaderCache 头部缓存配置
     */
    public $ResponseHeaderCache;

    /**
     * @var VideoSeek 视频拖拽配置
     */
    public $VideoSeek;

    /**
     * @var Cache 缓存过期时间配置
     */
    public $Cache;

    /**
     * @var OriginPullOptimization 跨国链路优化配置
     */
    public $OriginPullOptimization;

    /**
     * @var Https Https 加速配置
     */
    public $Https;

    /**
     * @var Authentication 时间戳防盗链配置
     */
    public $Authentication;

    /**
     * @var Seo SEO 优化配置
     */
    public $Seo;

    /**
     * @var ForceRedirect 访问协议强制跳转配置
     */
    public $ForceRedirect;

    /**
     * @var Referer Referer 防盗链配置
     */
    public $Referer;

    /**
     * @var MaxAge 浏览器缓存配置（功能灰度中，尚未全量）
     */
    public $MaxAge;

    /**
     * @var string 域名业务类型
web：静态加速
download：下载加速
media：流媒体点播加速
     */
    public $ServiceType;

    /**
     * @var SpecificConfig 地域属性特殊配置
适用于域名境内加速、境外加速配置不一致场景
     */
    public $SpecificConfig;

    /**
     * @var string 域名加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
     */
    public $Area;

    /**
     * @var OriginPullTimeout 回源超时配置
     */
    public $OriginPullTimeout;

    /**
     * @var AwsPrivateAccess 回源S3私有鉴权
     */
    public $AwsPrivateAccess;

    /**
     * @var UserAgentFilter UA黑白名单配置
     */
    public $UserAgentFilter;

    /**
     * @var AccessControl 访问控制
     */
    public $AccessControl;

    /**
     * @var UrlRedirect URL重定向配置
     */
    public $UrlRedirect;

    /**
     * @var array 访问端口配置
     */
    public $AccessPort;

    /**
     * @var AdvancedAuthentication 时间戳防盗链高级版配置，白名单功能
     */
    public $AdvancedAuthentication;

    /**
     * @var OriginAuthentication 回源鉴权高级版配置，白名单功能
     */
    public $OriginAuthentication;

    /**
     * @var Ipv6Access Ipv6 访问配置
     */
    public $Ipv6Access;

    /**
     * @var OfflineCache 离线缓存
     */
    public $OfflineCache;

    /**
     * @var OriginCombine 合并回源
     */
    public $OriginCombine;

    /**
     * @var Quic QUIC正在内测中，请先提交内测申请，详情请前往QUIC产品文档。
     */
    public $Quic;

    /**
     * @param string $Domain 域名
     * @param integer $ProjectId 项目 ID
     * @param Origin $Origin 源站配置
     * @param IpFilter $IpFilter IP 黑白名单配置
     * @param IpFreqLimit $IpFreqLimit IP 限频配置
     * @param StatusCodeCache $StatusCodeCache 状态码缓存配置
     * @param Compression $Compression 智能压缩配置
     * @param BandwidthAlert $BandwidthAlert 带宽封顶配置
     * @param RangeOriginPull $RangeOriginPull Range 回源配置
     * @param FollowRedirect $FollowRedirect 301/302 回源跟随配置
     * @param ErrorPage $ErrorPage 错误码重定向配置（功能灰度中，尚未全量）
     * @param RequestHeader $RequestHeader 请求头部配置
     * @param ResponseHeader $ResponseHeader 响应头部配置
     * @param DownstreamCapping $DownstreamCapping 下载速度配置
     * @param CacheKey $CacheKey 节点缓存键配置
     * @param ResponseHeaderCache $ResponseHeaderCache 头部缓存配置
     * @param VideoSeek $VideoSeek 视频拖拽配置
     * @param Cache $Cache 缓存过期时间配置
     * @param OriginPullOptimization $OriginPullOptimization 跨国链路优化配置
     * @param Https $Https Https 加速配置
     * @param Authentication $Authentication 时间戳防盗链配置
     * @param Seo $Seo SEO 优化配置
     * @param ForceRedirect $ForceRedirect 访问协议强制跳转配置
     * @param Referer $Referer Referer 防盗链配置
     * @param MaxAge $MaxAge 浏览器缓存配置（功能灰度中，尚未全量）
     * @param string $ServiceType 域名业务类型
web：静态加速
download：下载加速
media：流媒体点播加速
     * @param SpecificConfig $SpecificConfig 地域属性特殊配置
适用于域名境内加速、境外加速配置不一致场景
     * @param string $Area 域名加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
     * @param OriginPullTimeout $OriginPullTimeout 回源超时配置
     * @param AwsPrivateAccess $AwsPrivateAccess 回源S3私有鉴权
     * @param UserAgentFilter $UserAgentFilter UA黑白名单配置
     * @param AccessControl $AccessControl 访问控制
     * @param UrlRedirect $UrlRedirect URL重定向配置
     * @param array $AccessPort 访问端口配置
     * @param AdvancedAuthentication $AdvancedAuthentication 时间戳防盗链高级版配置，白名单功能
     * @param OriginAuthentication $OriginAuthentication 回源鉴权高级版配置，白名单功能
     * @param Ipv6Access $Ipv6Access Ipv6 访问配置
     * @param OfflineCache $OfflineCache 离线缓存
     * @param OriginCombine $OriginCombine 合并回源
     * @param Quic $Quic QUIC正在内测中，请先提交内测申请，详情请前往QUIC产品文档。
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("IpFilter",$param) and $param["IpFilter"] !== null) {
            $this->IpFilter = new IpFilter();
            $this->IpFilter->deserialize($param["IpFilter"]);
        }

        if (array_key_exists("IpFreqLimit",$param) and $param["IpFreqLimit"] !== null) {
            $this->IpFreqLimit = new IpFreqLimit();
            $this->IpFreqLimit->deserialize($param["IpFreqLimit"]);
        }

        if (array_key_exists("StatusCodeCache",$param) and $param["StatusCodeCache"] !== null) {
            $this->StatusCodeCache = new StatusCodeCache();
            $this->StatusCodeCache->deserialize($param["StatusCodeCache"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new Compression();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("BandwidthAlert",$param) and $param["BandwidthAlert"] !== null) {
            $this->BandwidthAlert = new BandwidthAlert();
            $this->BandwidthAlert->deserialize($param["BandwidthAlert"]);
        }

        if (array_key_exists("RangeOriginPull",$param) and $param["RangeOriginPull"] !== null) {
            $this->RangeOriginPull = new RangeOriginPull();
            $this->RangeOriginPull->deserialize($param["RangeOriginPull"]);
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = new FollowRedirect();
            $this->FollowRedirect->deserialize($param["FollowRedirect"]);
        }

        if (array_key_exists("ErrorPage",$param) and $param["ErrorPage"] !== null) {
            $this->ErrorPage = new ErrorPage();
            $this->ErrorPage->deserialize($param["ErrorPage"]);
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = new RequestHeader();
            $this->RequestHeader->deserialize($param["RequestHeader"]);
        }

        if (array_key_exists("ResponseHeader",$param) and $param["ResponseHeader"] !== null) {
            $this->ResponseHeader = new ResponseHeader();
            $this->ResponseHeader->deserialize($param["ResponseHeader"]);
        }

        if (array_key_exists("DownstreamCapping",$param) and $param["DownstreamCapping"] !== null) {
            $this->DownstreamCapping = new DownstreamCapping();
            $this->DownstreamCapping->deserialize($param["DownstreamCapping"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("ResponseHeaderCache",$param) and $param["ResponseHeaderCache"] !== null) {
            $this->ResponseHeaderCache = new ResponseHeaderCache();
            $this->ResponseHeaderCache->deserialize($param["ResponseHeaderCache"]);
        }

        if (array_key_exists("VideoSeek",$param) and $param["VideoSeek"] !== null) {
            $this->VideoSeek = new VideoSeek();
            $this->VideoSeek->deserialize($param["VideoSeek"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("OriginPullOptimization",$param) and $param["OriginPullOptimization"] !== null) {
            $this->OriginPullOptimization = new OriginPullOptimization();
            $this->OriginPullOptimization->deserialize($param["OriginPullOptimization"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = new Authentication();
            $this->Authentication->deserialize($param["Authentication"]);
        }

        if (array_key_exists("Seo",$param) and $param["Seo"] !== null) {
            $this->Seo = new Seo();
            $this->Seo->deserialize($param["Seo"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = new Referer();
            $this->Referer->deserialize($param["Referer"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("SpecificConfig",$param) and $param["SpecificConfig"] !== null) {
            $this->SpecificConfig = new SpecificConfig();
            $this->SpecificConfig->deserialize($param["SpecificConfig"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("OriginPullTimeout",$param) and $param["OriginPullTimeout"] !== null) {
            $this->OriginPullTimeout = new OriginPullTimeout();
            $this->OriginPullTimeout->deserialize($param["OriginPullTimeout"]);
        }

        if (array_key_exists("AwsPrivateAccess",$param) and $param["AwsPrivateAccess"] !== null) {
            $this->AwsPrivateAccess = new AwsPrivateAccess();
            $this->AwsPrivateAccess->deserialize($param["AwsPrivateAccess"]);
        }

        if (array_key_exists("UserAgentFilter",$param) and $param["UserAgentFilter"] !== null) {
            $this->UserAgentFilter = new UserAgentFilter();
            $this->UserAgentFilter->deserialize($param["UserAgentFilter"]);
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new AccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("UrlRedirect",$param) and $param["UrlRedirect"] !== null) {
            $this->UrlRedirect = new UrlRedirect();
            $this->UrlRedirect->deserialize($param["UrlRedirect"]);
        }

        if (array_key_exists("AccessPort",$param) and $param["AccessPort"] !== null) {
            $this->AccessPort = $param["AccessPort"];
        }

        if (array_key_exists("AdvancedAuthentication",$param) and $param["AdvancedAuthentication"] !== null) {
            $this->AdvancedAuthentication = new AdvancedAuthentication();
            $this->AdvancedAuthentication->deserialize($param["AdvancedAuthentication"]);
        }

        if (array_key_exists("OriginAuthentication",$param) and $param["OriginAuthentication"] !== null) {
            $this->OriginAuthentication = new OriginAuthentication();
            $this->OriginAuthentication->deserialize($param["OriginAuthentication"]);
        }

        if (array_key_exists("Ipv6Access",$param) and $param["Ipv6Access"] !== null) {
            $this->Ipv6Access = new Ipv6Access();
            $this->Ipv6Access->deserialize($param["Ipv6Access"]);
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCache();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
        }

        if (array_key_exists("OriginCombine",$param) and $param["OriginCombine"] !== null) {
            $this->OriginCombine = new OriginCombine();
            $this->OriginCombine->deserialize($param["OriginCombine"]);
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = new Quic();
            $this->Quic->deserialize($param["Quic"]);
        }
    }
}
