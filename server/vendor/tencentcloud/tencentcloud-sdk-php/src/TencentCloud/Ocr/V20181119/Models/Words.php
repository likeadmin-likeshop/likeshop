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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 识别出来的单词信息包括单词（包括单词Character和单词置信度confidence）
 *
 * @method integer getConfidence() 获取置信度 0 ~100
 * @method void setConfidence(integer $Confidence) 设置置信度 0 ~100
 * @method string getCharacter() 获取候选字Character
 * @method void setCharacter(string $Character) 设置候选字Character
 */
class Words extends AbstractModel
{
    /**
     * @var integer 置信度 0 ~100
     */
    public $Confidence;

    /**
     * @var string 候选字Character
     */
    public $Character;

    /**
     * @param integer $Confidence 置信度 0 ~100
     * @param string $Character 候选字Character
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Character",$param) and $param["Character"] !== null) {
            $this->Character = $param["Character"];
        }
    }
}
