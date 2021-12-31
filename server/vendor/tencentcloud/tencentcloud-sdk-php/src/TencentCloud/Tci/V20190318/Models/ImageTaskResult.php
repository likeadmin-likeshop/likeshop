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
 * 图像任务结果
 *
 * @method ActionInfo getActionInfo() 获取大教室场景学生肢体动作识别信息
 * @method void setActionInfo(ActionInfo $ActionInfo) 设置大教室场景学生肢体动作识别信息
 * @method FaceAttrResult getFaceAttr() 获取属性识别结果
 * @method void setFaceAttr(FaceAttrResult $FaceAttr) 设置属性识别结果
 * @method FaceExpressionResult getFaceExpression() 获取表情识别结果
 * @method void setFaceExpression(FaceExpressionResult $FaceExpression) 设置表情识别结果
 * @method FaceIdentifyResult getFaceIdentify() 获取人脸检索结果
 * @method void setFaceIdentify(FaceIdentifyResult $FaceIdentify) 设置人脸检索结果
 * @method FaceInfoResult getFaceInfo() 获取人脸检测结果
 * @method void setFaceInfo(FaceInfoResult $FaceInfo) 设置人脸检测结果
 * @method FacePoseResult getFacePose() 获取姿势识别结果
 * @method void setFacePose(FacePoseResult $FacePose) 设置姿势识别结果
 * @method GestureResult getGesture() 获取动作分类结果
 * @method void setGesture(GestureResult $Gesture) 设置动作分类结果
 * @method HandTrackingResult getHandTracking() 获取手势分类结果
 * @method void setHandTracking(HandTrackingResult $HandTracking) 设置手势分类结果
 * @method LightResult getLight() 获取光照识别结果
 * @method void setLight(LightResult $Light) 设置光照识别结果
 * @method StudentBodyMovementResult getStudentBodyMovement() 获取学生肢体动作识别结果
 * @method void setStudentBodyMovement(StudentBodyMovementResult $StudentBodyMovement) 设置学生肢体动作识别结果
 * @method BodyMovementResult getTeacherBodyMovement() 获取老师肢体动作识别结果
 * @method void setTeacherBodyMovement(BodyMovementResult $TeacherBodyMovement) 设置老师肢体动作识别结果
 * @method TeacherOutScreenResult getTeacherOutScreen() 获取教师是否在屏幕内判断结果
 * @method void setTeacherOutScreen(TeacherOutScreenResult $TeacherOutScreen) 设置教师是否在屏幕内判断结果
 * @method TimeInfoResult getTimeInfo() 获取时间统计结果
 * @method void setTimeInfo(TimeInfoResult $TimeInfo) 设置时间统计结果
 */
class ImageTaskResult extends AbstractModel
{
    /**
     * @var ActionInfo 大教室场景学生肢体动作识别信息
     */
    public $ActionInfo;

    /**
     * @var FaceAttrResult 属性识别结果
     */
    public $FaceAttr;

    /**
     * @var FaceExpressionResult 表情识别结果
     */
    public $FaceExpression;

    /**
     * @var FaceIdentifyResult 人脸检索结果
     */
    public $FaceIdentify;

    /**
     * @var FaceInfoResult 人脸检测结果
     */
    public $FaceInfo;

    /**
     * @var FacePoseResult 姿势识别结果
     */
    public $FacePose;

    /**
     * @var GestureResult 动作分类结果
     */
    public $Gesture;

    /**
     * @var HandTrackingResult 手势分类结果
     */
    public $HandTracking;

    /**
     * @var LightResult 光照识别结果
     */
    public $Light;

    /**
     * @var StudentBodyMovementResult 学生肢体动作识别结果
     */
    public $StudentBodyMovement;

    /**
     * @var BodyMovementResult 老师肢体动作识别结果
     */
    public $TeacherBodyMovement;

    /**
     * @var TeacherOutScreenResult 教师是否在屏幕内判断结果
     */
    public $TeacherOutScreen;

    /**
     * @var TimeInfoResult 时间统计结果
     */
    public $TimeInfo;

    /**
     * @param ActionInfo $ActionInfo 大教室场景学生肢体动作识别信息
     * @param FaceAttrResult $FaceAttr 属性识别结果
     * @param FaceExpressionResult $FaceExpression 表情识别结果
     * @param FaceIdentifyResult $FaceIdentify 人脸检索结果
     * @param FaceInfoResult $FaceInfo 人脸检测结果
     * @param FacePoseResult $FacePose 姿势识别结果
     * @param GestureResult $Gesture 动作分类结果
     * @param HandTrackingResult $HandTracking 手势分类结果
     * @param LightResult $Light 光照识别结果
     * @param StudentBodyMovementResult $StudentBodyMovement 学生肢体动作识别结果
     * @param BodyMovementResult $TeacherBodyMovement 老师肢体动作识别结果
     * @param TeacherOutScreenResult $TeacherOutScreen 教师是否在屏幕内判断结果
     * @param TimeInfoResult $TimeInfo 时间统计结果
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
        if (array_key_exists("ActionInfo",$param) and $param["ActionInfo"] !== null) {
            $this->ActionInfo = new ActionInfo();
            $this->ActionInfo->deserialize($param["ActionInfo"]);
        }

        if (array_key_exists("FaceAttr",$param) and $param["FaceAttr"] !== null) {
            $this->FaceAttr = new FaceAttrResult();
            $this->FaceAttr->deserialize($param["FaceAttr"]);
        }

        if (array_key_exists("FaceExpression",$param) and $param["FaceExpression"] !== null) {
            $this->FaceExpression = new FaceExpressionResult();
            $this->FaceExpression->deserialize($param["FaceExpression"]);
        }

        if (array_key_exists("FaceIdentify",$param) and $param["FaceIdentify"] !== null) {
            $this->FaceIdentify = new FaceIdentifyResult();
            $this->FaceIdentify->deserialize($param["FaceIdentify"]);
        }

        if (array_key_exists("FaceInfo",$param) and $param["FaceInfo"] !== null) {
            $this->FaceInfo = new FaceInfoResult();
            $this->FaceInfo->deserialize($param["FaceInfo"]);
        }

        if (array_key_exists("FacePose",$param) and $param["FacePose"] !== null) {
            $this->FacePose = new FacePoseResult();
            $this->FacePose->deserialize($param["FacePose"]);
        }

        if (array_key_exists("Gesture",$param) and $param["Gesture"] !== null) {
            $this->Gesture = new GestureResult();
            $this->Gesture->deserialize($param["Gesture"]);
        }

        if (array_key_exists("HandTracking",$param) and $param["HandTracking"] !== null) {
            $this->HandTracking = new HandTrackingResult();
            $this->HandTracking->deserialize($param["HandTracking"]);
        }

        if (array_key_exists("Light",$param) and $param["Light"] !== null) {
            $this->Light = new LightResult();
            $this->Light->deserialize($param["Light"]);
        }

        if (array_key_exists("StudentBodyMovement",$param) and $param["StudentBodyMovement"] !== null) {
            $this->StudentBodyMovement = new StudentBodyMovementResult();
            $this->StudentBodyMovement->deserialize($param["StudentBodyMovement"]);
        }

        if (array_key_exists("TeacherBodyMovement",$param) and $param["TeacherBodyMovement"] !== null) {
            $this->TeacherBodyMovement = new BodyMovementResult();
            $this->TeacherBodyMovement->deserialize($param["TeacherBodyMovement"]);
        }

        if (array_key_exists("TeacherOutScreen",$param) and $param["TeacherOutScreen"] !== null) {
            $this->TeacherOutScreen = new TeacherOutScreenResult();
            $this->TeacherOutScreen->deserialize($param["TeacherOutScreen"]);
        }

        if (array_key_exists("TimeInfo",$param) and $param["TimeInfo"] !== null) {
            $this->TimeInfo = new TimeInfoResult();
            $this->TimeInfo->deserialize($param["TimeInfo"]);
        }
    }
}
