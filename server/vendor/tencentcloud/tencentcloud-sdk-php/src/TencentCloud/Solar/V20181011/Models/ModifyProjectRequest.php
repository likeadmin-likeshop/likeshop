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
 * ModifyProject请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getProjectBudget() 获取项目预算
 * @method void setProjectBudget(string $ProjectBudget) 设置项目预算
 * @method string getProjectOrg() 获取项目机构
 * @method void setProjectOrg(string $ProjectOrg) 设置项目机构
 * @method string getProjectIntroduction() 获取项目简介
 * @method void setProjectIntroduction(string $ProjectIntroduction) 设置项目简介
 * @method string getProjectOrgId() 获取项目机构Id
 * @method void setProjectOrgId(string $ProjectOrgId) 设置项目机构Id
 */
class ModifyProjectRequest extends AbstractModel
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
     * @var string 项目预算
     */
    public $ProjectBudget;

    /**
     * @var string 项目机构
     */
    public $ProjectOrg;

    /**
     * @var string 项目简介
     */
    public $ProjectIntroduction;

    /**
     * @var string 项目机构Id
     */
    public $ProjectOrgId;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ProjectName 项目名称
     * @param string $ProjectBudget 项目预算
     * @param string $ProjectOrg 项目机构
     * @param string $ProjectIntroduction 项目简介
     * @param string $ProjectOrgId 项目机构Id
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

        if (array_key_exists("ProjectBudget",$param) and $param["ProjectBudget"] !== null) {
            $this->ProjectBudget = $param["ProjectBudget"];
        }

        if (array_key_exists("ProjectOrg",$param) and $param["ProjectOrg"] !== null) {
            $this->ProjectOrg = $param["ProjectOrg"];
        }

        if (array_key_exists("ProjectIntroduction",$param) and $param["ProjectIntroduction"] !== null) {
            $this->ProjectIntroduction = $param["ProjectIntroduction"];
        }

        if (array_key_exists("ProjectOrgId",$param) and $param["ProjectOrgId"] !== null) {
            $this->ProjectOrgId = $param["ProjectOrgId"];
        }
    }
}
