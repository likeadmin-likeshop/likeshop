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
 * GetOrganization返回参数结构体
 *
 * @method integer getOrgId() 获取企业组织ID
 * @method void setOrgId(integer $OrgId) 设置企业组织ID
 * @method integer getHostUin() 获取创建者UIN
 * @method void setHostUin(integer $HostUin) 设置创建者UIN
 * @method string getNickname() 获取创建者昵称
 * @method void setNickname(string $Nickname) 设置创建者昵称
 * @method string getMail() 获取创建者邮箱
 * @method void setMail(string $Mail) 设置创建者邮箱
 * @method integer getOrgType() 获取企业组织类型
 * @method void setOrgType(integer $OrgType) 设置企业组织类型
 * @method integer getIsEmpty() 获取是否为空
 * @method void setIsEmpty(integer $IsEmpty) 设置是否为空
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetOrganizationResponse extends AbstractModel
{
    /**
     * @var integer 企业组织ID
     */
    public $OrgId;

    /**
     * @var integer 创建者UIN
     */
    public $HostUin;

    /**
     * @var string 创建者昵称
     */
    public $Nickname;

    /**
     * @var string 创建者邮箱
     */
    public $Mail;

    /**
     * @var integer 企业组织类型
     */
    public $OrgType;

    /**
     * @var integer 是否为空
     */
    public $IsEmpty;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $OrgId 企业组织ID
     * @param integer $HostUin 创建者UIN
     * @param string $Nickname 创建者昵称
     * @param string $Mail 创建者邮箱
     * @param integer $OrgType 企业组织类型
     * @param integer $IsEmpty 是否为空
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("HostUin",$param) and $param["HostUin"] !== null) {
            $this->HostUin = $param["HostUin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("OrgType",$param) and $param["OrgType"] !== null) {
            $this->OrgType = $param["OrgType"];
        }

        if (array_key_exists("IsEmpty",$param) and $param["IsEmpty"] !== null) {
            $this->IsEmpty = $param["IsEmpty"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
