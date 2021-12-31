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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos路径
 *
 * @method string getBucket() 获取cos桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置cos桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyPrefix() 获取cos文件key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyPrefix(string $KeyPrefix) 设置cos文件key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataDistributionType() 获取分布式数据下载方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataDistributionType(string $DataDistributionType) 设置分布式数据下载方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataType() 获取数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataType(string $DataType) 设置数据类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class CosDataSource extends AbstractModel
{
    /**
     * @var string cos桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var string cos文件key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyPrefix;

    /**
     * @var string 分布式数据下载方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataDistributionType;

    /**
     * @var string 数据类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataType;

    /**
     * @param string $Bucket cos桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyPrefix cos文件key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataDistributionType 分布式数据下载方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataType 数据类型
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("KeyPrefix",$param) and $param["KeyPrefix"] !== null) {
            $this->KeyPrefix = $param["KeyPrefix"];
        }

        if (array_key_exists("DataDistributionType",$param) and $param["DataDistributionType"] !== null) {
            $this->DataDistributionType = $param["DataDistributionType"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
