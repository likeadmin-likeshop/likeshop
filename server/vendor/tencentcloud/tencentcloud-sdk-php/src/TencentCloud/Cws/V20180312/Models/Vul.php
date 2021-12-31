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
 * 漏洞数据
 *
 * @method integer getId() 获取漏洞ID。
 * @method void setId(integer $Id) 设置漏洞ID。
 * @method integer getSiteId() 获取站点ID。
 * @method void setSiteId(integer $SiteId) 设置站点ID。
 * @method integer getTaskId() 获取扫描引擎的扫描任务ID。
 * @method void setTaskId(integer $TaskId) 设置扫描引擎的扫描任务ID。
 * @method string getLevel() 获取漏洞级别：high、middle、low、notice。
 * @method void setLevel(string $Level) 设置漏洞级别：high、middle、low、notice。
 * @method string getName() 获取漏洞名称。
 * @method void setName(string $Name) 设置漏洞名称。
 * @method string getUrl() 获取出现漏洞的url。
 * @method void setUrl(string $Url) 设置出现漏洞的url。
 * @method string getHtml() 获取网址/细节。
 * @method void setHtml(string $Html) 设置网址/细节。
 * @method string getNickname() 获取漏洞类型。
 * @method void setNickname(string $Nickname) 设置漏洞类型。
 * @method string getHarm() 获取危害说明。
 * @method void setHarm(string $Harm) 设置危害说明。
 * @method string getDescribe() 获取漏洞描述。
 * @method void setDescribe(string $Describe) 设置漏洞描述。
 * @method string getSolution() 获取解决方案。
 * @method void setSolution(string $Solution) 设置解决方案。
 * @method string getFrom() 获取漏洞参考。
 * @method void setFrom(string $From) 设置漏洞参考。
 * @method string getParameter() 获取漏洞通过该参数攻击。
 * @method void setParameter(string $Parameter) 设置漏洞通过该参数攻击。
 * @method string getCreatedAt() 获取CreatedAt。
 * @method void setCreatedAt(string $CreatedAt) 设置CreatedAt。
 * @method string getUpdatedAt() 获取UpdatedAt。
 * @method void setUpdatedAt(string $UpdatedAt) 设置UpdatedAt。
 * @method integer getIsReported() 获取是否已经添加误报，0-否，1-是。
 * @method void setIsReported(integer $IsReported) 设置是否已经添加误报，0-否，1-是。
 * @method integer getAppid() 获取云用户appid。
 * @method void setAppid(integer $Appid) 设置云用户appid。
 * @method string getUin() 获取云用户标识。
 * @method void setUin(string $Uin) 设置云用户标识。
 */
class Vul extends AbstractModel
{
    /**
     * @var integer 漏洞ID。
     */
    public $Id;

    /**
     * @var integer 站点ID。
     */
    public $SiteId;

    /**
     * @var integer 扫描引擎的扫描任务ID。
     */
    public $TaskId;

    /**
     * @var string 漏洞级别：high、middle、low、notice。
     */
    public $Level;

    /**
     * @var string 漏洞名称。
     */
    public $Name;

    /**
     * @var string 出现漏洞的url。
     */
    public $Url;

    /**
     * @var string 网址/细节。
     */
    public $Html;

    /**
     * @var string 漏洞类型。
     */
    public $Nickname;

    /**
     * @var string 危害说明。
     */
    public $Harm;

    /**
     * @var string 漏洞描述。
     */
    public $Describe;

    /**
     * @var string 解决方案。
     */
    public $Solution;

    /**
     * @var string 漏洞参考。
     */
    public $From;

    /**
     * @var string 漏洞通过该参数攻击。
     */
    public $Parameter;

    /**
     * @var string CreatedAt。
     */
    public $CreatedAt;

    /**
     * @var string UpdatedAt。
     */
    public $UpdatedAt;

    /**
     * @var integer 是否已经添加误报，0-否，1-是。
     */
    public $IsReported;

    /**
     * @var integer 云用户appid。
     */
    public $Appid;

    /**
     * @var string 云用户标识。
     */
    public $Uin;

    /**
     * @param integer $Id 漏洞ID。
     * @param integer $SiteId 站点ID。
     * @param integer $TaskId 扫描引擎的扫描任务ID。
     * @param string $Level 漏洞级别：high、middle、low、notice。
     * @param string $Name 漏洞名称。
     * @param string $Url 出现漏洞的url。
     * @param string $Html 网址/细节。
     * @param string $Nickname 漏洞类型。
     * @param string $Harm 危害说明。
     * @param string $Describe 漏洞描述。
     * @param string $Solution 解决方案。
     * @param string $From 漏洞参考。
     * @param string $Parameter 漏洞通过该参数攻击。
     * @param string $CreatedAt CreatedAt。
     * @param string $UpdatedAt UpdatedAt。
     * @param integer $IsReported 是否已经添加误报，0-否，1-是。
     * @param integer $Appid 云用户appid。
     * @param string $Uin 云用户标识。
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

        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Html",$param) and $param["Html"] !== null) {
            $this->Html = $param["Html"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Harm",$param) and $param["Harm"] !== null) {
            $this->Harm = $param["Harm"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Parameter",$param) and $param["Parameter"] !== null) {
            $this->Parameter = $param["Parameter"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("IsReported",$param) and $param["IsReported"] !== null) {
            $this->IsReported = $param["IsReported"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
