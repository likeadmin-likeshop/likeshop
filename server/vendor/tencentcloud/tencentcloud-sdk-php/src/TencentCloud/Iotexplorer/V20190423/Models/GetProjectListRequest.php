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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetProjectList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取个数限制
 * @method void setLimit(integer $Limit) 设置个数限制
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getProjectId() 获取按项目D搜索
 * @method void setProjectId(string $ProjectId) 设置按项目D搜索
 * @method string getProductId() 获取按产品ID搜索
 * @method void setProductId(string $ProductId) 设置按产品ID搜索
 * @method array getIncludes() 获取加载 ProductCount、DeviceCount、ApplicationCount，可选值：ProductCount、DeviceCount、ApplicationCount，可多选
 * @method void setIncludes(array $Includes) 设置加载 ProductCount、DeviceCount、ApplicationCount，可选值：ProductCount、DeviceCount、ApplicationCount，可多选
 * @method string getProjectName() 获取按项目名称搜索
 * @method void setProjectName(string $ProjectName) 设置按项目名称搜索
 */
class GetProjectListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 个数限制
     */
    public $Limit;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 按项目D搜索
     */
    public $ProjectId;

    /**
     * @var string 按产品ID搜索
     */
    public $ProductId;

    /**
     * @var array 加载 ProductCount、DeviceCount、ApplicationCount，可选值：ProductCount、DeviceCount、ApplicationCount，可多选
     */
    public $Includes;

    /**
     * @var string 按项目名称搜索
     */
    public $ProjectName;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 个数限制
     * @param string $InstanceId 实例ID
     * @param string $ProjectId 按项目D搜索
     * @param string $ProductId 按产品ID搜索
     * @param array $Includes 加载 ProductCount、DeviceCount、ApplicationCount，可选值：ProductCount、DeviceCount、ApplicationCount，可多选
     * @param string $ProjectName 按项目名称搜索
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Includes",$param) and $param["Includes"] !== null) {
            $this->Includes = $param["Includes"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
