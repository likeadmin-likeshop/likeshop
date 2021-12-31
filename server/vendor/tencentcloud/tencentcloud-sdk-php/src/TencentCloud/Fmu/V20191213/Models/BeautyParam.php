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
namespace TencentCloud\Fmu\V20191213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全局美颜参数，针对所有人脸做美颜。参数全部为0，则为不做美颜
 *
 * @method integer getWhitenLevel() 获取美白程度，取值范围[0,100]。0不美白，100代表最高程度。默认值30。
 * @method void setWhitenLevel(integer $WhitenLevel) 设置美白程度，取值范围[0,100]。0不美白，100代表最高程度。默认值30。
 * @method integer getSmoothingLevel() 获取磨皮程度，取值范围[0,100]。0不磨皮，100代表最高程度。默认值30。
 * @method void setSmoothingLevel(integer $SmoothingLevel) 设置磨皮程度，取值范围[0,100]。0不磨皮，100代表最高程度。默认值30。
 * @method integer getEyeEnlargeLevel() 获取大眼程度，取值范围[0,100]。0不大眼，100代表最高程度。默认值70。
 * @method void setEyeEnlargeLevel(integer $EyeEnlargeLevel) 设置大眼程度，取值范围[0,100]。0不大眼，100代表最高程度。默认值70。
 * @method integer getFaceShrinkLevel() 获取瘦脸程度，取值范围[0,100]。0不瘦脸，100代表最高程度。默认值70。
 * @method void setFaceShrinkLevel(integer $FaceShrinkLevel) 设置瘦脸程度，取值范围[0,100]。0不瘦脸，100代表最高程度。默认值70。
 */
class BeautyParam extends AbstractModel
{
    /**
     * @var integer 美白程度，取值范围[0,100]。0不美白，100代表最高程度。默认值30。
     */
    public $WhitenLevel;

    /**
     * @var integer 磨皮程度，取值范围[0,100]。0不磨皮，100代表最高程度。默认值30。
     */
    public $SmoothingLevel;

    /**
     * @var integer 大眼程度，取值范围[0,100]。0不大眼，100代表最高程度。默认值70。
     */
    public $EyeEnlargeLevel;

    /**
     * @var integer 瘦脸程度，取值范围[0,100]。0不瘦脸，100代表最高程度。默认值70。
     */
    public $FaceShrinkLevel;

    /**
     * @param integer $WhitenLevel 美白程度，取值范围[0,100]。0不美白，100代表最高程度。默认值30。
     * @param integer $SmoothingLevel 磨皮程度，取值范围[0,100]。0不磨皮，100代表最高程度。默认值30。
     * @param integer $EyeEnlargeLevel 大眼程度，取值范围[0,100]。0不大眼，100代表最高程度。默认值70。
     * @param integer $FaceShrinkLevel 瘦脸程度，取值范围[0,100]。0不瘦脸，100代表最高程度。默认值70。
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
        if (array_key_exists("WhitenLevel",$param) and $param["WhitenLevel"] !== null) {
            $this->WhitenLevel = $param["WhitenLevel"];
        }

        if (array_key_exists("SmoothingLevel",$param) and $param["SmoothingLevel"] !== null) {
            $this->SmoothingLevel = $param["SmoothingLevel"];
        }

        if (array_key_exists("EyeEnlargeLevel",$param) and $param["EyeEnlargeLevel"] !== null) {
            $this->EyeEnlargeLevel = $param["EyeEnlargeLevel"];
        }

        if (array_key_exists("FaceShrinkLevel",$param) and $param["FaceShrinkLevel"] !== null) {
            $this->FaceShrinkLevel = $param["FaceShrinkLevel"];
        }
    }
}
