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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenProVersion请求参数结构体
 *
 * @method string getMachineType() 获取云主机类型。
<li>CVM：表示虚拟主机</li>
<li>BM:  表示黑石物理机</li>
 * @method void setMachineType(string $MachineType) 设置云主机类型。
<li>CVM：表示虚拟主机</li>
<li>BM:  表示黑石物理机</li>
 * @method string getMachineRegion() 获取机器所属地域。
如：ap-guangzhou，ap-shanghai
 * @method void setMachineRegion(string $MachineRegion) 设置机器所属地域。
如：ap-guangzhou，ap-shanghai
 * @method array getQuuids() 获取主机唯一标识Uuid数组。
黑石的InstanceId，CVM的Uuid
 * @method void setQuuids(array $Quuids) 设置主机唯一标识Uuid数组。
黑石的InstanceId，CVM的Uuid
 * @method integer getActivityId() 获取活动ID。
 * @method void setActivityId(integer $ActivityId) 设置活动ID。
 */
class OpenProVersionRequest extends AbstractModel
{
    /**
     * @var string 云主机类型。
<li>CVM：表示虚拟主机</li>
<li>BM:  表示黑石物理机</li>
     */
    public $MachineType;

    /**
     * @var string 机器所属地域。
如：ap-guangzhou，ap-shanghai
     */
    public $MachineRegion;

    /**
     * @var array 主机唯一标识Uuid数组。
黑石的InstanceId，CVM的Uuid
     */
    public $Quuids;

    /**
     * @var integer 活动ID。
     */
    public $ActivityId;

    /**
     * @param string $MachineType 云主机类型。
<li>CVM：表示虚拟主机</li>
<li>BM:  表示黑石物理机</li>
     * @param string $MachineRegion 机器所属地域。
如：ap-guangzhou，ap-shanghai
     * @param array $Quuids 主机唯一标识Uuid数组。
黑石的InstanceId，CVM的Uuid
     * @param integer $ActivityId 活动ID。
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }
    }
}
