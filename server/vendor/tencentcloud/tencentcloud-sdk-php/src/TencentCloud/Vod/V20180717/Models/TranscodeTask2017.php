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
 * 视频转码任务信息，该结构仅用于对 2017 版[视频转码](https://cloud.tencent.com/document/product/266/7822)接口发起的任务。
 *
 * @method string getTaskId() 获取转码任务 ID。
 * @method void setTaskId(string $TaskId) 设置转码任务 ID。
 * @method integer getErrCode() 获取错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method string getFileId() 获取被转码文件 ID。
 * @method void setFileId(string $FileId) 设置被转码文件 ID。
 * @method string getFileName() 获取被转码文件名称。
 * @method void setFileName(string $FileName) 设置被转码文件名称。
 * @method integer getDuration() 获取视频时长，单位：秒。
 * @method void setDuration(integer $Duration) 设置视频时长，单位：秒。
 * @method string getCoverUrl() 获取封面地址。
 * @method void setCoverUrl(string $CoverUrl) 设置封面地址。
 * @method array getPlayInfoSet() 获取视频转码后生成的播放信息。
 * @method void setPlayInfoSet(array $PlayInfoSet) 设置视频转码后生成的播放信息。
 */
class TranscodeTask2017 extends AbstractModel
{
    /**
     * @var string 转码任务 ID。
     */
    public $TaskId;

    /**
     * @var integer 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var string 被转码文件 ID。
     */
    public $FileId;

    /**
     * @var string 被转码文件名称。
     */
    public $FileName;

    /**
     * @var integer 视频时长，单位：秒。
     */
    public $Duration;

    /**
     * @var string 封面地址。
     */
    public $CoverUrl;

    /**
     * @var array 视频转码后生成的播放信息。
     */
    public $PlayInfoSet;

    /**
     * @param string $TaskId 转码任务 ID。
     * @param integer $ErrCode 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     * @param string $Message 错误信息。
     * @param string $FileId 被转码文件 ID。
     * @param string $FileName 被转码文件名称。
     * @param integer $Duration 视频时长，单位：秒。
     * @param string $CoverUrl 封面地址。
     * @param array $PlayInfoSet 视频转码后生成的播放信息。
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("PlayInfoSet",$param) and $param["PlayInfoSet"] !== null) {
            $this->PlayInfoSet = [];
            foreach ($param["PlayInfoSet"] as $key => $value){
                $obj = new TranscodePlayInfo2017();
                $obj->deserialize($value);
                array_push($this->PlayInfoSet, $obj);
            }
        }
    }
}
