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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseProjectLatestVersionList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getPageSize() 获取个数
 * @method void setPageSize(integer $PageSize) 设置个数
 * @method string getEnvId() 获取环境id, 非必填
 * @method void setEnvId(string $EnvId) 设置环境id, 非必填
 * @method string getProjectName() 获取项目名称, 非必填
 * @method void setProjectName(string $ProjectName) 设置项目名称, 非必填
 * @method string getProjectType() 获取项目类型: framework-oneclick,qci-extension-cicd
 * @method void setProjectType(string $ProjectType) 设置项目类型: framework-oneclick,qci-extension-cicd
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class DescribeCloudBaseProjectLatestVersionListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 个数
     */
    public $PageSize;

    /**
     * @var string 环境id, 非必填
     */
    public $EnvId;

    /**
     * @var string 项目名称, 非必填
     */
    public $ProjectName;

    /**
     * @var string 项目类型: framework-oneclick,qci-extension-cicd
     */
    public $ProjectType;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param integer $Offset 偏移量
     * @param integer $PageSize 个数
     * @param string $EnvId 环境id, 非必填
     * @param string $ProjectName 项目名称, 非必填
     * @param string $ProjectType 项目类型: framework-oneclick,qci-extension-cicd
     * @param array $Tags 标签
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectType",$param) and $param["ProjectType"] !== null) {
            $this->ProjectType = $param["ProjectType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
