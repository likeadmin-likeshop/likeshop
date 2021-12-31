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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 技能组信息
 *
 * @method integer getSkillGroupId() 获取技能组ID
 * @method void setSkillGroupId(integer $SkillGroupId) 设置技能组ID
 * @method string getSkillGroupName() 获取技能组名称
 * @method void setSkillGroupName(string $SkillGroupName) 设置技能组名称
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method string getType() 获取类型：IM、TEL、ALL（全媒体）
 * @method void setType(string $Type) 设置类型：IM、TEL、ALL（全媒体）
 */
class SkillGroupItem extends AbstractModel
{
    /**
     * @var integer 技能组ID
     */
    public $SkillGroupId;

    /**
     * @var string 技能组名称
     */
    public $SkillGroupName;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var string 类型：IM、TEL、ALL（全媒体）
     */
    public $Type;

    /**
     * @param integer $SkillGroupId 技能组ID
     * @param string $SkillGroupName 技能组名称
     * @param integer $Priority 优先级
     * @param string $Type 类型：IM、TEL、ALL（全媒体）
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
        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
