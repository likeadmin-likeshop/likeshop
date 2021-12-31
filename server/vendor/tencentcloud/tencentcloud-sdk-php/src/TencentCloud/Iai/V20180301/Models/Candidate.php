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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 识别出的最相似候选人
 *
 * @method string getPersonId() 获取人员ID
 * @method void setPersonId(string $PersonId) 设置人员ID
 * @method string getFaceId() 获取人脸ID
 * @method void setFaceId(string $FaceId) 设置人脸ID
 * @method float getScore() 获取候选者的匹配得分。 

1万大小人脸底库下，误识率百分之一对应分数为70分，误识率千分之一对应分数为80分，误识率万分之一对应分数为90分；
10万大小人脸底库下，误识率百分之一对应分数为80分，误识率千分之一对应分数为90分，误识率万分之一对应分数为100分；
30万大小人脸底库下，误识率百分之一对应分数为85分，误识率千分之一对应分数为95分。

一般80分左右可适用大部分场景，建议分数不要超过90分。您可以根据实际情况选择合适的分数。
 * @method void setScore(float $Score) 设置候选者的匹配得分。 

1万大小人脸底库下，误识率百分之一对应分数为70分，误识率千分之一对应分数为80分，误识率万分之一对应分数为90分；
10万大小人脸底库下，误识率百分之一对应分数为80分，误识率千分之一对应分数为90分，误识率万分之一对应分数为100分；
30万大小人脸底库下，误识率百分之一对应分数为85分，误识率千分之一对应分数为95分。

一般80分左右可适用大部分场景，建议分数不要超过90分。您可以根据实际情况选择合适的分数。
 * @method string getPersonName() 获取人员名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonName(string $PersonName) 设置人员名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGender() 获取人员性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGender(integer $Gender) 设置人员性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPersonGroupInfos() 获取包含此人员的人员库及描述字段内容列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonGroupInfos(array $PersonGroupInfos) 设置包含此人员的人员库及描述字段内容列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Candidate extends AbstractModel
{
    /**
     * @var string 人员ID
     */
    public $PersonId;

    /**
     * @var string 人脸ID
     */
    public $FaceId;

    /**
     * @var float 候选者的匹配得分。 

1万大小人脸底库下，误识率百分之一对应分数为70分，误识率千分之一对应分数为80分，误识率万分之一对应分数为90分；
10万大小人脸底库下，误识率百分之一对应分数为80分，误识率千分之一对应分数为90分，误识率万分之一对应分数为100分；
30万大小人脸底库下，误识率百分之一对应分数为85分，误识率千分之一对应分数为95分。

一般80分左右可适用大部分场景，建议分数不要超过90分。您可以根据实际情况选择合适的分数。
     */
    public $Score;

    /**
     * @var string 人员名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonName;

    /**
     * @var integer 人员性别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gender;

    /**
     * @var array 包含此人员的人员库及描述字段内容列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonGroupInfos;

    /**
     * @param string $PersonId 人员ID
     * @param string $FaceId 人脸ID
     * @param float $Score 候选者的匹配得分。 

1万大小人脸底库下，误识率百分之一对应分数为70分，误识率千分之一对应分数为80分，误识率万分之一对应分数为90分；
10万大小人脸底库下，误识率百分之一对应分数为80分，误识率千分之一对应分数为90分，误识率万分之一对应分数为100分；
30万大小人脸底库下，误识率百分之一对应分数为85分，误识率千分之一对应分数为95分。

一般80分左右可适用大部分场景，建议分数不要超过90分。您可以根据实际情况选择合适的分数。
     * @param string $PersonName 人员名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Gender 人员性别
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PersonGroupInfos 包含此人员的人员库及描述字段内容列表
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("PersonGroupInfos",$param) and $param["PersonGroupInfos"] !== null) {
            $this->PersonGroupInfos = [];
            foreach ($param["PersonGroupInfos"] as $key => $value){
                $obj = new PersonGroupInfo();
                $obj->deserialize($value);
                array_push($this->PersonGroupInfos, $obj);
            }
        }
    }
}
