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
 * GetPersonList返回参数结构体
 *
 * @method array getPersonInfos() 获取返回的人员信息
 * @method void setPersonInfos(array $PersonInfos) 设置返回的人员信息
 * @method integer getPersonNum() 获取该人员库的人员数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonNum(integer $PersonNum) 设置该人员库的人员数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFaceNum() 获取该人员库的人脸数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceNum(integer $FaceNum) 设置该人员库的人脸数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFaceModelVersion() 获取人脸识别所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceModelVersion(string $FaceModelVersion) 设置人脸识别所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetPersonListResponse extends AbstractModel
{
    /**
     * @var array 返回的人员信息
     */
    public $PersonInfos;

    /**
     * @var integer 该人员库的人员数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonNum;

    /**
     * @var integer 该人员库的人脸数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceNum;

    /**
     * @var string 人脸识别所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceModelVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PersonInfos 返回的人员信息
     * @param integer $PersonNum 该人员库的人员数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FaceNum 该人员库的人脸数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FaceModelVersion 人脸识别所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PersonInfos",$param) and $param["PersonInfos"] !== null) {
            $this->PersonInfos = [];
            foreach ($param["PersonInfos"] as $key => $value){
                $obj = new PersonInfo();
                $obj->deserialize($value);
                array_push($this->PersonInfos, $obj);
            }
        }

        if (array_key_exists("PersonNum",$param) and $param["PersonNum"] !== null) {
            $this->PersonNum = $param["PersonNum"];
        }

        if (array_key_exists("FaceNum",$param) and $param["FaceNum"] !== null) {
            $this->FaceNum = $param["FaceNum"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
