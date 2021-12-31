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
 * UploadDataFile请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：Data
 * @method void setModule(string $Module) 设置模块名，本接口取值：Data
 * @method string getOperation() 获取操作名，本接口取值：Upload
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：Upload
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getUploadModel() 获取<p>上传类型，不填默认到期/逾期提醒文件，取值范围：</p><ul style="margin-bottom:0px;"><li>data：到期/逾期提醒文件</li><li>repay：到期/逾期提醒停拨文件</li><li>callback：回访文件</li><li>callstop：回访停拨文件</li><li>blacklist：黑名单文件</li></ul>
 * @method void setUploadModel(string $UploadModel) 设置<p>上传类型，不填默认到期/逾期提醒文件，取值范围：</p><ul style="margin-bottom:0px;"><li>data：到期/逾期提醒文件</li><li>repay：到期/逾期提醒停拨文件</li><li>callback：回访文件</li><li>callstop：回访停拨文件</li><li>blacklist：黑名单文件</li></ul>
 * @method string getFile() 获取文件，文件与文件地址上传只可选用一种，必须使用multipart/form-data协议来上传二进制流文件，建议使用xlsx格式，大小不超过5MB。
 * @method void setFile(string $File) 设置文件，文件与文件地址上传只可选用一种，必须使用multipart/form-data协议来上传二进制流文件，建议使用xlsx格式，大小不超过5MB。
 * @method string getFileUrl() 获取文件上传地址，文件与文件地址上传只可选用一种，大小不超过50MB。
 * @method void setFileUrl(string $FileUrl) 设置文件上传地址，文件与文件地址上传只可选用一种，大小不超过50MB。
 * @method string getInstId() 获取实例ID，不传默认为系统分配的初始实例。
 * @method void setInstId(string $InstId) 设置实例ID，不传默认为系统分配的初始实例。
 */
class UploadDataFileRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：Data
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：Upload
     */
    public $Operation;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string <p>上传类型，不填默认到期/逾期提醒文件，取值范围：</p><ul style="margin-bottom:0px;"><li>data：到期/逾期提醒文件</li><li>repay：到期/逾期提醒停拨文件</li><li>callback：回访文件</li><li>callstop：回访停拨文件</li><li>blacklist：黑名单文件</li></ul>
     */
    public $UploadModel;

    /**
     * @var string 文件，文件与文件地址上传只可选用一种，必须使用multipart/form-data协议来上传二进制流文件，建议使用xlsx格式，大小不超过5MB。
     */
    public $File;

    /**
     * @var string 文件上传地址，文件与文件地址上传只可选用一种，大小不超过50MB。
     */
    public $FileUrl;

    /**
     * @var string 实例ID，不传默认为系统分配的初始实例。
     */
    public $InstId;

    /**
     * @param string $Module 模块名，本接口取值：Data
     * @param string $Operation 操作名，本接口取值：Upload
     * @param string $FileName 文件名
     * @param string $UploadModel <p>上传类型，不填默认到期/逾期提醒文件，取值范围：</p><ul style="margin-bottom:0px;"><li>data：到期/逾期提醒文件</li><li>repay：到期/逾期提醒停拨文件</li><li>callback：回访文件</li><li>callstop：回访停拨文件</li><li>blacklist：黑名单文件</li></ul>
     * @param string $File 文件，文件与文件地址上传只可选用一种，必须使用multipart/form-data协议来上传二进制流文件，建议使用xlsx格式，大小不超过5MB。
     * @param string $FileUrl 文件上传地址，文件与文件地址上传只可选用一种，大小不超过50MB。
     * @param string $InstId 实例ID，不传默认为系统分配的初始实例。
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("UploadModel",$param) and $param["UploadModel"] !== null) {
            $this->UploadModel = $param["UploadModel"];
        }

        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = $param["File"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("InstId",$param) and $param["InstId"] !== null) {
            $this->InstId = $param["InstId"];
        }
    }
}
