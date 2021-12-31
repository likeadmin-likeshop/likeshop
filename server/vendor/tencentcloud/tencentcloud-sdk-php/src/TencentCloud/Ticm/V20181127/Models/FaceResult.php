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
namespace TencentCloud\Ticm\V20181127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸识别结果。
 *
 * @method FaceRect getFaceRect() 获取检测出的人脸框位置。
 * @method void setFaceRect(FaceRect $FaceRect) 设置检测出的人脸框位置。
 * @method array getCandidates() 获取候选人列表。当前返回相似度最高的候选人。
 * @method void setCandidates(array $Candidates) 设置候选人列表。当前返回相似度最高的候选人。
 */
class FaceResult extends AbstractModel
{
    /**
     * @var FaceRect 检测出的人脸框位置。
     */
    public $FaceRect;

    /**
     * @var array 候选人列表。当前返回相似度最高的候选人。
     */
    public $Candidates;

    /**
     * @param FaceRect $FaceRect 检测出的人脸框位置。
     * @param array $Candidates 候选人列表。当前返回相似度最高的候选人。
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
        if (array_key_exists("FaceRect",$param) and $param["FaceRect"] !== null) {
            $this->FaceRect = new FaceRect();
            $this->FaceRect->deserialize($param["FaceRect"]);
        }

        if (array_key_exists("Candidates",$param) and $param["Candidates"] !== null) {
            $this->Candidates = [];
            foreach ($param["Candidates"] as $key => $value){
                $obj = new Candidate();
                $obj->deserialize($value);
                array_push($this->Candidates, $obj);
            }
        }
    }
}
