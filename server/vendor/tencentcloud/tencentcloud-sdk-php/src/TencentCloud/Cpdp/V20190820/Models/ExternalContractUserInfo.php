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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方渠道用户信息
 *
 * @method string getExternalUserType() 获取第三方用户类型，例如:  WX_OPENID, WX_SUB_OPENID,WX_PAYER_OPENID
 * @method void setExternalUserType(string $ExternalUserType) 设置第三方用户类型，例如:  WX_OPENID, WX_SUB_OPENID,WX_PAYER_OPENID
 * @method string getExternalUserId() 获取第三方用户ID
 * @method void setExternalUserId(string $ExternalUserId) 设置第三方用户ID
 */
class ExternalContractUserInfo extends AbstractModel
{
    /**
     * @var string 第三方用户类型，例如:  WX_OPENID, WX_SUB_OPENID,WX_PAYER_OPENID
     */
    public $ExternalUserType;

    /**
     * @var string 第三方用户ID
     */
    public $ExternalUserId;

    /**
     * @param string $ExternalUserType 第三方用户类型，例如:  WX_OPENID, WX_SUB_OPENID,WX_PAYER_OPENID
     * @param string $ExternalUserId 第三方用户ID
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
        if (array_key_exists("ExternalUserType",$param) and $param["ExternalUserType"] !== null) {
            $this->ExternalUserType = $param["ExternalUserType"];
        }

        if (array_key_exists("ExternalUserId",$param) and $param["ExternalUserId"] !== null) {
            $this->ExternalUserId = $param["ExternalUserId"];
        }
    }
}
