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
 * UpdateOrganizationMember请求参数结构体
 *
 * @method integer getMemberUin() 获取成员UIN
 * @method void setMemberUin(integer $MemberUin) 设置成员UIN
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class UpdateOrganizationMemberRequest extends AbstractModel
{
    /**
     * @var integer 成员UIN
     */
    public $MemberUin;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param integer $MemberUin 成员UIN
     * @param string $Name 名称
     * @param string $Remark 备注
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
        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
