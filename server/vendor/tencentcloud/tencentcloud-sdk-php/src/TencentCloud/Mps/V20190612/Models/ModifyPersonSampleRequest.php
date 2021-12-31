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
 * ModifyPersonSample请求参数结构体
 *
 * @method string getPersonId() 获取素材 ID。
 * @method void setPersonId(string $PersonId) 设置素材 ID。
 * @method string getName() 获取名称，长度限制：128 个字符。
 * @method void setName(string $Name) 设置名称，长度限制：128 个字符。
 * @method string getDescription() 获取描述，长度限制：1024 个字符。
 * @method void setDescription(string $Description) 设置描述，长度限制：1024 个字符。
 * @method array getUsages() 获取素材应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于不适宜的内容识别，等价于 Review.Face。
3. All：用于内容识别、不适宜的内容识别，等价于 1+2。
 * @method void setUsages(array $Usages) 设置素材应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于不适宜的内容识别，等价于 Review.Face。
3. All：用于内容识别、不适宜的内容识别，等价于 1+2。
 * @method AiSampleFaceOperation getFaceOperationInfo() 获取五官操作信息。
 * @method void setFaceOperationInfo(AiSampleFaceOperation $FaceOperationInfo) 设置五官操作信息。
 * @method AiSampleTagOperation getTagOperationInfo() 获取标签操作信息。
 * @method void setTagOperationInfo(AiSampleTagOperation $TagOperationInfo) 设置标签操作信息。
 */
class ModifyPersonSampleRequest extends AbstractModel
{
    /**
     * @var string 素材 ID。
     */
    public $PersonId;

    /**
     * @var string 名称，长度限制：128 个字符。
     */
    public $Name;

    /**
     * @var string 描述，长度限制：1024 个字符。
     */
    public $Description;

    /**
     * @var array 素材应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于不适宜的内容识别，等价于 Review.Face。
3. All：用于内容识别、不适宜的内容识别，等价于 1+2。
     */
    public $Usages;

    /**
     * @var AiSampleFaceOperation 五官操作信息。
     */
    public $FaceOperationInfo;

    /**
     * @var AiSampleTagOperation 标签操作信息。
     */
    public $TagOperationInfo;

    /**
     * @param string $PersonId 素材 ID。
     * @param string $Name 名称，长度限制：128 个字符。
     * @param string $Description 描述，长度限制：1024 个字符。
     * @param array $Usages 素材应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于不适宜的内容识别，等价于 Review.Face。
3. All：用于内容识别、不适宜的内容识别，等价于 1+2。
     * @param AiSampleFaceOperation $FaceOperationInfo 五官操作信息。
     * @param AiSampleTagOperation $TagOperationInfo 标签操作信息。
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

        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = $param["Usages"];
        }

        if (array_key_exists("FaceOperationInfo",$param) and $param["FaceOperationInfo"] !== null) {
            $this->FaceOperationInfo = new AiSampleFaceOperation();
            $this->FaceOperationInfo->deserialize($param["FaceOperationInfo"]);
        }

        if (array_key_exists("TagOperationInfo",$param) and $param["TagOperationInfo"] !== null) {
            $this->TagOperationInfo = new AiSampleTagOperation();
            $this->TagOperationInfo->deserialize($param["TagOperationInfo"]);
        }
    }
}
