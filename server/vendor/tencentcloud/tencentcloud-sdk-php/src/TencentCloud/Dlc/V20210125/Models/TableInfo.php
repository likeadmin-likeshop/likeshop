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
 * 返回数据表的相关信息。
 *
 * @method TableBaseInfo getTableBaseInfo() 获取数据表配置信息。
 * @method void setTableBaseInfo(TableBaseInfo $TableBaseInfo) 设置数据表配置信息。
 * @method DataFormat getDataFormat() 获取数据表格式。每次入参可选如下其一的KV结构，[TextFile，CSV，Json, Parquet, ORC, AVRD]。
 * @method void setDataFormat(DataFormat $DataFormat) 设置数据表格式。每次入参可选如下其一的KV结构，[TextFile，CSV，Json, Parquet, ORC, AVRD]。
 * @method array getColumns() 获取数据表列信息。
 * @method void setColumns(array $Columns) 设置数据表列信息。
 * @method array getPartitions() 获取数据表分块信息。
 * @method void setPartitions(array $Partitions) 设置数据表分块信息。
 * @method string getLocation() 获取数据存储路径。当前仅支持cos路径，格式如下：cosn://bucket-name/filepath。
 * @method void setLocation(string $Location) 设置数据存储路径。当前仅支持cos路径，格式如下：cosn://bucket-name/filepath。
 */
class TableInfo extends AbstractModel
{
    /**
     * @var TableBaseInfo 数据表配置信息。
     */
    public $TableBaseInfo;

    /**
     * @var DataFormat 数据表格式。每次入参可选如下其一的KV结构，[TextFile，CSV，Json, Parquet, ORC, AVRD]。
     */
    public $DataFormat;

    /**
     * @var array 数据表列信息。
     */
    public $Columns;

    /**
     * @var array 数据表分块信息。
     */
    public $Partitions;

    /**
     * @var string 数据存储路径。当前仅支持cos路径，格式如下：cosn://bucket-name/filepath。
     */
    public $Location;

    /**
     * @param TableBaseInfo $TableBaseInfo 数据表配置信息。
     * @param DataFormat $DataFormat 数据表格式。每次入参可选如下其一的KV结构，[TextFile，CSV，Json, Parquet, ORC, AVRD]。
     * @param array $Columns 数据表列信息。
     * @param array $Partitions 数据表分块信息。
     * @param string $Location 数据存储路径。当前仅支持cos路径，格式如下：cosn://bucket-name/filepath。
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

        if (array_key_exists("DataFormat",$param) and $param["DataFormat"] !== null) {
            $this->DataFormat = new DataFormat();
            $this->DataFormat->deserialize($param["DataFormat"]);
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
    }
}
