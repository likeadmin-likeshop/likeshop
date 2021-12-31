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
 * 智能封面信息
 *
 * @method string getCoverPath() 获取智能封面存储路径。
 * @method void setCoverPath(string $CoverPath) 设置智能封面存储路径。
 * @method float getConfidence() 获取智能封面的可信度，取值范围是 0 到 100。
 * @method void setConfidence(float $Confidence) 设置智能封面的可信度，取值范围是 0 到 100。
 */
class MediaAiAnalysisCoverItem extends AbstractModel
{
    /**
     * @var string 智能封面存储路径。
     */
    public $CoverPath;

    /**
     * @var float 智能封面的可信度，取值范围是 0 到 100。
     */
    public $Confidence;

    /**
     * @param string $CoverPath 智能封面存储路径。
     * @param float $Confidence 智能封面的可信度，取值范围是 0 到 100。
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
        if (array_key_exists("CoverPath",$param) and $param["CoverPath"] !== null) {
            $this->CoverPath = $param["CoverPath"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
