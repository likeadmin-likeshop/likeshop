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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接入k8s 的认证信息
 *
 * @method string getCACert() 获取CA 根证书
 * @method void setCACert(string $CACert) 设置CA 根证书
 * @method string getToken() 获取认证用的Token
 * @method void setToken(string $Token) 设置认证用的Token
 */
class ClusterCredential extends AbstractModel
{
    /**
     * @var string CA 根证书
     */
    public $CACert;

    /**
     * @var string 认证用的Token
     */
    public $Token;

    /**
     * @param string $CACert CA 根证书
     * @param string $Token 认证用的Token
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
        if (array_key_exists("CACert",$param) and $param["CACert"] !== null) {
            $this->CACert = $param["CACert"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
