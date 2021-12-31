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
 * BatchModifyDomainInfo请求参数结构体
 *
 * @method array getDomains() 获取批量修改的域名。
 * @method void setDomains(array $Domains) 设置批量修改的域名。
 * @method string getTemplateId() 获取模板ID。
 * @method void setTemplateId(string $TemplateId) 设置模板ID。
 * @method boolean getLockTransfer() 获取true： 开启60天内禁止转移注册商锁定
false：关闭60天内禁止转移注册商锁定
默认 true
 * @method void setLockTransfer(boolean $LockTransfer) 设置true： 开启60天内禁止转移注册商锁定
false：关闭60天内禁止转移注册商锁定
默认 true
 */
class BatchModifyDomainInfoRequest extends AbstractModel
{
    /**
     * @var array 批量修改的域名。
     */
    public $Domains;

    /**
     * @var string 模板ID。
     */
    public $TemplateId;

    /**
     * @var boolean true： 开启60天内禁止转移注册商锁定
false：关闭60天内禁止转移注册商锁定
默认 true
     */
    public $LockTransfer;

    /**
     * @param array $Domains 批量修改的域名。
     * @param string $TemplateId 模板ID。
     * @param boolean $LockTransfer true： 开启60天内禁止转移注册商锁定
false：关闭60天内禁止转移注册商锁定
默认 true
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("LockTransfer",$param) and $param["LockTransfer"] !== null) {
            $this->LockTransfer = $param["LockTransfer"];
        }
    }
}
