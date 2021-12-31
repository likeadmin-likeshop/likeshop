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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserBaseInfoInstance返回参数结构体
 *
 * @method integer getUserUin() 获取用户uin信息
 * @method void setUserUin(integer $UserUin) 设置用户uin信息
 * @method integer getUserAppid() 获取用户APPID信息
 * @method void setUserAppid(integer $UserAppid) 设置用户APPID信息
 * @method integer getTimeStamp() 获取系统时间戳
 * @method void setTimeStamp(integer $TimeStamp) 设置系统时间戳
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserBaseInfoInstanceResponse extends AbstractModel
{
    /**
     * @var integer 用户uin信息
     */
    public $UserUin;

    /**
     * @var integer 用户APPID信息
     */
    public $UserAppid;

    /**
     * @var integer 系统时间戳
     */
    public $TimeStamp;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $UserUin 用户uin信息
     * @param integer $UserAppid 用户APPID信息
     * @param integer $TimeStamp 系统时间戳
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("UserAppid",$param) and $param["UserAppid"] !== null) {
            $this->UserAppid = $param["UserAppid"];
        }

        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
