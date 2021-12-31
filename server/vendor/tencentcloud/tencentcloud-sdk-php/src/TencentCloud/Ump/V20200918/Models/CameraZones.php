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
 * 摄像头包含简单的点位信息
 *
 * @method integer getCameraId() 获取摄像头ID
 * @method void setCameraId(integer $CameraId) 设置摄像头ID
 * @method string getCameraName() 获取摄像头名称
 * @method void setCameraName(string $CameraName) 设置摄像头名称
 * @method integer getCameraFeature() 获取摄像头功能:
1: 人脸
2: 人体
 * @method void setCameraFeature(integer $CameraFeature) 设置摄像头功能:
1: 人脸
2: 人体
 * @method string getCameraIp() 获取摄像头IP
 * @method void setCameraIp(string $CameraIp) 设置摄像头IP
 * @method integer getCameraState() 获取摄像头状态:
0: 异常 (不再使用)
1: 正常 (不再使用)
10: 初始化
11: 未知状态 (因服务内部错误产生)
12: 网络异常
13: 未授权
14: 相机App异常
15: 相机取流异常
16: 正常
 * @method void setCameraState(integer $CameraState) 设置摄像头状态:
0: 异常 (不再使用)
1: 正常 (不再使用)
10: 初始化
11: 未知状态 (因服务内部错误产生)
12: 网络异常
13: 未授权
14: 相机App异常
15: 相机取流异常
16: 正常
 * @method array getZones() 获取点位列表
 * @method void setZones(array $Zones) 设置点位列表
 * @method string getPixel() 获取像素:
130W(1280*960)
200W(1920*1080)
400W(2560*1440)
 * @method void setPixel(string $Pixel) 设置像素:
130W(1280*960)
200W(1920*1080)
400W(2560*1440)
 * @method string getRTSP() 获取相机Rtsp地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRTSP(string $RTSP) 设置相机Rtsp地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class CameraZones extends AbstractModel
{
    /**
     * @var integer 摄像头ID
     */
    public $CameraId;

    /**
     * @var string 摄像头名称
     */
    public $CameraName;

    /**
     * @var integer 摄像头功能:
1: 人脸
2: 人体
     */
    public $CameraFeature;

    /**
     * @var string 摄像头IP
     */
    public $CameraIp;

    /**
     * @var integer 摄像头状态:
0: 异常 (不再使用)
1: 正常 (不再使用)
10: 初始化
11: 未知状态 (因服务内部错误产生)
12: 网络异常
13: 未授权
14: 相机App异常
15: 相机取流异常
16: 正常
     */
    public $CameraState;

    /**
     * @var array 点位列表
     */
    public $Zones;

    /**
     * @var string 像素:
130W(1280*960)
200W(1920*1080)
400W(2560*1440)
     */
    public $Pixel;

    /**
     * @var string 相机Rtsp地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RTSP;

    /**
     * @param integer $CameraId 摄像头ID
     * @param string $CameraName 摄像头名称
     * @param integer $CameraFeature 摄像头功能:
1: 人脸
2: 人体
     * @param string $CameraIp 摄像头IP
     * @param integer $CameraState 摄像头状态:
0: 异常 (不再使用)
1: 正常 (不再使用)
10: 初始化
11: 未知状态 (因服务内部错误产生)
12: 网络异常
13: 未授权
14: 相机App异常
15: 相机取流异常
16: 正常
     * @param array $Zones 点位列表
     * @param string $Pixel 像素:
130W(1280*960)
200W(1920*1080)
400W(2560*1440)
     * @param string $RTSP 相机Rtsp地址
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("CameraName",$param) and $param["CameraName"] !== null) {
            $this->CameraName = $param["CameraName"];
        }

        if (array_key_exists("CameraFeature",$param) and $param["CameraFeature"] !== null) {
            $this->CameraFeature = $param["CameraFeature"];
        }

        if (array_key_exists("CameraIp",$param) and $param["CameraIp"] !== null) {
            $this->CameraIp = $param["CameraIp"];
        }

        if (array_key_exists("CameraState",$param) and $param["CameraState"] !== null) {
            $this->CameraState = $param["CameraState"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = [];
            foreach ($param["Zones"] as $key => $value){
                $obj = new BunkZone();
                $obj->deserialize($value);
                array_push($this->Zones, $obj);
            }
        }

        if (array_key_exists("Pixel",$param) and $param["Pixel"] !== null) {
            $this->Pixel = $param["Pixel"];
        }

        if (array_key_exists("RTSP",$param) and $param["RTSP"] !== null) {
            $this->RTSP = $param["RTSP"];
        }
    }
}
