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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainOwnerBatch请求参数结构体
 *
 * @method array getDomains() 获取要过户的域名。
 * @method void setDomains(array $Domains) 设置要过户的域名。
 * @method string getNewOwnerUin() 获取转入账户的uin。
 * @method void setNewOwnerUin(string $NewOwnerUin) 设置转入账户的uin。
 */
class ModifyDomainOwnerBatchRequest extends AbstractModel
{
    /**
     * @var array 要过户的域名。
     */
    public $Domains;

    /**
     * @var string 转入账户的uin。
     */
    public $NewOwnerUin;

    /**
     * @param array $Domains 要过户的域名。
     * @param string $NewOwnerUin 转入账户的uin。
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("NewOwnerUin",$param) and $param["NewOwnerUin"] !== null) {
            $this->NewOwnerUin = $param["NewOwnerUin"];
        }
    }
}
