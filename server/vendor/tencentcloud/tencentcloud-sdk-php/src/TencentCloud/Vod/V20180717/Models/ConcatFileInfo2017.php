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
 * 视频拼接源文件信息（2017 版）
 *
 * @method integer getErrCode() 获取错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method string getFileId() 获取视频拼接源文件的 ID。
 * @method void setFileId(string $FileId) 设置视频拼接源文件的 ID。
 * @method string getFileUrl() 获取视频拼接源文件的地址。
 * @method void setFileUrl(string $FileUrl) 设置视频拼接源文件的地址。
 * @method string getFileType() 获取视频拼接源文件的格式。
 * @method void setFileType(string $FileType) 设置视频拼接源文件的格式。
 */
class ConcatFileInfo2017 extends AbstractModel
{
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
     * @var string 视频拼接源文件的 ID。
     */
    public $FileId;

    /**
     * @var string 视频拼接源文件的地址。
     */
    public $FileUrl;

    /**
     * @var string 视频拼接源文件的格式。
     */
    public $FileType;

    /**
     * @param integer $ErrCode 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     * @param string $Message 错误信息。
     * @param string $FileId 视频拼接源文件的 ID。
     * @param string $FileUrl 视频拼接源文件的地址。
     * @param string $FileType 视频拼接源文件的格式。
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
        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
