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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务结果文件信息
 *
 * @method string getUrl() 获取文件链接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置文件链接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSize() 获取文件大小，部分任务支持，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置文件大小，部分任务支持，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaResultInfo getMediaInfo() 获取媒体信息，对于媒体文件，部分任务支持返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaInfo(MediaResultInfo $MediaInfo) 设置媒体信息，对于媒体文件，部分任务支持返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskResultFile extends AbstractModel
{
    /**
     * @var string 文件链接。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var integer 文件大小，部分任务支持，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var MediaResultInfo 媒体信息，对于媒体文件，部分任务支持返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaInfo;

    /**
     * @param string $Url 文件链接。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSize 文件大小，部分任务支持，单位：字节
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaResultInfo $MediaInfo 媒体信息，对于媒体文件，部分任务支持返回
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("MediaInfo",$param) and $param["MediaInfo"] !== null) {
            $this->MediaInfo = new MediaResultInfo();
            $this->MediaInfo->deserialize($param["MediaInfo"]);
        }
    }
}
