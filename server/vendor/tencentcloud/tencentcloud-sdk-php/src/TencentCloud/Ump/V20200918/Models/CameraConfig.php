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
 * 摄像头配置信息
 *
 * @method string getGroupCode() 获取集团编码
 * @method void setGroupCode(string $GroupCode) 设置集团编码
 * @method integer getMallId() 获取广场ID
 * @method void setMallId(integer $MallId) 设置广场ID
 * @method integer getFloorId() 获取楼层ID
 * @method void setFloorId(integer $FloorId) 设置楼层ID
 * @method integer getCameraId() 获取摄像头ID
 * @method void setCameraId(integer $CameraId) 设置摄像头ID
 * @method string getCameraIp() 获取摄像头IP
 * @method void setCameraIp(string $CameraIp) 设置摄像头IP
 * @method string getCameraMac() 获取摄像头Mac
 * @method void setCameraMac(string $CameraMac) 设置摄像头Mac
 * @method integer getCameraType() 获取摄像头类型:
1: 码流机
2: AI相机
 * @method void setCameraType(integer $CameraType) 设置摄像头类型:
1: 码流机
2: AI相机
 * @method integer getCameraFeature() 获取摄像头功能:
1: 人脸
2: 人体
 * @method void setCameraFeature(integer $CameraFeature) 设置摄像头功能:
1: 人脸
2: 人体
 * @method integer getCameraState() 获取摄像头是否启用:
0: 下线
1: 启用
 * @method void setCameraState(integer $CameraState) 设置摄像头是否启用:
0: 下线
1: 启用
 * @method integer getZoneId() 获取点位ID
 * @method void setZoneId(integer $ZoneId) 设置点位ID
 * @method integer getZoneType() 获取点位类型:
1: 场门
3: 层门
5: 特殊区域
7: 门店
8: 补位
10: 开放式门店
11: 品类区
12: 公共区
 * @method void setZoneType(integer $ZoneType) 设置点位类型:
1: 场门
3: 层门
5: 特殊区域
7: 门店
8: 补位
10: 开放式门店
11: 品类区
12: 公共区
 * @method Config getConfig() 获取配置
 * @method void setConfig(Config $Config) 设置配置
 * @method integer getWidth() 获取宽
 * @method void setWidth(integer $Width) 设置宽
 * @method integer getHeight() 获取高
 * @method void setHeight(integer $Height) 设置高
 */
class CameraConfig extends AbstractModel
{
    /**
     * @var string 集团编码
     */
    public $GroupCode;

    /**
     * @var integer 广场ID
     */
    public $MallId;

    /**
     * @var integer 楼层ID
     */
    public $FloorId;

    /**
     * @var integer 摄像头ID
     */
    public $CameraId;

    /**
     * @var string 摄像头IP
     */
    public $CameraIp;

    /**
     * @var string 摄像头Mac
     */
    public $CameraMac;

    /**
     * @var integer 摄像头类型:
1: 码流机
2: AI相机
     */
    public $CameraType;

    /**
     * @var integer 摄像头功能:
1: 人脸
2: 人体
     */
    public $CameraFeature;

    /**
     * @var integer 摄像头是否启用:
0: 下线
1: 启用
     */
    public $CameraState;

    /**
     * @var integer 点位ID
     */
    public $ZoneId;

    /**
     * @var integer 点位类型:
1: 场门
3: 层门
5: 特殊区域
7: 门店
8: 补位
10: 开放式门店
11: 品类区
12: 公共区
     */
    public $ZoneType;

    /**
     * @var Config 配置
     */
    public $Config;

    /**
     * @var integer 宽
     */
    public $Width;

    /**
     * @var integer 高
     */
    public $Height;

    /**
     * @param string $GroupCode 集团编码
     * @param integer $MallId 广场ID
     * @param integer $FloorId 楼层ID
     * @param integer $CameraId 摄像头ID
     * @param string $CameraIp 摄像头IP
     * @param string $CameraMac 摄像头Mac
     * @param integer $CameraType 摄像头类型:
1: 码流机
2: AI相机
     * @param integer $CameraFeature 摄像头功能:
1: 人脸
2: 人体
     * @param integer $CameraState 摄像头是否启用:
0: 下线
1: 启用
     * @param integer $ZoneId 点位ID
     * @param integer $ZoneType 点位类型:
1: 场门
3: 层门
5: 特殊区域
7: 门店
8: 补位
10: 开放式门店
11: 品类区
12: 公共区
     * @param Config $Config 配置
     * @param integer $Width 宽
     * @param integer $Height 高
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
        if (array_key_exists("GroupCode",$param) and $param["GroupCode"] !== null) {
            $this->GroupCode = $param["GroupCode"];
        }

        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }

        if (array_key_exists("FloorId",$param) and $param["FloorId"] !== null) {
            $this->FloorId = $param["FloorId"];
        }

        if (array_key_exists("CameraId",$param) and $param["CameraId"] !== null) {
            $this->CameraId = $param["CameraId"];
        }

        if (array_key_exists("CameraIp",$param) and $param["CameraIp"] !== null) {
            $this->CameraIp = $param["CameraIp"];
        }

        if (array_key_exists("CameraMac",$param) and $param["CameraMac"] !== null) {
            $this->CameraMac = $param["CameraMac"];
        }

        if (array_key_exists("CameraType",$param) and $param["CameraType"] !== null) {
            $this->CameraType = $param["CameraType"];
        }

        if (array_key_exists("CameraFeature",$param) and $param["CameraFeature"] !== null) {
            $this->CameraFeature = $param["CameraFeature"];
        }

        if (array_key_exists("CameraState",$param) and $param["CameraState"] !== null) {
            $this->CameraState = $param["CameraState"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneType",$param) and $param["ZoneType"] !== null) {
            $this->ZoneType = $param["ZoneType"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new Config();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
