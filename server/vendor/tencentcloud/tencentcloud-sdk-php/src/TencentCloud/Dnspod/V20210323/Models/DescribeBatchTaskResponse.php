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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBatchTask返回参数结构体
 *
 * @method array getDetailList() 获取批量任务详情
 * @method void setDetailList(array $DetailList) 设置批量任务详情
 * @method integer getTotalCount() 获取总任务条数
 * @method void setTotalCount(integer $TotalCount) 设置总任务条数
 * @method integer getSuccessCount() 获取成功条数
 * @method void setSuccessCount(integer $SuccessCount) 设置成功条数
 * @method integer getFailCount() 获取失败条数
 * @method void setFailCount(integer $FailCount) 设置失败条数
 * @method string getJobType() 获取批量任务类型
 * @method void setJobType(string $JobType) 设置批量任务类型
 * @method string getCreatedAt() 获取任务创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置任务创建时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBatchTaskResponse extends AbstractModel
{
    /**
     * @var array 批量任务详情
     */
    public $DetailList;

    /**
     * @var integer 总任务条数
     */
    public $TotalCount;

    /**
     * @var integer 成功条数
     */
    public $SuccessCount;

    /**
     * @var integer 失败条数
     */
    public $FailCount;

    /**
     * @var string 批量任务类型
     */
    public $JobType;

    /**
     * @var string 任务创建时间
     */
    public $CreatedAt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DetailList 批量任务详情
     * @param integer $TotalCount 总任务条数
     * @param integer $SuccessCount 成功条数
     * @param integer $FailCount 失败条数
     * @param string $JobType 批量任务类型
     * @param string $CreatedAt 任务创建时间
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
        if (array_key_exists("DetailList",$param) and $param["DetailList"] !== null) {
            $this->DetailList = [];
            foreach ($param["DetailList"] as $key => $value){
                $obj = new DescribeBatchTaskDetail();
                $obj->deserialize($value);
                array_push($this->DetailList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
