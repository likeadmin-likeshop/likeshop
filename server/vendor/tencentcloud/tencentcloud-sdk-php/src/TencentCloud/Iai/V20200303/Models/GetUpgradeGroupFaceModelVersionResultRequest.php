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
 * GetUpgradeGroupFaceModelVersionResult请求参数结构体
 *
 * @method string getJobId() 获取升级任务ID，用于查询、获取人员库升级的进度和结果。
 * @method void setJobId(string $JobId) 设置升级任务ID，用于查询、获取人员库升级的进度和结果。
 */
class GetUpgradeGroupFaceModelVersionResultRequest extends AbstractModel
{
    /**
     * @var string 升级任务ID，用于查询、获取人员库升级的进度和结果。
     */
    public $JobId;

    /**
     * @param string $JobId 升级任务ID，用于查询、获取人员库升级的进度和结果。
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
