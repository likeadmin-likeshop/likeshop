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
 * 附带被选中字段信息的表格列表
 *
 * @method string getTableGroupId() 获取表所属表格组ID
 * @method void setTableGroupId(string $TableGroupId) 设置表所属表格组ID
 * @method string getTableName() 获取表格名称
 * @method void setTableName(string $TableName) 设置表格名称
 * @method string getTableInstanceId() 获取表实例ID
 * @method void setTableInstanceId(string $TableInstanceId) 设置表实例ID
 * @method string getTableIdlType() 获取表格描述语言类型：`PROTO`或`TDR`
 * @method void setTableIdlType(string $TableIdlType) 设置表格描述语言类型：`PROTO`或`TDR`
 * @method string getTableType() 获取表格数据结构类型：`GENERIC`或`LIST`
 * @method void setTableType(string $TableType) 设置表格数据结构类型：`GENERIC`或`LIST`
 * @method array getSelectedFields() 获取待创建索引的字段列表
 * @method void setSelectedFields(array $SelectedFields) 设置待创建索引的字段列表
 * @method integer getShardNum() 获取索引分片数
 * @method void setShardNum(integer $ShardNum) 设置索引分片数
 */
class SelectedTableWithField extends AbstractModel
{
    /**
     * @var string 表所属表格组ID
     */
    public $TableGroupId;

    /**
     * @var string 表格名称
     */
    public $TableName;

    /**
     * @var string 表实例ID
     */
    public $TableInstanceId;

    /**
     * @var string 表格描述语言类型：`PROTO`或`TDR`
     */
    public $TableIdlType;

    /**
     * @var string 表格数据结构类型：`GENERIC`或`LIST`
     */
    public $TableType;

    /**
     * @var array 待创建索引的字段列表
     */
    public $SelectedFields;

    /**
     * @var integer 索引分片数
     */
    public $ShardNum;

    /**
     * @param string $TableGroupId 表所属表格组ID
     * @param string $TableName 表格名称
     * @param string $TableInstanceId 表实例ID
     * @param string $TableIdlType 表格描述语言类型：`PROTO`或`TDR`
     * @param string $TableType 表格数据结构类型：`GENERIC`或`LIST`
     * @param array $SelectedFields 待创建索引的字段列表
     * @param integer $ShardNum 索引分片数
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("SelectedFields",$param) and $param["SelectedFields"] !== null) {
            $this->SelectedFields = [];
            foreach ($param["SelectedFields"] as $key => $value){
                $obj = new FieldInfo();
                $obj->deserialize($value);
                array_push($this->SelectedFields, $obj);
            }
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }
    }
}
