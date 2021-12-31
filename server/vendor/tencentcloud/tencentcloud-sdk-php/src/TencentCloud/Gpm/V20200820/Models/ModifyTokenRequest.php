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
 * ModifyToken请求参数结构体
 *
 * @method string getMatchCode() 获取匹配Code。
 * @method void setMatchCode(string $MatchCode) 设置匹配Code。
 * @method integer getCompatibleSpan() 获取单位秒，取值0-1800。此参数表示当前Token被替换后，GPM将持续推送原Token的时间。在CompatibleSpan时间范围内，用户将在事件消息中收到当前和原始Token。
 * @method void setCompatibleSpan(integer $CompatibleSpan) 设置单位秒，取值0-1800。此参数表示当前Token被替换后，GPM将持续推送原Token的时间。在CompatibleSpan时间范围内，用户将在事件消息中收到当前和原始Token。
 * @method string getMatchToken() 获取Token，[a-zA-Z0-9-_.], 长度0-64。如果为空，将由GPM随机生成。
 * @method void setMatchToken(string $MatchToken) 设置Token，[a-zA-Z0-9-_.], 长度0-64。如果为空，将由GPM随机生成。
 */
class ModifyTokenRequest extends AbstractModel
{
    /**
     * @var string 匹配Code。
     */
    public $MatchCode;

    /**
     * @var integer 单位秒，取值0-1800。此参数表示当前Token被替换后，GPM将持续推送原Token的时间。在CompatibleSpan时间范围内，用户将在事件消息中收到当前和原始Token。
     */
    public $CompatibleSpan;

    /**
     * @var string Token，[a-zA-Z0-9-_.], 长度0-64。如果为空，将由GPM随机生成。
     */
    public $MatchToken;

    /**
     * @param string $MatchCode 匹配Code。
     * @param integer $CompatibleSpan 单位秒，取值0-1800。此参数表示当前Token被替换后，GPM将持续推送原Token的时间。在CompatibleSpan时间范围内，用户将在事件消息中收到当前和原始Token。
     * @param string $MatchToken Token，[a-zA-Z0-9-_.], 长度0-64。如果为空，将由GPM随机生成。
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

        if (array_key_exists("CompatibleSpan",$param) and $param["CompatibleSpan"] !== null) {
            $this->CompatibleSpan = $param["CompatibleSpan"];
        }

        if (array_key_exists("MatchToken",$param) and $param["MatchToken"] !== null) {
            $this->MatchToken = $param["MatchToken"];
        }
    }
}
