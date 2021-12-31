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
 * CSV类型数据格式
 *
 * @method string getCodeCompress() 获取压缩格式，["Snappy", "Gzip", "None"选一]。
 * @method void setCodeCompress(string $CodeCompress) 设置压缩格式，["Snappy", "Gzip", "None"选一]。
 * @method CSVSerde getCSVSerde() 获取CSV序列化及反序列化数据结构。
 * @method void setCSVSerde(CSVSerde $CSVSerde) 设置CSV序列化及反序列化数据结构。
 * @method integer getHeadLines() 获取标题行，默认为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadLines(integer $HeadLines) 设置标题行，默认为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormat() 获取格式，默认值为CSV
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormat(string $Format) 设置格式，默认值为CSV
注意：此字段可能返回 null，表示取不到有效值。
 */
class CSV extends AbstractModel
{
    /**
     * @var string 压缩格式，["Snappy", "Gzip", "None"选一]。
     */
    public $CodeCompress;

    /**
     * @var CSVSerde CSV序列化及反序列化数据结构。
     */
    public $CSVSerde;

    /**
     * @var integer 标题行，默认为0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadLines;

    /**
     * @var string 格式，默认值为CSV
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Format;

    /**
     * @param string $CodeCompress 压缩格式，["Snappy", "Gzip", "None"选一]。
     * @param CSVSerde $CSVSerde CSV序列化及反序列化数据结构。
     * @param integer $HeadLines 标题行，默认为0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Format 格式，默认值为CSV
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
        if (array_key_exists("CodeCompress",$param) and $param["CodeCompress"] !== null) {
            $this->CodeCompress = $param["CodeCompress"];
        }

        if (array_key_exists("CSVSerde",$param) and $param["CSVSerde"] !== null) {
            $this->CSVSerde = new CSVSerde();
            $this->CSVSerde->deserialize($param["CSVSerde"]);
        }

        if (array_key_exists("HeadLines",$param) and $param["HeadLines"] !== null) {
            $this->HeadLines = $param["HeadLines"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
