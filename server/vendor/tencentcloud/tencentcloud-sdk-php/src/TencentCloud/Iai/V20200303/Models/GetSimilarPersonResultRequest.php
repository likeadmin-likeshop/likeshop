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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSimilarPersonResult请求参数结构体
 *
 * @method string getJobId() 获取查重任务ID，用于查询、获取查重的进度和结果。取值为人员查重接口返回的JobId
 * @method void setJobId(string $JobId) 设置查重任务ID，用于查询、获取查重的进度和结果。取值为人员查重接口返回的JobId
 */
class GetSimilarPersonResultRequest extends AbstractModel
{
    /**
     * @var string 查重任务ID，用于查询、获取查重的进度和结果。取值为人员查重接口返回的JobId
     */
    public $JobId;

    /**
     * @param string $JobId 查重任务ID，用于查询、获取查重的进度和结果。取值为人员查重接口返回的JobId
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
    }
}
