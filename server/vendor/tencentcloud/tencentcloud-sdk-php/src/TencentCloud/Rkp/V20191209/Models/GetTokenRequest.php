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
namespace TencentCloud\Rkp\V20191209\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetToken请求参数结构体
 *
 * @method integer getBusinessId() 获取业务ID
 * @method void setBusinessId(integer $BusinessId) 设置业务ID
 * @method integer getScene() 获取业务子场景
 * @method void setScene(integer $Scene) 设置业务子场景
 * @method string getBusinessUserId() 获取业务侧账号体系下的用户ID
 * @method void setBusinessUserId(string $BusinessUserId) 设置业务侧账号体系下的用户ID
 * @method string getAppClientIp() 获取用户侧的IP
 * @method void setAppClientIp(string $AppClientIp) 设置用户侧的IP
 * @method integer getExpireTime() 获取过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
 * @method string getOldToken() 获取上一个token
 * @method void setOldToken(string $OldToken) 设置上一个token
 */
class GetTokenRequest extends AbstractModel
{
    /**
     * @var integer 业务ID
     */
    public $BusinessId;

    /**
     * @var integer 业务子场景
     */
    public $Scene;

    /**
     * @var string 业务侧账号体系下的用户ID
     */
    public $BusinessUserId;

    /**
     * @var string 用户侧的IP
     */
    public $AppClientIp;

    /**
     * @var integer 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 上一个token
     */
    public $OldToken;

    /**
     * @param integer $BusinessId 业务ID
     * @param integer $Scene 业务子场景
     * @param string $BusinessUserId 业务侧账号体系下的用户ID
     * @param string $AppClientIp 用户侧的IP
     * @param integer $ExpireTime 过期时间
     * @param string $OldToken 上一个token
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
        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("BusinessUserId",$param) and $param["BusinessUserId"] !== null) {
            $this->BusinessUserId = $param["BusinessUserId"];
        }

        if (array_key_exists("AppClientIp",$param) and $param["AppClientIp"] !== null) {
            $this->AppClientIp = $param["AppClientIp"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OldToken",$param) and $param["OldToken"] !== null) {
            $this->OldToken = $param["OldToken"];
        }
    }
}
