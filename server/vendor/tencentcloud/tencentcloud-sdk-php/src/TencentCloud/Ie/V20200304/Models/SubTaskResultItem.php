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
 * 画质重生子任务结果
 *
 * @method string getTaskName() 获取子任务名称。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置子任务名称。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatusCode() 获取子任务状态。
0：成功；
1：执行中；
其他值：失败。
 * @method void setStatusCode(integer $StatusCode) 设置子任务状态。
0：成功；
1：执行中；
其他值：失败。
 * @method string getStatusMsg() 获取子任务状态描述。
 * @method void setStatusMsg(string $StatusMsg) 设置子任务状态描述。
 * @method integer getProgressRate() 获取子任务进度。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgressRate(integer $ProgressRate) 设置子任务进度。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadUrl() 获取画质重生处理后文件的下载地址。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadUrl(string $DownloadUrl) 设置画质重生处理后文件的下载地址。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5() 获取画质重生处理后文件的MD5。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5(string $Md5) 设置画质重生处理后文件的MD5。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileInfo getFileInfo() 获取画质重生处理后文件的详细信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileInfo(FileInfo $FileInfo) 设置画质重生处理后文件的详细信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubTaskResultItem extends AbstractModel
{
    /**
     * @var string 子任务名称。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var integer 子任务状态。
0：成功；
1：执行中；
其他值：失败。
     */
    public $StatusCode;

    /**
     * @var string 子任务状态描述。
     */
    public $StatusMsg;

    /**
     * @var integer 子任务进度。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgressRate;

    /**
     * @var string 画质重生处理后文件的下载地址。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadUrl;

    /**
     * @var string 画质重生处理后文件的MD5。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5;

    /**
     * @var FileInfo 画质重生处理后文件的详细信息。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileInfo;

    /**
     * @param string $TaskName 子任务名称。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StatusCode 子任务状态。
0：成功；
1：执行中；
其他值：失败。
     * @param string $StatusMsg 子任务状态描述。
     * @param integer $ProgressRate 子任务进度。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadUrl 画质重生处理后文件的下载地址。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5 画质重生处理后文件的MD5。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileInfo $FileInfo 画质重生处理后文件的详细信息。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("ProgressRate",$param) and $param["ProgressRate"] !== null) {
            $this->ProgressRate = $param["ProgressRate"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("FileInfo",$param) and $param["FileInfo"] !== null) {
            $this->FileInfo = new FileInfo();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }
    }
}
