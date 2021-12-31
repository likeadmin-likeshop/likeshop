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
 * 此参数为分割选项，请根据需要选择自己所想从图片中分割的部分。注意所有选项均为非必选，如未选择则值默认为false, 但是必须要保证多于一个选项的描述为true。
 *
 * @method boolean getBackground() 获取分割选项-背景
 * @method void setBackground(boolean $Background) 设置分割选项-背景
 * @method boolean getHair() 获取分割选项-头发
 * @method void setHair(boolean $Hair) 设置分割选项-头发
 * @method boolean getLeftEyebrow() 获取分割选项-左眉
 * @method void setLeftEyebrow(boolean $LeftEyebrow) 设置分割选项-左眉
 * @method boolean getRightEyebrow() 获取分割选项-右眉
 * @method void setRightEyebrow(boolean $RightEyebrow) 设置分割选项-右眉
 * @method boolean getLeftEye() 获取分割选项-左眼
 * @method void setLeftEye(boolean $LeftEye) 设置分割选项-左眼
 * @method boolean getRightEye() 获取分割选项-右眼
 * @method void setRightEye(boolean $RightEye) 设置分割选项-右眼
 * @method boolean getNose() 获取分割选项-鼻子
 * @method void setNose(boolean $Nose) 设置分割选项-鼻子
 * @method boolean getUpperLip() 获取分割选项-上唇
 * @method void setUpperLip(boolean $UpperLip) 设置分割选项-上唇
 * @method boolean getLowerLip() 获取分割选项-下唇
 * @method void setLowerLip(boolean $LowerLip) 设置分割选项-下唇
 * @method boolean getTooth() 获取分割选项-牙齿
 * @method void setTooth(boolean $Tooth) 设置分割选项-牙齿
 * @method boolean getMouth() 获取分割选项-口腔（不包含牙齿）
 * @method void setMouth(boolean $Mouth) 设置分割选项-口腔（不包含牙齿）
 * @method boolean getLeftEar() 获取分割选项-左耳
 * @method void setLeftEar(boolean $LeftEar) 设置分割选项-左耳
 * @method boolean getRightEar() 获取分割选项-右耳
 * @method void setRightEar(boolean $RightEar) 设置分割选项-右耳
 * @method boolean getFace() 获取分割选项-面部(不包含眼、耳、口、鼻等五官及头发。)
 * @method void setFace(boolean $Face) 设置分割选项-面部(不包含眼、耳、口、鼻等五官及头发。)
 * @method boolean getHead() 获取复合分割选项-头部(包含所有的头部元素，相关装饰除外)
 * @method void setHead(boolean $Head) 设置复合分割选项-头部(包含所有的头部元素，相关装饰除外)
 * @method boolean getBody() 获取分割选项-身体（包含脖子）
 * @method void setBody(boolean $Body) 设置分割选项-身体（包含脖子）
 * @method boolean getHat() 获取分割选项-帽子
 * @method void setHat(boolean $Hat) 设置分割选项-帽子
 * @method boolean getHeaddress() 获取分割选项-头饰
 * @method void setHeaddress(boolean $Headdress) 设置分割选项-头饰
 * @method boolean getEarrings() 获取分割选项-耳环
 * @method void setEarrings(boolean $Earrings) 设置分割选项-耳环
 * @method boolean getNecklace() 获取分割选项-项链
 * @method void setNecklace(boolean $Necklace) 设置分割选项-项链
 * @method boolean getBelongings() 获取分割选项-随身物品（ 例如伞、包、手机等。 ）
 * @method void setBelongings(boolean $Belongings) 设置分割选项-随身物品（ 例如伞、包、手机等。 ）
 */
class SegmentationOptions extends AbstractModel
{
    /**
     * @var boolean 分割选项-背景
     */
    public $Background;

    /**
     * @var boolean 分割选项-头发
     */
    public $Hair;

    /**
     * @var boolean 分割选项-左眉
     */
    public $LeftEyebrow;

    /**
     * @var boolean 分割选项-右眉
     */
    public $RightEyebrow;

    /**
     * @var boolean 分割选项-左眼
     */
    public $LeftEye;

    /**
     * @var boolean 分割选项-右眼
     */
    public $RightEye;

    /**
     * @var boolean 分割选项-鼻子
     */
    public $Nose;

    /**
     * @var boolean 分割选项-上唇
     */
    public $UpperLip;

    /**
     * @var boolean 分割选项-下唇
     */
    public $LowerLip;

    /**
     * @var boolean 分割选项-牙齿
     */
    public $Tooth;

    /**
     * @var boolean 分割选项-口腔（不包含牙齿）
     */
    public $Mouth;

    /**
     * @var boolean 分割选项-左耳
     */
    public $LeftEar;

    /**
     * @var boolean 分割选项-右耳
     */
    public $RightEar;

    /**
     * @var boolean 分割选项-面部(不包含眼、耳、口、鼻等五官及头发。)
     */
    public $Face;

    /**
     * @var boolean 复合分割选项-头部(包含所有的头部元素，相关装饰除外)
     */
    public $Head;

    /**
     * @var boolean 分割选项-身体（包含脖子）
     */
    public $Body;

    /**
     * @var boolean 分割选项-帽子
     */
    public $Hat;

    /**
     * @var boolean 分割选项-头饰
     */
    public $Headdress;

    /**
     * @var boolean 分割选项-耳环
     */
    public $Earrings;

    /**
     * @var boolean 分割选项-项链
     */
    public $Necklace;

    /**
     * @var boolean 分割选项-随身物品（ 例如伞、包、手机等。 ）
     */
    public $Belongings;

    /**
     * @param boolean $Background 分割选项-背景
     * @param boolean $Hair 分割选项-头发
     * @param boolean $LeftEyebrow 分割选项-左眉
     * @param boolean $RightEyebrow 分割选项-右眉
     * @param boolean $LeftEye 分割选项-左眼
     * @param boolean $RightEye 分割选项-右眼
     * @param boolean $Nose 分割选项-鼻子
     * @param boolean $UpperLip 分割选项-上唇
     * @param boolean $LowerLip 分割选项-下唇
     * @param boolean $Tooth 分割选项-牙齿
     * @param boolean $Mouth 分割选项-口腔（不包含牙齿）
     * @param boolean $LeftEar 分割选项-左耳
     * @param boolean $RightEar 分割选项-右耳
     * @param boolean $Face 分割选项-面部(不包含眼、耳、口、鼻等五官及头发。)
     * @param boolean $Head 复合分割选项-头部(包含所有的头部元素，相关装饰除外)
     * @param boolean $Body 分割选项-身体（包含脖子）
     * @param boolean $Hat 分割选项-帽子
     * @param boolean $Headdress 分割选项-头饰
     * @param boolean $Earrings 分割选项-耳环
     * @param boolean $Necklace 分割选项-项链
     * @param boolean $Belongings 分割选项-随身物品（ 例如伞、包、手机等。 ）
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
        if (array_key_exists("Background",$param) and $param["Background"] !== null) {
            $this->Background = $param["Background"];
        }

        if (array_key_exists("Hair",$param) and $param["Hair"] !== null) {
            $this->Hair = $param["Hair"];
        }

        if (array_key_exists("LeftEyebrow",$param) and $param["LeftEyebrow"] !== null) {
            $this->LeftEyebrow = $param["LeftEyebrow"];
        }

        if (array_key_exists("RightEyebrow",$param) and $param["RightEyebrow"] !== null) {
            $this->RightEyebrow = $param["RightEyebrow"];
        }

        if (array_key_exists("LeftEye",$param) and $param["LeftEye"] !== null) {
            $this->LeftEye = $param["LeftEye"];
        }

        if (array_key_exists("RightEye",$param) and $param["RightEye"] !== null) {
            $this->RightEye = $param["RightEye"];
        }

        if (array_key_exists("Nose",$param) and $param["Nose"] !== null) {
            $this->Nose = $param["Nose"];
        }

        if (array_key_exists("UpperLip",$param) and $param["UpperLip"] !== null) {
            $this->UpperLip = $param["UpperLip"];
        }

        if (array_key_exists("LowerLip",$param) and $param["LowerLip"] !== null) {
            $this->LowerLip = $param["LowerLip"];
        }

        if (array_key_exists("Tooth",$param) and $param["Tooth"] !== null) {
            $this->Tooth = $param["Tooth"];
        }

        if (array_key_exists("Mouth",$param) and $param["Mouth"] !== null) {
            $this->Mouth = $param["Mouth"];
        }

        if (array_key_exists("LeftEar",$param) and $param["LeftEar"] !== null) {
            $this->LeftEar = $param["LeftEar"];
        }

        if (array_key_exists("RightEar",$param) and $param["RightEar"] !== null) {
            $this->RightEar = $param["RightEar"];
        }

        if (array_key_exists("Face",$param) and $param["Face"] !== null) {
            $this->Face = $param["Face"];
        }

        if (array_key_exists("Head",$param) and $param["Head"] !== null) {
            $this->Head = $param["Head"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Hat",$param) and $param["Hat"] !== null) {
            $this->Hat = $param["Hat"];
        }

        if (array_key_exists("Headdress",$param) and $param["Headdress"] !== null) {
            $this->Headdress = $param["Headdress"];
        }

        if (array_key_exists("Earrings",$param) and $param["Earrings"] !== null) {
            $this->Earrings = $param["Earrings"];
        }

        if (array_key_exists("Necklace",$param) and $param["Necklace"] !== null) {
            $this->Necklace = $param["Necklace"];
        }

        if (array_key_exists("Belongings",$param) and $param["Belongings"] !== null) {
            $this->Belongings = $param["Belongings"];
        }
    }
}
