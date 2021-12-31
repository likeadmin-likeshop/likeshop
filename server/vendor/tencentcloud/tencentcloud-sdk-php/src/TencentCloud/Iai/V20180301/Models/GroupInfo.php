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
 * 返回的人员库信息
 *
 * @method string getGroupName() 获取人员库名称
 * @method void setGroupName(string $GroupName) 设置人员库名称
 * @method string getGroupId() 获取人员库ID
 * @method void setGroupId(string $GroupId) 设置人员库ID
 * @method array getGroupExDescriptions() 获取人员库自定义描述字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupExDescriptions(array $GroupExDescriptions) 设置人员库自定义描述字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTag() 获取人员库信息备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(string $Tag) 设置人员库信息备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFaceModelVersion() 获取人脸识别所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceModelVersion(string $FaceModelVersion) 设置人脸识别所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreationTimestamp() 获取Group的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。有关更多信息，请参阅 Unix 时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTimestamp(integer $CreationTimestamp) 设置Group的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。有关更多信息，请参阅 Unix 时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 人员库名称
     */
    public $GroupName;

    /**
     * @var string 人员库ID
     */
    public $GroupId;

    /**
     * @var array 人员库自定义描述字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupExDescriptions;

    /**
     * @var string 人员库信息备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var string 人脸识别所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceModelVersion;

    /**
     * @var integer Group的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。有关更多信息，请参阅 Unix 时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTimestamp;

    /**
     * @param string $GroupName 人员库名称
     * @param string $GroupId 人员库ID
     * @param array $GroupExDescriptions 人员库自定义描述字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tag 人员库信息备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FaceModelVersion 人脸识别所用的算法模型版本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreationTimestamp Group的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。有关更多信息，请参阅 Unix 时间。
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupExDescriptions",$param) and $param["GroupExDescriptions"] !== null) {
            $this->GroupExDescriptions = $param["GroupExDescriptions"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }
    }
}
