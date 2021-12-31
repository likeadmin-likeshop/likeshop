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
 * 摄像头配置
 *
 * @method string getCameraProducer() 获取摄像头厂商:
H: 海康
D: 大华
Y: 英飞拓
L: 联纵
 * @method void setCameraProducer(string $CameraProducer) 设置摄像头厂商:
H: 海康
D: 大华
Y: 英飞拓
L: 联纵
 * @method string getRTSP() 获取rtsp 地址
 * @method void setRTSP(string $RTSP) 设置rtsp 地址
 * @method integer getFps() 获取摄像头帧率
 * @method void setFps(integer $Fps) 设置摄像头帧率
 * @method integer getDecodeFps() 获取解码帧率
 * @method void setDecodeFps(integer $DecodeFps) 设置解码帧率
 * @method integer getPassengerFlow() 获取是否做客流计算:
0: 否
1: 是
 * @method void setPassengerFlow(integer $PassengerFlow) 设置是否做客流计算:
0: 否
1: 是
 * @method integer getFaceExpose() 获取是否打开人脸曝光:
0: 关闭
1: 开启
 * @method void setFaceExpose(integer $FaceExpose) 设置是否打开人脸曝光:
0: 关闭
1: 开启
 * @method array getMallArea() 获取门线标注
 * @method void setMallArea(array $MallArea) 设置门线标注
 * @method array getShopArea() 获取店门标注
 * @method void setShopArea(array $ShopArea) 设置店门标注
 * @method array getTrackAreas() 获取检测区标注
 * @method void setTrackAreas(array $TrackAreas) 设置检测区标注
 * @method array getZones() 获取点位列表（品类区）
 * @method void setZones(array $Zones) 设置点位列表（品类区）
 */
class Config extends AbstractModel
{
    /**
     * @var string 摄像头厂商:
H: 海康
D: 大华
Y: 英飞拓
L: 联纵
     */
    public $CameraProducer;

    /**
     * @var string rtsp 地址
     */
    public $RTSP;

    /**
     * @var integer 摄像头帧率
     */
    public $Fps;

    /**
     * @var integer 解码帧率
     */
    public $DecodeFps;

    /**
     * @var integer 是否做客流计算:
0: 否
1: 是
     */
    public $PassengerFlow;

    /**
     * @var integer 是否打开人脸曝光:
0: 关闭
1: 开启
     */
    public $FaceExpose;

    /**
     * @var array 门线标注
     */
    public $MallArea;

    /**
     * @var array 店门标注
     */
    public $ShopArea;

    /**
     * @var array 检测区标注
     */
    public $TrackAreas;

    /**
     * @var array 点位列表（品类区）
     */
    public $Zones;

    /**
     * @param string $CameraProducer 摄像头厂商:
H: 海康
D: 大华
Y: 英飞拓
L: 联纵
     * @param string $RTSP rtsp 地址
     * @param integer $Fps 摄像头帧率
     * @param integer $DecodeFps 解码帧率
     * @param integer $PassengerFlow 是否做客流计算:
0: 否
1: 是
     * @param integer $FaceExpose 是否打开人脸曝光:
0: 关闭
1: 开启
     * @param array $MallArea 门线标注
     * @param array $ShopArea 店门标注
     * @param array $TrackAreas 检测区标注
     * @param array $Zones 点位列表（品类区）
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
        if (array_key_exists("CameraProducer",$param) and $param["CameraProducer"] !== null) {
            $this->CameraProducer = $param["CameraProducer"];
        }

        if (array_key_exists("RTSP",$param) and $param["RTSP"] !== null) {
            $this->RTSP = $param["RTSP"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("DecodeFps",$param) and $param["DecodeFps"] !== null) {
            $this->DecodeFps = $param["DecodeFps"];
        }

        if (array_key_exists("PassengerFlow",$param) and $param["PassengerFlow"] !== null) {
            $this->PassengerFlow = $param["PassengerFlow"];
        }

        if (array_key_exists("FaceExpose",$param) and $param["FaceExpose"] !== null) {
            $this->FaceExpose = $param["FaceExpose"];
        }

        if (array_key_exists("MallArea",$param) and $param["MallArea"] !== null) {
            $this->MallArea = [];
            foreach ($param["MallArea"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->MallArea, $obj);
            }
        }

        if (array_key_exists("ShopArea",$param) and $param["ShopArea"] !== null) {
            $this->ShopArea = [];
            foreach ($param["ShopArea"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->ShopArea, $obj);
            }
        }

        if (array_key_exists("TrackAreas",$param) and $param["TrackAreas"] !== null) {
            $this->TrackAreas = [];
            foreach ($param["TrackAreas"] as $key => $value){
                $obj = new Polygon();
                $obj->deserialize($value);
                array_push($this->TrackAreas, $obj);
            }
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = [];
            foreach ($param["Zones"] as $key => $value){
                $obj = new ZoneArea();
                $obj->deserialize($value);
                array_push($this->Zones, $obj);
            }
        }
    }
}
