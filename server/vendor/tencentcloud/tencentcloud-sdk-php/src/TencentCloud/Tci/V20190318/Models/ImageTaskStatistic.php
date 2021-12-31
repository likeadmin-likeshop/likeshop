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
 * 图像任务统计结果
 *
 * @method array getFaceDetect() 获取人员检测统计信息
 * @method void setFaceDetect(array $FaceDetect) 设置人员检测统计信息
 * @method array getFaceExpression() 获取人脸表情统计信息
 * @method void setFaceExpression(array $FaceExpression) 设置人脸表情统计信息
 * @method array getFaceIdentify() 获取人脸检索统计信息
 * @method void setFaceIdentify(array $FaceIdentify) 设置人脸检索统计信息
 * @method ActionStatistic getGesture() 获取姿势识别统计信息
 * @method void setGesture(ActionStatistic $Gesture) 设置姿势识别统计信息
 * @method ActionStatistic getHandtracking() 获取手势识别统计信息
 * @method void setHandtracking(ActionStatistic $Handtracking) 设置手势识别统计信息
 * @method LightStatistic getLight() 获取光照统计信息
 * @method void setLight(LightStatistic $Light) 设置光照统计信息
 * @method ActionStatistic getStudentMovement() 获取学生动作统计信息
 * @method void setStudentMovement(ActionStatistic $StudentMovement) 设置学生动作统计信息
 * @method ActionStatistic getTeacherMovement() 获取教师动作统计信息
 * @method void setTeacherMovement(ActionStatistic $TeacherMovement) 设置教师动作统计信息
 */
class ImageTaskStatistic extends AbstractModel
{
    /**
     * @var array 人员检测统计信息
     */
    public $FaceDetect;

    /**
     * @var array 人脸表情统计信息
     */
    public $FaceExpression;

    /**
     * @var array 人脸检索统计信息
     */
    public $FaceIdentify;

    /**
     * @var ActionStatistic 姿势识别统计信息
     */
    public $Gesture;

    /**
     * @var ActionStatistic 手势识别统计信息
     */
    public $Handtracking;

    /**
     * @var LightStatistic 光照统计信息
     */
    public $Light;

    /**
     * @var ActionStatistic 学生动作统计信息
     */
    public $StudentMovement;

    /**
     * @var ActionStatistic 教师动作统计信息
     */
    public $TeacherMovement;

    /**
     * @param array $FaceDetect 人员检测统计信息
     * @param array $FaceExpression 人脸表情统计信息
     * @param array $FaceIdentify 人脸检索统计信息
     * @param ActionStatistic $Gesture 姿势识别统计信息
     * @param ActionStatistic $Handtracking 手势识别统计信息
     * @param LightStatistic $Light 光照统计信息
     * @param ActionStatistic $StudentMovement 学生动作统计信息
     * @param ActionStatistic $TeacherMovement 教师动作统计信息
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
        if (array_key_exists("FaceDetect",$param) and $param["FaceDetect"] !== null) {
            $this->FaceDetect = [];
            foreach ($param["FaceDetect"] as $key => $value){
                $obj = new FaceDetectStatistic();
                $obj->deserialize($value);
                array_push($this->FaceDetect, $obj);
            }
        }

        if (array_key_exists("FaceExpression",$param) and $param["FaceExpression"] !== null) {
            $this->FaceExpression = [];
            foreach ($param["FaceExpression"] as $key => $value){
                $obj = new FaceExpressStatistic();
                $obj->deserialize($value);
                array_push($this->FaceExpression, $obj);
            }
        }

        if (array_key_exists("FaceIdentify",$param) and $param["FaceIdentify"] !== null) {
            $this->FaceIdentify = [];
            foreach ($param["FaceIdentify"] as $key => $value){
                $obj = new FaceIdentifyStatistic();
                $obj->deserialize($value);
                array_push($this->FaceIdentify, $obj);
            }
        }

        if (array_key_exists("Gesture",$param) and $param["Gesture"] !== null) {
            $this->Gesture = new ActionStatistic();
            $this->Gesture->deserialize($param["Gesture"]);
        }

        if (array_key_exists("Handtracking",$param) and $param["Handtracking"] !== null) {
            $this->Handtracking = new ActionStatistic();
            $this->Handtracking->deserialize($param["Handtracking"]);
        }

        if (array_key_exists("Light",$param) and $param["Light"] !== null) {
            $this->Light = new LightStatistic();
            $this->Light->deserialize($param["Light"]);
        }

        if (array_key_exists("StudentMovement",$param) and $param["StudentMovement"] !== null) {
            $this->StudentMovement = new ActionStatistic();
            $this->StudentMovement->deserialize($param["StudentMovement"]);
        }

        if (array_key_exists("TeacherMovement",$param) and $param["TeacherMovement"] !== null) {
            $this->TeacherMovement = new ActionStatistic();
            $this->TeacherMovement->deserialize($param["TeacherMovement"]);
        }
    }
}
