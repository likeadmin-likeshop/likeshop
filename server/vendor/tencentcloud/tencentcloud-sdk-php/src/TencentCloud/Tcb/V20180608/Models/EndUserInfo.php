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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端用户信息
 *
 * @method string getUUId() 获取用户唯一ID
 * @method void setUUId(string $UUId) 设置用户唯一ID
 * @method string getWXOpenId() 获取微信ID
 * @method void setWXOpenId(string $WXOpenId) 设置微信ID
 * @method string getQQOpenId() 获取qq ID
 * @method void setQQOpenId(string $QQOpenId) 设置qq ID
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getNickName() 获取昵称
 * @method void setNickName(string $NickName) 设置昵称
 * @method string getGender() 获取性别
 * @method void setGender(string $Gender) 设置性别
 * @method string getAvatarUrl() 获取头像地址
 * @method void setAvatarUrl(string $AvatarUrl) 设置头像地址
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getIsAnonymous() 获取是否为匿名用户
 * @method void setIsAnonymous(boolean $IsAnonymous) 设置是否为匿名用户
 * @method boolean getIsDisabled() 获取是否禁用账户
 * @method void setIsDisabled(boolean $IsDisabled) 设置是否禁用账户
 * @method boolean getHasPassword() 获取是否设置过密码
 * @method void setHasPassword(boolean $HasPassword) 设置是否设置过密码
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 */
class EndUserInfo extends AbstractModel
{
    /**
     * @var string 用户唯一ID
     */
    public $UUId;

    /**
     * @var string 微信ID
     */
    public $WXOpenId;

    /**
     * @var string qq ID
     */
    public $QQOpenId;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 昵称
     */
    public $NickName;

    /**
     * @var string 性别
     */
    public $Gender;

    /**
     * @var string 头像地址
     */
    public $AvatarUrl;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否为匿名用户
     */
    public $IsAnonymous;

    /**
     * @var boolean 是否禁用账户
     */
    public $IsDisabled;

    /**
     * @var boolean 是否设置过密码
     */
    public $HasPassword;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @param string $UUId 用户唯一ID
     * @param string $WXOpenId 微信ID
     * @param string $QQOpenId qq ID
     * @param string $Phone 手机号
     * @param string $Email 邮箱
     * @param string $NickName 昵称
     * @param string $Gender 性别
     * @param string $AvatarUrl 头像地址
     * @param string $UpdateTime 更新时间
     * @param string $CreateTime 创建时间
     * @param boolean $IsAnonymous 是否为匿名用户
     * @param boolean $IsDisabled 是否禁用账户
     * @param boolean $HasPassword 是否设置过密码
     * @param string $UserName 用户名
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
        if (array_key_exists("UUId",$param) and $param["UUId"] !== null) {
            $this->UUId = $param["UUId"];
        }

        if (array_key_exists("WXOpenId",$param) and $param["WXOpenId"] !== null) {
            $this->WXOpenId = $param["WXOpenId"];
        }

        if (array_key_exists("QQOpenId",$param) and $param["QQOpenId"] !== null) {
            $this->QQOpenId = $param["QQOpenId"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("AvatarUrl",$param) and $param["AvatarUrl"] !== null) {
            $this->AvatarUrl = $param["AvatarUrl"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsAnonymous",$param) and $param["IsAnonymous"] !== null) {
            $this->IsAnonymous = $param["IsAnonymous"];
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }

        if (array_key_exists("HasPassword",$param) and $param["HasPassword"] !== null) {
            $this->HasPassword = $param["HasPassword"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
