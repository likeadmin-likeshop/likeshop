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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 压缩规则配置，最多可设置 100 条
 *
 * @method boolean getCompress() 获取true：需要设置为 ture，启用压缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompress(boolean $Compress) 设置true：需要设置为 ture，启用压缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileExtensions() 获取根据文件后缀类型压缩
例如 jpg、txt
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileExtensions(array $FileExtensions) 设置根据文件后缀类型压缩
例如 jpg、txt
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinLength() 获取触发压缩的文件长度最小值，单位为字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinLength(integer $MinLength) 设置触发压缩的文件长度最小值，单位为字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxLength() 获取触发压缩的文件长度最大值，单位为字节数
最大可设置为 30MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxLength(integer $MaxLength) 设置触发压缩的文件长度最大值，单位为字节数
最大可设置为 30MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlgorithms() 获取文件压缩算法
gzip：指定 GZIP 压缩
brotli：指定Brotli压缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgorithms(array $Algorithms) 设置文件压缩算法
gzip：指定 GZIP 压缩
brotli：指定Brotli压缩
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompressionRule extends AbstractModel
{
    /**
     * @var boolean true：需要设置为 ture，启用压缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compress;

    /**
     * @var array 根据文件后缀类型压缩
例如 jpg、txt
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileExtensions;

    /**
     * @var integer 触发压缩的文件长度最小值，单位为字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinLength;

    /**
     * @var integer 触发压缩的文件长度最大值，单位为字节数
最大可设置为 30MB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxLength;

    /**
     * @var array 文件压缩算法
gzip：指定 GZIP 压缩
brotli：指定Brotli压缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Algorithms;

    /**
     * @param boolean $Compress true：需要设置为 ture，启用压缩
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileExtensions 根据文件后缀类型压缩
例如 jpg、txt
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinLength 触发压缩的文件长度最小值，单位为字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxLength 触发压缩的文件长度最大值，单位为字节数
最大可设置为 30MB
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Algorithms 文件压缩算法
gzip：指定 GZIP 压缩
brotli：指定Brotli压缩
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
        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("FileExtensions",$param) and $param["FileExtensions"] !== null) {
            $this->FileExtensions = $param["FileExtensions"];
        }

        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }

        if (array_key_exists("MaxLength",$param) and $param["MaxLength"] !== null) {
            $this->MaxLength = $param["MaxLength"];
        }

        if (array_key_exists("Algorithms",$param) and $param["Algorithms"] !== null) {
            $this->Algorithms = $param["Algorithms"];
        }
    }
}
