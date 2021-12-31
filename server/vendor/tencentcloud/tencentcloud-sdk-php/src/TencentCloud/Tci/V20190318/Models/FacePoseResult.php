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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FacePoseResult
 *
 * @method string getDirection() 获取正脸或侧脸的消息
 * @method void setDirection(string $Direction) 设置正脸或侧脸的消息
 * @method float getPitch() 获取围绕Z轴旋转角度，俯仰角
 * @method void setPitch(float $Pitch) 设置围绕Z轴旋转角度，俯仰角
 * @method float getRoll() 获取围绕X轴旋转角度，翻滚角
 * @method void setRoll(float $Roll) 设置围绕X轴旋转角度，翻滚角
 * @method float getYaw() 获取围绕Y轴旋转角度，偏航角
 * @method void setYaw(float $Yaw) 设置围绕Y轴旋转角度，偏航角
 */
class FacePoseResult extends AbstractModel
{
    /**
     * @var string 正脸或侧脸的消息
     */
    public $Direction;

    /**
     * @var float 围绕Z轴旋转角度，俯仰角
     */
    public $Pitch;

    /**
     * @var float 围绕X轴旋转角度，翻滚角
     */
    public $Roll;

    /**
     * @var float 围绕Y轴旋转角度，偏航角
     */
    public $Yaw;

    /**
     * @param string $Direction 正脸或侧脸的消息
     * @param float $Pitch 围绕Z轴旋转角度，俯仰角
     * @param float $Roll 围绕X轴旋转角度，翻滚角
     * @param float $Yaw 围绕Y轴旋转角度，偏航角
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Pitch",$param) and $param["Pitch"] !== null) {
            $this->Pitch = $param["Pitch"];
        }

        if (array_key_exists("Roll",$param) and $param["Roll"] !== null) {
            $this->Roll = $param["Roll"];
        }

        if (array_key_exists("Yaw",$param) and $param["Yaw"] !== null) {
            $this->Yaw = $param["Yaw"];
        }
    }
}
