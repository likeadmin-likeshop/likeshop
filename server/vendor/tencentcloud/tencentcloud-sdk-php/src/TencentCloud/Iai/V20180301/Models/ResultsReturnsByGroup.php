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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 识别结果。

 *
 * @method FaceRect getFaceRect() 获取检测出的人脸框位置。
 * @method void setFaceRect(FaceRect $FaceRect) 设置检测出的人脸框位置。
 * @method array getGroupCandidates() 获取识别结果。
 * @method void setGroupCandidates(array $GroupCandidates) 设置识别结果。
 * @method integer getRetCode() 获取检测出的人脸图片状态返回码。0 表示正常。 
-1601代表不符合图片质量控制要求，此时Candidate内容为空。
 * @method void setRetCode(integer $RetCode) 设置检测出的人脸图片状态返回码。0 表示正常。 
-1601代表不符合图片质量控制要求，此时Candidate内容为空。
 */
class ResultsReturnsByGroup extends AbstractModel
{
    /**
     * @var FaceRect 检测出的人脸框位置。
     */
    public $FaceRect;

    /**
     * @var array 识别结果。
     */
    public $GroupCandidates;

    /**
     * @var integer 检测出的人脸图片状态返回码。0 表示正常。 
-1601代表不符合图片质量控制要求，此时Candidate内容为空。
     */
    public $RetCode;

    /**
     * @param FaceRect $FaceRect 检测出的人脸框位置。
     * @param array $GroupCandidates 识别结果。
     * @param integer $RetCode 检测出的人脸图片状态返回码。0 表示正常。 
-1601代表不符合图片质量控制要求，此时Candidate内容为空。
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

        if (array_key_exists("GroupCandidates",$param) and $param["GroupCandidates"] !== null) {
            $this->GroupCandidates = [];
            foreach ($param["GroupCandidates"] as $key => $value){
                $obj = new GroupCandidate();
                $obj->deserialize($value);
                array_push($this->GroupCandidates, $obj);
            }
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }
    }
}
