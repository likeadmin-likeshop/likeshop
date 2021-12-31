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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频剪辑任务信息，该结构仅用于对 2017 版[视频剪辑](https://cloud.tencent.com/document/product/266/10156)接口发起的任务。
 *
 * @method string getTaskId() 获取视频剪辑任务 ID。
 * @method void setTaskId(string $TaskId) 设置视频剪辑任务 ID。
 * @method string getSrcFileId() 获取视频剪辑任务源文件 ID。
 * @method void setSrcFileId(string $SrcFileId) 设置视频剪辑任务源文件 ID。
 * @method ClipFileInfo2017 getFileInfo() 获取视频剪辑输出的文件信息。
 * @method void setFileInfo(ClipFileInfo2017 $FileInfo) 设置视频剪辑输出的文件信息。
 */
class ClipTask2017 extends AbstractModel
{
    /**
     * @var string 视频剪辑任务 ID。
     */
    public $TaskId;

    /**
     * @var string 视频剪辑任务源文件 ID。
     */
    public $SrcFileId;

    /**
     * @var ClipFileInfo2017 视频剪辑输出的文件信息。
     */
    public $FileInfo;

    /**
     * @param string $TaskId 视频剪辑任务 ID。
     * @param string $SrcFileId 视频剪辑任务源文件 ID。
     * @param ClipFileInfo2017 $FileInfo 视频剪辑输出的文件信息。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SrcFileId",$param) and $param["SrcFileId"] !== null) {
            $this->SrcFileId = $param["SrcFileId"];
        }

        if (array_key_exists("FileInfo",$param) and $param["FileInfo"] !== null) {
            $this->FileInfo = new ClipFileInfo2017();
            $this->FileInfo->deserialize($param["FileInfo"]);
        }
    }
}
