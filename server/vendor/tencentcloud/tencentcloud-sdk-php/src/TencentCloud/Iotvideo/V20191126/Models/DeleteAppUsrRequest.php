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
 * DeleteAppUsr请求参数结构体
 *
 * @method string getAccessId() 获取客户的终端用户在IoT Video上的唯一标识ID
 * @method void setAccessId(string $AccessId) 设置客户的终端用户在IoT Video上的唯一标识ID
 */
class DeleteAppUsrRequest extends AbstractModel
{
    /**
     * @var string 客户的终端用户在IoT Video上的唯一标识ID
     */
    public $AccessId;

    /**
     * @param string $AccessId 客户的终端用户在IoT Video上的唯一标识ID
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
        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }
    }
}
