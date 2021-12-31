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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadFile请求参数结构体
 *
 * @method string getModule() 获取模块名
 * @method void setModule(string $Module) 设置模块名
 * @method string getOperation() 获取操作名
 * @method void setOperation(string $Operation) 设置操作名
 * @method string getFileUrl() 获取文件上传地址，要求地址协议为HTTPS，且URL端口必须为443
 * @method void setFileUrl(string $FileUrl) 设置文件上传地址，要求地址协议为HTTPS，且URL端口必须为443
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getFileDate() 获取文件日期
 * @method void setFileDate(string $FileDate) 设置文件日期
 */
class UploadFileRequest extends AbstractModel
{
    /**
     * @var string 模块名
     */
    public $Module;

    /**
     * @var string 操作名
     */
    public $Operation;

    /**
     * @var string 文件上传地址，要求地址协议为HTTPS，且URL端口必须为443
     */
    public $FileUrl;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 文件日期
     */
    public $FileDate;

    /**
     * @param string $Module 模块名
     * @param string $Operation 操作名
     * @param string $FileUrl 文件上传地址，要求地址协议为HTTPS，且URL端口必须为443
     * @param string $FileName 文件名
     * @param string $FileDate 文件日期
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileDate",$param) and $param["FileDate"] !== null) {
            $this->FileDate = $param["FileDate"];
        }
    }
}
