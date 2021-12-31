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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 库表空间统计数据。
 *
 * @method string getTableName() 获取表名。
 * @method void setTableName(string $TableName) 设置表名。
 * @method string getTableSchema() 获取库名。
 * @method void setTableSchema(string $TableSchema) 设置库名。
 * @method string getEngine() 获取库表的存储引擎。
 * @method void setEngine(string $Engine) 设置库表的存储引擎。
 * @method float getDataLength() 获取数据空间（MB）。
 * @method void setDataLength(float $DataLength) 设置数据空间（MB）。
 * @method float getIndexLength() 获取索引空间（MB）。
 * @method void setIndexLength(float $IndexLength) 设置索引空间（MB）。
 * @method float getDataFree() 获取碎片空间（MB）。
 * @method void setDataFree(float $DataFree) 设置碎片空间（MB）。
 * @method float getTotalLength() 获取总使用空间（MB）。
 * @method void setTotalLength(float $TotalLength) 设置总使用空间（MB）。
 * @method float getFragRatio() 获取碎片率（%）。
 * @method void setFragRatio(float $FragRatio) 设置碎片率（%）。
 * @method integer getTableRows() 获取行数。
 * @method void setTableRows(integer $TableRows) 设置行数。
 * @method float getPhysicalFileSize() 获取表对应的独立物理文件大小（MB）。
 * @method void setPhysicalFileSize(float $PhysicalFileSize) 设置表对应的独立物理文件大小（MB）。
 */
class TableSpaceData extends AbstractModel
{
    /**
     * @var string 表名。
     */
    public $TableName;

    /**
     * @var string 库名。
     */
    public $TableSchema;

    /**
     * @var string 库表的存储引擎。
     */
    public $Engine;

    /**
     * @var float 数据空间（MB）。
     */
    public $DataLength;

    /**
     * @var float 索引空间（MB）。
     */
    public $IndexLength;

    /**
     * @var float 碎片空间（MB）。
     */
    public $DataFree;

    /**
     * @var float 总使用空间（MB）。
     */
    public $TotalLength;

    /**
     * @var float 碎片率（%）。
     */
    public $FragRatio;

    /**
     * @var integer 行数。
     */
    public $TableRows;

    /**
     * @var float 表对应的独立物理文件大小（MB）。
     */
    public $PhysicalFileSize;

    /**
     * @param string $TableName 表名。
     * @param string $TableSchema 库名。
     * @param string $Engine 库表的存储引擎。
     * @param float $DataLength 数据空间（MB）。
     * @param float $IndexLength 索引空间（MB）。
     * @param float $DataFree 碎片空间（MB）。
     * @param float $TotalLength 总使用空间（MB）。
     * @param float $FragRatio 碎片率（%）。
     * @param integer $TableRows 行数。
     * @param float $PhysicalFileSize 表对应的独立物理文件大小（MB）。
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("DataLength",$param) and $param["DataLength"] !== null) {
            $this->DataLength = $param["DataLength"];
        }

        if (array_key_exists("IndexLength",$param) and $param["IndexLength"] !== null) {
            $this->IndexLength = $param["IndexLength"];
        }

        if (array_key_exists("DataFree",$param) and $param["DataFree"] !== null) {
            $this->DataFree = $param["DataFree"];
        }

        if (array_key_exists("TotalLength",$param) and $param["TotalLength"] !== null) {
            $this->TotalLength = $param["TotalLength"];
        }

        if (array_key_exists("FragRatio",$param) and $param["FragRatio"] !== null) {
            $this->FragRatio = $param["FragRatio"];
        }

        if (array_key_exists("TableRows",$param) and $param["TableRows"] !== null) {
            $this->TableRows = $param["TableRows"];
        }

        if (array_key_exists("PhysicalFileSize",$param) and $param["PhysicalFileSize"] !== null) {
            $this->PhysicalFileSize = $param["PhysicalFileSize"];
        }
    }
}
