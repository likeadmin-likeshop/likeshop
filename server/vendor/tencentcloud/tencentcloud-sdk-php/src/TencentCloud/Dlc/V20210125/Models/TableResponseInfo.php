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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询表信息对象
 *
 * @method TableBaseInfo getTableBaseInfo() 获取数据表基本信息。
 * @method void setTableBaseInfo(TableBaseInfo $TableBaseInfo) 设置数据表基本信息。
 * @method array getColumns() 获取数据表列信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置数据表列信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartitions() 获取数据表分块信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitions(array $Partitions) 设置数据表分块信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocation() 获取数据存储路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置数据存储路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取数据表属性信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置数据表属性信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取数据表更新时间, 单位: ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置数据表更新时间, 单位: ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取数据表创建时间,单位: ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置数据表创建时间,单位: ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputFormat() 获取数据格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputFormat(string $InputFormat) 设置数据格式。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableResponseInfo extends AbstractModel
{
    /**
     * @var TableBaseInfo 数据表基本信息。
     */
    public $TableBaseInfo;

    /**
     * @var array 数据表列信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var array 数据表分块信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partitions;

    /**
     * @var string 数据存储路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var array 数据表属性信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var string 数据表更新时间, 单位: ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string 数据表创建时间,单位: ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 数据格式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputFormat;

    /**
     * @param TableBaseInfo $TableBaseInfo 数据表基本信息。
     * @param array $Columns 数据表列信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Partitions 数据表分块信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Location 数据存储路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties 数据表属性信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 数据表更新时间, 单位: ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 数据表创建时间,单位: ms。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputFormat 数据格式。
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
        if (array_key_exists("TableBaseInfo",$param) and $param["TableBaseInfo"] !== null) {
            $this->TableBaseInfo = new TableBaseInfo();
            $this->TableBaseInfo->deserialize($param["TableBaseInfo"]);
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new Partition();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InputFormat",$param) and $param["InputFormat"] !== null) {
            $this->InputFormat = $param["InputFormat"];
        }
    }
}
