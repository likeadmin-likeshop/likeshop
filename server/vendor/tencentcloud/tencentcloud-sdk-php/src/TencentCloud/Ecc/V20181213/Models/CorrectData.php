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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批改的结果
 *
 * @method float getScore() 获取总得分
 * @method void setScore(float $Score) 设置总得分
 * @method ScoreCategory getScoreCat() 获取各项得分详情
 * @method void setScoreCat(ScoreCategory $ScoreCat) 设置各项得分详情
 * @method string getComment() 获取综合评价
 * @method void setComment(string $Comment) 设置综合评价
 * @method array getSentenceComments() 获取句子点评
 * @method void setSentenceComments(array $SentenceComments) 设置句子点评
 */
class CorrectData extends AbstractModel
{
    /**
     * @var float 总得分
     */
    public $Score;

    /**
     * @var ScoreCategory 各项得分详情
     */
    public $ScoreCat;

    /**
     * @var string 综合评价
     */
    public $Comment;

    /**
     * @var array 句子点评
     */
    public $SentenceComments;

    /**
     * @param float $Score 总得分
     * @param ScoreCategory $ScoreCat 各项得分详情
     * @param string $Comment 综合评价
     * @param array $SentenceComments 句子点评
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("ScoreCat",$param) and $param["ScoreCat"] !== null) {
            $this->ScoreCat = new ScoreCategory();
            $this->ScoreCat->deserialize($param["ScoreCat"]);
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("SentenceComments",$param) and $param["SentenceComments"] !== null) {
            $this->SentenceComments = [];
            foreach ($param["SentenceComments"] as $key => $value){
                $obj = new SentenceCom();
                $obj->deserialize($value);
                array_push($this->SentenceComments, $obj);
            }
        }
    }
}
