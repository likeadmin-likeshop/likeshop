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
 * GetUpgradeGroupFaceModelVersionJobList返回参数结构体
 *
 * @method array getJobInfos() 获取人员库升级任务信息列表。
 * @method void setJobInfos(array $JobInfos) 设置人员库升级任务信息列表。
 * @method integer getJobNum() 获取升级任务总数量。
 * @method void setJobNum(integer $JobNum) 设置升级任务总数量。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetUpgradeGroupFaceModelVersionJobListResponse extends AbstractModel
{
    /**
     * @var array 人员库升级任务信息列表。
     */
    public $JobInfos;

    /**
     * @var integer 升级任务总数量。
     */
    public $JobNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $JobInfos 人员库升级任务信息列表。
     * @param integer $JobNum 升级任务总数量。
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
        if (array_key_exists("JobInfos",$param) and $param["JobInfos"] !== null) {
            $this->JobInfos = [];
            foreach ($param["JobInfos"] as $key => $value){
                $obj = new UpgradeJobInfo();
                $obj->deserialize($value);
                array_push($this->JobInfos, $obj);
            }
        }

        if (array_key_exists("JobNum",$param) and $param["JobNum"] !== null) {
            $this->JobNum = $param["JobNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
