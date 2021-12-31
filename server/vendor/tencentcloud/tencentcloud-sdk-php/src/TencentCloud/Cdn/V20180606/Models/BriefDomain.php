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
 * 域名基础配置信息，含 CNAME、状态、业务类型、加速区域、创建时间、更新时间、源站配置等。
 *
 * @method string getResourceId() 获取域名 ID
 * @method void setResourceId(string $ResourceId) 设置域名 ID
 * @method integer getAppId() 获取腾讯云账号 ID
 * @method void setAppId(integer $AppId) 设置腾讯云账号 ID
 * @method string getDomain() 获取加速域名
 * @method void setDomain(string $Domain) 设置加速域名
 * @method string getCname() 获取域名对应的 CNAME 地址
 * @method void setCname(string $Cname) 设置域名对应的 CNAME 地址
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
 * @method Origin getOrigin() 获取源站配置详情
 * @method void setOrigin(Origin $Origin) 设置源站配置详情
 * @method string getDisable() 获取域名封禁状态
normal：正常状态
overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务
malicious：域名出现恶意行为，强制关闭加速服务
ddos：域名被大规模 DDoS 攻击，关闭加速服务
idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务
unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务
capping：触发配置的带宽阈值上限
readonly：域名存在特殊配置，被锁定
 * @method void setDisable(string $Disable) 设置域名封禁状态
normal：正常状态
overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务
malicious：域名出现恶意行为，强制关闭加速服务
ddos：域名被大规模 DDoS 攻击，关闭加速服务
idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务
unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务
capping：触发配置的带宽阈值上限
readonly：域名存在特殊配置，被锁定
 * @method string getArea() 获取加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
 * @method void setArea(string $Area) 设置加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
 * @method string getReadonly() 获取域名锁定状态
normal：未锁定
mainland：中国境内锁定
overseas：中国境外锁定
global：全球锁定
 * @method void setReadonly(string $Readonly) 设置域名锁定状态
normal：未锁定
mainland：中国境内锁定
overseas：中国境外锁定
global：全球锁定
 */
class BriefDomain extends AbstractModel
{
    /**
     * @var string 域名 ID
     */
    public $ResourceId;

    /**
     * @var integer 腾讯云账号 ID
     */
    public $AppId;

    /**
     * @var string 加速域名
     */
    public $Domain;

    /**
     * @var string 域名对应的 CNAME 地址
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
     * @var Origin 源站配置详情
     */
    public $Origin;

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
     */
    public $Disable;

    /**
     * @var string 加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
     */
    public $Area;

    /**
     * @var string 域名锁定状态
normal：未锁定
mainland：中国境内锁定
overseas：中国境外锁定
global：全球锁定
     */
    public $Readonly;

    /**
     * @param string $ResourceId 域名 ID
     * @param integer $AppId 腾讯云账号 ID
     * @param string $Domain 加速域名
     * @param string $Cname 域名对应的 CNAME 地址
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
     * @param Origin $Origin 源站配置详情
     * @param string $Disable 域名封禁状态
normal：正常状态
overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务
malicious：域名出现恶意行为，强制关闭加速服务
ddos：域名被大规模 DDoS 攻击，关闭加速服务
idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务
unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务
capping：触发配置的带宽阈值上限
readonly：域名存在特殊配置，被锁定
     * @param string $Area 加速区域
mainland：中国境内加速
overseas：中国境外加速
global：全球加速
     * @param string $Readonly 域名锁定状态
normal：未锁定
mainland：中国境内锁定
overseas：中国境外锁定
global：全球锁定
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
