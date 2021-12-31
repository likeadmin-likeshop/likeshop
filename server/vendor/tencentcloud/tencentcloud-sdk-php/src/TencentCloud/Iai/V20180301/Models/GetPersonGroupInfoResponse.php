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
 * GetPersonGroupInfo返回参数结构体
 *
 * @method array getPersonGroupInfos() 获取包含此人员的人员库及描述字段内容列表
 * @method void setPersonGroupInfos(array $PersonGroupInfos) 设置包含此人员的人员库及描述字段内容列表
 * @method integer getGroupNum() 获取人员库总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupNum(integer $GroupNum) 设置人员库总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFaceModelVersion() 获取人脸识别服务所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceModelVersion(string $FaceModelVersion) 设置人脸识别服务所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetPersonGroupInfoResponse extends AbstractModel
{
    /**
     * @var array 包含此人员的人员库及描述字段内容列表
     */
    public $PersonGroupInfos;

    /**
     * @var integer 人员库总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupNum;

    /**
     * @var string 人脸识别服务所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceModelVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PersonGroupInfos 包含此人员的人员库及描述字段内容列表
     * @param integer $GroupNum 人员库总数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FaceModelVersion 人脸识别服务所用的算法模型版本。
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
        if (array_key_exists("PersonGroupInfos",$param) and $param["PersonGroupInfos"] !== null) {
            $this->PersonGroupInfos = [];
            foreach ($param["PersonGroupInfos"] as $key => $value){
                $obj = new PersonGroupInfo();
                $obj->deserialize($value);
                array_push($this->PersonGroupInfos, $obj);
            }
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
