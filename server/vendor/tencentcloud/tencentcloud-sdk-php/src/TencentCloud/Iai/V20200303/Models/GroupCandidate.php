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
 * 分组识别结果Item
 *
 * @method string getGroupId() 获取人员库ID 。
 * @method void setGroupId(string $GroupId) 设置人员库ID 。
 * @method array getCandidates() 获取识别出的最相似候选人。
 * @method void setCandidates(array $Candidates) 设置识别出的最相似候选人。
 */
class GroupCandidate extends AbstractModel
{
    /**
     * @var string 人员库ID 。
     */
    public $GroupId;

    /**
     * @var array 识别出的最相似候选人。
     */
    public $Candidates;

    /**
     * @param string $GroupId 人员库ID 。
     * @param array $Candidates 识别出的最相似候选人。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Candidates",$param) and $param["Candidates"] !== null) {
            $this->Candidates = [];
            foreach ($param["Candidates"] as $key => $value){
                $obj = new Candidate();
                $obj->deserialize($value);
                array_push($this->Candidates, $obj);
            }
        }
    }
}
