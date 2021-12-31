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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 样本管理，人物信息。
 *
 * @method string getPersonId() 获取人物 ID。
 * @method void setPersonId(string $PersonId) 设置人物 ID。
 * @method string getName() 获取人物名称。
 * @method void setName(string $Name) 设置人物名称。
 * @method string getDescription() 获取人物描述。
 * @method void setDescription(string $Description) 设置人物描述。
 * @method array getFaceInfoSet() 获取人脸信息。
 * @method void setFaceInfoSet(array $FaceInfoSet) 设置人脸信息。
 * @method array getTagSet() 获取人物标签。
 * @method void setTagSet(array $TagSet) 设置人物标签。
 * @method array getUsageSet() 获取应用场景。
 * @method void setUsageSet(array $UsageSet) 设置应用场景。
 * @method string getCreateTime() 获取创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method string getUpdateTime() 获取最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 * @method void setUpdateTime(string $UpdateTime) 设置最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
 */
class AiSamplePerson extends AbstractModel
{
    /**
     * @var string 人物 ID。
     */
    public $PersonId;

    /**
     * @var string 人物名称。
     */
    public $Name;

    /**
     * @var string 人物描述。
     */
    public $Description;

    /**
     * @var array 人脸信息。
     */
    public $FaceInfoSet;

    /**
     * @var array 人物标签。
     */
    public $TagSet;

    /**
     * @var array 应用场景。
     */
    public $UsageSet;

    /**
     * @var string 创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $CreateTime;

    /**
     * @var string 最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     */
    public $UpdateTime;

    /**
     * @param string $PersonId 人物 ID。
     * @param string $Name 人物名称。
     * @param string $Description 人物描述。
     * @param array $FaceInfoSet 人脸信息。
     * @param array $TagSet 人物标签。
     * @param array $UsageSet 应用场景。
     * @param string $CreateTime 创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
     * @param string $UpdateTime 最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FaceInfoSet",$param) and $param["FaceInfoSet"] !== null) {
            $this->FaceInfoSet = [];
            foreach ($param["FaceInfoSet"] as $key => $value){
                $obj = new AiSampleFaceInfo();
                $obj->deserialize($value);
                array_push($this->FaceInfoSet, $obj);
            }
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("UsageSet",$param) and $param["UsageSet"] !== null) {
            $this->UsageSet = $param["UsageSet"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
