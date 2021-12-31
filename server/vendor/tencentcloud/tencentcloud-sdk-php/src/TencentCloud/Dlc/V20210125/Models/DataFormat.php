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
 * 数据表数据格式。
 *
 * @method TextFile getTextFile() 获取文本格式，TextFile。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextFile(TextFile $TextFile) 设置文本格式，TextFile。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CSV getCSV() 获取文本格式，CSV。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCSV(CSV $CSV) 设置文本格式，CSV。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Other getJson() 获取文本格式，Json。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJson(Other $Json) 设置文本格式，Json。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Other getParquet() 获取Parquet格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParquet(Other $Parquet) 设置Parquet格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method Other getORC() 获取ORC格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setORC(Other $ORC) 设置ORC格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method Other getAVRO() 获取AVRO格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAVRO(Other $AVRO) 设置AVRO格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataFormat extends AbstractModel
{
    /**
     * @var TextFile 文本格式，TextFile。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextFile;

    /**
     * @var CSV 文本格式，CSV。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CSV;

    /**
     * @var Other 文本格式，Json。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Json;

    /**
     * @var Other Parquet格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Parquet;

    /**
     * @var Other ORC格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ORC;

    /**
     * @var Other AVRO格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AVRO;

    /**
     * @param TextFile $TextFile 文本格式，TextFile。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CSV $CSV 文本格式，CSV。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Other $Json 文本格式，Json。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Other $Parquet Parquet格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param Other $ORC ORC格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param Other $AVRO AVRO格式
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
        if (array_key_exists("TextFile",$param) and $param["TextFile"] !== null) {
            $this->TextFile = new TextFile();
            $this->TextFile->deserialize($param["TextFile"]);
        }

        if (array_key_exists("CSV",$param) and $param["CSV"] !== null) {
            $this->CSV = new CSV();
            $this->CSV->deserialize($param["CSV"]);
        }

        if (array_key_exists("Json",$param) and $param["Json"] !== null) {
            $this->Json = new Other();
            $this->Json->deserialize($param["Json"]);
        }

        if (array_key_exists("Parquet",$param) and $param["Parquet"] !== null) {
            $this->Parquet = new Other();
            $this->Parquet->deserialize($param["Parquet"]);
        }

        if (array_key_exists("ORC",$param) and $param["ORC"] !== null) {
            $this->ORC = new Other();
            $this->ORC->deserialize($param["ORC"]);
        }

        if (array_key_exists("AVRO",$param) and $param["AVRO"] !== null) {
            $this->AVRO = new Other();
            $this->AVRO->deserialize($param["AVRO"]);
        }
    }
}
