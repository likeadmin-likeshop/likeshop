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
 * 眉毛信息
 *
 * @method AttributeItem getEyebrowDensity() 获取眉毛浓密。
AttributeItem对应的Type为 —— 0：淡眉，1：浓眉。
 * @method void setEyebrowDensity(AttributeItem $EyebrowDensity) 设置眉毛浓密。
AttributeItem对应的Type为 —— 0：淡眉，1：浓眉。
 * @method AttributeItem getEyebrowCurve() 获取眉毛弯曲。
AttributeItem对应的Type为 —— 0：不弯，1：弯眉。
 * @method void setEyebrowCurve(AttributeItem $EyebrowCurve) 设置眉毛弯曲。
AttributeItem对应的Type为 —— 0：不弯，1：弯眉。
 * @method AttributeItem getEyebrowLength() 获取眉毛长短。
AttributeItem对应的Type为 —— 0：短眉毛，1：长眉毛。
 * @method void setEyebrowLength(AttributeItem $EyebrowLength) 设置眉毛长短。
AttributeItem对应的Type为 —— 0：短眉毛，1：长眉毛。
 */
class Eyebrow extends AbstractModel
{
    /**
     * @var AttributeItem 眉毛浓密。
AttributeItem对应的Type为 —— 0：淡眉，1：浓眉。
     */
    public $EyebrowDensity;

    /**
     * @var AttributeItem 眉毛弯曲。
AttributeItem对应的Type为 —— 0：不弯，1：弯眉。
     */
    public $EyebrowCurve;

    /**
     * @var AttributeItem 眉毛长短。
AttributeItem对应的Type为 —— 0：短眉毛，1：长眉毛。
     */
    public $EyebrowLength;

    /**
     * @param AttributeItem $EyebrowDensity 眉毛浓密。
AttributeItem对应的Type为 —— 0：淡眉，1：浓眉。
     * @param AttributeItem $EyebrowCurve 眉毛弯曲。
AttributeItem对应的Type为 —— 0：不弯，1：弯眉。
     * @param AttributeItem $EyebrowLength 眉毛长短。
AttributeItem对应的Type为 —— 0：短眉毛，1：长眉毛。
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
        if (array_key_exists("EyebrowDensity",$param) and $param["EyebrowDensity"] !== null) {
            $this->EyebrowDensity = new AttributeItem();
            $this->EyebrowDensity->deserialize($param["EyebrowDensity"]);
        }

        if (array_key_exists("EyebrowCurve",$param) and $param["EyebrowCurve"] !== null) {
            $this->EyebrowCurve = new AttributeItem();
            $this->EyebrowCurve->deserialize($param["EyebrowCurve"]);
        }

        if (array_key_exists("EyebrowLength",$param) and $param["EyebrowLength"] !== null) {
            $this->EyebrowLength = new AttributeItem();
            $this->EyebrowLength->deserialize($param["EyebrowLength"]);
        }
    }
}
