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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件类型样本
 *
 * @method string getFileMd5() 获取文件md5
 * @method void setFileMd5(string $FileMd5) 设置文件md5
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getFileUrl() 获取文件url
 * @method void setFileUrl(string $FileUrl) 设置文件url
 * @method string getCompressFileUrl() 获取文件压缩后云url
 * @method void setCompressFileUrl(string $CompressFileUrl) 设置文件压缩后云url
 */
class FileSample extends AbstractModel
{
    /**
     * @var string 文件md5
     */
    public $FileMd5;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 文件url
     */
    public $FileUrl;

    /**
     * @var string 文件压缩后云url
     */
    public $CompressFileUrl;

    /**
     * @param string $FileMd5 文件md5
     * @param string $FileName 文件名称
     * @param string $FileUrl 文件url
     * @param string $CompressFileUrl 文件压缩后云url
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
        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("CompressFileUrl",$param) and $param["CompressFileUrl"] !== null) {
            $this->CompressFileUrl = $param["CompressFileUrl"];
        }
    }
}
