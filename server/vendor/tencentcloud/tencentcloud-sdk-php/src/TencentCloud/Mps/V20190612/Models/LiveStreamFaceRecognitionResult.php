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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播 AI 人脸识别结果
 *
 * @method string getId() 获取人物唯一标识 ID。
 * @method void setId(string $Id) 设置人物唯一标识 ID。
 * @method string getName() 获取人物名称。
 * @method void setName(string $Name) 设置人物名称。
 * @method string getType() 获取人物库类型，表示识别出的人物来自哪个人物库：
<li>Default：默认人物库；</li><li>UserDefine：用户自定义人物库。</li>
 * @method void setType(string $Type) 设置人物库类型，表示识别出的人物来自哪个人物库：
<li>Default：默认人物库；</li><li>UserDefine：用户自定义人物库。</li>
 * @method float getStartPtsTime() 获取识别片段起始的 PTS 时间，单位：秒。
 * @method void setStartPtsTime(float $StartPtsTime) 设置识别片段起始的 PTS 时间，单位：秒。
 * @method float getEndPtsTime() 获取识别片段终止的 PTS 时间，单位：秒。
 * @method void setEndPtsTime(float $EndPtsTime) 设置识别片段终止的 PTS 时间，单位：秒。
 * @method float getConfidence() 获取识别片段置信度。取值：0~100。
 * @method void setConfidence(float $Confidence) 设置识别片段置信度。取值：0~100。
 * @method array getAreaCoordSet() 获取识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
 * @method void setAreaCoordSet(array $AreaCoordSet) 设置识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
 */
class LiveStreamFaceRecognitionResult extends AbstractModel
{
    /**
     * @var string 人物唯一标识 ID。
     */
    public $Id;

    /**
     * @var string 人物名称。
     */
    public $Name;

    /**
     * @var string 人物库类型，表示识别出的人物来自哪个人物库：
<li>Default：默认人物库；</li><li>UserDefine：用户自定义人物库。</li>
     */
    public $Type;

    /**
     * @var float 识别片段起始的 PTS 时间，单位：秒。
     */
    public $StartPtsTime;

    /**
     * @var float 识别片段终止的 PTS 时间，单位：秒。
     */
    public $EndPtsTime;

    /**
     * @var float 识别片段置信度。取值：0~100。
     */
    public $Confidence;

    /**
     * @var array 识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
     */
    public $AreaCoordSet;

    /**
     * @param string $Id 人物唯一标识 ID。
     * @param string $Name 人物名称。
     * @param string $Type 人物库类型，表示识别出的人物来自哪个人物库：
<li>Default：默认人物库；</li><li>UserDefine：用户自定义人物库。</li>
     * @param float $StartPtsTime 识别片段起始的 PTS 时间，单位：秒。
     * @param float $EndPtsTime 识别片段终止的 PTS 时间，单位：秒。
     * @param float $Confidence 识别片段置信度。取值：0~100。
     * @param array $AreaCoordSet 识别结果的区域坐标。数组包含 4 个元素 [x1,y1,x2,y2]，依次表示区域左上点、右下点的横纵坐标。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
