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
 * CreateWxCloudBaseRunServerDBCluster请求参数结构体
 *
 * @method string getAccountPassword() 获取账户密码
 * @method void setAccountPassword(string $AccountPassword) 设置账户密码
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getWxAppId() 获取微信appid
 * @method void setWxAppId(string $WxAppId) 设置微信appid
 */
class CreateWxCloudBaseRunServerDBClusterRequest extends AbstractModel
{
    /**
     * @var string 账户密码
     */
    public $AccountPassword;

    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 微信appid
     */
    public $WxAppId;

    /**
     * @param string $AccountPassword 账户密码
     * @param string $EnvId 环境ID
     * @param string $WxAppId 微信appid
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
        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("WxAppId",$param) and $param["WxAppId"] !== null) {
            $this->WxAppId = $param["WxAppId"];
        }
    }
}
