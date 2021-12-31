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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计日志文件
 *
 * @method string getFileName() 获取审计日志文件名称
 * @method void setFileName(string $FileName) 设置审计日志文件名称
 * @method string getCreateTime() 获取审计日志文件创建时间。格式为 : "2019-03-20 17:09:13"。
 * @method void setCreateTime(string $CreateTime) 设置审计日志文件创建时间。格式为 : "2019-03-20 17:09:13"。
 * @method string getStatus() 获取文件状态值。可能返回的值为：
"creating" - 生成中;
"failed" - 创建失败;
"success" - 已生成;
 * @method void setStatus(string $Status) 设置文件状态值。可能返回的值为：
"creating" - 生成中;
"failed" - 创建失败;
"success" - 已生成;
 * @method integer getFileSize() 获取文件大小，单位为 KB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置文件大小，单位为 KB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadUrl() 获取审计日志下载地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadUrl(string $DownloadUrl) 设置审计日志下载地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuditLogFile extends AbstractModel
{
    /**
     * @var string 审计日志文件名称
     */
    public $FileName;

    /**
     * @var string 审计日志文件创建时间。格式为 : "2019-03-20 17:09:13"。
     */
    public $CreateTime;

    /**
     * @var string 文件状态值。可能返回的值为：
"creating" - 生成中;
"failed" - 创建失败;
"success" - 已生成;
     */
    public $Status;

    /**
     * @var integer 文件大小，单位为 KB。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 审计日志下载地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadUrl;

    /**
     * @var string 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @param string $FileName 审计日志文件名称
     * @param string $CreateTime 审计日志文件创建时间。格式为 : "2019-03-20 17:09:13"。
     * @param string $Status 文件状态值。可能返回的值为：
"creating" - 生成中;
"failed" - 创建失败;
"success" - 已生成;
     * @param integer $FileSize 文件大小，单位为 KB。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadUrl 审计日志下载地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg 错误信息。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
