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
 * DeletePerson返回参数结构体
 *
 * @method array getFaceInfoSet() 获取人脸信息
 * @method void setFaceInfoSet(array $FaceInfoSet) 设置人脸信息
 * @method string getLibraryId() 获取人员库唯一标识符
 * @method void setLibraryId(string $LibraryId) 设置人员库唯一标识符
 * @method string getPersonId() 获取人员唯一标识符
 * @method void setPersonId(string $PersonId) 设置人员唯一标识符
 * @method string getPersonName() 获取人员名称
 * @method void setPersonName(string $PersonName) 设置人员名称
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DeletePersonResponse extends AbstractModel
{
    /**
     * @var array 人脸信息
     */
    public $FaceInfoSet;

    /**
     * @var string 人员库唯一标识符
     */
    public $LibraryId;

    /**
     * @var string 人员唯一标识符
     */
    public $PersonId;

    /**
     * @var string 人员名称
     */
    public $PersonName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FaceInfoSet 人脸信息
     * @param string $LibraryId 人员库唯一标识符
     * @param string $PersonId 人员唯一标识符
     * @param string $PersonName 人员名称
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FaceInfoSet",$param) and $param["FaceInfoSet"] !== null) {
            $this->FaceInfoSet = [];
            foreach ($param["FaceInfoSet"] as $key => $value){
                $obj = new FaceInfo();
                $obj->deserialize($value);
                array_push($this->FaceInfoSet, $obj);
            }
        }

        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
