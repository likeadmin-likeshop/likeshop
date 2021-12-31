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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数字水印
 *
 * @method string getPath() 获取数字水印路径,，如果不从Cos拉取水印，则必填
 * @method void setPath(string $Path) 设置数字水印路径,，如果不从Cos拉取水印，则必填
 * @method integer getFrequency() 获取数字水印频率，可选值：[1,256]，默认值为30
 * @method void setFrequency(integer $Frequency) 设置数字水印频率，可选值：[1,256]，默认值为30
 * @method integer getStrength() 获取数字水印强度，可选值：[32,128]，默认值为64
 * @method void setStrength(integer $Strength) 设置数字水印强度，可选值：[32,128]，默认值为64
 * @method CosInfo getCosInfo() 获取数字水印的Cos 信息，从Cos上拉取图片水印时必填。
 * @method void setCosInfo(CosInfo $CosInfo) 设置数字水印的Cos 信息，从Cos上拉取图片水印时必填。
 */
class HiddenMarkInfo extends AbstractModel
{
    /**
     * @var string 数字水印路径,，如果不从Cos拉取水印，则必填
     */
    public $Path;

    /**
     * @var integer 数字水印频率，可选值：[1,256]，默认值为30
     */
    public $Frequency;

    /**
     * @var integer 数字水印强度，可选值：[32,128]，默认值为64
     */
    public $Strength;

    /**
     * @var CosInfo 数字水印的Cos 信息，从Cos上拉取图片水印时必填。
     */
    public $CosInfo;

    /**
     * @param string $Path 数字水印路径,，如果不从Cos拉取水印，则必填
     * @param integer $Frequency 数字水印频率，可选值：[1,256]，默认值为30
     * @param integer $Strength 数字水印强度，可选值：[32,128]，默认值为64
     * @param CosInfo $CosInfo 数字水印的Cos 信息，从Cos上拉取图片水印时必填。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("Strength",$param) and $param["Strength"] !== null) {
            $this->Strength = $param["Strength"];
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new CosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }
    }
}
