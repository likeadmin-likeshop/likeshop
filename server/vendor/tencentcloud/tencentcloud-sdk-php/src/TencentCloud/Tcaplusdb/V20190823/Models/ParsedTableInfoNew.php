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
 * 从IDL表描述文件中解析出来的表信息
 *
 * @method string getTableIdlType() 获取表格描述语言类型：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableIdlType(string $TableIdlType) 设置表格描述语言类型：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableInstanceId() 获取表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableInstanceId(string $TableInstanceId) 设置表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableType() 获取表格数据结构类型：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableType(string $TableType) 设置表格数据结构类型：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyFields() 获取主键字段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyFields(string $KeyFields) 设置主键字段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldKeyFields() 获取原主键字段信息，改表校验时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldKeyFields(string $OldKeyFields) 设置原主键字段信息，改表校验时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueFields() 获取非主键字段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueFields(string $ValueFields) 设置非主键字段信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldValueFields() 获取原非主键字段信息，改表校验时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldValueFields(string $OldValueFields) 设置原非主键字段信息，改表校验时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGroupId() 获取所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGroupId(string $TableGroupId) 设置所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSumKeyFieldSize() 获取主键字段总大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSumKeyFieldSize(integer $SumKeyFieldSize) 设置主键字段总大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSumValueFieldSize() 获取非主键字段总大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSumValueFieldSize(integer $SumValueFieldSize) 设置非主键字段总大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexKeySet() 获取索引键集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexKeySet(string $IndexKeySet) 设置索引键集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShardingKeySet() 获取分表因子集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardingKeySet(string $ShardingKeySet) 设置分表因子集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTdrVersion() 获取TDR版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTdrVersion(integer $TdrVersion) 设置TDR版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorInfo getError() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(ErrorInfo $Error) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getListElementNum() 获取LIST类型表格元素个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListElementNum(integer $ListElementNum) 设置LIST类型表格元素个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSortFieldNum() 获取SORTLIST类型表格排序字段个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSortFieldNum(integer $SortFieldNum) 设置SORTLIST类型表格排序字段个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSortRule() 获取SORTLIST类型表格排序顺序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSortRule(integer $SortRule) 设置SORTLIST类型表格排序顺序
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParsedTableInfoNew extends AbstractModel
{
    /**
     * @var string 表格描述语言类型：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableIdlType;

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
     * @var string 表格数据结构类型：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableType;

    /**
     * @var string 主键字段信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyFields;

    /**
     * @var string 原主键字段信息，改表校验时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldKeyFields;

    /**
     * @var string 非主键字段信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueFields;

    /**
     * @var string 原非主键字段信息，改表校验时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldValueFields;

    /**
     * @var string 所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGroupId;

    /**
     * @var integer 主键字段总大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SumKeyFieldSize;

    /**
     * @var integer 非主键字段总大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SumValueFieldSize;

    /**
     * @var string 索引键集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexKeySet;

    /**
     * @var string 分表因子集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardingKeySet;

    /**
     * @var integer TDR版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TdrVersion;

    /**
     * @var ErrorInfo 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @var integer LIST类型表格元素个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListElementNum;

    /**
     * @var integer SORTLIST类型表格排序字段个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SortFieldNum;

    /**
     * @var integer SORTLIST类型表格排序顺序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SortRule;

    /**
     * @param string $TableIdlType 表格描述语言类型：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableInstanceId 表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableType 表格数据结构类型：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyFields 主键字段信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldKeyFields 原主键字段信息，改表校验时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueFields 非主键字段信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldValueFields 原非主键字段信息，改表校验时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGroupId 所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SumKeyFieldSize 主键字段总大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SumValueFieldSize 非主键字段总大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexKeySet 索引键集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShardingKeySet 分表因子集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TdrVersion TDR版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorInfo $Error 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ListElementNum LIST类型表格元素个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SortFieldNum SORTLIST类型表格排序字段个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SortRule SORTLIST类型表格排序顺序
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
        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("KeyFields",$param) and $param["KeyFields"] !== null) {
            $this->KeyFields = $param["KeyFields"];
        }

        if (array_key_exists("OldKeyFields",$param) and $param["OldKeyFields"] !== null) {
            $this->OldKeyFields = $param["OldKeyFields"];
        }

        if (array_key_exists("ValueFields",$param) and $param["ValueFields"] !== null) {
            $this->ValueFields = $param["ValueFields"];
        }

        if (array_key_exists("OldValueFields",$param) and $param["OldValueFields"] !== null) {
            $this->OldValueFields = $param["OldValueFields"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("SumKeyFieldSize",$param) and $param["SumKeyFieldSize"] !== null) {
            $this->SumKeyFieldSize = $param["SumKeyFieldSize"];
        }

        if (array_key_exists("SumValueFieldSize",$param) and $param["SumValueFieldSize"] !== null) {
            $this->SumValueFieldSize = $param["SumValueFieldSize"];
        }

        if (array_key_exists("IndexKeySet",$param) and $param["IndexKeySet"] !== null) {
            $this->IndexKeySet = $param["IndexKeySet"];
        }

        if (array_key_exists("ShardingKeySet",$param) and $param["ShardingKeySet"] !== null) {
            $this->ShardingKeySet = $param["ShardingKeySet"];
        }

        if (array_key_exists("TdrVersion",$param) and $param["TdrVersion"] !== null) {
            $this->TdrVersion = $param["TdrVersion"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("ListElementNum",$param) and $param["ListElementNum"] !== null) {
            $this->ListElementNum = $param["ListElementNum"];
        }

        if (array_key_exists("SortFieldNum",$param) and $param["SortFieldNum"] !== null) {
            $this->SortFieldNum = $param["SortFieldNum"];
        }

        if (array_key_exists("SortRule",$param) and $param["SortRule"] !== null) {
            $this->SortRule = $param["SortRule"];
        }
    }
}
