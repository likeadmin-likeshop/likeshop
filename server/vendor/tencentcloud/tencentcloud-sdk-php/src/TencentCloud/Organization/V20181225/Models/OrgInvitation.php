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
namespace TencentCloud\Organization\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业组织邀请
 *
 * @method integer getId() 获取邀请ID
 * @method void setId(integer $Id) 设置邀请ID
 * @method integer getUin() 获取被邀请UIN
 * @method void setUin(integer $Uin) 设置被邀请UIN
 * @method integer getHostUin() 获取创建者UIN
 * @method void setHostUin(integer $HostUin) 设置创建者UIN
 * @method string getHostName() 获取创建者名称
 * @method void setHostName(string $HostName) 设置创建者名称
 * @method string getHostMail() 获取创建者邮箱
 * @method void setHostMail(string $HostMail) 设置创建者邮箱
 * @method integer getStatus() 获取邀请状态。-1：已过期，0：正常，1：已接受，2：已失效，3：已取消
 * @method void setStatus(integer $Status) 设置邀请状态。-1：已过期，0：正常，1：已接受，2：已失效，3：已取消
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getOrgType() 获取企业组织类型
 * @method void setOrgType(integer $OrgType) 设置企业组织类型
 * @method string getInviteTime() 获取邀请时间
 * @method void setInviteTime(string $InviteTime) 设置邀请时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 */
class OrgInvitation extends AbstractModel
{
    /**
     * @var integer 邀请ID
     */
    public $Id;

    /**
     * @var integer 被邀请UIN
     */
    public $Uin;

    /**
     * @var integer 创建者UIN
     */
    public $HostUin;

    /**
     * @var string 创建者名称
     */
    public $HostName;

    /**
     * @var string 创建者邮箱
     */
    public $HostMail;

    /**
     * @var integer 邀请状态。-1：已过期，0：正常，1：已接受，2：已失效，3：已取消
     */
    public $Status;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 企业组织类型
     */
    public $OrgType;

    /**
     * @var string 邀请时间
     */
    public $InviteTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @param integer $Id 邀请ID
     * @param integer $Uin 被邀请UIN
     * @param integer $HostUin 创建者UIN
     * @param string $HostName 创建者名称
     * @param string $HostMail 创建者邮箱
     * @param integer $Status 邀请状态。-1：已过期，0：正常，1：已接受，2：已失效，3：已取消
     * @param string $Name 名称
     * @param string $Remark 备注
     * @param integer $OrgType 企业组织类型
     * @param string $InviteTime 邀请时间
     * @param string $ExpireTime 过期时间
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

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("HostUin",$param) and $param["HostUin"] !== null) {
            $this->HostUin = $param["HostUin"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostMail",$param) and $param["HostMail"] !== null) {
            $this->HostMail = $param["HostMail"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("OrgType",$param) and $param["OrgType"] !== null) {
            $this->OrgType = $param["OrgType"];
        }

        if (array_key_exists("InviteTime",$param) and $param["InviteTime"] !== null) {
            $this->InviteTime = $param["InviteTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
