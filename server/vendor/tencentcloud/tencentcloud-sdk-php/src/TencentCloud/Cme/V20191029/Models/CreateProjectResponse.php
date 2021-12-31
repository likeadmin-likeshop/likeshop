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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProject返回参数结构体
 *
 * @method string getProjectId() 获取项目 Id。
 * @method void setProjectId(string $ProjectId) 设置项目 Id。
 * @method array getRtmpPushInputInfoSet() 获取输入源推流信息。
 <li> 当 Catagory 为 STREAM_CONNECT 时，数组返回长度为 2 ，第 0 个代表主输入源，第 1 个代表备输入源。只有当各自输入源类型为推流时才有有效内容。</li>
 * @method void setRtmpPushInputInfoSet(array $RtmpPushInputInfoSet) 设置输入源推流信息。
 <li> 当 Catagory 为 STREAM_CONNECT 时，数组返回长度为 2 ，第 0 个代表主输入源，第 1 个代表备输入源。只有当各自输入源类型为推流时才有有效内容。</li>
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateProjectResponse extends AbstractModel
{
    /**
     * @var string 项目 Id。
     */
    public $ProjectId;

    /**
     * @var array 输入源推流信息。
 <li> 当 Catagory 为 STREAM_CONNECT 时，数组返回长度为 2 ，第 0 个代表主输入源，第 1 个代表备输入源。只有当各自输入源类型为推流时才有有效内容。</li>
     */
    public $RtmpPushInputInfoSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ProjectId 项目 Id。
     * @param array $RtmpPushInputInfoSet 输入源推流信息。
 <li> 当 Catagory 为 STREAM_CONNECT 时，数组返回长度为 2 ，第 0 个代表主输入源，第 1 个代表备输入源。只有当各自输入源类型为推流时才有有效内容。</li>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RtmpPushInputInfoSet",$param) and $param["RtmpPushInputInfoSet"] !== null) {
            $this->RtmpPushInputInfoSet = [];
            foreach ($param["RtmpPushInputInfoSet"] as $key => $value){
                $obj = new RtmpPushInputInfo();
                $obj->deserialize($value);
                array_push($this->RtmpPushInputInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
