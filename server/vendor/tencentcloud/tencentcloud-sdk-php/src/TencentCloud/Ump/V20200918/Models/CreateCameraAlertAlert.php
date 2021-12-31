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
 * 告警信息
 *
 * @method string getGroupCode() 获取集团编码
 * @method void setGroupCode(string $GroupCode) 设置集团编码
 * @method integer getMallId() 获取广场ID
 * @method void setMallId(integer $MallId) 设置广场ID
 * @method integer getCameraId() 获取相机ID
 * @method void setCameraId(integer $CameraId) 设置相机ID
 * @method integer getCaptureTime() 获取时间戳,ms,默认为告警请求到达时间
 * @method void setCaptureTime(integer $CaptureTime) 设置时间戳,ms,默认为告警请求到达时间
 * @method string getImage() 获取图片base64编码
 * @method void setImage(string $Image) 设置图片base64编码
 * @method CreateCameraAlertsMoveAlert getMoveAlert() 获取移动告警
 * @method void setMoveAlert(CreateCameraAlertsMoveAlert $MoveAlert) 设置移动告警
 * @method CreateCameraAlertsCoverAlert getCoverAlert() 获取遮挡告警
 * @method void setCoverAlert(CreateCameraAlertsCoverAlert $CoverAlert) 设置遮挡告警
 */
class CreateCameraAlertAlert extends AbstractModel
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
     * @var integer 相机ID
     */
    public $CameraId;

    /**
     * @var integer 时间戳,ms,默认为告警请求到达时间
     */
    public $CaptureTime;

    /**
     * @var string 图片base64编码
     */
    public $Image;

    /**
     * @var CreateCameraAlertsMoveAlert 移动告警
     */
    public $MoveAlert;

    /**
     * @var CreateCameraAlertsCoverAlert 遮挡告警
     */
    public $CoverAlert;

    /**
     * @param string $GroupCode 集团编码
     * @param integer $MallId 广场ID
     * @param integer $CameraId 相机ID
     * @param integer $CaptureTime 时间戳,ms,默认为告警请求到达时间
     * @param string $Image 图片base64编码
     * @param CreateCameraAlertsMoveAlert $MoveAlert 移动告警
     * @param CreateCameraAlertsCoverAlert $CoverAlert 遮挡告警
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

        if (array_key_exists("CameraId",$param) and $param["CameraId"] !== null) {
            $this->CameraId = $param["CameraId"];
        }

        if (array_key_exists("CaptureTime",$param) and $param["CaptureTime"] !== null) {
            $this->CaptureTime = $param["CaptureTime"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("MoveAlert",$param) and $param["MoveAlert"] !== null) {
            $this->MoveAlert = new CreateCameraAlertsMoveAlert();
            $this->MoveAlert->deserialize($param["MoveAlert"]);
        }

        if (array_key_exists("CoverAlert",$param) and $param["CoverAlert"] !== null) {
            $this->CoverAlert = new CreateCameraAlertsCoverAlert();
            $this->CoverAlert->deserialize($param["CoverAlert"]);
        }
    }
}
