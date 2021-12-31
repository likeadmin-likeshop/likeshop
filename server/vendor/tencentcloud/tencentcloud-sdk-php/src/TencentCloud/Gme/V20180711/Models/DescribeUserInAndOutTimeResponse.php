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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserInAndOutTime返回参数结构体
 *
 * @method array getInOutList() 获取用户在房间得进出时间列表
 * @method void setInOutList(array $InOutList) 设置用户在房间得进出时间列表
 * @method integer getDuration() 获取用户在房间中总时长
 * @method void setDuration(integer $Duration) 设置用户在房间中总时长
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserInAndOutTimeResponse extends AbstractModel
{
    /**
     * @var array 用户在房间得进出时间列表
     */
    public $InOutList;

    /**
     * @var integer 用户在房间中总时长
     */
    public $Duration;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InOutList 用户在房间得进出时间列表
     * @param integer $Duration 用户在房间中总时长
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
        if (array_key_exists("InOutList",$param) and $param["InOutList"] !== null) {
            $this->InOutList = [];
            foreach ($param["InOutList"] as $key => $value){
                $obj = new InOutTimeInfo();
                $obj->deserialize($value);
                array_push($this->InOutList, $obj);
            }
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
