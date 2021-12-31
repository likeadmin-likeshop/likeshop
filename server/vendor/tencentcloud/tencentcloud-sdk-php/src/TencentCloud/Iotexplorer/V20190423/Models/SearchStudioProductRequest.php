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
 * SearchStudioProduct请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method integer getLimit() 获取列表Limit
 * @method void setLimit(integer $Limit) 设置列表Limit
 * @method integer getOffset() 获取列表Offset
 * @method void setOffset(integer $Offset) 设置列表Offset
 * @method string getDevStatus() 获取产品Status
 * @method void setDevStatus(string $DevStatus) 设置产品Status
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 */
class SearchStudioProductRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var integer 列表Limit
     */
    public $Limit;

    /**
     * @var integer 列表Offset
     */
    public $Offset;

    /**
     * @var string 产品Status
     */
    public $DevStatus;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ProductName 产品名称
     * @param integer $Limit 列表Limit
     * @param integer $Offset 列表Offset
     * @param string $DevStatus 产品Status
     * @param string $ProductId 产品ID
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

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DevStatus",$param) and $param["DevStatus"] !== null) {
            $this->DevStatus = $param["DevStatus"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
