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
namespace TencentCloud\Bizlive\V20190313\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterIM请求参数结构体
 *
 * @method string getNickname() 获取用户昵称
 * @method void setNickname(string $Nickname) 设置用户昵称
 * @method string getUserId() 获取用户唯一ID，建议采用用户小程序OpenID加盐形式
 * @method void setUserId(string $UserId) 设置用户唯一ID，建议采用用户小程序OpenID加盐形式
 * @method string getHeadImgUrl() 获取用户头像URL
 * @method void setHeadImgUrl(string $HeadImgUrl) 设置用户头像URL
 * @method integer getLevel() 获取用户身份，默认值：0，表示无特殊身份
 * @method void setLevel(integer $Level) 设置用户身份，默认值：0，表示无特殊身份
 */
class RegisterIMRequest extends AbstractModel
{
    /**
     * @var string 用户昵称
     */
    public $Nickname;

    /**
     * @var string 用户唯一ID，建议采用用户小程序OpenID加盐形式
     */
    public $UserId;

    /**
     * @var string 用户头像URL
     */
    public $HeadImgUrl;

    /**
     * @var integer 用户身份，默认值：0，表示无特殊身份
     */
    public $Level;

    /**
     * @param string $Nickname 用户昵称
     * @param string $UserId 用户唯一ID，建议采用用户小程序OpenID加盐形式
     * @param string $HeadImgUrl 用户头像URL
     * @param integer $Level 用户身份，默认值：0，表示无特殊身份
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
        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("HeadImgUrl",$param) and $param["HeadImgUrl"] !== null) {
            $this->HeadImgUrl = $param["HeadImgUrl"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
