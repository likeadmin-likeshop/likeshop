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
 * 用户到访明细
 *
 * @method integer getPersonId() 获取用户ID
 * @method void setPersonId(integer $PersonId) 设置用户ID
 * @method integer getVisitId() 获取用户到访ID
 * @method void setVisitId(integer $VisitId) 设置用户到访ID
 * @method integer getInTime() 获取到访时间：Unix时间戳
 * @method void setInTime(integer $InTime) 设置到访时间：Unix时间戳
 * @method string getCapturedPicture() 获取抓拍到的头像Base64内容，已弃用，返回默认空值
 * @method void setCapturedPicture(string $CapturedPicture) 设置抓拍到的头像Base64内容，已弃用，返回默认空值
 * @method integer getMaskType() 获取口罩类型：0不戴口罩，1戴口罩
 * @method void setMaskType(integer $MaskType) 设置口罩类型：0不戴口罩，1戴口罩
 * @method integer getGlassType() 获取眼镜类型：0不戴眼镜，1普通眼镜 , 2墨镜
 * @method void setGlassType(integer $GlassType) 设置眼镜类型：0不戴眼镜，1普通眼镜 , 2墨镜
 * @method integer getHairType() 获取发型：0 短发,  1长发
 * @method void setHairType(integer $HairType) 设置发型：0 短发,  1长发
 * @method string getCapturedPictureUrl() 获取抓拍到的头像Url，在有效期内可以访问下载
 * @method void setCapturedPictureUrl(string $CapturedPictureUrl) 设置抓拍到的头像Url，在有效期内可以访问下载
 * @method SceneInfo getSceneInfo() 获取抓拍头像的场景图信息
 * @method void setSceneInfo(SceneInfo $SceneInfo) 设置抓拍头像的场景图信息
 */
class PersonVisitInfo extends AbstractModel
{
    /**
     * @var integer 用户ID
     */
    public $PersonId;

    /**
     * @var integer 用户到访ID
     */
    public $VisitId;

    /**
     * @var integer 到访时间：Unix时间戳
     */
    public $InTime;

    /**
     * @var string 抓拍到的头像Base64内容，已弃用，返回默认空值
     */
    public $CapturedPicture;

    /**
     * @var integer 口罩类型：0不戴口罩，1戴口罩
     */
    public $MaskType;

    /**
     * @var integer 眼镜类型：0不戴眼镜，1普通眼镜 , 2墨镜
     */
    public $GlassType;

    /**
     * @var integer 发型：0 短发,  1长发
     */
    public $HairType;

    /**
     * @var string 抓拍到的头像Url，在有效期内可以访问下载
     */
    public $CapturedPictureUrl;

    /**
     * @var SceneInfo 抓拍头像的场景图信息
     */
    public $SceneInfo;

    /**
     * @param integer $PersonId 用户ID
     * @param integer $VisitId 用户到访ID
     * @param integer $InTime 到访时间：Unix时间戳
     * @param string $CapturedPicture 抓拍到的头像Base64内容，已弃用，返回默认空值
     * @param integer $MaskType 口罩类型：0不戴口罩，1戴口罩
     * @param integer $GlassType 眼镜类型：0不戴眼镜，1普通眼镜 , 2墨镜
     * @param integer $HairType 发型：0 短发,  1长发
     * @param string $CapturedPictureUrl 抓拍到的头像Url，在有效期内可以访问下载
     * @param SceneInfo $SceneInfo 抓拍头像的场景图信息
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("VisitId",$param) and $param["VisitId"] !== null) {
            $this->VisitId = $param["VisitId"];
        }

        if (array_key_exists("InTime",$param) and $param["InTime"] !== null) {
            $this->InTime = $param["InTime"];
        }

        if (array_key_exists("CapturedPicture",$param) and $param["CapturedPicture"] !== null) {
            $this->CapturedPicture = $param["CapturedPicture"];
        }

        if (array_key_exists("MaskType",$param) and $param["MaskType"] !== null) {
            $this->MaskType = $param["MaskType"];
        }

        if (array_key_exists("GlassType",$param) and $param["GlassType"] !== null) {
            $this->GlassType = $param["GlassType"];
        }

        if (array_key_exists("HairType",$param) and $param["HairType"] !== null) {
            $this->HairType = $param["HairType"];
        }

        if (array_key_exists("CapturedPictureUrl",$param) and $param["CapturedPictureUrl"] !== null) {
            $this->CapturedPictureUrl = $param["CapturedPictureUrl"];
        }

        if (array_key_exists("SceneInfo",$param) and $param["SceneInfo"] !== null) {
            $this->SceneInfo = new SceneInfo();
            $this->SceneInfo->deserialize($param["SceneInfo"]);
        }
    }
}
