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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RefundStorageService返回参数结构体
 *
 * @method string getServiceId() 获取云存服务ID
 * @method void setServiceId(string $ServiceId) 设置云存服务ID
 * @method string getStorageRegion() 获取云存服务所在的区域
 * @method void setStorageRegion(string $StorageRegion) 设置云存服务所在的区域
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method integer getChnNum() 获取视频流通道号。(对于存在多路视频流的设备，如NVR设备，与设备实际视频流通道号对应)
 * @method void setChnNum(integer $ChnNum) 设置视频流通道号。(对于存在多路视频流的设备，如NVR设备，与设备实际视频流通道号对应)
 * @method string getAccessId() 获取终端用户在IoT Video平台的注册ID
 * @method void setAccessId(string $AccessId) 设置终端用户在IoT Video平台的注册ID
 * @method integer getStartTime() 获取服务开始时间
 * @method void setStartTime(integer $StartTime) 设置服务开始时间
 * @method integer getEndTime() 获取服务失效时间
 * @method void setEndTime(integer $EndTime) 设置服务失效时间
 * @method integer getStatus() 获取服务状态
1：正常使用中
2：待续费。设备云存服务已到期，但是历史云存数据未过期。续费后仍可查看这些历史数据。
3：已过期。查询不到设备保存在云端的数据。
4：等待服务生效。
 * @method void setStatus(integer $Status) 设置服务状态
1：正常使用中
2：待续费。设备云存服务已到期，但是历史云存数据未过期。续费后仍可查看这些历史数据。
3：已过期。查询不到设备保存在云端的数据。
4：等待服务生效。
 * @method array getData() 获取有效云存定单列表
 * @method void setData(array $Data) 设置有效云存定单列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RefundStorageServiceResponse extends AbstractModel
{
    /**
     * @var string 云存服务ID
     */
    public $ServiceId;

    /**
     * @var string 云存服务所在的区域
     */
    public $StorageRegion;

    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var integer 视频流通道号。(对于存在多路视频流的设备，如NVR设备，与设备实际视频流通道号对应)
     */
    public $ChnNum;

    /**
     * @var string 终端用户在IoT Video平台的注册ID
     */
    public $AccessId;

    /**
     * @var integer 服务开始时间
     */
    public $StartTime;

    /**
     * @var integer 服务失效时间
     */
    public $EndTime;

    /**
     * @var integer 服务状态
1：正常使用中
2：待续费。设备云存服务已到期，但是历史云存数据未过期。续费后仍可查看这些历史数据。
3：已过期。查询不到设备保存在云端的数据。
4：等待服务生效。
     */
    public $Status;

    /**
     * @var array 有效云存定单列表
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ServiceId 云存服务ID
     * @param string $StorageRegion 云存服务所在的区域
     * @param string $Tid 设备TID
     * @param integer $ChnNum 视频流通道号。(对于存在多路视频流的设备，如NVR设备，与设备实际视频流通道号对应)
     * @param string $AccessId 终端用户在IoT Video平台的注册ID
     * @param integer $StartTime 服务开始时间
     * @param integer $EndTime 服务失效时间
     * @param integer $Status 服务状态
1：正常使用中
2：待续费。设备云存服务已到期，但是历史云存数据未过期。续费后仍可查看这些历史数据。
3：已过期。查询不到设备保存在云端的数据。
4：等待服务生效。
     * @param array $Data 有效云存定单列表
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("ChnNum",$param) and $param["ChnNum"] !== null) {
            $this->ChnNum = $param["ChnNum"];
        }

        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new StorageOrder();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
