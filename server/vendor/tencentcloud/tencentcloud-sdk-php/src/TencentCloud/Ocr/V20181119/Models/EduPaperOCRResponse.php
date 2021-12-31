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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EduPaperOCR返回参数结构体
 *
 * @method array getEduPaperInfos() 获取检测到的文本信息，具体内容请点击左侧链接。
 * @method void setEduPaperInfos(array $EduPaperInfos) 设置检测到的文本信息，具体内容请点击左侧链接。
 * @method integer getAngle() 获取图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负。
 * @method void setAngle(integer $Angle) 设置图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负。
 * @method array getQuestionBlockInfos() 获取结构化方式输出，具体内容请点击左侧链接。
 * @method void setQuestionBlockInfos(array $QuestionBlockInfos) 设置结构化方式输出，具体内容请点击左侧链接。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class EduPaperOCRResponse extends AbstractModel
{
    /**
     * @var array 检测到的文本信息，具体内容请点击左侧链接。
     */
    public $EduPaperInfos;

    /**
     * @var integer 图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负。
     */
    public $Angle;

    /**
     * @var array 结构化方式输出，具体内容请点击左侧链接。
     */
    public $QuestionBlockInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $EduPaperInfos 检测到的文本信息，具体内容请点击左侧链接。
     * @param integer $Angle 图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负。
     * @param array $QuestionBlockInfos 结构化方式输出，具体内容请点击左侧链接。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("EduPaperInfos",$param) and $param["EduPaperInfos"] !== null) {
            $this->EduPaperInfos = [];
            foreach ($param["EduPaperInfos"] as $key => $value){
                $obj = new TextEduPaper();
                $obj->deserialize($value);
                array_push($this->EduPaperInfos, $obj);
            }
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("QuestionBlockInfos",$param) and $param["QuestionBlockInfos"] !== null) {
            $this->QuestionBlockInfos = [];
            foreach ($param["QuestionBlockInfos"] as $key => $value){
                $obj = new QuestionBlockObj();
                $obj->deserialize($value);
                array_push($this->QuestionBlockInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
