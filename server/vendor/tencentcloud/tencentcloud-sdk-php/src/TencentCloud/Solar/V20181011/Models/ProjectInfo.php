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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目基础信息
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getProjectOrg() 获取项目所属机构
 * @method void setProjectOrg(string $ProjectOrg) 设置项目所属机构
 * @method float getProjectBudget() 获取项目预算
 * @method void setProjectBudget(float $ProjectBudget) 设置项目预算
 * @method string getProjectStatus() 获取项目状态
 * @method void setProjectStatus(string $ProjectStatus) 设置项目状态
 * @method string getCreateTime() 获取项目创建时间
 * @method void setCreateTime(string $CreateTime) 设置项目创建时间
 * @method string getProjectIntroduction() 获取项目简介
 * @method void setProjectIntroduction(string $ProjectIntroduction) 设置项目简介
 * @method string getProjectOrgId() 获取项目所属机构Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectOrgId(string $ProjectOrgId) 设置项目所属机构Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectInfo extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 项目所属机构
     */
    public $ProjectOrg;

    /**
     * @var float 项目预算
     */
    public $ProjectBudget;

    /**
     * @var string 项目状态
     */
    public $ProjectStatus;

    /**
     * @var string 项目创建时间
     */
    public $CreateTime;

    /**
     * @var string 项目简介
     */
    public $ProjectIntroduction;

    /**
     * @var string 项目所属机构Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectOrgId;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ProjectName 项目名称
     * @param string $ProjectOrg 项目所属机构
     * @param float $ProjectBudget 项目预算
     * @param string $ProjectStatus 项目状态
     * @param string $CreateTime 项目创建时间
     * @param string $ProjectIntroduction 项目简介
     * @param string $ProjectOrgId 项目所属机构Id
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectOrg",$param) and $param["ProjectOrg"] !== null) {
            $this->ProjectOrg = $param["ProjectOrg"];
        }

        if (array_key_exists("ProjectBudget",$param) and $param["ProjectBudget"] !== null) {
            $this->ProjectBudget = $param["ProjectBudget"];
        }

        if (array_key_exists("ProjectStatus",$param) and $param["ProjectStatus"] !== null) {
            $this->ProjectStatus = $param["ProjectStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectIntroduction",$param) and $param["ProjectIntroduction"] !== null) {
            $this->ProjectIntroduction = $param["ProjectIntroduction"];
        }

        if (array_key_exists("ProjectOrgId",$param) and $param["ProjectOrgId"] !== null) {
            $this->ProjectOrgId = $param["ProjectOrgId"];
        }
    }
}
