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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMultiDevices返回参数结构体
 *
 * @method string getTaskId() 获取任务 ID，由批量创建设备接口返回
 * @method void setTaskId(string $TaskId) 设置任务 ID，由批量创建设备接口返回
 * @method array getDevicesInfo() 获取设备详细信息列表
 * @method void setDevicesInfo(array $DevicesInfo) 设置设备详细信息列表
 * @method integer getTotalDevNum() 获取该任务创建设备的总数
 * @method void setTotalDevNum(integer $TotalDevNum) 设置该任务创建设备的总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMultiDevicesResponse extends AbstractModel
{
    /**
     * @var string 任务 ID，由批量创建设备接口返回
     */
    public $TaskId;

    /**
     * @var array 设备详细信息列表
     */
    public $DevicesInfo;

    /**
     * @var integer 该任务创建设备的总数
     */
    public $TotalDevNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 任务 ID，由批量创建设备接口返回
     * @param array $DevicesInfo 设备详细信息列表
     * @param integer $TotalDevNum 该任务创建设备的总数
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DevicesInfo",$param) and $param["DevicesInfo"] !== null) {
            $this->DevicesInfo = [];
            foreach ($param["DevicesInfo"] as $key => $value){
                $obj = new MultiDevicesInfo();
                $obj->deserialize($value);
                array_push($this->DevicesInfo, $obj);
            }
        }

        if (array_key_exists("TotalDevNum",$param) and $param["TotalDevNum"] !== null) {
            $this->TotalDevNum = $param["TotalDevNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
