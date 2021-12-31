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
 * DescribeProjects请求参数结构体
 *
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取页面大小
 * @method void setPageSize(integer $PageSize) 设置页面大小
 * @method string getSearchWord() 获取过滤规则
 * @method void setSearchWord(string $SearchWord) 设置过滤规则
 * @method Filters getFilters() 获取部门范围过滤
 * @method void setFilters(Filters $Filters) 设置部门范围过滤
 * @method integer getProjectStatus() 获取项目状态, 0:编辑中 1:运营中 2:已下线 3:已删除 4:审批中
 * @method void setProjectStatus(integer $ProjectStatus) 设置项目状态, 0:编辑中 1:运营中 2:已下线 3:已删除 4:审批中
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNo;

    /**
     * @var integer 页面大小
     */
    public $PageSize;

    /**
     * @var string 过滤规则
     */
    public $SearchWord;

    /**
     * @var Filters 部门范围过滤
     */
    public $Filters;

    /**
     * @var integer 项目状态, 0:编辑中 1:运营中 2:已下线 3:已删除 4:审批中
     */
    public $ProjectStatus;

    /**
     * @param integer $PageNo 页码
     * @param integer $PageSize 页面大小
     * @param string $SearchWord 过滤规则
     * @param Filters $Filters 部门范围过滤
     * @param integer $ProjectStatus 项目状态, 0:编辑中 1:运营中 2:已下线 3:已删除 4:审批中
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
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filters();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("ProjectStatus",$param) and $param["ProjectStatus"] !== null) {
            $this->ProjectStatus = $param["ProjectStatus"];
        }
    }
}
