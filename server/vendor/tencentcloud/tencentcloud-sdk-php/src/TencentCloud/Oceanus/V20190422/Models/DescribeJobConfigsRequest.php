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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobConfigs请求参数结构体
 *
 * @method string getJobId() 获取作业Id
 * @method void setJobId(string $JobId) 设置作业Id
 * @method array getJobConfigVersions() 获取作业配置版本
 * @method void setJobConfigVersions(array $JobConfigVersions) 设置作业配置版本
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取分页大小，默认20，最大100
 * @method void setLimit(integer $Limit) 设置分页大小，默认20，最大100
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method boolean getOnlyDraft() 获取true 表示只展示草稿
 * @method void setOnlyDraft(boolean $OnlyDraft) 设置true 表示只展示草稿
 */
class DescribeJobConfigsRequest extends AbstractModel
{
    /**
     * @var string 作业Id
     */
    public $JobId;

    /**
     * @var array 作业配置版本
     */
    public $JobConfigVersions;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 分页大小，默认20，最大100
     */
    public $Limit;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var boolean true 表示只展示草稿
     */
    public $OnlyDraft;

    /**
     * @param string $JobId 作业Id
     * @param array $JobConfigVersions 作业配置版本
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 分页大小，默认20，最大100
     * @param array $Filters 过滤条件
     * @param boolean $OnlyDraft true 表示只展示草稿
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobConfigVersions",$param) and $param["JobConfigVersions"] !== null) {
            $this->JobConfigVersions = $param["JobConfigVersions"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OnlyDraft",$param) and $param["OnlyDraft"] !== null) {
            $this->OnlyDraft = $param["OnlyDraft"];
        }
    }
}
