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
namespace TencentCloud\Facefusion\V20181201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FaceFusion请求参数结构体
 *
 * @method string getProjectId() 获取活动 ID，请在人脸融合控制台查看。
 * @method void setProjectId(string $ProjectId) 设置活动 ID，请在人脸融合控制台查看。
 * @method string getModelId() 获取素材 ID，请在人脸融合控制台查看。
 * @method void setModelId(string $ModelId) 设置素材 ID，请在人脸融合控制台查看。
 * @method string getImage() 获取图片 base64 数据。请确保人脸为正脸，无旋转。若某些手机拍摄后人脸被旋转，请使用图片的 EXIF 信息对图片进行旋转处理；请勿在 base64 数据中包含头部，如“data:image/jpeg;base64,”。
 * @method void setImage(string $Image) 设置图片 base64 数据。请确保人脸为正脸，无旋转。若某些手机拍摄后人脸被旋转，请使用图片的 EXIF 信息对图片进行旋转处理；请勿在 base64 数据中包含头部，如“data:image/jpeg;base64,”。
 * @method string getRspImgType() 获取返回图像方式（url 或 base64) ，二选一。url有效期为30天。
 * @method void setRspImgType(string $RspImgType) 设置返回图像方式（url 或 base64) ，二选一。url有效期为30天。
 * @method integer getPornDetect() 获取历史遗留字段，无需填写。因为融合只需提取人脸特征，不需要鉴黄。
 * @method void setPornDetect(integer $PornDetect) 设置历史遗留字段，无需填写。因为融合只需提取人脸特征，不需要鉴黄。
 * @method integer getCelebrityIdentify() 获取0表示不需要不适宜内容识别，1表示需要不适宜内容识别。默认值为0。
请注意，不适宜内容识别服务开启后，您需要根据返回结果自行判断是否调整您的业务逻辑。例如提示您的用户图片非法，请更换图片。
 * @method void setCelebrityIdentify(integer $CelebrityIdentify) 设置0表示不需要不适宜内容识别，1表示需要不适宜内容识别。默认值为0。
请注意，不适宜内容识别服务开启后，您需要根据返回结果自行判断是否调整您的业务逻辑。例如提示您的用户图片非法，请更换图片。
 */
class FaceFusionRequest extends AbstractModel
{
    /**
     * @var string 活动 ID，请在人脸融合控制台查看。
     */
    public $ProjectId;

    /**
     * @var string 素材 ID，请在人脸融合控制台查看。
     */
    public $ModelId;

    /**
     * @var string 图片 base64 数据。请确保人脸为正脸，无旋转。若某些手机拍摄后人脸被旋转，请使用图片的 EXIF 信息对图片进行旋转处理；请勿在 base64 数据中包含头部，如“data:image/jpeg;base64,”。
     */
    public $Image;

    /**
     * @var string 返回图像方式（url 或 base64) ，二选一。url有效期为30天。
     */
    public $RspImgType;

    /**
     * @var integer 历史遗留字段，无需填写。因为融合只需提取人脸特征，不需要鉴黄。
     */
    public $PornDetect;

    /**
     * @var integer 0表示不需要不适宜内容识别，1表示需要不适宜内容识别。默认值为0。
请注意，不适宜内容识别服务开启后，您需要根据返回结果自行判断是否调整您的业务逻辑。例如提示您的用户图片非法，请更换图片。
     */
    public $CelebrityIdentify;

    /**
     * @param string $ProjectId 活动 ID，请在人脸融合控制台查看。
     * @param string $ModelId 素材 ID，请在人脸融合控制台查看。
     * @param string $Image 图片 base64 数据。请确保人脸为正脸，无旋转。若某些手机拍摄后人脸被旋转，请使用图片的 EXIF 信息对图片进行旋转处理；请勿在 base64 数据中包含头部，如“data:image/jpeg;base64,”。
     * @param string $RspImgType 返回图像方式（url 或 base64) ，二选一。url有效期为30天。
     * @param integer $PornDetect 历史遗留字段，无需填写。因为融合只需提取人脸特征，不需要鉴黄。
     * @param integer $CelebrityIdentify 0表示不需要不适宜内容识别，1表示需要不适宜内容识别。默认值为0。
请注意，不适宜内容识别服务开启后，您需要根据返回结果自行判断是否调整您的业务逻辑。例如提示您的用户图片非法，请更换图片。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }

        if (array_key_exists("PornDetect",$param) and $param["PornDetect"] !== null) {
            $this->PornDetect = $param["PornDetect"];
        }

        if (array_key_exists("CelebrityIdentify",$param) and $param["CelebrityIdentify"] !== null) {
            $this->CelebrityIdentify = $param["CelebrityIdentify"];
        }
    }
}
