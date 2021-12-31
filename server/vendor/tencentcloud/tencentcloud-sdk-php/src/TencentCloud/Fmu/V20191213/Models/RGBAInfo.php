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
 * RGBA通道信息
 *
 * @method integer getR() 获取R通道数值。[0,255]。
 * @method void setR(integer $R) 设置R通道数值。[0,255]。
 * @method integer getG() 获取G通道数值。[0,255]。
 * @method void setG(integer $G) 设置G通道数值。[0,255]。
 * @method integer getB() 获取B通道数值。[0,255]。
 * @method void setB(integer $B) 设置B通道数值。[0,255]。
 * @method integer getA() 获取A通道数值。[0,100]。建议取值50。
 * @method void setA(integer $A) 设置A通道数值。[0,100]。建议取值50。
 */
class RGBAInfo extends AbstractModel
{
    /**
     * @var integer R通道数值。[0,255]。
     */
    public $R;

    /**
     * @var integer G通道数值。[0,255]。
     */
    public $G;

    /**
     * @var integer B通道数值。[0,255]。
     */
    public $B;

    /**
     * @var integer A通道数值。[0,100]。建议取值50。
     */
    public $A;

    /**
     * @param integer $R R通道数值。[0,255]。
     * @param integer $G G通道数值。[0,255]。
     * @param integer $B B通道数值。[0,255]。
     * @param integer $A A通道数值。[0,100]。建议取值50。
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
        if (array_key_exists("R",$param) and $param["R"] !== null) {
            $this->R = $param["R"];
        }

        if (array_key_exists("G",$param) and $param["G"] !== null) {
            $this->G = $param["G"];
        }

        if (array_key_exists("B",$param) and $param["B"] !== null) {
            $this->B = $param["B"];
        }

        if (array_key_exists("A",$param) and $param["A"] !== null) {
            $this->A = $param["A"];
        }
    }
}
