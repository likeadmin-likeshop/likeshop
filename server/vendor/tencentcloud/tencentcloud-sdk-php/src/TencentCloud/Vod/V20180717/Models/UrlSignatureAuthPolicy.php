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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基于签名的 Key 防盗链信息
 *
 * @method string getStatus() 获取[Key 防盗链](https://cloud.tencent.com/document/product/266/14047)设置状态，可选值：
<li>Enabled: 启用；</li>
<li>Disabled: 禁用。</li>
 * @method void setStatus(string $Status) 设置[Key 防盗链](https://cloud.tencent.com/document/product/266/14047)设置状态，可选值：
<li>Enabled: 启用；</li>
<li>Disabled: 禁用。</li>
 * @method string getEncryptedKey() 获取[Key 防盗链](https://cloud.tencent.com/document/product/266/14047)中用于生成签名的密钥。
 * @method void setEncryptedKey(string $EncryptedKey) 设置[Key 防盗链](https://cloud.tencent.com/document/product/266/14047)中用于生成签名的密钥。
 */
class UrlSignatureAuthPolicy extends AbstractModel
{
    /**
     * @var string [Key 防盗链](https://cloud.tencent.com/document/product/266/14047)设置状态，可选值：
<li>Enabled: 启用；</li>
<li>Disabled: 禁用。</li>
     */
    public $Status;

    /**
     * @var string [Key 防盗链](https://cloud.tencent.com/document/product/266/14047)中用于生成签名的密钥。
     */
    public $EncryptedKey;

    /**
     * @param string $Status [Key 防盗链](https://cloud.tencent.com/document/product/266/14047)设置状态，可选值：
<li>Enabled: 启用；</li>
<li>Disabled: 禁用。</li>
     * @param string $EncryptedKey [Key 防盗链](https://cloud.tencent.com/document/product/266/14047)中用于生成签名的密钥。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EncryptedKey",$param) and $param["EncryptedKey"] !== null) {
            $this->EncryptedKey = $param["EncryptedKey"];
        }
    }
}
