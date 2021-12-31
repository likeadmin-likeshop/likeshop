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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount返回参数结构体
 *
 * @method string getInstanceId() 获取实例ID，透传入参。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，透传入参。
 * @method string getUserName() 获取用户名，透传入参。
 * @method void setUserName(string $UserName) 设置用户名，透传入参。
 * @method string getHost() 获取允许访问的 host，透传入参。
 * @method void setHost(string $Host) 设置允许访问的 host，透传入参。
 * @method integer getReadOnly() 获取透传入参。
 * @method void setReadOnly(integer $ReadOnly) 设置透传入参。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAccountResponse extends AbstractModel
{
    /**
     * @var string 实例ID，透传入参。
     */
    public $InstanceId;

    /**
     * @var string 用户名，透传入参。
     */
    public $UserName;

    /**
     * @var string 允许访问的 host，透传入参。
     */
    public $Host;

    /**
     * @var integer 透传入参。
     */
    public $ReadOnly;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例ID，透传入参。
     * @param string $UserName 用户名，透传入参。
     * @param string $Host 允许访问的 host，透传入参。
     * @param integer $ReadOnly 透传入参。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
