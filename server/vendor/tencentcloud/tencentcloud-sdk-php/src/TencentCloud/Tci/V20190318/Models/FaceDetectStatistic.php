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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸监测统计信息
 *
 * @method float getFaceSizeRatio() 获取人脸大小占画面平均占比
 * @method void setFaceSizeRatio(float $FaceSizeRatio) 设置人脸大小占画面平均占比
 * @method integer getFrontalFaceCount() 获取检测到正脸次数
 * @method void setFrontalFaceCount(integer $FrontalFaceCount) 设置检测到正脸次数
 * @method float getFrontalFaceRatio() 获取正脸时长占比
 * @method void setFrontalFaceRatio(float $FrontalFaceRatio) 设置正脸时长占比
 * @method float getFrontalFaceRealRatio() 获取正脸时长在总出现时常占比
 * @method void setFrontalFaceRealRatio(float $FrontalFaceRealRatio) 设置正脸时长在总出现时常占比
 * @method string getPersonId() 获取人员唯一标识符
 * @method void setPersonId(string $PersonId) 设置人员唯一标识符
 * @method integer getSideFaceCount() 获取检测到侧脸次数
 * @method void setSideFaceCount(integer $SideFaceCount) 设置检测到侧脸次数
 * @method float getSideFaceRatio() 获取侧脸时长占比
 * @method void setSideFaceRatio(float $SideFaceRatio) 设置侧脸时长占比
 * @method float getSideFaceRealRatio() 获取侧脸时长在总出现时常占比
 * @method void setSideFaceRealRatio(float $SideFaceRealRatio) 设置侧脸时长在总出现时常占比
 */
class FaceDetectStatistic extends AbstractModel
{
    /**
     * @var float 人脸大小占画面平均占比
     */
    public $FaceSizeRatio;

    /**
     * @var integer 检测到正脸次数
     */
    public $FrontalFaceCount;

    /**
     * @var float 正脸时长占比
     */
    public $FrontalFaceRatio;

    /**
     * @var float 正脸时长在总出现时常占比
     */
    public $FrontalFaceRealRatio;

    /**
     * @var string 人员唯一标识符
     */
    public $PersonId;

    /**
     * @var integer 检测到侧脸次数
     */
    public $SideFaceCount;

    /**
     * @var float 侧脸时长占比
     */
    public $SideFaceRatio;

    /**
     * @var float 侧脸时长在总出现时常占比
     */
    public $SideFaceRealRatio;

    /**
     * @param float $FaceSizeRatio 人脸大小占画面平均占比
     * @param integer $FrontalFaceCount 检测到正脸次数
     * @param float $FrontalFaceRatio 正脸时长占比
     * @param float $FrontalFaceRealRatio 正脸时长在总出现时常占比
     * @param string $PersonId 人员唯一标识符
     * @param integer $SideFaceCount 检测到侧脸次数
     * @param float $SideFaceRatio 侧脸时长占比
     * @param float $SideFaceRealRatio 侧脸时长在总出现时常占比
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
        if (array_key_exists("FaceSizeRatio",$param) and $param["FaceSizeRatio"] !== null) {
            $this->FaceSizeRatio = $param["FaceSizeRatio"];
        }

        if (array_key_exists("FrontalFaceCount",$param) and $param["FrontalFaceCount"] !== null) {
            $this->FrontalFaceCount = $param["FrontalFaceCount"];
        }

        if (array_key_exists("FrontalFaceRatio",$param) and $param["FrontalFaceRatio"] !== null) {
            $this->FrontalFaceRatio = $param["FrontalFaceRatio"];
        }

        if (array_key_exists("FrontalFaceRealRatio",$param) and $param["FrontalFaceRealRatio"] !== null) {
            $this->FrontalFaceRealRatio = $param["FrontalFaceRealRatio"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("SideFaceCount",$param) and $param["SideFaceCount"] !== null) {
            $this->SideFaceCount = $param["SideFaceCount"];
        }

        if (array_key_exists("SideFaceRatio",$param) and $param["SideFaceRatio"] !== null) {
            $this->SideFaceRatio = $param["SideFaceRatio"];
        }

        if (array_key_exists("SideFaceRealRatio",$param) and $param["SideFaceRealRatio"] !== null) {
            $this->SideFaceRealRatio = $param["SideFaceRealRatio"];
        }
    }
}
