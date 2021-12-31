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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸信息列表。
 *
 * @method integer getX() 获取人脸框左上角横坐标。
人脸框包含人脸五官位置并在此基础上进行一定的扩展，若人脸框超出图片范围，会导致坐标负值。 
若需截取完整人脸，可以在完整分completeness满足需求的情况下，将负值坐标取0。
 * @method void setX(integer $X) 设置人脸框左上角横坐标。
人脸框包含人脸五官位置并在此基础上进行一定的扩展，若人脸框超出图片范围，会导致坐标负值。 
若需截取完整人脸，可以在完整分completeness满足需求的情况下，将负值坐标取0。
 * @method integer getY() 获取人脸框左上角纵坐标。 
人脸框包含人脸五官位置并在此基础上进行一定的扩展，若人脸框超出图片范围，会导致坐标负值。 
若需截取完整人脸，可以在完整分completeness满足需求的情况下，将负值坐标取0。
 * @method void setY(integer $Y) 设置人脸框左上角纵坐标。 
人脸框包含人脸五官位置并在此基础上进行一定的扩展，若人脸框超出图片范围，会导致坐标负值。 
若需截取完整人脸，可以在完整分completeness满足需求的情况下，将负值坐标取0。
 * @method integer getWidth() 获取人脸框宽度。
 * @method void setWidth(integer $Width) 设置人脸框宽度。
 * @method integer getHeight() 获取人脸框高度。
 * @method void setHeight(integer $Height) 设置人脸框高度。
 * @method FaceAttributesInfo getFaceAttributesInfo() 获取人脸属性信息，包含性别( gender )、年龄( age )、表情( expression )、 
魅力( beauty )、眼镜( glass )、口罩（mask）、头发（hair）和姿态 (pitch，roll，yaw )。只有当 NeedFaceAttributes 设为 1 时才返回有效信息。
 * @method void setFaceAttributesInfo(FaceAttributesInfo $FaceAttributesInfo) 设置人脸属性信息，包含性别( gender )、年龄( age )、表情( expression )、 
魅力( beauty )、眼镜( glass )、口罩（mask）、头发（hair）和姿态 (pitch，roll，yaw )。只有当 NeedFaceAttributes 设为 1 时才返回有效信息。
 * @method FaceQualityInfo getFaceQualityInfo() 获取人脸质量信息，包含质量分（score）、模糊分（sharpness）、光照分（brightness）、遮挡分（completeness）。只有当NeedFaceDetection设为1时才返回有效信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceQualityInfo(FaceQualityInfo $FaceQualityInfo) 设置人脸质量信息，包含质量分（score）、模糊分（sharpness）、光照分（brightness）、遮挡分（completeness）。只有当NeedFaceDetection设为1时才返回有效信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FaceInfo extends AbstractModel
{
    /**
     * @var integer 人脸框左上角横坐标。
人脸框包含人脸五官位置并在此基础上进行一定的扩展，若人脸框超出图片范围，会导致坐标负值。 
若需截取完整人脸，可以在完整分completeness满足需求的情况下，将负值坐标取0。
     */
    public $X;

    /**
     * @var integer 人脸框左上角纵坐标。 
人脸框包含人脸五官位置并在此基础上进行一定的扩展，若人脸框超出图片范围，会导致坐标负值。 
若需截取完整人脸，可以在完整分completeness满足需求的情况下，将负值坐标取0。
     */
    public $Y;

    /**
     * @var integer 人脸框宽度。
     */
    public $Width;

    /**
     * @var integer 人脸框高度。
     */
    public $Height;

    /**
     * @var FaceAttributesInfo 人脸属性信息，包含性别( gender )、年龄( age )、表情( expression )、 
魅力( beauty )、眼镜( glass )、口罩（mask）、头发（hair）和姿态 (pitch，roll，yaw )。只有当 NeedFaceAttributes 设为 1 时才返回有效信息。
     */
    public $FaceAttributesInfo;

    /**
     * @var FaceQualityInfo 人脸质量信息，包含质量分（score）、模糊分（sharpness）、光照分（brightness）、遮挡分（completeness）。只有当NeedFaceDetection设为1时才返回有效信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceQualityInfo;

    /**
     * @param integer $X 人脸框左上角横坐标。
人脸框包含人脸五官位置并在此基础上进行一定的扩展，若人脸框超出图片范围，会导致坐标负值。 
若需截取完整人脸，可以在完整分completeness满足需求的情况下，将负值坐标取0。
     * @param integer $Y 人脸框左上角纵坐标。 
人脸框包含人脸五官位置并在此基础上进行一定的扩展，若人脸框超出图片范围，会导致坐标负值。 
若需截取完整人脸，可以在完整分completeness满足需求的情况下，将负值坐标取0。
     * @param integer $Width 人脸框宽度。
     * @param integer $Height 人脸框高度。
     * @param FaceAttributesInfo $FaceAttributesInfo 人脸属性信息，包含性别( gender )、年龄( age )、表情( expression )、 
魅力( beauty )、眼镜( glass )、口罩（mask）、头发（hair）和姿态 (pitch，roll，yaw )。只有当 NeedFaceAttributes 设为 1 时才返回有效信息。
     * @param FaceQualityInfo $FaceQualityInfo 人脸质量信息，包含质量分（score）、模糊分（sharpness）、光照分（brightness）、遮挡分（completeness）。只有当NeedFaceDetection设为1时才返回有效信息。
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

        if (array_key_exists("FaceAttributesInfo",$param) and $param["FaceAttributesInfo"] !== null) {
            $this->FaceAttributesInfo = new FaceAttributesInfo();
            $this->FaceAttributesInfo->deserialize($param["FaceAttributesInfo"]);
        }

        if (array_key_exists("FaceQualityInfo",$param) and $param["FaceQualityInfo"] !== null) {
            $this->FaceQualityInfo = new FaceQualityInfo();
            $this->FaceQualityInfo->deserialize($param["FaceQualityInfo"]);
        }
    }
}
