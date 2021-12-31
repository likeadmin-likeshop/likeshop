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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本服务在不同误识率水平下（将图片中的人物识别错误的比例）的推荐阈值，可以用于控制识别结果的精度。
{FalseRate1Percent, FalseRate5Permil, FalseRate1Permil}分别代表误识率在百分之一、千分之五、千分之一情况下的推荐阈值。
因为阈值会存在变动，请勿将此处输出的固定值处理，而是每次取值与confidence对比，来判断本次的识别结果是否可信。
例如，如果您业务中可以接受的误识率是1%，则可以将所有confidence>=FalseRate1Percent的结论认为是正确的。
 *
 * @method integer getFalseRate1Percent() 获取误识率在百分之一时的推荐阈值。
 * @method void setFalseRate1Percent(integer $FalseRate1Percent) 设置误识率在百分之一时的推荐阈值。
 * @method integer getFalseRate5Permil() 获取误识率在千分之五时的推荐阈值。
 * @method void setFalseRate5Permil(integer $FalseRate5Permil) 设置误识率在千分之五时的推荐阈值。
 * @method integer getFalseRate1Permil() 获取误识率在千分之一时的推荐阈值。
 * @method void setFalseRate1Permil(integer $FalseRate1Permil) 设置误识率在千分之一时的推荐阈值。
 */
class Threshold extends AbstractModel
{
    /**
     * @var integer 误识率在百分之一时的推荐阈值。
     */
    public $FalseRate1Percent;

    /**
     * @var integer 误识率在千分之五时的推荐阈值。
     */
    public $FalseRate5Permil;

    /**
     * @var integer 误识率在千分之一时的推荐阈值。
     */
    public $FalseRate1Permil;

    /**
     * @param integer $FalseRate1Percent 误识率在百分之一时的推荐阈值。
     * @param integer $FalseRate5Permil 误识率在千分之五时的推荐阈值。
     * @param integer $FalseRate1Permil 误识率在千分之一时的推荐阈值。
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
        if (array_key_exists("FalseRate1Percent",$param) and $param["FalseRate1Percent"] !== null) {
            $this->FalseRate1Percent = $param["FalseRate1Percent"];
        }

        if (array_key_exists("FalseRate5Permil",$param) and $param["FalseRate5Permil"] !== null) {
            $this->FalseRate5Permil = $param["FalseRate5Permil"];
        }

        if (array_key_exists("FalseRate1Permil",$param) and $param["FalseRate1Permil"] !== null) {
            $this->FalseRate1Permil = $param["FalseRate1Permil"];
        }
    }
}
