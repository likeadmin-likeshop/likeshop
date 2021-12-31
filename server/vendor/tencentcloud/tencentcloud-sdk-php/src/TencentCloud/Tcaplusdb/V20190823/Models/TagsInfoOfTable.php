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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格标签信息
 *
 * @method string getTableInstanceId() 获取表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableInstanceId(string $TableInstanceId) 设置表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGroupId() 获取表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGroupId(string $TableGroupId) 设置表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorInfo getError() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(ErrorInfo $Error) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TagsInfoOfTable extends AbstractModel
{
    /**
     * @var string 表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableInstanceId;

    /**
     * @var string 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGroupId;

    /**
     * @var array 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var ErrorInfo 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @param string $TableInstanceId 表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGroupId 表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorInfo $Error 错误信息
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
        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }
    }
}
