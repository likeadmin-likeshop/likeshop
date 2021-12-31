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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列部联系人简短信息
 *
 * @method string getExternalUserId() 获取外部联系人的userId
 * @method void setExternalUserId(string $ExternalUserId) 设置外部联系人的userId
 * @method string getUserId() 获取添加了此外部联系人的企业成员userId
 * @method void setUserId(string $UserId) 设置添加了此外部联系人的企业成员userId
 */
class ExternalContactSimpleInfo extends AbstractModel
{
    /**
     * @var string 外部联系人的userId
     */
    public $ExternalUserId;

    /**
     * @var string 添加了此外部联系人的企业成员userId
     */
    public $UserId;

    /**
     * @param string $ExternalUserId 外部联系人的userId
     * @param string $UserId 添加了此外部联系人的企业成员userId
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
        if (array_key_exists("ExternalUserId",$param) and $param["ExternalUserId"] !== null) {
            $this->ExternalUserId = $param["ExternalUserId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
