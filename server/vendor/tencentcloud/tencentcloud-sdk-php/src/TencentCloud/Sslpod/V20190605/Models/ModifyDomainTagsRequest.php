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
namespace TencentCloud\Sslpod\V20190605\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainTags请求参数结构体
 *
 * @method integer getAccountDomainId() 获取账号下域名ID
 * @method void setAccountDomainId(integer $AccountDomainId) 设置账号下域名ID
 * @method string getTags() 获取更新后的tag，多个以逗号隔开
 * @method void setTags(string $Tags) 设置更新后的tag，多个以逗号隔开
 */
class ModifyDomainTagsRequest extends AbstractModel
{
    /**
     * @var integer 账号下域名ID
     */
    public $AccountDomainId;

    /**
     * @var string 更新后的tag，多个以逗号隔开
     */
    public $Tags;

    /**
     * @param integer $AccountDomainId 账号下域名ID
     * @param string $Tags 更新后的tag，多个以逗号隔开
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
        if (array_key_exists("AccountDomainId",$param) and $param["AccountDomainId"] !== null) {
            $this->AccountDomainId = $param["AccountDomainId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
