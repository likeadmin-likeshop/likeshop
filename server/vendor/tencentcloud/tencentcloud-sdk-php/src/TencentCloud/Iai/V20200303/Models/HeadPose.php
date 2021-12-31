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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 姿态信息
 *
 * @method integer getPitch() 获取上下偏移[-30,30]。
 * @method void setPitch(integer $Pitch) 设置上下偏移[-30,30]。
 * @method integer getYaw() 获取左右偏移[-30,30]。
 * @method void setYaw(integer $Yaw) 设置左右偏移[-30,30]。
 * @method integer getRoll() 获取平面旋转[-180,180]。
 * @method void setRoll(integer $Roll) 设置平面旋转[-180,180]。
 */
class HeadPose extends AbstractModel
{
    /**
     * @var integer 上下偏移[-30,30]。
     */
    public $Pitch;

    /**
     * @var integer 左右偏移[-30,30]。
     */
    public $Yaw;

    /**
     * @var integer 平面旋转[-180,180]。
     */
    public $Roll;

    /**
     * @param integer $Pitch 上下偏移[-30,30]。
     * @param integer $Yaw 左右偏移[-30,30]。
     * @param integer $Roll 平面旋转[-180,180]。
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
        if (array_key_exists("Pitch",$param) and $param["Pitch"] !== null) {
            $this->Pitch = $param["Pitch"];
        }

        if (array_key_exists("Yaw",$param) and $param["Yaw"] !== null) {
            $this->Yaw = $param["Yaw"];
        }

        if (array_key_exists("Roll",$param) and $param["Roll"] !== null) {
            $this->Roll = $param["Roll"];
        }
    }
}
