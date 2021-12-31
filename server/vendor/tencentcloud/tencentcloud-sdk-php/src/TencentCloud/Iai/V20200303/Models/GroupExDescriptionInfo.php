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
 * 需要修改的人员库自定义描述字段key-value
 *
 * @method integer getGroupExDescriptionIndex() 获取人员库自定义描述字段Index，从0开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupExDescriptionIndex(integer $GroupExDescriptionIndex) 设置人员库自定义描述字段Index，从0开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupExDescription() 获取需要更新的人员库自定义描述字段内容
 * @method void setGroupExDescription(string $GroupExDescription) 设置需要更新的人员库自定义描述字段内容
 */
class GroupExDescriptionInfo extends AbstractModel
{
    /**
     * @var integer 人员库自定义描述字段Index，从0开始
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupExDescriptionIndex;

    /**
     * @var string 需要更新的人员库自定义描述字段内容
     */
    public $GroupExDescription;

    /**
     * @param integer $GroupExDescriptionIndex 人员库自定义描述字段Index，从0开始
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupExDescription 需要更新的人员库自定义描述字段内容
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
        if (array_key_exists("GroupExDescriptionIndex",$param) and $param["GroupExDescriptionIndex"] !== null) {
            $this->GroupExDescriptionIndex = $param["GroupExDescriptionIndex"];
        }

        if (array_key_exists("GroupExDescription",$param) and $param["GroupExDescription"] !== null) {
            $this->GroupExDescription = $param["GroupExDescription"];
        }
    }
}
