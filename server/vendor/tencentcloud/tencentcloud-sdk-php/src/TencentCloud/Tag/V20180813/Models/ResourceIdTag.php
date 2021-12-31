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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源标签键值
 *
 * @method string getResourceId() 获取资源唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagKeyValues() 获取标签键值对
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagKeyValues(array $TagKeyValues) 设置标签键值对
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceIdTag extends AbstractModel
{
    /**
     * @var string 资源唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var array 标签键值对
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagKeyValues;

    /**
     * @param string $ResourceId 资源唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagKeyValues 标签键值对
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("TagKeyValues",$param) and $param["TagKeyValues"] !== null) {
            $this->TagKeyValues = [];
            foreach ($param["TagKeyValues"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagKeyValues, $obj);
            }
        }
    }
}
