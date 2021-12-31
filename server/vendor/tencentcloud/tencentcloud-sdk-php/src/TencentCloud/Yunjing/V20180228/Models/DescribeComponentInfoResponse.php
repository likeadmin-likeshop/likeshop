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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComponentInfo返回参数结构体
 *
 * @method integer getId() 获取组件ID。
 * @method void setId(integer $Id) 设置组件ID。
 * @method string getComponentName() 获取组件名称。
 * @method void setComponentName(string $ComponentName) 设置组件名称。
 * @method string getComponentType() 获取组件类型。
<li>WEB：web组件</li>
<li>SYSTEM：系统组件</li>
 * @method void setComponentType(string $ComponentType) 设置组件类型。
<li>WEB：web组件</li>
<li>SYSTEM：系统组件</li>
 * @method string getHomepage() 获取组件官网。
 * @method void setHomepage(string $Homepage) 设置组件官网。
 * @method string getDescription() 获取组件描述。
 * @method void setDescription(string $Description) 设置组件描述。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeComponentInfoResponse extends AbstractModel
{
    /**
     * @var integer 组件ID。
     */
    public $Id;

    /**
     * @var string 组件名称。
     */
    public $ComponentName;

    /**
     * @var string 组件类型。
<li>WEB：web组件</li>
<li>SYSTEM：系统组件</li>
     */
    public $ComponentType;

    /**
     * @var string 组件官网。
     */
    public $Homepage;

    /**
     * @var string 组件描述。
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id 组件ID。
     * @param string $ComponentName 组件名称。
     * @param string $ComponentType 组件类型。
<li>WEB：web组件</li>
<li>SYSTEM：系统组件</li>
     * @param string $Homepage 组件官网。
     * @param string $Description 组件描述。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("Homepage",$param) and $param["Homepage"] !== null) {
            $this->Homepage = $param["Homepage"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
