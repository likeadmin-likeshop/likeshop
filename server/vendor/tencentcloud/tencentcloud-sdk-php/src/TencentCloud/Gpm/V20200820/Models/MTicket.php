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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * matchCode和匹配票据 ID组合结构
 *
 * @method string getMatchCode() 获取匹配Code
 * @method void setMatchCode(string $MatchCode) 设置匹配Code
 * @method string getMatchTicketId() 获取匹配票据 ID
 * @method void setMatchTicketId(string $MatchTicketId) 设置匹配票据 ID
 */
class MTicket extends AbstractModel
{
    /**
     * @var string 匹配Code
     */
    public $MatchCode;

    /**
     * @var string 匹配票据 ID
     */
    public $MatchTicketId;

    /**
     * @param string $MatchCode 匹配Code
     * @param string $MatchTicketId 匹配票据 ID
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
        if (array_key_exists("MatchCode",$param) and $param["MatchCode"] !== null) {
            $this->MatchCode = $param["MatchCode"];
        }

        if (array_key_exists("MatchTicketId",$param) and $param["MatchTicketId"] !== null) {
            $this->MatchTicketId = $param["MatchTicketId"];
        }
    }
}
