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
 * sql文件信息
 *
 * @method string getUploadTime() 获取上传时间
 * @method void setUploadTime(string $UploadTime) 设置上传时间
 * @method UploadInfo getUploadInfo() 获取上传进度
 * @method void setUploadInfo(UploadInfo $UploadInfo) 设置上传进度
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getFileSize() 获取文件大小，单位为Bytes
 * @method void setFileSize(integer $FileSize) 设置文件大小，单位为Bytes
 * @method integer getIsUploadFinished() 获取上传是否完成标志，可选值：0 - 未完成，1 - 已完成
 * @method void setIsUploadFinished(integer $IsUploadFinished) 设置上传是否完成标志，可选值：0 - 未完成，1 - 已完成
 * @method string getFileId() 获取文件ID
 * @method void setFileId(string $FileId) 设置文件ID
 */
class SqlFileInfo extends AbstractModel
{
    /**
     * @var string 上传时间
     */
    public $UploadTime;

    /**
     * @var UploadInfo 上传进度
     */
    public $UploadInfo;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 文件大小，单位为Bytes
     */
    public $FileSize;

    /**
     * @var integer 上传是否完成标志，可选值：0 - 未完成，1 - 已完成
     */
    public $IsUploadFinished;

    /**
     * @var string 文件ID
     */
    public $FileId;

    /**
     * @param string $UploadTime 上传时间
     * @param UploadInfo $UploadInfo 上传进度
     * @param string $FileName 文件名
     * @param integer $FileSize 文件大小，单位为Bytes
     * @param integer $IsUploadFinished 上传是否完成标志，可选值：0 - 未完成，1 - 已完成
     * @param string $FileId 文件ID
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
        if (array_key_exists("UploadTime",$param) and $param["UploadTime"] !== null) {
            $this->UploadTime = $param["UploadTime"];
        }

        if (array_key_exists("UploadInfo",$param) and $param["UploadInfo"] !== null) {
            $this->UploadInfo = new UploadInfo();
            $this->UploadInfo->deserialize($param["UploadInfo"]);
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("IsUploadFinished",$param) and $param["IsUploadFinished"] !== null) {
            $this->IsUploadFinished = $param["IsUploadFinished"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
