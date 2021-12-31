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
 * 需要修改的人员描述字段内容，key-value
 *
 * @method integer getPersonExDescriptionIndex() 获取人员描述字段Index，从0开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonExDescriptionIndex(integer $PersonExDescriptionIndex) 设置人员描述字段Index，从0开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPersonExDescription() 获取需要更新的人员描述字段内容
 * @method void setPersonExDescription(string $PersonExDescription) 设置需要更新的人员描述字段内容
 */
class PersonExDescriptionInfo extends AbstractModel
{
    /**
     * @var integer 人员描述字段Index，从0开始
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonExDescriptionIndex;

    /**
     * @var string 需要更新的人员描述字段内容
     */
    public $PersonExDescription;

    /**
     * @param integer $PersonExDescriptionIndex 人员描述字段Index，从0开始
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PersonExDescription 需要更新的人员描述字段内容
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
        if (array_key_exists("PersonExDescriptionIndex",$param) and $param["PersonExDescriptionIndex"] !== null) {
            $this->PersonExDescriptionIndex = $param["PersonExDescriptionIndex"];
        }

        if (array_key_exists("PersonExDescription",$param) and $param["PersonExDescription"] !== null) {
            $this->PersonExDescription = $param["PersonExDescription"];
        }
    }
}
