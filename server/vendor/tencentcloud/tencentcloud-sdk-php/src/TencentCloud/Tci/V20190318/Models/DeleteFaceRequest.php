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
 * DeleteFace请求参数结构体
 *
 * @method array getFaceIdSet() 获取人脸标识符数组
 * @method void setFaceIdSet(array $FaceIdSet) 设置人脸标识符数组
 * @method string getPersonId() 获取人员唯一标识符
 * @method void setPersonId(string $PersonId) 设置人员唯一标识符
 * @method string getLibraryId() 获取人员库唯一标识符
 * @method void setLibraryId(string $LibraryId) 设置人员库唯一标识符
 */
class DeleteFaceRequest extends AbstractModel
{
    /**
     * @var array 人脸标识符数组
     */
    public $FaceIdSet;

    /**
     * @var string 人员唯一标识符
     */
    public $PersonId;

    /**
     * @var string 人员库唯一标识符
     */
    public $LibraryId;

    /**
     * @param array $FaceIdSet 人脸标识符数组
     * @param string $PersonId 人员唯一标识符
     * @param string $LibraryId 人员库唯一标识符
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
        if (array_key_exists("FaceIdSet",$param) and $param["FaceIdSet"] !== null) {
            $this->FaceIdSet = $param["FaceIdSet"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }
    }
}
