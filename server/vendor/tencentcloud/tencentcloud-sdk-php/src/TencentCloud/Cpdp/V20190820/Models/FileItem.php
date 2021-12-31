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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对账文件信息
 *
 * @method string getFileName() 获取STRING(256)，文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置STRING(256)，文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRandomPassword() 获取STRING(120)，随机密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRandomPassword(string $RandomPassword) 设置STRING(120)，随机密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilePath() 获取STRING(512)，文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePath(string $FilePath) 设置STRING(512)，文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDrawCode() 获取STRING(64)，提取码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrawCode(string $DrawCode) 设置STRING(64)，提取码
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileItem extends AbstractModel
{
    /**
     * @var string STRING(256)，文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string STRING(120)，随机密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RandomPassword;

    /**
     * @var string STRING(512)，文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePath;

    /**
     * @var string STRING(64)，提取码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DrawCode;

    /**
     * @param string $FileName STRING(256)，文件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RandomPassword STRING(120)，随机密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilePath STRING(512)，文件路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DrawCode STRING(64)，提取码
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("RandomPassword",$param) and $param["RandomPassword"] !== null) {
            $this->RandomPassword = $param["RandomPassword"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("DrawCode",$param) and $param["DrawCode"] !== null) {
            $this->DrawCode = $param["DrawCode"];
        }
    }
}
