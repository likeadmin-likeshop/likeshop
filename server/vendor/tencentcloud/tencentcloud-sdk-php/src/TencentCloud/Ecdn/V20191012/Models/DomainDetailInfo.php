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
 * ECDN域名详细配置信息。
 *
 * @method string getResourceId() 获取域名ID。
 * @method void setResourceId(string $ResourceId) 设置域名ID。
 * @method integer getAppId() 获取腾讯云账号ID。
 * @method void setAppId(integer $AppId) 设置腾讯云账号ID。
 * @method string getDomain() 获取加速域名。
 * @method void setDomain(string $Domain) 设置加速域名。
 * @method string getCname() 获取域名CName。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置域名CName。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取域名状态，pending，rejected，processing， online，offline，deleted分别表示审核中，审核未通过，审核通过部署中，已开启，已关闭，已删除。
 * @method void setStatus(string $Status) 设置域名状态，pending，rejected，processing， online，offline，deleted分别表示审核中，审核未通过，审核通过部署中，已开启，已关闭，已删除。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method string getCreateTime() 获取域名创建时间。
 * @method void setCreateTime(string $CreateTime) 设置域名创建时间。
 * @method string getUpdateTime() 获取域名更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置域名更新时间。
 * @method Origin getOrigin() 获取源站配置。
 * @method void setOrigin(Origin $Origin) 设置源站配置。
 * @method IpFilter getIpFilter() 获取IP黑白名单配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpFilter(IpFilter $IpFilter) 设置IP黑白名单配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpFreqLimit getIpFreqLimit() 获取IP限频配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) 设置IP限频配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseHeader getResponseHeader() 获取源站响应头部配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) 设置源站响应头部配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheKey getCacheKey() 获取节点缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheKey(CacheKey $CacheKey) 设置节点缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Cache getCache() 获取缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCache(Cache $Cache) 设置缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Https getHttps() 获取Https配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttps(Https $Https) 设置Https配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisable() 获取域名封禁状态，normal，overdue，quota，malicious，ddos，idle，unlicensed，capping，readonly分别表示 正常，欠费停服，试用客户流量包耗尽，恶意用户，ddos攻击，无流量域名，未备案，带宽封顶，只读。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisable(string $Disable) 设置域名封禁状态，normal，overdue，quota，malicious，ddos，idle，unlicensed，capping，readonly分别表示 正常，欠费停服，试用客户流量包耗尽，恶意用户，ddos攻击，无流量域名，未备案，带宽封顶，只读。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ForceRedirect getForceRedirect() 获取访问协议强制跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) 设置访问协议强制跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取加速区域，mainland，overseas或global。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置加速区域，mainland，overseas或global。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReadonly() 获取域名锁定状态，normal、global 分别表示未被锁定，全球锁定。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadonly(string $Readonly) 设置域名锁定状态，normal、global 分别表示未被锁定，全球锁定。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTag() 获取域名标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置域名标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebSocket getWebSocket() 获取WebSocket配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSocket(WebSocket $WebSocket) 设置WebSocket配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainDetailInfo extends AbstractModel
{
    /**
     * @var string 域名ID。
     */
    public $ResourceId;

    /**
     * @var integer 腾讯云账号ID。
     */
    public $AppId;

    /**
     * @var string 加速域名。
     */
    public $Domain;

    /**
     * @var string 域名CName。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @var string 域名状态，pending，rejected，processing， online，offline，deleted分别表示审核中，审核未通过，审核通过部署中，已开启，已关闭，已删除。
     */
    public $Status;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 域名创建时间。
     */
    public $CreateTime;

    /**
     * @var string 域名更新时间。
     */
    public $UpdateTime;

    /**
     * @var Origin 源站配置。
     */
    public $Origin;

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
     * @var ResponseHeader 源站响应头部配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseHeader;

    /**
     * @var CacheKey 节点缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheKey;

    /**
     * @var Cache 缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cache;

    /**
     * @var Https Https配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Https;

    /**
     * @var string 域名封禁状态，normal，overdue，quota，malicious，ddos，idle，unlicensed，capping，readonly分别表示 正常，欠费停服，试用客户流量包耗尽，恶意用户，ddos攻击，无流量域名，未备案，带宽封顶，只读。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disable;

    /**
     * @var ForceRedirect 访问协议强制跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceRedirect;

    /**
     * @var string 加速区域，mainland，overseas或global。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @var string 域名锁定状态，normal、global 分别表示未被锁定，全球锁定。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Readonly;

    /**
     * @var array 域名标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var WebSocket WebSocket配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSocket;

    /**
     * @param string $ResourceId 域名ID。
     * @param integer $AppId 腾讯云账号ID。
     * @param string $Domain 加速域名。
     * @param string $Cname 域名CName。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 域名状态，pending，rejected，processing， online，offline，deleted分别表示审核中，审核未通过，审核通过部署中，已开启，已关闭，已删除。
     * @param integer $ProjectId 项目ID。
     * @param string $CreateTime 域名创建时间。
     * @param string $UpdateTime 域名更新时间。
     * @param Origin $Origin 源站配置。
     * @param IpFilter $IpFilter IP黑白名单配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpFreqLimit $IpFreqLimit IP限频配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseHeader $ResponseHeader 源站响应头部配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheKey $CacheKey 节点缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Cache $Cache 缓存规则配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Https $Https Https配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Disable 域名封禁状态，normal，overdue，quota，malicious，ddos，idle，unlicensed，capping，readonly分别表示 正常，欠费停服，试用客户流量包耗尽，恶意用户，ddos攻击，无流量域名，未备案，带宽封顶，只读。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ForceRedirect $ForceRedirect 访问协议强制跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 加速区域，mainland，overseas或global。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Readonly 域名锁定状态，normal、global 分别表示未被锁定，全球锁定。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tag 域名标签。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebSocket $WebSocket WebSocket配置。
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

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Readonly",$param) and $param["Readonly"] !== null) {
            $this->Readonly = $param["Readonly"];
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
