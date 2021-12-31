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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatBot请求参数结构体
 *
 * @method string getQuery() 获取用户请求的query
 * @method void setQuery(string $Query) 设置用户请求的query
 * @method string getOpenId() 获取服务的id,  主要用于儿童闲聊接口，比如手Q的openid
 * @method void setOpenId(string $OpenId) 设置服务的id,  主要用于儿童闲聊接口，比如手Q的openid
 * @method integer getFlag() 获取0: 通用闲聊, 1:儿童闲聊, 默认是通用闲聊
 * @method void setFlag(integer $Flag) 设置0: 通用闲聊, 1:儿童闲聊, 默认是通用闲聊
 */
class ChatBotRequest extends AbstractModel
{
    /**
     * @var string 用户请求的query
     */
    public $Query;

    /**
     * @var string 服务的id,  主要用于儿童闲聊接口，比如手Q的openid
     */
    public $OpenId;

    /**
     * @var integer 0: 通用闲聊, 1:儿童闲聊, 默认是通用闲聊
     */
    public $Flag;

    /**
     * @param string $Query 用户请求的query
     * @param string $OpenId 服务的id,  主要用于儿童闲聊接口，比如手Q的openid
     * @param integer $Flag 0: 通用闲聊, 1:儿童闲聊, 默认是通用闲聊
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }
    }
}
