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
 * DescribeProject返回参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method float getProjectBudget() 获取项目预算
 * @method void setProjectBudget(float $ProjectBudget) 设置项目预算
 * @method string getProjectOrg() 获取项目机构
 * @method void setProjectOrg(string $ProjectOrg) 设置项目机构
 * @method string getProjectIntroduction() 获取项目简介
 * @method void setProjectIntroduction(string $ProjectIntroduction) 设置项目简介
 * @method array getSubProjectList() 获取子项目列表
 * @method void setSubProjectList(array $SubProjectList) 设置子项目列表
 * @method string getProjectStatus() 获取项目状态
 * @method void setProjectStatus(string $ProjectStatus) 设置项目状态
 * @method string getProjectOrgId() 获取项目机构Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectOrgId(string $ProjectOrgId) 设置项目机构Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProjectResponse extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var float 项目预算
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
     * @var array 子项目列表
     */
    public $SubProjectList;

    /**
     * @var string 项目状态
     */
    public $ProjectStatus;

    /**
     * @var string 项目机构Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectOrgId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ProjectId 项目id
     * @param string $ProjectName 项目名称
     * @param float $ProjectBudget 项目预算
     * @param string $ProjectOrg 项目机构
     * @param string $ProjectIntroduction 项目简介
     * @param array $SubProjectList 子项目列表
     * @param string $ProjectStatus 项目状态
     * @param string $ProjectOrgId 项目机构Id
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("SubProjectList",$param) and $param["SubProjectList"] !== null) {
            $this->SubProjectList = [];
            foreach ($param["SubProjectList"] as $key => $value){
                $obj = new SubProjectInfo();
                $obj->deserialize($value);
                array_push($this->SubProjectList, $obj);
            }
        }

        if (array_key_exists("ProjectStatus",$param) and $param["ProjectStatus"] !== null) {
            $this->ProjectStatus = $param["ProjectStatus"];
        }

        if (array_key_exists("ProjectOrgId",$param) and $param["ProjectOrgId"] !== null) {
            $this->ProjectOrgId = $param["ProjectOrgId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
