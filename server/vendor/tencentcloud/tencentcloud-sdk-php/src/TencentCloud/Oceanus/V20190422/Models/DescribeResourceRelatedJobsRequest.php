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
 * DescribeResourceRelatedJobs请求参数结构体
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method integer getDESCByJobConfigCreateTime() 获取默认0;   1： 按照作业版本创建时间降序
 * @method void setDESCByJobConfigCreateTime(integer $DESCByJobConfigCreateTime) 设置默认0;   1： 按照作业版本创建时间降序
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取分页大小，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置分页大小，默认为20，最大值为100
 */
class DescribeResourceRelatedJobsRequest extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var integer 默认0;   1： 按照作业版本创建时间降序
     */
    public $DESCByJobConfigCreateTime;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 分页大小，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @param string $ResourceId 资源ID
     * @param integer $DESCByJobConfigCreateTime 默认0;   1： 按照作业版本创建时间降序
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 分页大小，默认为20，最大值为100
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("DESCByJobConfigCreateTime",$param) and $param["DESCByJobConfigCreateTime"] !== null) {
            $this->DESCByJobConfigCreateTime = $param["DESCByJobConfigCreateTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
