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
 * 公众人物识别人脸信息
 *
 * @method string getName() 获取与图片中人脸最相似的公众人物的名字。
 * @method void setName(string $Name) 设置与图片中人脸最相似的公众人物的名字。
 * @method array getLabels() 获取公众人物身份标签的数组，一个公众人物可能有多个身份标签。
 * @method void setLabels(array $Labels) 设置公众人物身份标签的数组，一个公众人物可能有多个身份标签。
 * @method string getBasicInfo() 获取对人物的简介。
 * @method void setBasicInfo(string $BasicInfo) 设置对人物的简介。
 * @method integer getConfidence() 获取算法对于Name的置信度（图像中人脸与公众人物的相似度），0-100之间，值越高，表示对于Name越确定。
 * @method void setConfidence(integer $Confidence) 设置算法对于Name的置信度（图像中人脸与公众人物的相似度），0-100之间，值越高，表示对于Name越确定。
 * @method integer getX() 获取人脸区域左上角横坐标。
 * @method void setX(integer $X) 设置人脸区域左上角横坐标。
 * @method integer getY() 获取人脸区域左上角纵坐标。
 * @method void setY(integer $Y) 设置人脸区域左上角纵坐标。
 * @method integer getWidth() 获取人脸区域宽度。
 * @method void setWidth(integer $Width) 设置人脸区域宽度。
 * @method integer getHeight() 获取人脸区域高度。
 * @method void setHeight(integer $Height) 设置人脸区域高度。
 * @method string getID() 获取公众人物的唯一编号，可以用于区分同名人物、一个人物不同称呼等情况。唯一编号为8个字符构成的字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置公众人物的唯一编号，可以用于区分同名人物、一个人物不同称呼等情况。唯一编号为8个字符构成的字符串。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Face extends AbstractModel
{
    /**
     * @var string 与图片中人脸最相似的公众人物的名字。
     */
    public $Name;

    /**
     * @var array 公众人物身份标签的数组，一个公众人物可能有多个身份标签。
     */
    public $Labels;

    /**
     * @var string 对人物的简介。
     */
    public $BasicInfo;

    /**
     * @var integer 算法对于Name的置信度（图像中人脸与公众人物的相似度），0-100之间，值越高，表示对于Name越确定。
     */
    public $Confidence;

    /**
     * @var integer 人脸区域左上角横坐标。
     */
    public $X;

    /**
     * @var integer 人脸区域左上角纵坐标。
     */
    public $Y;

    /**
     * @var integer 人脸区域宽度。
     */
    public $Width;

    /**
     * @var integer 人脸区域高度。
     */
    public $Height;

    /**
     * @var string 公众人物的唯一编号，可以用于区分同名人物、一个人物不同称呼等情况。唯一编号为8个字符构成的字符串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @param string $Name 与图片中人脸最相似的公众人物的名字。
     * @param array $Labels 公众人物身份标签的数组，一个公众人物可能有多个身份标签。
     * @param string $BasicInfo 对人物的简介。
     * @param integer $Confidence 算法对于Name的置信度（图像中人脸与公众人物的相似度），0-100之间，值越高，表示对于Name越确定。
     * @param integer $X 人脸区域左上角横坐标。
     * @param integer $Y 人脸区域左上角纵坐标。
     * @param integer $Width 人脸区域宽度。
     * @param integer $Height 人脸区域高度。
     * @param string $ID 公众人物的唯一编号，可以用于区分同名人物、一个人物不同称呼等情况。唯一编号为8个字符构成的字符串。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Labels();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = $param["BasicInfo"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
