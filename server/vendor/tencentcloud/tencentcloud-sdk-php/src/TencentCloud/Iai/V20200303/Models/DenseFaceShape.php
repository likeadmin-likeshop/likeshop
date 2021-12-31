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
 * 稠密关键点详细信息
 *
 * @method integer getX() 获取人脸框左上角横坐标。
 * @method void setX(integer $X) 设置人脸框左上角横坐标。
 * @method integer getY() 获取人脸框左上角纵坐标。
 * @method void setY(integer $Y) 设置人脸框左上角纵坐标。
 * @method integer getWidth() 获取人脸框宽度。
 * @method void setWidth(integer $Width) 设置人脸框宽度。
 * @method integer getHeight() 获取人脸框高度。
 * @method void setHeight(integer $Height) 设置人脸框高度。
 * @method array getLeftEye() 获取描述左侧眼睛轮廓的 XX 点。
 * @method void setLeftEye(array $LeftEye) 设置描述左侧眼睛轮廓的 XX 点。
 * @method array getRightEye() 获取描述右侧眼睛轮廓的 XX 点。
 * @method void setRightEye(array $RightEye) 设置描述右侧眼睛轮廓的 XX 点。
 * @method array getLeftEyeBrow() 获取描述左侧眉毛轮廓的 XX 点。
 * @method void setLeftEyeBrow(array $LeftEyeBrow) 设置描述左侧眉毛轮廓的 XX 点。
 * @method array getRightEyeBrow() 获取描述右侧眉毛轮廓的 XX 点。
 * @method void setRightEyeBrow(array $RightEyeBrow) 设置描述右侧眉毛轮廓的 XX 点。
 * @method array getMouthOutside() 获取描述外嘴巴轮廓的 XX 点， 从左侧开始逆时针返回。
 * @method void setMouthOutside(array $MouthOutside) 设置描述外嘴巴轮廓的 XX 点， 从左侧开始逆时针返回。
 * @method array getMouthInside() 获取描述内嘴巴轮廓的 XX 点，从左侧开始逆时针返回。
 * @method void setMouthInside(array $MouthInside) 设置描述内嘴巴轮廓的 XX 点，从左侧开始逆时针返回。
 * @method array getNose() 获取描述鼻子轮廓的 XX 点。
 * @method void setNose(array $Nose) 设置描述鼻子轮廓的 XX 点。
 * @method array getLeftPupil() 获取左瞳孔轮廓的 XX 个点。
 * @method void setLeftPupil(array $LeftPupil) 设置左瞳孔轮廓的 XX 个点。
 * @method array getRightPupil() 获取右瞳孔轮廓的 XX 个点。
 * @method void setRightPupil(array $RightPupil) 设置右瞳孔轮廓的 XX 个点。
 * @method array getCentralAxis() 获取中轴线轮廓的 XX 个点。
 * @method void setCentralAxis(array $CentralAxis) 设置中轴线轮廓的 XX 个点。
 * @method array getChin() 获取下巴轮廓的 XX 个点。
 * @method void setChin(array $Chin) 设置下巴轮廓的 XX 个点。
 * @method array getLeftEyeBags() 获取左眼袋的 XX 个点。
 * @method void setLeftEyeBags(array $LeftEyeBags) 设置左眼袋的 XX 个点。
 * @method array getRightEyeBags() 获取右眼袋的 XX 个点。
 * @method void setRightEyeBags(array $RightEyeBags) 设置右眼袋的 XX 个点。
 * @method array getForehead() 获取额头的 XX 个点。
 * @method void setForehead(array $Forehead) 设置额头的 XX 个点。
 */
class DenseFaceShape extends AbstractModel
{
    /**
     * @var integer 人脸框左上角横坐标。
     */
    public $X;

    /**
     * @var integer 人脸框左上角纵坐标。
     */
    public $Y;

    /**
     * @var integer 人脸框宽度。
     */
    public $Width;

    /**
     * @var integer 人脸框高度。
     */
    public $Height;

    /**
     * @var array 描述左侧眼睛轮廓的 XX 点。
     */
    public $LeftEye;

    /**
     * @var array 描述右侧眼睛轮廓的 XX 点。
     */
    public $RightEye;

    /**
     * @var array 描述左侧眉毛轮廓的 XX 点。
     */
    public $LeftEyeBrow;

    /**
     * @var array 描述右侧眉毛轮廓的 XX 点。
     */
    public $RightEyeBrow;

    /**
     * @var array 描述外嘴巴轮廓的 XX 点， 从左侧开始逆时针返回。
     */
    public $MouthOutside;

    /**
     * @var array 描述内嘴巴轮廓的 XX 点，从左侧开始逆时针返回。
     */
    public $MouthInside;

    /**
     * @var array 描述鼻子轮廓的 XX 点。
     */
    public $Nose;

    /**
     * @var array 左瞳孔轮廓的 XX 个点。
     */
    public $LeftPupil;

    /**
     * @var array 右瞳孔轮廓的 XX 个点。
     */
    public $RightPupil;

    /**
     * @var array 中轴线轮廓的 XX 个点。
     */
    public $CentralAxis;

    /**
     * @var array 下巴轮廓的 XX 个点。
     */
    public $Chin;

    /**
     * @var array 左眼袋的 XX 个点。
     */
    public $LeftEyeBags;

    /**
     * @var array 右眼袋的 XX 个点。
     */
    public $RightEyeBags;

    /**
     * @var array 额头的 XX 个点。
     */
    public $Forehead;

    /**
     * @param integer $X 人脸框左上角横坐标。
     * @param integer $Y 人脸框左上角纵坐标。
     * @param integer $Width 人脸框宽度。
     * @param integer $Height 人脸框高度。
     * @param array $LeftEye 描述左侧眼睛轮廓的 XX 点。
     * @param array $RightEye 描述右侧眼睛轮廓的 XX 点。
     * @param array $LeftEyeBrow 描述左侧眉毛轮廓的 XX 点。
     * @param array $RightEyeBrow 描述右侧眉毛轮廓的 XX 点。
     * @param array $MouthOutside 描述外嘴巴轮廓的 XX 点， 从左侧开始逆时针返回。
     * @param array $MouthInside 描述内嘴巴轮廓的 XX 点，从左侧开始逆时针返回。
     * @param array $Nose 描述鼻子轮廓的 XX 点。
     * @param array $LeftPupil 左瞳孔轮廓的 XX 个点。
     * @param array $RightPupil 右瞳孔轮廓的 XX 个点。
     * @param array $CentralAxis 中轴线轮廓的 XX 个点。
     * @param array $Chin 下巴轮廓的 XX 个点。
     * @param array $LeftEyeBags 左眼袋的 XX 个点。
     * @param array $RightEyeBags 右眼袋的 XX 个点。
     * @param array $Forehead 额头的 XX 个点。
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
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

        if (array_key_exists("MouthOutside",$param) and $param["MouthOutside"] !== null) {
            $this->MouthOutside = [];
            foreach ($param["MouthOutside"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->MouthOutside, $obj);
            }
        }

        if (array_key_exists("MouthInside",$param) and $param["MouthInside"] !== null) {
            $this->MouthInside = [];
            foreach ($param["MouthInside"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->MouthInside, $obj);
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

        if (array_key_exists("CentralAxis",$param) and $param["CentralAxis"] !== null) {
            $this->CentralAxis = [];
            foreach ($param["CentralAxis"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->CentralAxis, $obj);
            }
        }

        if (array_key_exists("Chin",$param) and $param["Chin"] !== null) {
            $this->Chin = [];
            foreach ($param["Chin"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Chin, $obj);
            }
        }

        if (array_key_exists("LeftEyeBags",$param) and $param["LeftEyeBags"] !== null) {
            $this->LeftEyeBags = [];
            foreach ($param["LeftEyeBags"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->LeftEyeBags, $obj);
            }
        }

        if (array_key_exists("RightEyeBags",$param) and $param["RightEyeBags"] !== null) {
            $this->RightEyeBags = [];
            foreach ($param["RightEyeBags"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->RightEyeBags, $obj);
            }
        }

        if (array_key_exists("Forehead",$param) and $param["Forehead"] !== null) {
            $this->Forehead = [];
            foreach ($param["Forehead"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Forehead, $obj);
            }
        }
    }
}
