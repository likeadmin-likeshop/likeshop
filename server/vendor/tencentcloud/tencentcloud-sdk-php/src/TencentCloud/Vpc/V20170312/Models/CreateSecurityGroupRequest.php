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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityGroup请求参数结构体
 *
 * @method string getGroupName() 获取安全组名称，可任意命名，但不得超过60个字符。
 * @method void setGroupName(string $GroupName) 设置安全组名称，可任意命名，但不得超过60个字符。
 * @method string getGroupDescription() 获取安全组备注，最多100个字符。
 * @method void setGroupDescription(string $GroupDescription) 设置安全组备注，最多100个字符。
 * @method string getProjectId() 获取项目ID，默认0。可在qcloud控制台项目管理页面查询到。
 * @method void setProjectId(string $ProjectId) 设置项目ID，默认0。可在qcloud控制台项目管理页面查询到。
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 */
class CreateSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string 安全组名称，可任意命名，但不得超过60个字符。
     */
    public $GroupName;

    /**
     * @var string 安全组备注，最多100个字符。
     */
    public $GroupDescription;

    /**
     * @var string 项目ID，默认0。可在qcloud控制台项目管理页面查询到。
     */
    public $ProjectId;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @param string $GroupName 安全组名称，可任意命名，但不得超过60个字符。
     * @param string $GroupDescription 安全组备注，最多100个字符。
     * @param string $ProjectId 项目ID，默认0。可在qcloud控制台项目管理页面查询到。
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
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

        if (array_key_exists("GroupDescription",$param) and $param["GroupDescription"] !== null) {
            $this->GroupDescription = $param["GroupDescription"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
