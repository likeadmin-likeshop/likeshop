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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProxyGroupAttribute请求参数结构体
 *
 * @method string getGroupId() 获取需要修改的通道组ID。
 * @method void setGroupId(string $GroupId) 设置需要修改的通道组ID。
 * @method string getGroupName() 获取修改后的通道组名称：不超过30个字符，超过部分会被截断。
 * @method void setGroupName(string $GroupName) 设置修改后的通道组名称：不超过30个字符，超过部分会被截断。
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 */
class ModifyProxyGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 需要修改的通道组ID。
     */
    public $GroupId;

    /**
     * @var string 修改后的通道组名称：不超过30个字符，超过部分会被截断。
     */
    public $GroupName;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @param string $GroupId 需要修改的通道组ID。
     * @param string $GroupName 修改后的通道组名称：不超过30个字符，超过部分会被截断。
     * @param integer $ProjectId 项目ID
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
