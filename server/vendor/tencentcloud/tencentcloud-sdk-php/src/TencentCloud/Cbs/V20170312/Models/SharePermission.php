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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快照分享信息集合
 *
 * @method string getCreatedTime() 获取快照分享的时间
 * @method void setCreatedTime(string $CreatedTime) 设置快照分享的时间
 * @method string getAccountId() 获取分享的账号Id
 * @method void setAccountId(string $AccountId) 设置分享的账号Id
 */
class SharePermission extends AbstractModel
{
    /**
     * @var string 快照分享的时间
     */
    public $CreatedTime;

    /**
     * @var string 分享的账号Id
     */
    public $AccountId;

    /**
     * @param string $CreatedTime 快照分享的时间
     * @param string $AccountId 分享的账号Id
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
        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }
    }
}
