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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名共享信息
 *
 * @method string getShareTo() 获取域名共享对象的账号
 * @method void setShareTo(string $ShareTo) 设置域名共享对象的账号
 * @method string getMode() 获取共享模式，“rw”：可读写。 “r”:：只读
 * @method void setMode(string $Mode) 设置共享模式，“rw”：可读写。 “r”:：只读
 * @method string getStatus() 获取共享状态“enabled”：共享成功。“pending”：共享到的账号不存在, 等待注册
 * @method void setStatus(string $Status) 设置共享状态“enabled”：共享成功。“pending”：共享到的账号不存在, 等待注册
 */
class DomainShareInfo extends AbstractModel
{
    /**
     * @var string 域名共享对象的账号
     */
    public $ShareTo;

    /**
     * @var string 共享模式，“rw”：可读写。 “r”:：只读
     */
    public $Mode;

    /**
     * @var string 共享状态“enabled”：共享成功。“pending”：共享到的账号不存在, 等待注册
     */
    public $Status;

    /**
     * @param string $ShareTo 域名共享对象的账号
     * @param string $Mode 共享模式，“rw”：可读写。 “r”:：只读
     * @param string $Status 共享状态“enabled”：共享成功。“pending”：共享到的账号不存在, 等待注册
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
        if (array_key_exists("ShareTo",$param) and $param["ShareTo"] !== null) {
            $this->ShareTo = $param["ShareTo"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
