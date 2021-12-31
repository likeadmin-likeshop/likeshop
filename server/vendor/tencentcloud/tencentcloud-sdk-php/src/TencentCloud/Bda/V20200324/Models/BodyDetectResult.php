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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图中检测出来的人体框。
 *
 * @method float getConfidence() 获取检测出的人体置信度。 
误识率百分之十对应的阈值是0.14；误识率百分之五对应的阈值是0.32；误识率百分之二对应的阈值是0.62；误识率百分之一对应的阈值是0.81。 
通常情况建议使用阈值0.32，可适用大多数情况。
 * @method void setConfidence(float $Confidence) 设置检测出的人体置信度。 
误识率百分之十对应的阈值是0.14；误识率百分之五对应的阈值是0.32；误识率百分之二对应的阈值是0.62；误识率百分之一对应的阈值是0.81。 
通常情况建议使用阈值0.32，可适用大多数情况。
 * @method BodyRect getBodyRect() 获取图中检测出来的人体框
 * @method void setBodyRect(BodyRect $BodyRect) 设置图中检测出来的人体框
 * @method BodyAttributeInfo getBodyAttributeInfo() 获取图中检测出的人体属性信息。
 * @method void setBodyAttributeInfo(BodyAttributeInfo $BodyAttributeInfo) 设置图中检测出的人体属性信息。
 */
class BodyDetectResult extends AbstractModel
{
    /**
     * @var float 检测出的人体置信度。 
误识率百分之十对应的阈值是0.14；误识率百分之五对应的阈值是0.32；误识率百分之二对应的阈值是0.62；误识率百分之一对应的阈值是0.81。 
通常情况建议使用阈值0.32，可适用大多数情况。
     */
    public $Confidence;

    /**
     * @var BodyRect 图中检测出来的人体框
     */
    public $BodyRect;

    /**
     * @var BodyAttributeInfo 图中检测出的人体属性信息。
     */
    public $BodyAttributeInfo;

    /**
     * @param float $Confidence 检测出的人体置信度。 
误识率百分之十对应的阈值是0.14；误识率百分之五对应的阈值是0.32；误识率百分之二对应的阈值是0.62；误识率百分之一对应的阈值是0.81。 
通常情况建议使用阈值0.32，可适用大多数情况。
     * @param BodyRect $BodyRect 图中检测出来的人体框
     * @param BodyAttributeInfo $BodyAttributeInfo 图中检测出的人体属性信息。
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("BodyRect",$param) and $param["BodyRect"] !== null) {
            $this->BodyRect = new BodyRect();
            $this->BodyRect->deserialize($param["BodyRect"]);
        }

        if (array_key_exists("BodyAttributeInfo",$param) and $param["BodyAttributeInfo"] !== null) {
            $this->BodyAttributeInfo = new BodyAttributeInfo();
            $this->BodyAttributeInfo->deserialize($param["BodyAttributeInfo"]);
        }
    }
}
