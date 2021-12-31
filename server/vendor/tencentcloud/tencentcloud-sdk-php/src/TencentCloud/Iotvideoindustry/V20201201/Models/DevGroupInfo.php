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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备所在分组信息
 *
 * @method string getDeviceId() 获取设备唯一标识
 * @method void setDeviceId(string $DeviceId) 设置设备唯一标识
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method string getGroupPath() 获取分组路径
 * @method void setGroupPath(string $GroupPath) 设置分组路径
 * @method string getParentId() 获取父分组ID
 * @method void setParentId(string $ParentId) 设置父分组ID
 * @method string getError() 获取设备错误，仅在用户没权限或者设备已删除时返回具体结果
 * @method void setError(string $Error) 设置设备错误，仅在用户没权限或者设备已删除时返回具体结果
 */
class DevGroupInfo extends AbstractModel
{
    /**
     * @var string 设备唯一标识
     */
    public $DeviceId;

    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var string 分组路径
     */
    public $GroupPath;

    /**
     * @var string 父分组ID
     */
    public $ParentId;

    /**
     * @var string 设备错误，仅在用户没权限或者设备已删除时返回具体结果
     */
    public $Error;

    /**
     * @param string $DeviceId 设备唯一标识
     * @param string $GroupId 分组ID
     * @param string $GroupPath 分组路径
     * @param string $ParentId 父分组ID
     * @param string $Error 设备错误，仅在用户没权限或者设备已删除时返回具体结果
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupPath",$param) and $param["GroupPath"] !== null) {
            $this->GroupPath = $param["GroupPath"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
