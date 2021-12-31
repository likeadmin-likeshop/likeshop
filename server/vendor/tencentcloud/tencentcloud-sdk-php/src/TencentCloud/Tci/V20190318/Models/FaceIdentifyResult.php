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
 * FaceIdentifyResult
 *
 * @method string getFaceId() 获取人脸标识符
 * @method void setFaceId(string $FaceId) 设置人脸标识符
 * @method string getLibraryId() 获取人员库标识符
 * @method void setLibraryId(string $LibraryId) 设置人员库标识符
 * @method string getPersonId() 获取人员标识符
 * @method void setPersonId(string $PersonId) 设置人员标识符
 * @method float getSimilarity() 获取相似度
 * @method void setSimilarity(float $Similarity) 设置相似度
 */
class FaceIdentifyResult extends AbstractModel
{
    /**
     * @var string 人脸标识符
     */
    public $FaceId;

    /**
     * @var string 人员库标识符
     */
    public $LibraryId;

    /**
     * @var string 人员标识符
     */
    public $PersonId;

    /**
     * @var float 相似度
     */
    public $Similarity;

    /**
     * @param string $FaceId 人脸标识符
     * @param string $LibraryId 人员库标识符
     * @param string $PersonId 人员标识符
     * @param float $Similarity 相似度
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
        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }
    }
}
