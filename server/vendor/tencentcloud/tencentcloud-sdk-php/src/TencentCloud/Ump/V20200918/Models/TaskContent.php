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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务内容
 *
 * @method integer getCameraId() 获取摄像头ID
 * @method void setCameraId(integer $CameraId) 设置摄像头ID
 * @method string getRTSP() 获取rtsp 地址
 * @method void setRTSP(string $RTSP) 设置rtsp 地址
 * @method string getUrl() 获取图片上传地址
 * @method void setUrl(string $Url) 设置图片上传地址
 */
class TaskContent extends AbstractModel
{
    /**
     * @var integer 摄像头ID
     */
    public $CameraId;

    /**
     * @var string rtsp 地址
     */
    public $RTSP;

    /**
     * @var string 图片上传地址
     */
    public $Url;

    /**
     * @param integer $CameraId 摄像头ID
     * @param string $RTSP rtsp 地址
     * @param string $Url 图片上传地址
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
        if (array_key_exists("CameraId",$param) and $param["CameraId"] !== null) {
            $this->CameraId = $param["CameraId"];
        }

        if (array_key_exists("RTSP",$param) and $param["RTSP"] !== null) {
            $this->RTSP = $param["RTSP"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
