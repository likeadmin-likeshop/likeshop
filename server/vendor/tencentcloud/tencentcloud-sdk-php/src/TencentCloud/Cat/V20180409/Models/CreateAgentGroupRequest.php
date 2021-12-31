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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAgentGroup请求参数结构体
 *
 * @method string getGroupName() 获取拨测分组名称，不超过32个字符
 * @method void setGroupName(string $GroupName) 设置拨测分组名称，不超过32个字符
 * @method integer getIsDefault() 获取是否为默认分组，取值可为 0 或 1。取 1 时表示设置为默认分组
 * @method void setIsDefault(integer $IsDefault) 设置是否为默认分组，取值可为 0 或 1。取 1 时表示设置为默认分组
 * @method array getAgents() 获取Province, Isp 需要成对地进行选择。参数对的取值范围。参见：DescribeAgents 的返回结果。
 * @method void setAgents(array $Agents) 设置Province, Isp 需要成对地进行选择。参数对的取值范围。参见：DescribeAgents 的返回结果。
 */
class CreateAgentGroupRequest extends AbstractModel
{
    /**
     * @var string 拨测分组名称，不超过32个字符
     */
    public $GroupName;

    /**
     * @var integer 是否为默认分组，取值可为 0 或 1。取 1 时表示设置为默认分组
     */
    public $IsDefault;

    /**
     * @var array Province, Isp 需要成对地进行选择。参数对的取值范围。参见：DescribeAgents 的返回结果。
     */
    public $Agents;

    /**
     * @param string $GroupName 拨测分组名称，不超过32个字符
     * @param integer $IsDefault 是否为默认分组，取值可为 0 或 1。取 1 时表示设置为默认分组
     * @param array $Agents Province, Isp 需要成对地进行选择。参数对的取值范围。参见：DescribeAgents 的返回结果。
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

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Agents",$param) and $param["Agents"] !== null) {
            $this->Agents = [];
            foreach ($param["Agents"] as $key => $value){
                $obj = new CatAgent();
                $obj->deserialize($value);
                array_push($this->Agents, $obj);
            }
        }
    }
}
