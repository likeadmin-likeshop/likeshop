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
 * 返回人体属性选项，此值不填则为不需要返回，可以选择的值为以下六个。
Age、Bag、Gender、Orientation、UpperBodyCloth、LowerBodyCloth，详细的解释请看对象描述
需注意本接口最多返回面积最大的 5 个人体属性信息，超过 5 个人体（第 6 个及以后的人体）的人体属性不具备参考意义。
 *
 * @method boolean getAge() 获取返回年龄信息
 * @method void setAge(boolean $Age) 设置返回年龄信息
 * @method boolean getBag() 获取返回随身挎包信息
 * @method void setBag(boolean $Bag) 设置返回随身挎包信息
 * @method boolean getGender() 获取返回性别信息
 * @method void setGender(boolean $Gender) 设置返回性别信息
 * @method boolean getOrientation() 获取返回朝向信息
 * @method void setOrientation(boolean $Orientation) 设置返回朝向信息
 * @method boolean getUpperBodyCloth() 获取返回上装信息
 * @method void setUpperBodyCloth(boolean $UpperBodyCloth) 设置返回上装信息
 * @method boolean getLowerBodyCloth() 获取返回下装信息
 * @method void setLowerBodyCloth(boolean $LowerBodyCloth) 设置返回下装信息
 */
class AttributesOptions extends AbstractModel
{
    /**
     * @var boolean 返回年龄信息
     */
    public $Age;

    /**
     * @var boolean 返回随身挎包信息
     */
    public $Bag;

    /**
     * @var boolean 返回性别信息
     */
    public $Gender;

    /**
     * @var boolean 返回朝向信息
     */
    public $Orientation;

    /**
     * @var boolean 返回上装信息
     */
    public $UpperBodyCloth;

    /**
     * @var boolean 返回下装信息
     */
    public $LowerBodyCloth;

    /**
     * @param boolean $Age 返回年龄信息
     * @param boolean $Bag 返回随身挎包信息
     * @param boolean $Gender 返回性别信息
     * @param boolean $Orientation 返回朝向信息
     * @param boolean $UpperBodyCloth 返回上装信息
     * @param boolean $LowerBodyCloth 返回下装信息
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
        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Bag",$param) and $param["Bag"] !== null) {
            $this->Bag = $param["Bag"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Orientation",$param) and $param["Orientation"] !== null) {
            $this->Orientation = $param["Orientation"];
        }

        if (array_key_exists("UpperBodyCloth",$param) and $param["UpperBodyCloth"] !== null) {
            $this->UpperBodyCloth = $param["UpperBodyCloth"];
        }

        if (array_key_exists("LowerBodyCloth",$param) and $param["LowerBodyCloth"] !== null) {
            $this->LowerBodyCloth = $param["LowerBodyCloth"];
        }
    }
}
