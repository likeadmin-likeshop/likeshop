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
 * 图像任务控制选项
 *
 * @method boolean getEnableActionClass() 获取大教室场景学生肢体动作识别选项
 * @method void setEnableActionClass(boolean $EnableActionClass) 设置大教室场景学生肢体动作识别选项
 * @method boolean getEnableFaceDetect() 获取人脸检测选项（默认为true，目前不可编辑）
 * @method void setEnableFaceDetect(boolean $EnableFaceDetect) 设置人脸检测选项（默认为true，目前不可编辑）
 * @method boolean getEnableFaceExpression() 获取人脸表情识别选项
 * @method void setEnableFaceExpression(boolean $EnableFaceExpression) 设置人脸表情识别选项
 * @method boolean getEnableFaceIdentify() 获取人脸检索选项（默认为true，目前不可编辑）
 * @method void setEnableFaceIdentify(boolean $EnableFaceIdentify) 设置人脸检索选项（默认为true，目前不可编辑）
 * @method boolean getEnableGesture() 获取手势选项
 * @method void setEnableGesture(boolean $EnableGesture) 设置手势选项
 * @method boolean getEnableHandTracking() 获取优图手势选项（该功能尚未支持）
 * @method void setEnableHandTracking(boolean $EnableHandTracking) 设置优图手势选项（该功能尚未支持）
 * @method boolean getEnableLightJudge() 获取光照选项
 * @method void setEnableLightJudge(boolean $EnableLightJudge) 设置光照选项
 * @method boolean getEnableStudentBodyMovements() 获取小班课场景学生肢体动作识别选项
 * @method void setEnableStudentBodyMovements(boolean $EnableStudentBodyMovements) 设置小班课场景学生肢体动作识别选项
 * @method boolean getEnableTeacherBodyMovements() 获取教师动作选项（该功能尚未支持）
 * @method void setEnableTeacherBodyMovements(boolean $EnableTeacherBodyMovements) 设置教师动作选项（该功能尚未支持）
 * @method boolean getEnableTeacherOutScreen() 获取判断老师是否在屏幕中（该功能尚未支持）
 * @method void setEnableTeacherOutScreen(boolean $EnableTeacherOutScreen) 设置判断老师是否在屏幕中（该功能尚未支持）
 */
class ImageTaskFunction extends AbstractModel
{
    /**
     * @var boolean 大教室场景学生肢体动作识别选项
     */
    public $EnableActionClass;

    /**
     * @var boolean 人脸检测选项（默认为true，目前不可编辑）
     */
    public $EnableFaceDetect;

    /**
     * @var boolean 人脸表情识别选项
     */
    public $EnableFaceExpression;

    /**
     * @var boolean 人脸检索选项（默认为true，目前不可编辑）
     */
    public $EnableFaceIdentify;

    /**
     * @var boolean 手势选项
     */
    public $EnableGesture;

    /**
     * @var boolean 优图手势选项（该功能尚未支持）
     */
    public $EnableHandTracking;

    /**
     * @var boolean 光照选项
     */
    public $EnableLightJudge;

    /**
     * @var boolean 小班课场景学生肢体动作识别选项
     */
    public $EnableStudentBodyMovements;

    /**
     * @var boolean 教师动作选项（该功能尚未支持）
     */
    public $EnableTeacherBodyMovements;

    /**
     * @var boolean 判断老师是否在屏幕中（该功能尚未支持）
     */
    public $EnableTeacherOutScreen;

    /**
     * @param boolean $EnableActionClass 大教室场景学生肢体动作识别选项
     * @param boolean $EnableFaceDetect 人脸检测选项（默认为true，目前不可编辑）
     * @param boolean $EnableFaceExpression 人脸表情识别选项
     * @param boolean $EnableFaceIdentify 人脸检索选项（默认为true，目前不可编辑）
     * @param boolean $EnableGesture 手势选项
     * @param boolean $EnableHandTracking 优图手势选项（该功能尚未支持）
     * @param boolean $EnableLightJudge 光照选项
     * @param boolean $EnableStudentBodyMovements 小班课场景学生肢体动作识别选项
     * @param boolean $EnableTeacherBodyMovements 教师动作选项（该功能尚未支持）
     * @param boolean $EnableTeacherOutScreen 判断老师是否在屏幕中（该功能尚未支持）
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
        if (array_key_exists("EnableActionClass",$param) and $param["EnableActionClass"] !== null) {
            $this->EnableActionClass = $param["EnableActionClass"];
        }

        if (array_key_exists("EnableFaceDetect",$param) and $param["EnableFaceDetect"] !== null) {
            $this->EnableFaceDetect = $param["EnableFaceDetect"];
        }

        if (array_key_exists("EnableFaceExpression",$param) and $param["EnableFaceExpression"] !== null) {
            $this->EnableFaceExpression = $param["EnableFaceExpression"];
        }

        if (array_key_exists("EnableFaceIdentify",$param) and $param["EnableFaceIdentify"] !== null) {
            $this->EnableFaceIdentify = $param["EnableFaceIdentify"];
        }

        if (array_key_exists("EnableGesture",$param) and $param["EnableGesture"] !== null) {
            $this->EnableGesture = $param["EnableGesture"];
        }

        if (array_key_exists("EnableHandTracking",$param) and $param["EnableHandTracking"] !== null) {
            $this->EnableHandTracking = $param["EnableHandTracking"];
        }

        if (array_key_exists("EnableLightJudge",$param) and $param["EnableLightJudge"] !== null) {
            $this->EnableLightJudge = $param["EnableLightJudge"];
        }

        if (array_key_exists("EnableStudentBodyMovements",$param) and $param["EnableStudentBodyMovements"] !== null) {
            $this->EnableStudentBodyMovements = $param["EnableStudentBodyMovements"];
        }

        if (array_key_exists("EnableTeacherBodyMovements",$param) and $param["EnableTeacherBodyMovements"] !== null) {
            $this->EnableTeacherBodyMovements = $param["EnableTeacherBodyMovements"];
        }

        if (array_key_exists("EnableTeacherOutScreen",$param) and $param["EnableTeacherOutScreen"] !== null) {
            $this->EnableTeacherOutScreen = $param["EnableTeacherOutScreen"];
        }
    }
}
