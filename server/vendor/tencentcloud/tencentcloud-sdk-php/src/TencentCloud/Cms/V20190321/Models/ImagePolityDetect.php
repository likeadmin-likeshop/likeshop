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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片涉政详情
 *
 * @method integer getEvilType() 获取恶意类型
100：正常 
20001：政治
 * @method void setEvilType(integer $EvilType) 设置恶意类型
100：正常 
20001：政治
 * @method integer getHitFlag() 获取处置判定  0：正常 1：可疑
 * @method void setHitFlag(integer $HitFlag) 设置处置判定  0：正常 1：可疑
 * @method array getPolityLogoDetail() 获取命中的logo标签信息
 * @method void setPolityLogoDetail(array $PolityLogoDetail) 设置命中的logo标签信息
 * @method array getFaceNames() 获取命中的人脸名称
 * @method void setFaceNames(array $FaceNames) 设置命中的人脸名称
 * @method array getKeywords() 获取关键词明细
 * @method void setKeywords(array $Keywords) 设置关键词明细
 * @method array getPolityItems() 获取命中的政治物品名称
 * @method void setPolityItems(array $PolityItems) 设置命中的政治物品名称
 * @method integer getScore() 获取政治（人脸）分：分值范围 0-100，分数越高可疑程度越高
 * @method void setScore(integer $Score) 设置政治（人脸）分：分值范围 0-100，分数越高可疑程度越高
 */
class ImagePolityDetect extends AbstractModel
{
    /**
     * @var integer 恶意类型
100：正常 
20001：政治
     */
    public $EvilType;

    /**
     * @var integer 处置判定  0：正常 1：可疑
     */
    public $HitFlag;

    /**
     * @var array 命中的logo标签信息
     */
    public $PolityLogoDetail;

    /**
     * @var array 命中的人脸名称
     */
    public $FaceNames;

    /**
     * @var array 关键词明细
     */
    public $Keywords;

    /**
     * @var array 命中的政治物品名称
     */
    public $PolityItems;

    /**
     * @var integer 政治（人脸）分：分值范围 0-100，分数越高可疑程度越高
     */
    public $Score;

    /**
     * @param integer $EvilType 恶意类型
100：正常 
20001：政治
     * @param integer $HitFlag 处置判定  0：正常 1：可疑
     * @param array $PolityLogoDetail 命中的logo标签信息
     * @param array $FaceNames 命中的人脸名称
     * @param array $Keywords 关键词明细
     * @param array $PolityItems 命中的政治物品名称
     * @param integer $Score 政治（人脸）分：分值范围 0-100，分数越高可疑程度越高
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
        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("PolityLogoDetail",$param) and $param["PolityLogoDetail"] !== null) {
            $this->PolityLogoDetail = [];
            foreach ($param["PolityLogoDetail"] as $key => $value){
                $obj = new Logo();
                $obj->deserialize($value);
                array_push($this->PolityLogoDetail, $obj);
            }
        }

        if (array_key_exists("FaceNames",$param) and $param["FaceNames"] !== null) {
            $this->FaceNames = $param["FaceNames"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("PolityItems",$param) and $param["PolityItems"] !== null) {
            $this->PolityItems = $param["PolityItems"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
