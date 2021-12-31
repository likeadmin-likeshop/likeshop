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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子用户信息
 *
 * @method integer getUin() 获取子用户用户 ID
 * @method void setUin(integer $Uin) 设置子用户用户 ID
 * @method string getName() 获取子用户用户名
 * @method void setName(string $Name) 设置子用户用户名
 * @method integer getUid() 获取子用户 UID
 * @method void setUid(integer $Uid) 设置子用户 UID
 * @method string getRemark() 获取子用户备注
 * @method void setRemark(string $Remark) 设置子用户备注
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserType() 获取用户类型(1:主账号;2:子用户;3:企业微信子用户;4:协作者;5:消息接收人)
 * @method void setUserType(integer $UserType) 设置用户类型(1:主账号;2:子用户;3:企业微信子用户;4:协作者;5:消息接收人)
 * @method string getLastLoginIp() 获取最近登录IP
 * @method void setLastLoginIp(string $LastLoginIp) 设置最近登录IP
 * @method string getLastLoginTime() 获取最近登录时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLoginTime(string $LastLoginTime) 设置最近登录时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubAccountUser extends AbstractModel
{
    /**
     * @var integer 子用户用户 ID
     */
    public $Uin;

    /**
     * @var string 子用户用户名
     */
    public $Name;

    /**
     * @var integer 子用户 UID
     */
    public $Uid;

    /**
     * @var string 子用户备注
     */
    public $Remark;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 用户类型(1:主账号;2:子用户;3:企业微信子用户;4:协作者;5:消息接收人)
     */
    public $UserType;

    /**
     * @var string 最近登录IP
     */
    public $LastLoginIp;

    /**
     * @var string 最近登录时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLoginTime;

    /**
     * @param integer $Uin 子用户用户 ID
     * @param string $Name 子用户用户名
     * @param integer $Uid 子用户 UID
     * @param string $Remark 子用户备注
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserType 用户类型(1:主账号;2:子用户;3:企业微信子用户;4:协作者;5:消息接收人)
     * @param string $LastLoginIp 最近登录IP
     * @param string $LastLoginTime 最近登录时间
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("LastLoginIp",$param) and $param["LastLoginIp"] !== null) {
            $this->LastLoginIp = $param["LastLoginIp"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }
    }
}
