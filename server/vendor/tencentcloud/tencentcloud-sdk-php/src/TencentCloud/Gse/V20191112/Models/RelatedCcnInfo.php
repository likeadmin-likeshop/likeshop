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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网相关信息描述
 *
 * @method string getAccountId() 获取云联网所属账号
 * @method void setAccountId(string $AccountId) 设置云联网所属账号
 * @method string getCcnId() 获取云联网 ID
 * @method void setCcnId(string $CcnId) 设置云联网 ID
 * @method string getAttachType() 获取关联云联网状态
 * @method void setAttachType(string $AttachType) 设置关联云联网状态
 */
class RelatedCcnInfo extends AbstractModel
{
    /**
     * @var string 云联网所属账号
     */
    public $AccountId;

    /**
     * @var string 云联网 ID
     */
    public $CcnId;

    /**
     * @var string 关联云联网状态
     */
    public $AttachType;

    /**
     * @param string $AccountId 云联网所属账号
     * @param string $CcnId 云联网 ID
     * @param string $AttachType 关联云联网状态
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }
    }
}
