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
 * CDN域名简要信息。
 *
 * @method string getResourceId() 获取域名ID。
 * @method void setResourceId(string $ResourceId) 设置域名ID。
 * @method integer getAppId() 获取腾讯云账号ID。
 * @method void setAppId(integer $AppId) 设置腾讯云账号ID。
 * @method string getDomain() 获取CDN加速域名。
 * @method void setDomain(string $Domain) 设置CDN加速域名。
 * @method string getCname() 获取域名CName。
 * @method void setCname(string $Cname) 设置域名CName。
 * @method string getStatus() 获取域名状态，pending，rejected，processing， online，offline，deleted分别表示审核中，审核未通过，审核通过部署中，已开启，已关闭，已删除。
 * @method void setStatus(string $Status) 设置域名状态，pending，rejected，processing， online，offline，deleted分别表示审核中，审核未通过，审核通过部署中，已开启，已关闭，已删除。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method string getCreateTime() 获取域名创建时间。
 * @method void setCreateTime(string $CreateTime) 设置域名创建时间。
 * @method string getUpdateTime() 获取域名更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置域名更新时间。
 * @method Origin getOrigin() 获取源站配置详情。
 * @method void setOrigin(Origin $Origin) 设置源站配置详情。
 * @method string getDisable() 获取域名封禁状态，normal，overdue，quota，malicious，ddos，idle，unlicensed，capping，readonly分别表示 正常，欠费停服，试用客户流量包耗尽，恶意用户，ddos攻击，无流量域名，未备案，带宽封顶，只读
 * @method void setDisable(string $Disable) 设置域名封禁状态，normal，overdue，quota，malicious，ddos，idle，unlicensed，capping，readonly分别表示 正常，欠费停服，试用客户流量包耗尽，恶意用户，ddos攻击，无流量域名，未备案，带宽封顶，只读
 * @method string getArea() 获取加速区域，mainland，oversea或global。
 * @method void setArea(string $Area) 设置加速区域，mainland，oversea或global。
 * @method string getReadonly() 获取域名锁定状态，normal、global，分别表示未被锁定、全球锁定。
 * @method void setReadonly(string $Readonly) 设置域名锁定状态，normal、global，分别表示未被锁定、全球锁定。
 */
class DomainBriefInfo extends AbstractModel
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
     * @var string CDN加速域名。
     */
    public $Domain;

    /**
     * @var string 域名CName。
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
     * @var Origin 源站配置详情。
     */
    public $Origin;

    /**
     * @var string 域名封禁状态，normal，overdue，quota，malicious，ddos，idle，unlicensed，capping，readonly分别表示 正常，欠费停服，试用客户流量包耗尽，恶意用户，ddos攻击，无流量域名，未备案，带宽封顶，只读
     */
    public $Disable;

    /**
     * @var string 加速区域，mainland，oversea或global。
     */
    public $Area;

    /**
     * @var string 域名锁定状态，normal、global，分别表示未被锁定、全球锁定。
     */
    public $Readonly;

    /**
     * @param string $ResourceId 域名ID。
     * @param integer $AppId 腾讯云账号ID。
     * @param string $Domain CDN加速域名。
     * @param string $Cname 域名CName。
     * @param string $Status 域名状态，pending，rejected，processing， online，offline，deleted分别表示审核中，审核未通过，审核通过部署中，已开启，已关闭，已删除。
     * @param integer $ProjectId 项目ID。
     * @param string $CreateTime 域名创建时间。
     * @param string $UpdateTime 域名更新时间。
     * @param Origin $Origin 源站配置详情。
     * @param string $Disable 域名封禁状态，normal，overdue，quota，malicious，ddos，idle，unlicensed，capping，readonly分别表示 正常，欠费停服，试用客户流量包耗尽，恶意用户，ddos攻击，无流量域名，未备案，带宽封顶，只读
     * @param string $Area 加速区域，mainland，oversea或global。
     * @param string $Readonly 域名锁定状态，normal、global，分别表示未被锁定、全球锁定。
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

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Readonly",$param) and $param["Readonly"] !== null) {
            $this->Readonly = $param["Readonly"];
        }
    }
}
