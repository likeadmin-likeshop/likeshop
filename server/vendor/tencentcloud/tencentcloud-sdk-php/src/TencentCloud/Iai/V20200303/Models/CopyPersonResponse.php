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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyPerson返回参数结构体
 *
 * @method integer getSucGroupNum() 获取成功加入的人员库数量
 * @method void setSucGroupNum(integer $SucGroupNum) 设置成功加入的人员库数量
 * @method array getSucGroupIds() 获取成功加入的人员库列表
 * @method void setSucGroupIds(array $SucGroupIds) 设置成功加入的人员库列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CopyPersonResponse extends AbstractModel
{
    /**
     * @var integer 成功加入的人员库数量
     */
    public $SucGroupNum;

    /**
     * @var array 成功加入的人员库列表
     */
    public $SucGroupIds;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SucGroupNum 成功加入的人员库数量
     * @param array $SucGroupIds 成功加入的人员库列表
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
        if (array_key_exists("SucGroupNum",$param) and $param["SucGroupNum"] !== null) {
            $this->SucGroupNum = $param["SucGroupNum"];
        }

        if (array_key_exists("SucGroupIds",$param) and $param["SucGroupIds"] !== null) {
            $this->SucGroupIds = $param["SucGroupIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
