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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDisasterRecoverGroupAttribute请求参数结构体
 *
 * @method string getDisasterRecoverGroupId() 获取分散置放群组ID，可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取。
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置分散置放群组ID，可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取。
 * @method string getName() 获取分散置放群组名称，长度1-60个字符，支持中、英文。
 * @method void setName(string $Name) 设置分散置放群组名称，长度1-60个字符，支持中、英文。
 */
class ModifyDisasterRecoverGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 分散置放群组ID，可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取。
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string 分散置放群组名称，长度1-60个字符，支持中、英文。
     */
    public $Name;

    /**
     * @param string $DisasterRecoverGroupId 分散置放群组ID，可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取。
     * @param string $Name 分散置放群组名称，长度1-60个字符，支持中、英文。
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
