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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * agent运行模式
 *
 * @method string getScene() 获取场景类型，支持WINDOWS
 * @method void setScene(string $Scene) 设置场景类型，支持WINDOWS
 * @method string getUser() 获取运行Agent的User
 * @method void setUser(string $User) 设置运行Agent的User
 * @method string getSession() 获取运行Agent的Session
 * @method void setSession(string $Session) 设置运行Agent的Session
 */
class AgentRunningMode extends AbstractModel
{
    /**
     * @var string 场景类型，支持WINDOWS
     */
    public $Scene;

    /**
     * @var string 运行Agent的User
     */
    public $User;

    /**
     * @var string 运行Agent的Session
     */
    public $Session;

    /**
     * @param string $Scene 场景类型，支持WINDOWS
     * @param string $User 运行Agent的User
     * @param string $Session 运行Agent的Session
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Session",$param) and $param["Session"] !== null) {
            $this->Session = $param["Session"];
        }
    }
}
