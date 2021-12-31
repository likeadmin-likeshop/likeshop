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
 * 人员检索统计结果
 *
 * @method integer getDuration() 获取持续时间
 * @method void setDuration(integer $Duration) 设置持续时间
 * @method integer getEndTs() 获取结束时间
 * @method void setEndTs(integer $EndTs) 设置结束时间
 * @method string getPersonId() 获取人员唯一标识符
 * @method void setPersonId(string $PersonId) 设置人员唯一标识符
 * @method float getSimilarity() 获取相似度
 * @method void setSimilarity(float $Similarity) 设置相似度
 * @method integer getStartTs() 获取开始时间
 * @method void setStartTs(integer $StartTs) 设置开始时间
 */
class FaceIdentifyStatistic extends AbstractModel
{
    /**
     * @var integer 持续时间
     */
    public $Duration;

    /**
     * @var integer 结束时间
     */
    public $EndTs;

    /**
     * @var string 人员唯一标识符
     */
    public $PersonId;

    /**
     * @var float 相似度
     */
    public $Similarity;

    /**
     * @var integer 开始时间
     */
    public $StartTs;

    /**
     * @param integer $Duration 持续时间
     * @param integer $EndTs 结束时间
     * @param string $PersonId 人员唯一标识符
     * @param float $Similarity 相似度
     * @param integer $StartTs 开始时间
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("EndTs",$param) and $param["EndTs"] !== null) {
            $this->EndTs = $param["EndTs"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("StartTs",$param) and $param["StartTs"] !== null) {
            $this->StartTs = $param["StartTs"];
        }
    }
}
