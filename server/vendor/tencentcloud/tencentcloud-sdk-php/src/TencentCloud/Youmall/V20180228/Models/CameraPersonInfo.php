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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 摄像头抓图人物属性
 *
 * @method string getTempId() 获取临时id，还未生成face id时返回
 * @method void setTempId(string $TempId) 设置临时id，还未生成face id时返回
 * @method integer getFaceId() 获取人脸face id
 * @method void setFaceId(integer $FaceId) 设置人脸face id
 * @method integer getIdType() 获取确定当次返回的哪个id有效，1-FaceId，2-TempId
 * @method void setIdType(integer $IdType) 设置确定当次返回的哪个id有效，1-FaceId，2-TempId
 * @method string getFacePic() 获取当次抓拍到的人脸图片base编码
 * @method void setFacePic(string $FacePic) 设置当次抓拍到的人脸图片base编码
 * @method integer getTime() 获取当次抓拍时间戳
 * @method void setTime(integer $Time) 设置当次抓拍时间戳
 * @method PersonInfo getPersonInfo() 获取当前的person基本信息，图片以FacePic为准，结构体内未填
 * @method void setPersonInfo(PersonInfo $PersonInfo) 设置当前的person基本信息，图片以FacePic为准，结构体内未填
 */
class CameraPersonInfo extends AbstractModel
{
    /**
     * @var string 临时id，还未生成face id时返回
     */
    public $TempId;

    /**
     * @var integer 人脸face id
     */
    public $FaceId;

    /**
     * @var integer 确定当次返回的哪个id有效，1-FaceId，2-TempId
     */
    public $IdType;

    /**
     * @var string 当次抓拍到的人脸图片base编码
     */
    public $FacePic;

    /**
     * @var integer 当次抓拍时间戳
     */
    public $Time;

    /**
     * @var PersonInfo 当前的person基本信息，图片以FacePic为准，结构体内未填
     */
    public $PersonInfo;

    /**
     * @param string $TempId 临时id，还未生成face id时返回
     * @param integer $FaceId 人脸face id
     * @param integer $IdType 确定当次返回的哪个id有效，1-FaceId，2-TempId
     * @param string $FacePic 当次抓拍到的人脸图片base编码
     * @param integer $Time 当次抓拍时间戳
     * @param PersonInfo $PersonInfo 当前的person基本信息，图片以FacePic为准，结构体内未填
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
        if (array_key_exists("TempId",$param) and $param["TempId"] !== null) {
            $this->TempId = $param["TempId"];
        }

        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("FacePic",$param) and $param["FacePic"] !== null) {
            $this->FacePic = $param["FacePic"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("PersonInfo",$param) and $param["PersonInfo"] !== null) {
            $this->PersonInfo = new PersonInfo();
            $this->PersonInfo->deserialize($param["PersonInfo"]);
        }
    }
}
