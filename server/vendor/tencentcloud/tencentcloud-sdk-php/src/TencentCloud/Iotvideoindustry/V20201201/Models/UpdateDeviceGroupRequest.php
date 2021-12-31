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
 * UpdateDeviceGroup请求参数结构体
 *
 * @method string getGroupName() 获取分组名称
 * @method void setGroupName(string $GroupName) 设置分组名称
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method string getGroupDescribe() 获取分组描述
 * @method void setGroupDescribe(string $GroupDescribe) 设置分组描述
 * @method string getNewParentId() 获取新父分组ID，用于修改分组路径
 * @method void setNewParentId(string $NewParentId) 设置新父分组ID，用于修改分组路径
 */
class UpdateDeviceGroupRequest extends AbstractModel
{
    /**
     * @var string 分组名称
     */
    public $GroupName;

    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var string 分组描述
     */
    public $GroupDescribe;

    /**
     * @var string 新父分组ID，用于修改分组路径
     */
    public $NewParentId;

    /**
     * @param string $GroupName 分组名称
     * @param string $GroupId 分组ID
     * @param string $GroupDescribe 分组描述
     * @param string $NewParentId 新父分组ID，用于修改分组路径
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupDescribe",$param) and $param["GroupDescribe"] !== null) {
            $this->GroupDescribe = $param["GroupDescribe"];
        }

        if (array_key_exists("NewParentId",$param) and $param["NewParentId"] !== null) {
            $this->NewParentId = $param["NewParentId"];
        }
    }
}
