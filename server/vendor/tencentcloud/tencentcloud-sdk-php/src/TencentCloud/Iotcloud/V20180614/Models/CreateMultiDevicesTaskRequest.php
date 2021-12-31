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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMultiDevicesTask请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getParametersType() 获取参数类型 cosfile-文件上传 random-随机创建
 * @method void setParametersType(string $ParametersType) 设置参数类型 cosfile-文件上传 random-随机创建
 * @method string getFileName() 获取文件上传类型时文件名
 * @method void setFileName(string $FileName) 设置文件上传类型时文件名
 * @method integer getFileSize() 获取文件上传类型时文件大小
 * @method void setFileSize(integer $FileSize) 设置文件上传类型时文件大小
 * @method integer getBatchCount() 获取随机创建时设备创建个数
 * @method void setBatchCount(integer $BatchCount) 设置随机创建时设备创建个数
 * @method string getHash() 获取文件上传类型时文件md5值
 * @method void setHash(string $Hash) 设置文件上传类型时文件md5值
 */
class CreateMultiDevicesTaskRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 参数类型 cosfile-文件上传 random-随机创建
     */
    public $ParametersType;

    /**
     * @var string 文件上传类型时文件名
     */
    public $FileName;

    /**
     * @var integer 文件上传类型时文件大小
     */
    public $FileSize;

    /**
     * @var integer 随机创建时设备创建个数
     */
    public $BatchCount;

    /**
     * @var string 文件上传类型时文件md5值
     */
    public $Hash;

    /**
     * @param string $ProductId 产品ID
     * @param string $ParametersType 参数类型 cosfile-文件上传 random-随机创建
     * @param string $FileName 文件上传类型时文件名
     * @param integer $FileSize 文件上传类型时文件大小
     * @param integer $BatchCount 随机创建时设备创建个数
     * @param string $Hash 文件上传类型时文件md5值
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ParametersType",$param) and $param["ParametersType"] !== null) {
            $this->ParametersType = $param["ParametersType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("BatchCount",$param) and $param["BatchCount"] !== null) {
            $this->BatchCount = $param["BatchCount"];
        }

        if (array_key_exists("Hash",$param) and $param["Hash"] !== null) {
            $this->Hash = $param["Hash"];
        }
    }
}
