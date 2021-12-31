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
 * 部分key导入快照数据时所需要的key文件
 *
 * @method string getFileName() 获取key文件名称
 * @method void setFileName(string $FileName) 设置key文件名称
 * @method string getFileExtType() 获取key文件扩展名
 * @method void setFileExtType(string $FileExtType) 设置key文件扩展名
 * @method string getFileContent() 获取key文件内容
 * @method void setFileContent(string $FileContent) 设置key文件内容
 * @method integer getFileSize() 获取key文件大小
 * @method void setFileSize(integer $FileSize) 设置key文件大小
 */
class KeyFile extends AbstractModel
{
    /**
     * @var string key文件名称
     */
    public $FileName;

    /**
     * @var string key文件扩展名
     */
    public $FileExtType;

    /**
     * @var string key文件内容
     */
    public $FileContent;

    /**
     * @var integer key文件大小
     */
    public $FileSize;

    /**
     * @param string $FileName key文件名称
     * @param string $FileExtType key文件扩展名
     * @param string $FileContent key文件内容
     * @param integer $FileSize key文件大小
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

        if (array_key_exists("FileExtType",$param) and $param["FileExtType"] !== null) {
            $this->FileExtType = $param["FileExtType"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
