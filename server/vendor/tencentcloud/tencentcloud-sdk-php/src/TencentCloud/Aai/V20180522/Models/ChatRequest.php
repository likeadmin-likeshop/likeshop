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
namespace TencentCloud\Aai\V20180522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Chat请求参数结构体
 *
 * @method string getText() 获取聊天输入文本
 * @method void setText(string $Text) 设置聊天输入文本
 * @method integer getProjectId() 获取腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
 * @method void setProjectId(integer $ProjectId) 设置腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
 * @method string getUser() 获取json格式，比如 {"id":"test","gender":"male"}。记录当前与机器人交互的用户id，非必须但强烈建议传入，否则多轮聊天功能会受影响
 * @method void setUser(string $User) 设置json格式，比如 {"id":"test","gender":"male"}。记录当前与机器人交互的用户id，非必须但强烈建议传入，否则多轮聊天功能会受影响
 */
class ChatRequest extends AbstractModel
{
    /**
     * @var string 聊天输入文本
     */
    public $Text;

    /**
     * @var integer 腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
     */
    public $ProjectId;

    /**
     * @var string json格式，比如 {"id":"test","gender":"male"}。记录当前与机器人交互的用户id，非必须但强烈建议传入，否则多轮聊天功能会受影响
     */
    public $User;

    /**
     * @param string $Text 聊天输入文本
     * @param integer $ProjectId 腾讯云项目 ID，可填 0，总长度不超过 1024 字节。
     * @param string $User json格式，比如 {"id":"test","gender":"male"}。记录当前与机器人交互的用户id，非必须但强烈建议传入，否则多轮聊天功能会受影响
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
