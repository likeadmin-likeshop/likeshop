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
 * 表定义描述文件详情，包含文件内容
 *
 * @method string getFileName() 获取文件名称，不包含扩展名
 * @method void setFileName(string $FileName) 设置文件名称，不包含扩展名
 * @method string getFileType() 获取数据描述语言（IDL）类型
 * @method void setFileType(string $FileType) 设置数据描述语言（IDL）类型
 * @method string getFileExtType() 获取文件扩展名
 * @method void setFileExtType(string $FileExtType) 设置文件扩展名
 * @method integer getFileSize() 获取文件大小（Bytes）
 * @method void setFileSize(integer $FileSize) 设置文件大小（Bytes）
 * @method integer getFileId() 获取文件ID，对于已上传的文件有意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(integer $FileId) 设置文件ID，对于已上传的文件有意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileContent() 获取文件内容，对于本次新上传的文件有意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileContent(string $FileContent) 设置文件内容，对于本次新上传的文件有意义
注意：此字段可能返回 null，表示取不到有效值。
 */
class IdlFileInfo extends AbstractModel
{
    /**
     * @var string 文件名称，不包含扩展名
     */
    public $FileName;

    /**
     * @var string 数据描述语言（IDL）类型
     */
    public $FileType;

    /**
     * @var string 文件扩展名
     */
    public $FileExtType;

    /**
     * @var integer 文件大小（Bytes）
     */
    public $FileSize;

    /**
     * @var integer 文件ID，对于已上传的文件有意义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @var string 文件内容，对于本次新上传的文件有意义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileContent;

    /**
     * @param string $FileName 文件名称，不包含扩展名
     * @param string $FileType 数据描述语言（IDL）类型
     * @param string $FileExtType 文件扩展名
     * @param integer $FileSize 文件大小（Bytes）
     * @param integer $FileId 文件ID，对于已上传的文件有意义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileContent 文件内容，对于本次新上传的文件有意义
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileExtType",$param) and $param["FileExtType"] !== null) {
            $this->FileExtType = $param["FileExtType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }
    }
}
