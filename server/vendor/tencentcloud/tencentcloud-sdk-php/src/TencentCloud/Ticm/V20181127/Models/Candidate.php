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
 * 识别出人脸对应的候选人。
 *
 * @method string getName() 获取识别出人脸对应的候选人数组。当前返回相似度最高的候选人。
 * @method void setName(string $Name) 设置识别出人脸对应的候选人数组。当前返回相似度最高的候选人。
 * @method integer getConfidence() 获取相似度，0-100之间。
 * @method void setConfidence(integer $Confidence) 设置相似度，0-100之间。
 */
class Candidate extends AbstractModel
{
    /**
     * @var string 识别出人脸对应的候选人数组。当前返回相似度最高的候选人。
     */
    public $Name;

    /**
     * @var integer 相似度，0-100之间。
     */
    public $Confidence;

    /**
     * @param string $Name 识别出人脸对应的候选人数组。当前返回相似度最高的候选人。
     * @param integer $Confidence 相似度，0-100之间。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
