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
 * 五官定位（人脸关键点）具体信息。
 *
 * @method array getFaceProfile() 获取描述脸型轮廓的 21 点。
 * @method void setFaceProfile(array $FaceProfile) 设置描述脸型轮廓的 21 点。
 * @method array getLeftEye() 获取描述左侧眼睛轮廓的 8 点。
 * @method void setLeftEye(array $LeftEye) 设置描述左侧眼睛轮廓的 8 点。
 * @method array getRightEye() 获取描述右侧眼睛轮廓的 8 点。
 * @method void setRightEye(array $RightEye) 设置描述右侧眼睛轮廓的 8 点。
 * @method array getLeftEyeBrow() 获取描述左侧眉毛轮廓的 8 点。
 * @method void setLeftEyeBrow(array $LeftEyeBrow) 设置描述左侧眉毛轮廓的 8 点。
 * @method array getRightEyeBrow() 获取描述右侧眉毛轮廓的 8 点。
 * @method void setRightEyeBrow(array $RightEyeBrow) 设置描述右侧眉毛轮廓的 8 点。
 * @method array getMouth() 获取描述嘴巴轮廓的 22 点。
 * @method void setMouth(array $Mouth) 设置描述嘴巴轮廓的 22 点。
 * @method array getNose() 获取描述鼻子轮廓的 13 点。
 * @method void setNose(array $Nose) 设置描述鼻子轮廓的 13 点。
 * @method array getLeftPupil() 获取左瞳孔轮廓的 1 个点。
 * @method void setLeftPupil(array $LeftPupil) 设置左瞳孔轮廓的 1 个点。
 * @method array getRightPupil() 获取右瞳孔轮廓的 1 个点。
 * @method void setRightPupil(array $RightPupil) 设置右瞳孔轮廓的 1 个点。
 */
class FaceShape extends AbstractModel
{
    /**
     * @var array 描述脸型轮廓的 21 点。
     */
    public $FaceProfile;

    /**
     * @var array 描述左侧眼睛轮廓的 8 点。
     */
    public $LeftEye;

    /**
     * @var array 描述右侧眼睛轮廓的 8 点。
     */
    public $RightEye;

    /**
     * @var array 描述左侧眉毛轮廓的 8 点。
     */
    public $LeftEyeBrow;

    /**
     * @var array 描述右侧眉毛轮廓的 8 点。
     */
    public $RightEyeBrow;

    /**
     * @var array 描述嘴巴轮廓的 22 点。
     */
    public $Mouth;

    /**
     * @var array 描述鼻子轮廓的 13 点。
     */
    public $Nose;

    /**
     * @var array 左瞳孔轮廓的 1 个点。
     */
    public $LeftPupil;

    /**
     * @var array 右瞳孔轮廓的 1 个点。
     */
    public $RightPupil;

    /**
     * @param array $FaceProfile 描述脸型轮廓的 21 点。
     * @param array $LeftEye 描述左侧眼睛轮廓的 8 点。
     * @param array $RightEye 描述右侧眼睛轮廓的 8 点。
     * @param array $LeftEyeBrow 描述左侧眉毛轮廓的 8 点。
     * @param array $RightEyeBrow 描述右侧眉毛轮廓的 8 点。
     * @param array $Mouth 描述嘴巴轮廓的 22 点。
     * @param array $Nose 描述鼻子轮廓的 13 点。
     * @param array $LeftPupil 左瞳孔轮廓的 1 个点。
     * @param array $RightPupil 右瞳孔轮廓的 1 个点。
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
        if (array_key_exists("FaceProfile",$param) and $param["FaceProfile"] !== null) {
            $this->FaceProfile = [];
            foreach ($param["FaceProfile"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->FaceProfile, $obj);
            }
        }

        if (array_key_exists("LeftEye",$param) and $param["LeftEye"] !== null) {
            $this->LeftEye = [];
            foreach ($param["LeftEye"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->LeftEye, $obj);
            }
        }

        if (array_key_exists("RightEye",$param) and $param["RightEye"] !== null) {
            $this->RightEye = [];
            foreach ($param["RightEye"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->RightEye, $obj);
            }
        }

        if (array_key_exists("LeftEyeBrow",$param) and $param["LeftEyeBrow"] !== null) {
            $this->LeftEyeBrow = [];
            foreach ($param["LeftEyeBrow"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->LeftEyeBrow, $obj);
            }
        }

        if (array_key_exists("RightEyeBrow",$param) and $param["RightEyeBrow"] !== null) {
            $this->RightEyeBrow = [];
            foreach ($param["RightEyeBrow"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->RightEyeBrow, $obj);
            }
        }

        if (array_key_exists("Mouth",$param) and $param["Mouth"] !== null) {
            $this->Mouth = [];
            foreach ($param["Mouth"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Mouth, $obj);
            }
        }

        if (array_key_exists("Nose",$param) and $param["Nose"] !== null) {
            $this->Nose = [];
            foreach ($param["Nose"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Nose, $obj);
            }
        }

        if (array_key_exists("LeftPupil",$param) and $param["LeftPupil"] !== null) {
            $this->LeftPupil = [];
            foreach ($param["LeftPupil"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->LeftPupil, $obj);
            }
        }

        if (array_key_exists("RightPupil",$param) and $param["RightPupil"] !== null) {
            $this->RightPupil = [];
            foreach ($param["RightPupil"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->RightPupil, $obj);
            }
        }
    }
}
