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
 * 人脸属性信息，根据 FaceAttributesType 输入的类型，返回年龄（Age）、颜值（Beauty） 
情绪（Emotion）、眼睛信息（Eye）、眉毛（Eyebrow）、性别（Gender） 
头发（Hair）、帽子（Hat）、姿态（Headpose）、口罩（Mask）、嘴巴（Mouse）、胡子（Moustache） 
鼻子（Nose）、脸型（Shape）、肤色（Skin）、微笑（Smile）等人脸属性信息。  
若 FaceAttributesType 没有输入相关类型，则FaceDetaiAttributesInfo返回的细项不具备参考意义。
 *
 * @method integer getAge() 获取年龄 [0,65]，其中65代表“65岁及以上”。 
FaceAttributesType 不为含Age 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setAge(integer $Age) 设置年龄 [0,65]，其中65代表“65岁及以上”。 
FaceAttributesType 不为含Age 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method integer getBeauty() 获取美丑打分[0,100]。 
FaceAttributesType 不含 Beauty 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setBeauty(integer $Beauty) 设置美丑打分[0,100]。 
FaceAttributesType 不含 Beauty 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method AttributeItem getEmotion() 获取情绪，可识别自然、高兴、惊讶、生气、悲伤、厌恶、害怕。 
AttributeItem对应的Type为 —— 0：自然，1：高兴，2：惊讶，3：生气，4：悲伤，5：厌恶，6：害怕
FaceAttributesType 不含Emotion 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setEmotion(AttributeItem $Emotion) 设置情绪，可识别自然、高兴、惊讶、生气、悲伤、厌恶、害怕。 
AttributeItem对应的Type为 —— 0：自然，1：高兴，2：惊讶，3：生气，4：悲伤，5：厌恶，6：害怕
FaceAttributesType 不含Emotion 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method Eye getEye() 获取眼睛相关信息，可识别是否戴眼镜、是否闭眼、是否双眼皮和眼睛大小。 
FaceAttributesType 不含Eye 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setEye(Eye $Eye) 设置眼睛相关信息，可识别是否戴眼镜、是否闭眼、是否双眼皮和眼睛大小。 
FaceAttributesType 不含Eye 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method Eyebrow getEyebrow() 获取眉毛相关信息，可识别眉毛浓密、弯曲、长短信息。 
FaceAttributesType 不含Eyebrow 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setEyebrow(Eyebrow $Eyebrow) 设置眉毛相关信息，可识别眉毛浓密、弯曲、长短信息。 
FaceAttributesType 不含Eyebrow 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method AttributeItem getGender() 获取性别信息。 
AttributeItem对应的Type为 —— 	0：男性，1：女性。
FaceAttributesType 不含Gender 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setGender(AttributeItem $Gender) 设置性别信息。 
AttributeItem对应的Type为 —— 	0：男性，1：女性。
FaceAttributesType 不含Gender 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method Hair getHair() 获取头发信息，包含头发长度、有无刘海、头发颜色。 
FaceAttributesType 不含Hair 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setHair(Hair $Hair) 设置头发信息，包含头发长度、有无刘海、头发颜色。 
FaceAttributesType 不含Hair 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method Hat getHat() 获取帽子信息，可识别是否佩戴帽子、帽子款式、帽子颜色。 
FaceAttributesType 不含Hat 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setHat(Hat $Hat) 设置帽子信息，可识别是否佩戴帽子、帽子款式、帽子颜色。 
FaceAttributesType 不含Hat 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method HeadPose getHeadPose() 获取姿态信息，包含人脸的上下偏移、左右偏移、平面旋转信息。 
FaceAttributesType 不含Headpose 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setHeadPose(HeadPose $HeadPose) 设置姿态信息，包含人脸的上下偏移、左右偏移、平面旋转信息。 
FaceAttributesType 不含Headpose 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method AttributeItem getMask() 获取口罩佩戴信息。 
AttributeItem对应的Type为 —— 0: 无口罩， 1: 有口罩不遮脸，2: 有口罩遮下巴，3: 有口罩遮嘴，4: 正确佩戴口罩。
FaceAttributesType 不含Mask 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setMask(AttributeItem $Mask) 设置口罩佩戴信息。 
AttributeItem对应的Type为 —— 0: 无口罩， 1: 有口罩不遮脸，2: 有口罩遮下巴，3: 有口罩遮嘴，4: 正确佩戴口罩。
FaceAttributesType 不含Mask 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method Mouth getMouth() 获取嘴巴信息，可识别是否张嘴、嘴唇厚度。 
FaceAttributesType 不含 Mouth 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setMouth(Mouth $Mouth) 设置嘴巴信息，可识别是否张嘴、嘴唇厚度。 
FaceAttributesType 不含 Mouth 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method AttributeItem getMoustache() 获取胡子信息。
AttributeItem对应的Type为 —— 0：无胡子，1：有胡子。 
FaceAttributesType 不含 Moustache 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setMoustache(AttributeItem $Moustache) 设置胡子信息。
AttributeItem对应的Type为 —— 0：无胡子，1：有胡子。 
FaceAttributesType 不含 Moustache 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method AttributeItem getNose() 获取鼻子信息。 
AttributeItem对应的Type为 —— 0：朝天鼻，1：鹰钩鼻，2：普通，3：圆鼻头
FaceAttributesType 不含 Nose 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setNose(AttributeItem $Nose) 设置鼻子信息。 
AttributeItem对应的Type为 —— 0：朝天鼻，1：鹰钩鼻，2：普通，3：圆鼻头
FaceAttributesType 不含 Nose 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method AttributeItem getShape() 获取脸型信息。 
AttributeItem对应的Type为 —— 0：方脸，1：三角脸，2：鹅蛋脸，3：心形脸，4：圆脸。
FaceAttributesType 不含 Shape 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setShape(AttributeItem $Shape) 设置脸型信息。 
AttributeItem对应的Type为 —— 0：方脸，1：三角脸，2：鹅蛋脸，3：心形脸，4：圆脸。
FaceAttributesType 不含 Shape 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method AttributeItem getSkin() 获取肤色信息。 
AttributeItem对应的Type为 —— 0：黄色皮肤，1：棕色皮肤，2：黑色皮肤，3：白色皮肤。
FaceAttributesType 不含 Skin 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setSkin(AttributeItem $Skin) 设置肤色信息。 
AttributeItem对应的Type为 —— 0：黄色皮肤，1：棕色皮肤，2：黑色皮肤，3：白色皮肤。
FaceAttributesType 不含 Skin 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method integer getSmile() 获取微笑程度，[0,100]。 
FaceAttributesType 不含 Smile 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 * @method void setSmile(integer $Smile) 设置微笑程度，[0,100]。 
FaceAttributesType 不含 Smile 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
 */
class FaceDetailAttributesInfo extends AbstractModel
{
    /**
     * @var integer 年龄 [0,65]，其中65代表“65岁及以上”。 
FaceAttributesType 不为含Age 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Age;

    /**
     * @var integer 美丑打分[0,100]。 
FaceAttributesType 不含 Beauty 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Beauty;

    /**
     * @var AttributeItem 情绪，可识别自然、高兴、惊讶、生气、悲伤、厌恶、害怕。 
AttributeItem对应的Type为 —— 0：自然，1：高兴，2：惊讶，3：生气，4：悲伤，5：厌恶，6：害怕
FaceAttributesType 不含Emotion 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Emotion;

    /**
     * @var Eye 眼睛相关信息，可识别是否戴眼镜、是否闭眼、是否双眼皮和眼睛大小。 
FaceAttributesType 不含Eye 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Eye;

    /**
     * @var Eyebrow 眉毛相关信息，可识别眉毛浓密、弯曲、长短信息。 
FaceAttributesType 不含Eyebrow 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Eyebrow;

    /**
     * @var AttributeItem 性别信息。 
AttributeItem对应的Type为 —— 	0：男性，1：女性。
FaceAttributesType 不含Gender 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Gender;

    /**
     * @var Hair 头发信息，包含头发长度、有无刘海、头发颜色。 
FaceAttributesType 不含Hair 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Hair;

    /**
     * @var Hat 帽子信息，可识别是否佩戴帽子、帽子款式、帽子颜色。 
FaceAttributesType 不含Hat 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Hat;

    /**
     * @var HeadPose 姿态信息，包含人脸的上下偏移、左右偏移、平面旋转信息。 
FaceAttributesType 不含Headpose 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $HeadPose;

    /**
     * @var AttributeItem 口罩佩戴信息。 
AttributeItem对应的Type为 —— 0: 无口罩， 1: 有口罩不遮脸，2: 有口罩遮下巴，3: 有口罩遮嘴，4: 正确佩戴口罩。
FaceAttributesType 不含Mask 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Mask;

    /**
     * @var Mouth 嘴巴信息，可识别是否张嘴、嘴唇厚度。 
FaceAttributesType 不含 Mouth 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Mouth;

    /**
     * @var AttributeItem 胡子信息。
AttributeItem对应的Type为 —— 0：无胡子，1：有胡子。 
FaceAttributesType 不含 Moustache 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Moustache;

    /**
     * @var AttributeItem 鼻子信息。 
AttributeItem对应的Type为 —— 0：朝天鼻，1：鹰钩鼻，2：普通，3：圆鼻头
FaceAttributesType 不含 Nose 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Nose;

    /**
     * @var AttributeItem 脸型信息。 
AttributeItem对应的Type为 —— 0：方脸，1：三角脸，2：鹅蛋脸，3：心形脸，4：圆脸。
FaceAttributesType 不含 Shape 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Shape;

    /**
     * @var AttributeItem 肤色信息。 
AttributeItem对应的Type为 —— 0：黄色皮肤，1：棕色皮肤，2：黑色皮肤，3：白色皮肤。
FaceAttributesType 不含 Skin 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Skin;

    /**
     * @var integer 微笑程度，[0,100]。 
FaceAttributesType 不含 Smile 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     */
    public $Smile;

    /**
     * @param integer $Age 年龄 [0,65]，其中65代表“65岁及以上”。 
FaceAttributesType 不为含Age 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param integer $Beauty 美丑打分[0,100]。 
FaceAttributesType 不含 Beauty 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param AttributeItem $Emotion 情绪，可识别自然、高兴、惊讶、生气、悲伤、厌恶、害怕。 
AttributeItem对应的Type为 —— 0：自然，1：高兴，2：惊讶，3：生气，4：悲伤，5：厌恶，6：害怕
FaceAttributesType 不含Emotion 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param Eye $Eye 眼睛相关信息，可识别是否戴眼镜、是否闭眼、是否双眼皮和眼睛大小。 
FaceAttributesType 不含Eye 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param Eyebrow $Eyebrow 眉毛相关信息，可识别眉毛浓密、弯曲、长短信息。 
FaceAttributesType 不含Eyebrow 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param AttributeItem $Gender 性别信息。 
AttributeItem对应的Type为 —— 	0：男性，1：女性。
FaceAttributesType 不含Gender 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param Hair $Hair 头发信息，包含头发长度、有无刘海、头发颜色。 
FaceAttributesType 不含Hair 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param Hat $Hat 帽子信息，可识别是否佩戴帽子、帽子款式、帽子颜色。 
FaceAttributesType 不含Hat 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param HeadPose $HeadPose 姿态信息，包含人脸的上下偏移、左右偏移、平面旋转信息。 
FaceAttributesType 不含Headpose 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param AttributeItem $Mask 口罩佩戴信息。 
AttributeItem对应的Type为 —— 0: 无口罩， 1: 有口罩不遮脸，2: 有口罩遮下巴，3: 有口罩遮嘴，4: 正确佩戴口罩。
FaceAttributesType 不含Mask 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param Mouth $Mouth 嘴巴信息，可识别是否张嘴、嘴唇厚度。 
FaceAttributesType 不含 Mouth 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param AttributeItem $Moustache 胡子信息。
AttributeItem对应的Type为 —— 0：无胡子，1：有胡子。 
FaceAttributesType 不含 Moustache 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param AttributeItem $Nose 鼻子信息。 
AttributeItem对应的Type为 —— 0：朝天鼻，1：鹰钩鼻，2：普通，3：圆鼻头
FaceAttributesType 不含 Nose 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param AttributeItem $Shape 脸型信息。 
AttributeItem对应的Type为 —— 0：方脸，1：三角脸，2：鹅蛋脸，3：心形脸，4：圆脸。
FaceAttributesType 不含 Shape 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param AttributeItem $Skin 肤色信息。 
AttributeItem对应的Type为 —— 0：黄色皮肤，1：棕色皮肤，2：黑色皮肤，3：白色皮肤。
FaceAttributesType 不含 Skin 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
     * @param integer $Smile 微笑程度，[0,100]。 
FaceAttributesType 不含 Smile 或检测超过 5 张人脸时，此参数仍返回，但不具备参考意义。
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

        if (array_key_exists("Beauty",$param) and $param["Beauty"] !== null) {
            $this->Beauty = $param["Beauty"];
        }

        if (array_key_exists("Emotion",$param) and $param["Emotion"] !== null) {
            $this->Emotion = new AttributeItem();
            $this->Emotion->deserialize($param["Emotion"]);
        }

        if (array_key_exists("Eye",$param) and $param["Eye"] !== null) {
            $this->Eye = new Eye();
            $this->Eye->deserialize($param["Eye"]);
        }

        if (array_key_exists("Eyebrow",$param) and $param["Eyebrow"] !== null) {
            $this->Eyebrow = new Eyebrow();
            $this->Eyebrow->deserialize($param["Eyebrow"]);
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = new AttributeItem();
            $this->Gender->deserialize($param["Gender"]);
        }

        if (array_key_exists("Hair",$param) and $param["Hair"] !== null) {
            $this->Hair = new Hair();
            $this->Hair->deserialize($param["Hair"]);
        }

        if (array_key_exists("Hat",$param) and $param["Hat"] !== null) {
            $this->Hat = new Hat();
            $this->Hat->deserialize($param["Hat"]);
        }

        if (array_key_exists("HeadPose",$param) and $param["HeadPose"] !== null) {
            $this->HeadPose = new HeadPose();
            $this->HeadPose->deserialize($param["HeadPose"]);
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = new AttributeItem();
            $this->Mask->deserialize($param["Mask"]);
        }

        if (array_key_exists("Mouth",$param) and $param["Mouth"] !== null) {
            $this->Mouth = new Mouth();
            $this->Mouth->deserialize($param["Mouth"]);
        }

        if (array_key_exists("Moustache",$param) and $param["Moustache"] !== null) {
            $this->Moustache = new AttributeItem();
            $this->Moustache->deserialize($param["Moustache"]);
        }

        if (array_key_exists("Nose",$param) and $param["Nose"] !== null) {
            $this->Nose = new AttributeItem();
            $this->Nose->deserialize($param["Nose"]);
        }

        if (array_key_exists("Shape",$param) and $param["Shape"] !== null) {
            $this->Shape = new AttributeItem();
            $this->Shape->deserialize($param["Shape"]);
        }

        if (array_key_exists("Skin",$param) and $param["Skin"] !== null) {
            $this->Skin = new AttributeItem();
            $this->Skin->deserialize($param["Skin"]);
        }

        if (array_key_exists("Smile",$param) and $param["Smile"] !== null) {
            $this->Smile = $param["Smile"];
        }
    }
}
