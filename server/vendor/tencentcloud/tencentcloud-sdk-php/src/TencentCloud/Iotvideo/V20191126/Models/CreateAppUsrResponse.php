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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAppUsr返回参数结构体
 *
 * @method string getCunionId() 获取厂商云标识用户的唯一ID
 * @method void setCunionId(string $CunionId) 设置厂商云标识用户的唯一ID
 * @method string getAccessId() 获取客户的终端用户在IoT Video上的唯一标识ID
 * @method void setAccessId(string $AccessId) 设置客户的终端用户在IoT Video上的唯一标识ID
 * @method boolean getNewRegist() 获取用户是否为新创建
 * @method void setNewRegist(boolean $NewRegist) 设置用户是否为新创建
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAppUsrResponse extends AbstractModel
{
    /**
     * @var string 厂商云标识用户的唯一ID
     */
    public $CunionId;

    /**
     * @var string 客户的终端用户在IoT Video上的唯一标识ID
     */
    public $AccessId;

    /**
     * @var boolean 用户是否为新创建
     */
    public $NewRegist;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CunionId 厂商云标识用户的唯一ID
     * @param string $AccessId 客户的终端用户在IoT Video上的唯一标识ID
     * @param boolean $NewRegist 用户是否为新创建
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
        if (array_key_exists("CunionId",$param) and $param["CunionId"] !== null) {
            $this->CunionId = $param["CunionId"];
        }

        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("NewRegist",$param) and $param["NewRegist"] !== null) {
            $this->NewRegist = $param["NewRegist"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
