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
 * 加速域名全量配置信息
 *
 * @method string getResourceId() 获取域名 ID
 * @method void setResourceId(string $ResourceId) 设置域名 ID
 * @method integer getAppId() 获取腾讯云账号ID
 * @method void setAppId(integer $AppId) 设置腾讯云账号ID
 * @method string getDomain() 获取加速域名
 * @method void setDomain(string $Domain) 设置加速域名
 * @method string getCname() 获取域名对应的 CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置域名对应的 CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取加速服务状态
rejected：域名审核未通过，域名备案过期/被注销导致
processing：部署中
online：已启动
offline：已关闭
 * @method void setStatus(string $Status) 设置加速服务状态
rejected：域名审核未通过，域名备案过期/被注销导致
processing：部署中
online：已启动
offline：已关闭
 * @method integer getProjectId() 获取项目 ID，可前往腾讯云项目管理页面查看
 * @method void setProjectId(integer $ProjectId) 设置项目 ID，可前往腾讯云项目管理页面查看
 * @method string getServiceType() 获取域名业务类型
web：静态加速
download：下载加速
media：流媒体点播加速
 * @method void setServiceType(string $ServiceType) 设置域名业务类型
web：静态加速
download：下载加速
media：流媒体点播加速
 * @method string getCreateTime() 获取域名创建时间
 * @method void setCreateTime(string $CreateTime) 设置域名创建时间
 * @method string getUpdateTime() 获取域名更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置域名更新时间
 * @method Origin getOrigin() 获取源站配置
 * @method void setOrigin(Origin $Origin) 设置源站配置
 * @method IpFilter getIpFilter() 获取IP 黑白名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpFilter(IpFilter $IpFilter) 设置IP 黑白名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpFreqLimit getIpFreqLimit() 获取IP 访问限频配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) 设置IP 访问限频配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatusCodeCache getStatusCodeCache() 获取状态码缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCodeCache(StatusCodeCache $StatusCodeCache) 设置状态码缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method Compression getCompression() 获取智能压缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompression(Compression $Compression) 设置智能压缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method BandwidthAlert getBandwidthAlert() 获取带宽封顶配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthAlert(BandwidthAlert $BandwidthAlert) 设置带宽封顶配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method RangeOriginPull getRangeOriginPull() 获取Range 回源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeOriginPull(RangeOriginPull $RangeOriginPull) 设置Range 回源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method FollowRedirect getFollowRedirect() 获取301/302 回源自动跟随配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) 设置301/302 回源自动跟随配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorPage getErrorPage() 获取自定义错误页面配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorPage(ErrorPage $ErrorPage) 设置自定义错误页面配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
 * @method RequestHeader getRequestHeader() 获取自定义请求头部配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestHeader(RequestHeader $RequestHeader) 设置自定义请求头部配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseHeader getResponseHeader() 获取自定义响应头部配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) 设置自定义响应头部配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method DownstreamCapping getDownstreamCapping() 获取单链接下行限速配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownstreamCapping(DownstreamCapping $DownstreamCapping) 设置单链接下行限速配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheKey getCacheKey() 获取带参/不带参缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheKey(CacheKey $CacheKey) 设置带参/不带参缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseHeaderCache getResponseHeaderCache() 获取源站头部缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseHeaderCache(ResponseHeaderCache $ResponseHeaderCache) 设置源站头部缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoSeek getVideoSeek() 获取视频拖拽配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoSeek(VideoSeek $VideoSeek) 设置视频拖拽配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method Cache getCache() 获取节点缓存过期规则配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCache(Cache $Cache) 设置节点缓存过期规则配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginPullOptimization getOriginPullOptimization() 获取跨国链路优化配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginPullOptimization(OriginPullOptimization $OriginPullOptimization) 设置跨国链路优化配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
 * @method Https getHttps() 获取Https 加速相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttps(Https $Https) 设置Https 加速相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method Authentication getAuthentication() 获取时间戳防盗链配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthentication(Authentication $Authentication) 设置时间戳防盗链配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method Seo getSeo() 获取SEO 优化配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeo(Seo $Seo) 设置SEO 优化配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisable() 获取域名封禁状态
normal：正常状态
overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务
malicious：域名出现恶意行为，强制关闭加速服务
ddos：域名被大规模 DDoS 攻击，关闭加速服务
idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务
unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务
capping：触发配置的带宽阈值上限
readonly：域名存在特殊配置，被锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisable(string $Disable) 设置域名封禁状态
normal：正常状态
overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务
malicious：域名出现恶意行为，强制关闭加速服务
ddos：域名被大规模 DDoS 攻击，关闭加速服务
idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务
unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务
capping：触发配置的带宽阈值上限
readonly：域名存在特殊配置，被锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method ForceRedirect getForceRedirect() 获取访问协议强制跳转配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) 设置访问协议强制跳转配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method Referer getReferer() 获取Referer 防盗链配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferer(Referer $Referer) 设置Referer 防盗链配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaxAge getMaxAge() 获取浏览器缓存过期规则配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAge(MaxAge $MaxAge) 设置浏览器缓存过期规则配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ipv6 getIpv6() 获取Ipv6 回源配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6(Ipv6 $Ipv6) 设置Ipv6 回源配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
 * @method Compatibility getCompatibility() 获取是否兼容旧版本配置（内部兼容性字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompatibility(Compatibility $Compatibility) 设置是否兼容旧版本配置（内部兼容性字段）
注意：此字段可能返回 null，表示取不到有效值。
 * @method SpecificConfig getSpecificConfig() 获取区域特殊配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecificConfig(SpecificConfig $SpecificConfig) 设置区域特殊配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReadonly() 获取域名锁定状态
normal：未锁定
mainland：中国境内锁定
overseas：中国境外锁定
global：全球锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadonly(string $Readonly) 设置域名锁定状态
normal：未锁定
mainland：中国境内锁定
overseas：中国境外锁定
global：全球锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginPullTimeout getOriginPullTimeout() 获取回源超时配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginPullTimeout(OriginPullTimeout $OriginPullTimeout) 设置回源超时配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AwsPrivateAccess getAwsPrivateAccess() 获取回源S3鉴权配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) 设置回源S3鉴权配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method SecurityConfig getSecurityConfig() 获取Scdn配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityConfig(SecurityConfig $SecurityConfig) 设置Scdn配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageOptimization getImageOptimization() 获取ImageOptimization配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageOptimization(ImageOptimization $ImageOptimization) 设置ImageOptimization配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserAgentFilter getUserAgentFilter() 获取UA黑白名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAgentFilter(UserAgentFilter $UserAgentFilter) 设置UA黑白名单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccessControl getAccessControl() 获取访问控制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessControl(AccessControl $AccessControl) 设置访问控制
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdvance() 获取是否支持高级配置项
on：支持
off：不支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvance(string $Advance) 设置是否支持高级配置项
on：支持
off：不支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method UrlRedirect getUrlRedirect() 获取URL重定向配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrlRedirect(UrlRedirect $UrlRedirect) 设置URL重定向配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAccessPort() 获取访问端口配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessPort(array $AccessPort) 设置访问端口配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTag() 获取标签配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置标签配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedAuthentication getAdvancedAuthentication() 获取时间戳防盗链高级配置，白名单功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedAuthentication(AdvancedAuthentication $AdvancedAuthentication) 设置时间戳防盗链高级配置，白名单功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginAuthentication getOriginAuthentication() 获取回源鉴权高级配置，白名单功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginAuthentication(OriginAuthentication $OriginAuthentication) 设置回源鉴权高级配置，白名单功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ipv6Access getIpv6Access() 获取Ipv6访问配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6Access(Ipv6Access $Ipv6Access) 设置Ipv6访问配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdvanceSet() 获取高级配置集合。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanceSet(array $AdvanceSet) 设置高级配置集合。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OfflineCache getOfflineCache() 获取离线缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineCache(OfflineCache $OfflineCache) 设置离线缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginCombine getOriginCombine() 获取合并回源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginCombine(OriginCombine $OriginCombine) 设置合并回源
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostSize getPostMaxSize() 获取POST上传配置项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostMaxSize(PostSize $PostMaxSize) 设置POST上传配置项
注意：此字段可能返回 null，表示取不到有效值。
 * @method Quic getQuic() 获取Quic配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuic(Quic $Quic) 设置Quic配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetailDomain extends AbstractModel
{
    /**
     * @var string 域名 ID
     */
    public $ResourceId;

    /**
     * @var integer 腾讯云账号ID
     */
    public $AppId;

    /**
     * @var string 加速域名
     */
    public $Domain;

    /**
     * @var string 域名对应的 CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @var string 加速服务状态
rejected：域名审核未通过，域名备案过期/被注销导致
processing：部署中
online：已启动
offline：已关闭
     */
    public $Status;

    /**
     * @var integer 项目 ID，可前往腾讯云项目管理页面查看
     */
    public $ProjectId;

    /**
     * @var string 域名业务类型
web：静态加速
download：下载加速
media：流媒体点播加速
     */
    public $ServiceType;

    /**
     * @var string 域名创建时间
     */
    public $CreateTime;

    /**
     * @var string 域名更新时间
     */
    public $UpdateTime;

    /**
     * @var Origin 源站配置
     */
    public $Origin;

    /**
     * @var IpFilter IP 黑白名单配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP 访问限频配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpFreqLimit;

    /**
     * @var StatusCodeCache 状态码缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCodeCache;

    /**
     * @var Compression 智能压缩配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compression;

    /**
     * @var BandwidthAlert 带宽封顶配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthAlert;

    /**
     * @var RangeOriginPull Range 回源配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeOriginPull;

    /**
     * @var FollowRedirect 301/302 回源自动跟随配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowRedirect;

    /**
     * @var ErrorPage 自定义错误页面配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorPage;

    /**
     * @var RequestHeader 自定义请求头部配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader 自定义响应头部配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseHeader;

    /**
     * @var DownstreamCapping 单链接下行限速配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownstreamCapping;

    /**
     * @var CacheKey 带参/不带参缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheKey;

    /**
     * @var ResponseHeaderCache 源站头部缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseHeaderCache;

    /**
     * @var VideoSeek 视频拖拽配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoSeek;

    /**
     * @var Cache 节点缓存过期规则配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cache;

    /**
     * @var OriginPullOptimization 跨国链路优化配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginPullOptimization;

    /**
     * @var Https Https 加速相关配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Https;

    /**
     * @var Authentication 时间戳防盗链配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Authentication;

    /**
     * @var Seo SEO 优化配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seo;

    /**
     * @var string 域名封禁状态
normal：正常状态
overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务
malicious：域名出现恶意行为，强制关闭加速服务
ddos：域名被大规模 DDoS 攻击，关闭加速服务
idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务
unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务
capping：触发配置的带宽阈值上限
readonly：域名存在特殊配置，被锁定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disable;

    /**
     * @var ForceRedirect 访问协议强制跳转配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceRedirect;

    /**
     * @var Referer Referer 防盗链配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Referer;

    /**
     * @var MaxAge 浏览器缓存过期规则配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAge;

    /**
     * @var Ipv6 Ipv6 回源配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6;

    /**
     * @var Compatibility 是否兼容旧版本配置（内部兼容性字段）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compatibility;

    /**
     * @var SpecificConfig 区域特殊配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecificConfig;

    /**
     * @var string 加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @var string 域名锁定状态
normal：未锁定
mainland：中国境内锁定
overseas：中国境外锁定
global：全球锁定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Readonly;

    /**
     * @var OriginPullTimeout 回源超时配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginPullTimeout;

    /**
     * @var AwsPrivateAccess 回源S3鉴权配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AwsPrivateAccess;

    /**
     * @var SecurityConfig Scdn配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityConfig;

    /**
     * @var ImageOptimization ImageOptimization配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageOptimization;

    /**
     * @var UserAgentFilter UA黑白名单配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAgentFilter;

    /**
     * @var AccessControl 访问控制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessControl;

    /**
     * @var string 是否支持高级配置项
on：支持
off：不支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Advance;

    /**
     * @var UrlRedirect URL重定向配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrlRedirect;

    /**
     * @var array 访问端口配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessPort;

    /**
     * @var array 标签配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var AdvancedAuthentication 时间戳防盗链高级配置，白名单功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedAuthentication;

    /**
     * @var OriginAuthentication 回源鉴权高级配置，白名单功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginAuthentication;

    /**
     * @var Ipv6Access Ipv6访问配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6Access;

    /**
     * @var array 高级配置集合。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvanceSet;

    /**
     * @var OfflineCache 离线缓存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineCache;

    /**
     * @var OriginCombine 合并回源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginCombine;

    /**
     * @var PostSize POST上传配置项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostMaxSize;

    /**
     * @var Quic Quic配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quic;

    /**
     * @param string $ResourceId 域名 ID
     * @param integer $AppId 腾讯云账号ID
     * @param string $Domain 加速域名
     * @param string $Cname 域名对应的 CNAME 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 加速服务状态
rejected：域名审核未通过，域名备案过期/被注销导致
processing：部署中
online：已启动
offline：已关闭
     * @param integer $ProjectId 项目 ID，可前往腾讯云项目管理页面查看
     * @param string $ServiceType 域名业务类型
web：静态加速
download：下载加速
media：流媒体点播加速
     * @param string $CreateTime 域名创建时间
     * @param string $UpdateTime 域名更新时间
     * @param Origin $Origin 源站配置
     * @param IpFilter $IpFilter IP 黑白名单配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpFreqLimit $IpFreqLimit IP 访问限频配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatusCodeCache $StatusCodeCache 状态码缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param Compression $Compression 智能压缩配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param BandwidthAlert $BandwidthAlert 带宽封顶配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param RangeOriginPull $RangeOriginPull Range 回源配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param FollowRedirect $FollowRedirect 301/302 回源自动跟随配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorPage $ErrorPage 自定义错误页面配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
     * @param RequestHeader $RequestHeader 自定义请求头部配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseHeader $ResponseHeader 自定义响应头部配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param DownstreamCapping $DownstreamCapping 单链接下行限速配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheKey $CacheKey 带参/不带参缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseHeaderCache $ResponseHeaderCache 源站头部缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoSeek $VideoSeek 视频拖拽配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param Cache $Cache 节点缓存过期规则配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginPullOptimization $OriginPullOptimization 跨国链路优化配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
     * @param Https $Https Https 加速相关配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param Authentication $Authentication 时间戳防盗链配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param Seo $Seo SEO 优化配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Disable 域名封禁状态
normal：正常状态
overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务
malicious：域名出现恶意行为，强制关闭加速服务
ddos：域名被大规模 DDoS 攻击，关闭加速服务
idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务
unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务
capping：触发配置的带宽阈值上限
readonly：域名存在特殊配置，被锁定
注意：此字段可能返回 null，表示取不到有效值。
     * @param ForceRedirect $ForceRedirect 访问协议强制跳转配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param Referer $Referer Referer 防盗链配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaxAge $MaxAge 浏览器缓存过期规则配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ipv6 $Ipv6 Ipv6 回源配置（功能灰度中，敬请期待）
注意：此字段可能返回 null，表示取不到有效值。
     * @param Compatibility $Compatibility 是否兼容旧版本配置（内部兼容性字段）
注意：此字段可能返回 null，表示取不到有效值。
     * @param SpecificConfig $SpecificConfig 区域特殊配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Readonly 域名锁定状态
normal：未锁定
mainland：中国境内锁定
overseas：中国境外锁定
global：全球锁定
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginPullTimeout $OriginPullTimeout 回源超时配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AwsPrivateAccess $AwsPrivateAccess 回源S3鉴权配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param SecurityConfig $SecurityConfig Scdn配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageOptimization $ImageOptimization ImageOptimization配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserAgentFilter $UserAgentFilter UA黑白名单配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccessControl $AccessControl 访问控制
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Advance 是否支持高级配置项
on：支持
off：不支持
注意：此字段可能返回 null，表示取不到有效值。
     * @param UrlRedirect $UrlRedirect URL重定向配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AccessPort 访问端口配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tag 标签配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedAuthentication $AdvancedAuthentication 时间戳防盗链高级配置，白名单功能
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginAuthentication $OriginAuthentication 回源鉴权高级配置，白名单功能
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ipv6Access $Ipv6Access Ipv6访问配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AdvanceSet 高级配置集合。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OfflineCache $OfflineCache 离线缓存
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginCombine $OriginCombine 合并回源
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostSize $PostMaxSize POST上传配置项
注意：此字段可能返回 null，表示取不到有效值。
     * @param Quic $Quic Quic配置
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
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

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("Compatibility",$param) and $param["Compatibility"] !== null) {
            $this->Compatibility = new Compatibility();
            $this->Compatibility->deserialize($param["Compatibility"]);
        }

        if (array_key_exists("SpecificConfig",$param) and $param["SpecificConfig"] !== null) {
            $this->SpecificConfig = new SpecificConfig();
            $this->SpecificConfig->deserialize($param["SpecificConfig"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Readonly",$param) and $param["Readonly"] !== null) {
            $this->Readonly = $param["Readonly"];
        }

        if (array_key_exists("OriginPullTimeout",$param) and $param["OriginPullTimeout"] !== null) {
            $this->OriginPullTimeout = new OriginPullTimeout();
            $this->OriginPullTimeout->deserialize($param["OriginPullTimeout"]);
        }

        if (array_key_exists("AwsPrivateAccess",$param) and $param["AwsPrivateAccess"] !== null) {
            $this->AwsPrivateAccess = new AwsPrivateAccess();
            $this->AwsPrivateAccess->deserialize($param["AwsPrivateAccess"]);
        }

        if (array_key_exists("SecurityConfig",$param) and $param["SecurityConfig"] !== null) {
            $this->SecurityConfig = new SecurityConfig();
            $this->SecurityConfig->deserialize($param["SecurityConfig"]);
        }

        if (array_key_exists("ImageOptimization",$param) and $param["ImageOptimization"] !== null) {
            $this->ImageOptimization = new ImageOptimization();
            $this->ImageOptimization->deserialize($param["ImageOptimization"]);
        }

        if (array_key_exists("UserAgentFilter",$param) and $param["UserAgentFilter"] !== null) {
            $this->UserAgentFilter = new UserAgentFilter();
            $this->UserAgentFilter->deserialize($param["UserAgentFilter"]);
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new AccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("Advance",$param) and $param["Advance"] !== null) {
            $this->Advance = $param["Advance"];
        }

        if (array_key_exists("UrlRedirect",$param) and $param["UrlRedirect"] !== null) {
            $this->UrlRedirect = new UrlRedirect();
            $this->UrlRedirect->deserialize($param["UrlRedirect"]);
        }

        if (array_key_exists("AccessPort",$param) and $param["AccessPort"] !== null) {
            $this->AccessPort = $param["AccessPort"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
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

        if (array_key_exists("AdvanceSet",$param) and $param["AdvanceSet"] !== null) {
            $this->AdvanceSet = [];
            foreach ($param["AdvanceSet"] as $key => $value){
                $obj = new AdvanceConfig();
                $obj->deserialize($value);
                array_push($this->AdvanceSet, $obj);
            }
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCache();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
        }

        if (array_key_exists("OriginCombine",$param) and $param["OriginCombine"] !== null) {
            $this->OriginCombine = new OriginCombine();
            $this->OriginCombine->deserialize($param["OriginCombine"]);
        }

        if (array_key_exists("PostMaxSize",$param) and $param["PostMaxSize"] !== null) {
            $this->PostMaxSize = new PostSize();
            $this->PostMaxSize->deserialize($param["PostMaxSize"]);
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = new Quic();
            $this->Quic->deserialize($param["Quic"]);
        }
    }
}
