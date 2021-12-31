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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全扫描敏感词
 *
 * @method array getWordList() 获取敏感词
 * @method void setWordList(array $WordList) 设置敏感词
 * @method string getFilePath() 获取敏感词对应的文件信息
 * @method void setFilePath(string $FilePath) 设置敏感词对应的文件信息
 * @method string getFileSha() 获取文件sha1值
 * @method void setFileSha(string $FileSha) 设置文件sha1值
 */
class ScanSensitiveInfo extends AbstractModel
{
    /**
     * @var array 敏感词
     */
    public $WordList;

    /**
     * @var string 敏感词对应的文件信息
     */
    public $FilePath;

    /**
     * @var string 文件sha1值
     */
    public $FileSha;

    /**
     * @param array $WordList 敏感词
     * @param string $FilePath 敏感词对应的文件信息
     * @param string $FileSha 文件sha1值
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
        if (array_key_exists("WordList",$param) and $param["WordList"] !== null) {
            $this->WordList = $param["WordList"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileSha",$param) and $param["FileSha"] !== null) {
            $this->FileSha = $param["FileSha"];
        }
    }
}
