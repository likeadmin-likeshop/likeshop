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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddEcdnDomain请求参数结构体
 *
 * @method string getDomain() 获取域名。
 * @method void setDomain(string $Domain) 设置域名。
 * @method Origin getOrigin() 获取源站配置。
 * @method void setOrigin(Origin $Origin) 设置源站配置。
 * @method string getArea() 获取域名加速区域，mainland，overseas或global，分别表示中国境内加速，海外加速或全球加速。
 * @method void setArea(string $Area) 设置域名加速区域，mainland，overseas或global，分别表示中国境内加速，海外加速或全球加速。
 * @method integer getProjectId() 获取项目id，默认0。
 * @method void setProjectId(integer $ProjectId) 设置项目id，默认0。
 * @method IpFilter getIpFilter() 获取IP黑白名单配置。
 * @method void setIpFilter(IpFilter $IpFilter) 设置IP黑白名单配置。
 * @method IpFreqLimit getIpFreqLimit() 获取IP限频配置。
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) 设置IP限频配置。
 * @method ResponseHeader getResponseHeader() 获取源站响应头部配置。
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) 设置源站响应头部配置。
 * @method CacheKey getCacheKey() 获取节点缓存配置。
 * @method void setCacheKey(CacheKey $CacheKey) 设置节点缓存配置。
 * @method Cache getCache() 获取缓存规则配置。
 * @method void setCache(Cache $Cache) 设置缓存规则配置。
 * @method Https getHttps() 获取Https配置。
 * @method void setHttps(Https $Https) 设置Https配置。
 * @method ForceRedirect getForceRedirect() 获取访问协议强制跳转配置。
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) 设置访问协议强制跳转配置。
 * @method array getTag() 获取域名绑定的标签
 * @method void setTag(array $Tag) 设置域名绑定的标签
 * @method WebSocket getWebSocket() 获取WebSocket配置
 * @method void setWebSocket(WebSocket $WebSocket) 设置WebSocket配置
 */
class AddEcdnDomainRequest extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $Domain;

    /**
     * @var Origin 源站配置。
     */
    public $Origin;

    /**
     * @var string 域名加速区域，mainland，overseas或global，分别表示中国境内加速，海外加速或全球加速。
     */
    public $Area;

    /**
     * @var integer 项目id，默认0。
     */
    public $ProjectId;

    /**
     * @var IpFilter IP黑白名单配置。
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP限频配置。
     */
    public $IpFreqLimit;

    /**
     * @var ResponseHeader 源站响应头部配置。
     */
    public $ResponseHeader;

    /**
     * @var CacheKey 节点缓存配置。
     */
    public $CacheKey;

    /**
     * @var Cache 缓存规则配置。
     */
    public $Cache;

    /**
     * @var Https Https配置。
     */
    public $Https;

    /**
     * @var ForceRedirect 访问协议强制跳转配置。
     */
    public $ForceRedirect;

    /**
     * @var array 域名绑定的标签
     */
    public $Tag;

    /**
     * @var WebSocket WebSocket配置
     */
    public $WebSocket;

    /**
     * @param string $Domain 域名。
     * @param Origin $Origin 源站配置。
     * @param string $Area 域名加速区域，mainland，overseas或global，分别表示中国境内加速，海外加速或全球加速。
     * @param integer $ProjectId 项目id，默认0。
     * @param IpFilter $IpFilter IP黑白名单配置。
     * @param IpFreqLimit $IpFreqLimit IP限频配置。
     * @param ResponseHeader $ResponseHeader 源站响应头部配置。
     * @param CacheKey $CacheKey 节点缓存配置。
     * @param Cache $Cache 缓存规则配置。
     * @param Https $Https Https配置。
     * @param ForceRedirect $ForceRedirect 访问协议强制跳转配置。
     * @param array $Tag 域名绑定的标签
     * @param WebSocket $WebSocket WebSocket配置
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

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IpFilter",$param) and $param["IpFilter"] !== null) {
            $this->IpFilter = new IpFilter();
            $this->IpFilter->deserialize($param["IpFilter"]);
        }

        if (array_key_exists("IpFreqLimit",$param) and $param["IpFreqLimit"] !== null) {
            $this->IpFreqLimit = new IpFreqLimit();
            $this->IpFreqLimit->deserialize($param["IpFreqLimit"]);
        }

        if (array_key_exists("ResponseHeader",$param) and $param["ResponseHeader"] !== null) {
            $this->ResponseHeader = new ResponseHeader();
            $this->ResponseHeader->deserialize($param["ResponseHeader"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocket();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }
    }
}
