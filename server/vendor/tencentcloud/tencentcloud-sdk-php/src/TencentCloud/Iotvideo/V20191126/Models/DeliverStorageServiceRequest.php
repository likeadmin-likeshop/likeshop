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
 * DeliverStorageService请求参数结构体
 *
 * @method string getSrcServiceId() 获取待转移的源云存服务ID
 * @method void setSrcServiceId(string $SrcServiceId) 设置待转移的源云存服务ID
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method integer getChnNum() 获取视频流通道号。(对于存在多路视频流的设备，如NVR设备，与设备实际视频流通道号对应)
 * @method void setChnNum(integer $ChnNum) 设置视频流通道号。(对于存在多路视频流的设备，如NVR设备，与设备实际视频流通道号对应)
 * @method string getAccessId() 获取设备主人用户在IoT Video平台的注册ID。该参数用于验证Paas/Saas平台的设备/用户关系链是否一致
 * @method void setAccessId(string $AccessId) 设置设备主人用户在IoT Video平台的注册ID。该参数用于验证Paas/Saas平台的设备/用户关系链是否一致
 */
class DeliverStorageServiceRequest extends AbstractModel
{
    /**
     * @var string 待转移的源云存服务ID
     */
    public $SrcServiceId;

    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var integer 视频流通道号。(对于存在多路视频流的设备，如NVR设备，与设备实际视频流通道号对应)
     */
    public $ChnNum;

    /**
     * @var string 设备主人用户在IoT Video平台的注册ID。该参数用于验证Paas/Saas平台的设备/用户关系链是否一致
     */
    public $AccessId;

    /**
     * @param string $SrcServiceId 待转移的源云存服务ID
     * @param string $Tid 设备TID
     * @param integer $ChnNum 视频流通道号。(对于存在多路视频流的设备，如NVR设备，与设备实际视频流通道号对应)
     * @param string $AccessId 设备主人用户在IoT Video平台的注册ID。该参数用于验证Paas/Saas平台的设备/用户关系链是否一致
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
        if (array_key_exists("SrcServiceId",$param) and $param["SrcServiceId"] !== null) {
            $this->SrcServiceId = $param["SrcServiceId"];
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
    }
}
